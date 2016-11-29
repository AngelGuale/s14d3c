/** ===========================================================================
 * Flow.js | a jQuery plugin - v1.0.0
 * Copyright 2013 Ry Racherbaumer
 * http://rygine.com/projects/flow.js
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ======================================================================== **/

;(function($, window, document, undefined) {

    "use strict";

    // css transition support detection
    var cssTransitionSupport = (function(){

            // body element
        var body = document.body || document.documentElement,
            // transition events with names
            transEndEvents = {
                'transition'      : 'transitionend',
                'WebkitTransition': 'webkitTransitionEnd',
                'MozTransition'   : 'transitionend',
                'MsTransition'    : 'MSTransitionEnd',
                'OTransition'     : 'oTransitionEnd otransitionend'
            }, name;

        // check for each transition type
        for (name in transEndEvents){

            // if transition type is supported
            if (body.style[name] !== undefined) {

                // return transition end event name
                return transEndEvents[name];

            }

        }

        // css transitions are not supported
        return false;

    })();

    // delayed execution
    // via: http://stackoverflow.com/a/2854467
    var delayed = (function () {

        var timer = 0;
        return function (callback, ms) {

            clearTimeout(timer);
            timer = setTimeout(callback, ms);

        };

    })();

    // class definition
    var Flow = function(element, options) {

        this.$element = $(element);
        this.options = options;
        this.flowing = false;
        this.ready = false;

        // self-reference
        var self = this;

        // setup keyboard accessibility
        this.$element.attr('tabindex', 0)
            // use keydown, keypress not reliable in IE
            .keydown(function(e){
                // handle key
                switch (e.which) {
                    // left arrow
                    case 37:
                        // go to previous item
                        self.prev();
                        break;
                    // right arrow
                    case 39:
                        // go to next item
                        self.next();
                        break;
                    // give control back to browser for other keys
                    default: return;
                }
                // prevent browser default action
                e.preventDefault();
            });

        // initialize Flow
        this.init();

    };

    Flow.prototype = {

        /**
         * Init
         */
        init: function() {

            // only run this function once
            if (this.ready) return;

            // self-reference
            var self = this;

            // finish initialization
            function finish() {

                // calibrate
                self._calibrate();

                // just trigger init event
                self.$element.trigger('init');

                // view item at start index
                self.to(self.options.start);

                // when the window resizes
                $(window).resize(function() {

                    // delay re-flow
                    delayed(function(){

                        // update control width
                        self._calibrate.call(self);

                        // re-position active item
                        self.options.reflow && self.go($('.item.active', self.$element), true);

                    }, 100);

                });

                // set ready state
                self.ready = true;

            }

            // if imageLoaded plugin available
            if ($.fn.imagesLoaded) {

                // add init class
                this.$element.addClass('flow-init');

                // wait for images to load
                this.$element.imagesLoaded(function(){

                    // remove init class
                    self.$element.removeClass('flow-init');

                    // finish init
                    finish();

                });

            // otherwise
            } else {

                // just finish init
                finish();

            }

        },

        /**
         * Internal function to setup total width of slider
         * @private
         */
        _calibrate: function() {

            // total flow width
            var flowWidth = 0;

            // foreach item
            $('.item', this.$element).each(function(){

                // add item outer width w/ margins to total
                flowWidth += $(this).outerWidth(true);

            });

            // set flow width
            $('.flow-inner', this.$element).width(flowWidth);

        },

        /**
         * View next item
         * @return Flow
         */
        next: function() {

            // return if flowing
            if (this.flowing) return this;

            // go to next item
            return this.go('next');

        },

        /**
         * View previous item
         * @return Flow
         */
        prev: function() {

            // return if flowing
            if (this.flowing) return this;

            // go to previous item
            return this.go('prev');

        },

        /**
         * View item at specified position
         * @param pos
         * @return Cycle
         */
        to: function(pos) {

            // zero-base the position
            --pos;

                // all items
            var $items = this.$element.find('.item'),
                // active item
                $active = $items.filter('.active'),
                // active position
                activePos = $items.index($active),
                // self-reference
                that = this;

            // return if position is out of range
            if (pos > ($items.length - 1) || pos < 0) return this;

            // if flowing
            if (this.flowing)
                // go to item after done
                return this.$element.one('flowed', function() {
                    that.to(pos);
                });

            // if position is already active, just return self
            if (activePos == pos) return this;

            // show item at position
            return this.go($($items[pos]));

        },

        /**
         * Show item
         * @param to
         * @param force
         * @return Flow
         */
        go: function(to, force) {

            // wait for current flow to finish
            if (this.flowing) return this;

            // ensure force argument
            force = typeof force === 'undefined' ? false : force;

                // inner container
            var $inner = this.$element.find('.flow-inner'),
                // all items
                $items = this.$element.find('.item'),
                // active item
                $active = $items.filter('.active'),
                // active position
                activePos = $items.index($active),
                // next item to show
                $next = typeof to == 'string' ? $active[to]() : to,
                // next position
                nextPos = $items.index($next),
                // direction of next item
                direction = typeof to == 'string'
                    ? to
                    : ((activePos == -1 && nextPos == -1) || nextPos > activePos
                        ? 'next'
                        : 'prev'),
                // fallback if next item not found
                fallback = direction == 'next' ? 'first' : 'last',
                // self-reference
                that = this,
                // complete the flow
                complete = function(active, next, direction) {

                    // if not flowing, already complete
                    if (!this.flowing) return;

                    // set flowing status to false
                    this.flowing = false;

                    // custom event
                    var e = $.Event('flowed', {
                        // related target is new active item
                        relatedTarget: next[0],
                        // related index is the index of the new active item
                        relatedIndex: $items.index(next)
                    });

                    // trigger flowed event
                    this.$element.trigger(e);

                };

            // ensure next element
            $next = $next && $next.length ? $next : $items[fallback]();

            // return if next element is already active
            if (!force && $next.hasClass('active')) return this;

            // custom event
            var e = $.Event('flow', {
                // related target is next item to show
                relatedTarget: $next[0],
                relatedIndex: $items.index($next[0])
            });

            // trigger flow event
            this.$element.trigger(e);

            // return if the event was canceled
            if (e.isDefaultPrevented()) return this;

            // set flowing status to true
            this.flowing = true;

            // calculate left position for next item
            var nextLeft = ((this.$element.outerWidth() - $next.outerWidth()) / 2) - $next.position().left;

            // update item classes
            $active.removeClass('active');
            $next.addClass('active');

            // if css transition support
            if (cssTransitionSupport) {

                // set left for next item
                $inner.css('left', nextLeft);

                // complete flow after transition
                this.$element.one(cssTransitionSupport, function() {

                    // weird CSS transition when flow element is initially hidden
                    // may cause this event to fire twice with invalid $active
                    // element on first run
                    if (!$active.length) return;
                    complete.call(that, $active, $next, direction);

                });

                // ensure that flow is completed
                setTimeout(function() {

                    complete.call(that, $active, $next, direction);

                }, this.options.speed);

            // no css transition support, use jQuery animation fallback
            } else {

                // do animation
                $inner.animate({
                    left: nextLeft
                }, this.options.speed, function(){

                    // complete flow
                    complete.call(that, $active, $next, direction);

                });

            }

            // return reference to self for chaining
            return this;
        }
    };

    // plugin definition
    $.fn.flow = function(option) {

        // flow arguments
        var flowArgs = arguments;

        // for each matched element
        return this.each(function() {

                // jQuery self-reference
            var $this = $(this),
                // cached Flow instance
                flow = $this.data('flowjs'),
                // merge defaults with options
                options = $.extend({}, $.fn.flow.defaults, typeof option == 'object' && option),
                // get method
                action = typeof option == 'string' ? option : option.flow,
                // get method arguments
                args = option.args || (flowArgs.length > 1 && Array.prototype.slice.call(flowArgs, 1));

            // ensure flow plugin
            if (!flow) $this.data('flowjs', (flow = new Flow(this, options)));

            // go to position if passed option is a number
            if (typeof option == 'number') flow.to(option);

            // execute method if exists and is not 'init', '_calibrate' or 'go'
            else if (action && (['init', '_calibrate', 'go'].indexOf(action) === -1)) {

                // with arguments
                if (args) flow[action].apply(flow, args.length ? args : ('' + args).split(','));

                // without arguments
                else flow[action]();
            }

        });

    };

    // default options
    $.fn.flow.defaults = {

        // start index
        start: 1,

        // transition speed (must match css definition)
        speed: 500,

        // re-flow the active item after a window resize
        reflow: true

    };

    $.fn.flow.Contructor = Flow;

    // data api
    $(function() {

        // delegate click event on elements with data-flow attribute
        $('body').on('click.flow', '[data-flow]', function(e) {

            // jQuery self-reference
            var $this = $(this);

            // ignore the go, init and calibrate methods
            if (['go', 'init', '_calibrate'].indexOf($this.data('flow')) !== -1) return;

            // get element target via data (or href) attribute
            var href, $target = $($this.data('target')
                    || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '')), //strip for ie7

                // setup options
                options = $.extend({}, $target.data(), $this.data());

            // start flow plugin
            $target.flow(options);

            // prevent default event
            e.preventDefault();

        });

        // auto-init plugin
        $('[data-flow="init"]').each(function() {

            // jQuery self-reference
            var $this = $(this);

            // start the plugin
            $this.flow($this.data());

        });

    });

})(jQuery, window, document);