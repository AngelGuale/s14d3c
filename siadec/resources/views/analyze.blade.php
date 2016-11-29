@extends('admin_base')

@section('content')
<div class="main-page">
	<div class="elements">
		<div class="col-md-8 col-md-offset-2 weather-grids widget-shadow">
			<form enctype="multipart/form-data"  method="post" action="/analisisMicroscopio">
				<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
				<div class="header-top">
					<h2>An&aacute;lisis de Im&aacute;genes de Microscopio</h2>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom">
					<div class ="form-body">
						<div class="form-horizontal">
							<div class="form-group"> 
								<label class="col-sm-2 control-label" for="responsable">Responsable: </label> 
								<div class="col-sm-4"> 
									<input type="text" placeholder="Nombre y Apellido" id="responsable" name="responsable" class="form-control" required> 
								</div> 
								<label class="col-sm-2 control-label" for="codigo">C&oacute;digo: </label> 
								<div class="col-sm-4"> 
									<input type="text" placeholder="Codigo de Examen" id="codigo" name="codigo" class="form-control" required> 
								</div> 
								
							</div>
						</div>
						<div class="form-horizontal">
							<div class="form-group"> 
								<label class="col-sm-2 control-label" for="codigo">FechaImagenes: </label> 
								<div class="col-sm-4"> 
									<input type="date" placeholder="12/12/1990" id="fecha" name="fecha" class="form-control" required> 
								</div>
								<label class="col-sm-2 control-label" for="empresa">Empresa: </label> 
								<div class="col-sm-4"> 
									<input type="text" placeholder="Empresa" id="empresa" name="empresa" class="form-control" required> 
								</div> 
							</div>
						</div>
						<div class="form-horizontal">
							<div class="form-group"> 
								<label class="col-sm-2 control-label" for="equipos">EquiposUsados: </label> 
								<div class="col-sm-10"> 
									<input type="text" placeholder="Equipos usados en la captura de las imagenes" id="equipos" name="equipos" class="form-control" required> 
								</div> 											
							</div>
						</div>
						<div class="form-horizontal">
							<div class="form-group"> 
								<label class="col-sm-2 control-label" for="observaciones">Observaciones: </label> 
								<div class="col-sm-10"> 
									<input type="text" placeholder="Observaciones" id="observaciones" name="observaciones" class="form-control" required> 
								</div> 											
							</div>
						</div>
						<div class="form-horizontal">
							<label class="col-sm-12" for="location">Arrastre el mapa para colocar el marcador sobre la ubicaci&oacute;n de su cultivo: </label> 
							<input type="text" id="location" name="location" style="display: none;" required> 
							<div class="form-group"> 
								<div id="googleMap" style="width:100%;height:380px;"></div>										
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom">
					<div class="header-bottom1" style="width: 33%;">
						<div class="header-head">
							<h4>Zoom 4x</h4>
							<input required type="file" name="fileZoom4" id="fileZoom4" onchange="handleFiles(this.files, 4)" style="visibility:hidden;position:absolute;top:-50;left:-50"/>
							<a href="javascript:onLoad(4);" style="cursor: pointer;">
								<figure id="preview4"><img src="{{ asset('/pick.jpg') }}" class="circular"/></figure>
							</a>
							<br/>
							<div class="bottom-head">
								<label id="zoom4">Seleccione una Imagen</label>
							</div>
						</div>
					</div>
					<div class="header-bottom1 header-bottom2" style="width: 33%;">
						<div class="header-head">
							<h4>Zoom 10x</h4>
							<input required type="file" name="fileZoom10" id="fileZoom10" onchange="handleFiles(this.files, 10)" style="visibility:hidden;position:absolute;top:-50;left:-50"/>
							<a href="javascript:onLoad(10);" style="cursor: pointer;">
								<figure id="preview10"><img src="{{ asset('/pick.jpg') }}" class="circular"/></figure>
							</a>
							<br/>
							<div class="bottom-head">
								<label id="zoom10">Seleccione una Imagen</label>
							</div>
						</div>
					</div>
					<div class="header-bottom1" style="width: 33%;">
						<div class="header-head">
							<h4>Zoom 40x</h4>
							<input required type="file" name="fileZoom40" id="fileZoom40" onchange="handleFiles(this.files, 40)" style="visibility:hidden;position:absolute;top:-50;left:-50"/>
							<a href="javascript:onLoad(40);" style="cursor: pointer;">
								<figure id="preview40"><img src="{{ asset('/pick.jpg') }}" class="circular"/></figure>
							</a>
							<br/>
							<div class="bottom-head">
								<label id="zoom40">Seleccione una Imagen</label>
							</div>
						</div>
					</div>

				
					<div class="clearfix"> </div>
				</div>

				<button class="btn btn-warning btn-lg btn-block" type="submit" style="border: none; border-radius: 0px;">Analizar</button>
			</form>
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