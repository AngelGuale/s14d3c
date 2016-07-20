@extends('admin_base')

@section('content')
<div class="main-page">
	<div class="elements">
		<div class="col-md-8 col-md-offset-2 weather-grids widget-shadow">
			
			{{$resultado}}
			<script>
				 var icons = new Skycons({"color": "#fff"}),
					  list  = [
						"clear-day"
					  ],
					  i;

				  for(i = list.length; i--; )
					icons.set(list[i], list[i]);

				  icons.play();
			</script>
			<script>
				 var icons = new Skycons({"color": "#E94E02"}),
					  list  = [
						"clear-night", "partly-cloudy-day",
						"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
						"fog"
					  ],
					  i;

				  for(i = list.length; i--; )
					icons.set(list[i], list[i]);

				  icons.play();
			</script>
		</div>

		<div class="clearfix"> </div>	
	</div>
</div>
@stop

@section('scripts')
<script>
	function initialize() {
		var lastWidth = $('#googleMap').width();

		var mapProp = {
			center:new google.maps.LatLng(-2.153,-79.882),
			zoom:5,
			mapTypeId:google.maps.MapTypeId.ROADMAP
			};
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

		var marker = new google.maps.Marker({
			position: {lat: -2.153, lng: -79.882},
			map: map,
			draggable:false,
			animation: google.maps.Animation.DROP,
			title:"Seleccione la ubicacion de su cultivo",
		});

		google.maps.event.addListener(marker, 'dragend', function (evt) {
		    document.getElementById('location').value = evt.latLng.lat().toFixed(3) + ', ' + evt.latLng.lng().toFixed(3);
		});

		map.addListener('center_changed', () => {
			if( lastWidth != $('#googleMap').width() ){
				google.maps.event.trigger(map, "resize");
				lastWidth = $('#googleMap').width();
			}
			marker.setOptions({'opacity': 0.5})
			marker.setPosition(map.getCenter());
			document.getElementById('location').value = map.getCenter().lat().toFixed(3) + ', ' + map.getCenter().lng().toFixed(3);
		});

		map.addListener('idle', () => {
			if( lastWidth != $('#googleMap').width() ){
				google.maps.event.trigger(map, "resize");
				lastWidth = $('#googleMap').width();
			}
			marker.setOptions({'opacity': 1})
			marker.setPosition(map.getCenter());
			document.getElementById('location').value = map.getCenter().lat().toFixed(3) + ', ' + map.getCenter().lng().toFixed(3);
		});

		/*setInterval(function(){ 
			if( lastWidth != $('#googleMap').width() ){
				google.maps.event.trigger(map, "resize");
				lastWidth = $('#googleMap').width();
			} 
		}, 500);*/
	}

	google.maps.event.addDomListener(window, 'load', initialize);

	var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
		showLeftPush = document.getElementById( 'showLeftPush' ),
		body = document.body;
		
	function onLoad(zoom) {
		if(zoom == 4){
		    document.getElementById('fileZoom4').click();
	    }else if(zoom == 10){
		    document.getElementById('fileZoom10').click();
	    }else if(zoom == 40){
		    document.getElementById('fileZoom40').click();
	    }
	}

	function handleFiles(files, zoom) {
	    var file = files[0];
	    var imageType = /^image\//;

	    if (imageType.test(file.type)) {
	      
		    var img = document.createElement("img");
		    img.classList.add("circular");
		    img.file = file;
		    if(zoom == 4){
			    $('#preview4').html("");
			    preview4.appendChild(img); 
			    $('#zoom4').html(file.name);
		    }else if(zoom == 10){
		    	$('#preview10').html("");
			    preview10.appendChild(img); 
			    $('#zoom10').html(file.name);
		    }else if(zoom == 40){
		    	$('#preview40').html("");
			    preview40.appendChild(img); 
			    $('#zoom40').html(file.name);
		    }
		    var reader = new FileReader();
		    reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);
		    reader.readAsDataURL(file);

		}else{
			
			if(zoom == 4){
			    $('#fileZoom4').val('');
		    }else if(zoom == 10){
		    	$('#fileZoom10').val('');
		    }else if(zoom == 40){
		    	$('#fileZoom40').val('');
		    }
		}
	}

</script>
@stop