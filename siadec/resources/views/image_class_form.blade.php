@extends('admin_base')

@section('content')
<!-- 
<div id="ej">

	<h3>dos</h3>
	<section>jojo</section>
</div> -->
<div class="main-page">
	<div class="elements " id="ej" >
	<h3>Datos del análisis</h3>
		<section>
		<div class="col-md-11 col-md-offset-1   weather-grids widget-shadow">
			<form enctype="multipart/form-data" method="post" action="/analisisMicroscopio">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />

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
					</form>
				</div>

		</section>
		
		









<style type="text/css">
	
	.wizard > .content > .body {
        position: relative;
	}
	th{
		text-align: center;
	}
	table#clasificador_tabla > tbody > tr > td{
				vertical-align: middle ;
				text-align: center;
				}
	table#clasificador_tabla > tbody > tr > td>div{
				margin: auto;
				}
	</style>



		<h3>Clasificador de órganos</h3>
		<section>
		<div class="col-md-11 col-md-offset-1 weather-grids widget-shadow">
			<!--<form  method="post" action="/clasificador" enctype="multipart/form-data">-->
			<!-- <form  method="post" action="/clasificador" enctype="multipart/form-data">
			 -->	
			 	<div class="header-top">
					<h2>An&aacute;lisis de Im&aacute;genes de Microscopio:</h2>
					<h2>Clasificador de órganos </h2> 

					<div class="clearfix"> </div>
				</div>
			
			  <table id="clasificador_tabla" class="table table-striped table-bordered" width="80%">
			  <style type="text/css">
			  	.loader {
					  border: 16px solid #f3f3f3;
					  border-radius: 50%;
					  border-top: 16px solid blue;
					  border-bottom: 16px solid blue;
					  width: 120px;
					  height: 120px;
					  -webkit-animation: spin 2s linear infinite;
					  animation: spin 2s linear infinite;
					}

					@-webkit-keyframes spin {
					  0% { -webkit-transform: rotate(0deg); }
					  100% { -webkit-transform: rotate(360deg); }
					}

					@keyframes spin {
					  0% { transform: rotate(0deg); }
					  100% { transform: rotate(360deg); }
					}
			  </style>
			  	<thead >
			  		<th >
			  			Ingrese imagen en zoom: 40x
					</th>
					<th >
			  			Resultado

					</th>
			  	</thead>
			  	<tbody>
			  	<tr>
			  		<td>
			  			<input type="hidden" name="_token" value="{{ csrf_token() }}" />

				
								<!--<input type="file" name="imagenuno" id="fileZoom40x" accept=".jpg,.bmp" />-->
									
								<div class="header-bottom">
									<div class="header-bottom1" style="width: 100%;">
										<div class="header-head">
