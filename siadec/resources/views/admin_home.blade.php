@extends("admin_base")

@section('content')
<div class="main-page">
	<div class="container">
		<div class="col-md-8 col-offset-md-1 widget-shadow" style="padding: 0;">
			<h4 class="title3" style="background-color: #315384; color: #fff;">Servicio de Identificación Automática de Enfermedades del Camarón</h4>
			<div id="banner" class="profile-top" style='background-position: center; background-image: url({{ asset("camarones_bg0.jpg") }}); background-size: 100%; background-repeat: no-repeat; height: 400px;'>

			</div>
			<div class="profile-text">
				<div class="profile-row">
					<div class="profile-left">
						<i class="fa fa-check profile-icon" style="font-size: 2em;"></i>
					</div>
					<div class="profile-right">
						<h4>Ten un chequeo peri&oacute;dico de tu producto</h4>
						<p>SIADEC esta desarrollado con la finalidad de poder detectar multiples enfermedades
						del camar&oacute;n de manera sencilla y eficaz al alcance del usuario. De esta forma
						ud. podr&aacute; tener un control regular de su producto y podr&aacute; eliminar o prevenir enfermedades al instante.</p>
					</div> 
					<div class="clearfix"> </div>	
				</div>
				<div class="profile-row row-middle">
					<div class="profile-left">
						<i class="fa fa-warning profile-icon" style="font-size: 2em;"></i>
					</div>
					<div class="profile-right">
						<h4>Importante tomar en cuenta</h4>
						<p>Los camarones son propensos a enfermedades causadas por representantes de casi todos los grupos 
						de agentes infecciosos conocidos y estas enfermedades son la causa de pérdidas económicas cuantiosas 
						en la producción de los camarones, sobre todo a su temprana edad.</p>
					</div> 
					<div class="clearfix"> </div>	
				</div>
				<div class="profile-row">
					<div class="profile-left">
						<i class="fa fa-comments-o profile-icon" style="font-size: 2em;"></i>
					</div>
					<div class="profile-right">
						<h4>El camar&oacute;n en el Ecuador</h4>
						<p>Es un alimento que presenta un nivel muy bajo de grasas y calorías. El camarón es rico en componentes como carotenos, 
						beta carotenos, omega 3 y pre vitamina A. El camarón ecuatoriano por su exquisito sabor, color y textura es reconocido 
						como un producto gourmet a nivel mundial.
						Las ventajas climáticas del país permiten que se generen hasta tres ciclos de cosechas por año, y un mayor desarrollo productivo por hectárea. 
						El camarón blanco o litopenaeus vannamei representa más del 95% de la producción ecuatoriana
						</p>
					</div> 
					<div class="clearfix"> </div>	
				</div>
			</div>
			<div class="profile-btm">
				<ul>
					<li>
						<h4>Cultiva</h4>
					</li>
					<li>
						<h4>Chequea</h4>
					</li>
					<li>
						<h4>Disfruta</h4>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-4">
			<div class="col-md-12 widget-shadow" style="padding: 0; margin-bottom: 10px; background-color: #3b5998;">
				<a href="http://www.cenaim.espol.edu.ec/">
					<div class="wid-social twitter" style="background-color: #315384 !important;">
						<div class="social-icon">
							<i class="fa fa-sitemap text-light icon-xlg "></i>
						</div>
						<div class="social-info">
							<h3 class="number_counter bold count text-light start_timer counted">CENAIM</h3>
						</div>
					</div>
				</a>
				<a href="https://www.youtube.com/watch?v=fvSiQlWGQ5Q">
					<div class="wid-social google-plus">
						<div class="social-icon">
							<i class="fa fa-youtube text-light icon-xlg "></i>
						</div>
						<div class="social-info">
							<h3 class="number_counter bold count text-light start_timer counted">Video</h3>
						</div>
					</div>
				</a>
				<a href="https://www.facebook.com/pages/Cenaim-Espol-San-Pedro-de-Manglaralto/205765719550510">
					<div class="wid-social facebook">
						<div class="social-icon">
							<i class="fa fa-facebook text-light icon-xlg "></i>
						</div>
						<div class="social-info">
							<h3 class="number_counter bold count text-light start_timer counted">Like</h3>
						</div>
					</div>
				</a>
				<div class="clearfix"> </div>
		</div>
			<div class="col-md-12 stats-info widget-shadow">
				<div class="stats-title">
					<h4 class="title">Enfermedades Detectadas en los Ex&aacute;menes m&aacute;s recientes</h4>
				</div>
				<div class="stats-body">
					<ul class="list-unstyled">
						<li> IHHNV <span class="pull-right">35%</span>  
							<div class="progress progress-striped active progress-right">
								<div style="width:35%;" class="bar red"></div> 
							</div>
						</li>
						<li>HPV <span class="pull-right">15%</span>  
							<div class="progress progress-striped active progress-right">
								<div style="width:15%;" class="bar yellow"></div>
							</div>
						</li>
						<li>WSSV <span class="pull-right">18%</span>  
							<div class="progress progress-striped active progress-right">
								<div style="width:18%;" class="bar yellow"></div>
							</div>
						</li>
						<li>TSV <span class="pull-right">5%</span>  
							<div class="progress progress-striped active progress-right">
								<div style="width:5%;" class="bar blue"></div>
							</div>
						</li>
						<li>YHV <span class="pull-right">2%</span>  
							<div class="progress progress-striped active progress-right">
								<div style="width:2%;" class="bar green"></div>
							</div>
						</li>
						<li>Vibriosis <span class="pull-right">10%</span>  
							<div class="progress progress-striped active progress-right">
								<div style="width:10%;" class="bar blue"></div>
							</div>
						</li>
						<li>NHP <span class="pull-right">25%</span>  
							<div class="progress progress-striped active progress-right">
								<div style="width:25%;" class="bar red"></div>
							</div>
						</li>
						<li class="last">Others <span class="pull-right">10%</span>  
							<div class="progress progress-striped active progress-right">
								<div style="width:10%;" class="bar blue"></div>
							</div>
						</li> 
					</ul>
				</div>
			</div>

		</div>
	</div>
</div>
@stop

@section('scripts')
<script type="text/javascript">
	var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
		showLeftPush = document.getElementById( 'showLeftPush' ),
		body = document.body;
		
	showLeftPush.onclick = function() {
		classie.toggle( this, 'active' );
		classie.toggle( body, 'cbp-spmenu-push-toright' );
		classie.toggle( menuLeft, 'cbp-spmenu-open' );
		disableOther( 'showLeftPush' );
	};
	
	function disableOther( button ) {
		if( button !== 'showLeftPush' ) {
			classie.toggle( showLeftPush, 'disabled' );
		}
	}

	var interval = 30;
	var image_current = 0;
	var random_images = new Array ();
    random_images[0] = "camarones_bg0.jpg"; // these are the background images
    random_images[1] = "camarones_bg1.jpg"; 
    random_images[2] = "camarones_bg2.jpg"; 

	var fade = function(){

		image_current++;
		if (image_current > 2){
			image_current = 0;
		}
		console.log(image_current);
		$("#banner").css('background-image', "url('" + random_images[image_current] + "')");
		
		setTimeout(fade, interval *100);
	};
	fade();
</script>
@stop