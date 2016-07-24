@extends('admin_base')

@section('content')
<div class="main-page">
	<div class="elements">
		<div class="col-md-8 col-md-offset-2 weather-grids widget-shadow">
			<form  method="post" action="/clasificador" enctype="multipart/form-data">
				<div class="header-top">
					<h2>An&aacute;lisis de Im&aacute;genes de Microscopio:</h2>
					<h2>Clasificador de órganos </h2> 

					<div class="clearfix"> </div>
				</div>
			
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />

				
					<!--<input type="file" name="imagenuno" id="fileZoom40x" accept=".jpg,.bmp" />-->
					
				<div class="header-bottom">
					<div class="header-bottom1" style="width: 100%;">
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
				</div>
				<input class="btn btn-warning btn-lg btn-block" type="submit" style="border: none; border-radius: 0px;" value="Analizar"></input>
			</form>
		<div id="result" style= "text-align: center" >
		@if(isset($imagen))
			  <br >
			  <br >
			<figure id="preview40"><img src="{{$imagen}}" class="circular"/></figure>
			@endif
			<h2 >{{{ isset($resultado) ? "Resultado: ".$resultado : ' ' }}}</h2>
						
		</div>
		
				
		</div>
		<div class="clearfix"> </div>	
	</div>
</div>
@stop

@section('scripts')
<script>
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
			    $('#result').html("");

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