<!-- 										<h4>Ingrese imagen en zoom: 40x</h4> -->
											<input required type="file" name="fileZoom40" id="fileZoom40" onchange="handleFiles(this.files, 40)" style="visibility:hidden;position:absolute;top:-50;left:-50"/>
											<a href="javascript:onLoad(40);" style="cursor: pointer;">
												<figure id="preview40"><img src="{{ asset('/pick.jpg') }}" class="circular"/></figure>
											</a>
											<br/>
											<!-- <div class="bottom-head">
												<label id="zoom40">Seleccione una Imagen</label>
											</div> -->
										</div>
									</div>
								</div>
							<!-- 	<input class="btn btn-warning btn-lg btn-block" type="submit" style="border: none; border-radius: 0px;" value="Analizar"></input> -->

			  		</td>
			  		<td>
			  		<div class=" btn-success" id="fileZoom40_result" hidden>Epitelio del estómago</div>
			  	 	<div id="fileZoom40_process" hidden>
			  		Procesando..
			  		<div class = "loader"></div>
			  		</div>
			  		
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
			  			<input type="hidden" name="_token" value="{{ csrf_token() }}" />

				
								<!--<input type="file" name="imagenuno" id="fileZoom40x" accept=".jpg,.bmp" />-->
									
								<div class="header-bottom">
									<div class="header-bottom1" style="width: 100%;">
										<div class="header-head">
											<!-- <h4>Ingrese imagen en zoom: 40x</h4>
											 --><input required type="file" name="fileZoom4" id="fileZoom4" onchange="handleFiles(this.files, 4)" style="visibility:hidden;position:absolute;top:-50;left:-50"/>
											<a href="javascript:onLoad(4);" style="cursor: pointer;">
												<figure id="preview4"><img src="{{ asset('/pick.jpg') }}" class="circular"/></figure>
											</a>
											<br/>
										<!-- 	<div class="bottom-head">
												<label id="zoom40">Seleccione una Imagen</label>
											</div> -->
										</div>
									</div>
								</div>
								<!-- <input class="btn btn-warning btn-lg btn-block" type="submit" style="border: none; border-radius: 0px;" value="Analizar"></input> -->

			  		</td>
			  		<td>
			  		<div class=" btn-success" id="fileZoom4_result" hidden>Epitelio del estómago</div>
			  	 	<div id="fileZoom4_process" hidden>
			  		Procesando..
			  		<div class = "loader"></div>
			  		</div>
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
			  			<input type="hidden" name="_token" value="{{ csrf_token() }}" />

				
								<!--<input type="file" name="imagenuno" id="fileZoom40x" accept=".jpg,.bmp" />-->
									
								<div class="header-bottom">
									<div class="header-bottom1" style="width: 100%;">
										<div class="header-head">
											<!-- <h4>Ingrese imagen en zoom: 40x</h4>
											 --><input required type="file" name="fileZoom10" id="fileZoom10" onchange="handleFiles(this.files, 10)" style="visibility:hidden;position:absolute;top:-50;left:-50"/>
											<a href="javascript:onLoad(10);" style="cursor: pointer;">
												<figure id="preview10"><img src="{{ asset('/pick.jpg') }}" class="circular"/></figure>
											</a>
											<br/>
											<!-- <div class="bottom-head">
												<label id="zoom40">Seleccione una Imagen</label>
											</div> -->
										</div>
									</div>
								</div>
							<!-- 	<input class="btn btn-warning btn-lg btn-block" type="submit" style="border: none; border-radius: 0px;" value="Analizar"></input> -->

			  		</td>
			  		<td>
			  		<div class=" btn-success" id="fileZoom10_result" hidden>Epitelio del estómago</div>
			  	 	<div id="fileZoom10_process" hidden>
			  		Procesando..
			  		<div class = "loader"></div>
			  		</div>
			  		</td>
			  	</tr>
			  	</tbody>
			  </table>
			

					
		</div>
		</section>






		<h3>Resultados Finales: Análisis de virus</h3>
		<section>
		<div class="col-md-11 col-md-offset-1 weather-grids widget-shadow">
		<div class="header-top">
					<h2>Resultados:</h2>
					<h2>Análisis de enfermedad </h2> 

					<div class="clearfix"> </div>
				</div>
				<br>
		<div class="col-md-10 col-md-offset-1">Los resultados siguientes presentan el grado de enfermedad encontrado al analizar las imágenes ingresadas </div>
		
		<div><canvas id="myChart" width="400" height="100"></canvas></div>
		<br>
		<br>
		</div>
		
		</section>

		
	</div>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}" />

@stop

@section('scripts')


<script>
 $("#ej").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        stepsOrientation: "vertical"
    });

var ctx = $("#myChart");
var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: ["WSSV", "Vibriosis", "Grengarinas"],
        datasets: [{
            label: 'Porcentaje de enfermedad',
            data: [100, 29, 43],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
             
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
              
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});




$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

	function onLoad(zoom) {
			    console.log('on load inicia');
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
	    console.log('hand files inicia');
	    if (imageType.test(file.type)) {
	      	    console.log('hand files if');
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



		    /*
					var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

					$.ajax({
					    url: '/home/upload/',
					    type: 'POST',
					    data: {_token: CSRF_TOKEN},
					    dataType: 'JSON',
					    success: function (data) {
					        console.log(data);
					    }
					});

*/

		    var reader = new FileReader();
		    reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);
		    reader.readAsDataURL(file);
		    console.log(file);

		    $("#fileZoom40_process").show();
	    	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	    	console.log("despues del csrf");
		 	$.ajax({
			url: "/clasificador_ajax",
			type: "post",
			processData: false, 
			data:{'fileZoom40': file, 
				'_token': CSRF_TOKEN
				},
			dataType: "html",
			success: function(response){
				if(zoom == 4){
			   			$("#fileZoom40_process").hide();
			$("#fileZoom4_result").html(response);
			$("#fileZoom4_result").show();




		    }else if(zoom == 10){
		    				$("#fileZoom40_process").hide();
			$("#fileZoom10_result").html(response);
			$("#fileZoom10_result").show();

		    }else if(zoom == 40){
		    			$("#fileZoom40_process").hide();
			$("#fileZoom40_result").html(response);
			$("#fileZoom40_result").show();


		    }


			},
			error: function(xhr, status){
				alert("error");

			}


		 	});

		}else{
				    console.log('hand files else');
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