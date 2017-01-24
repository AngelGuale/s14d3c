<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>SIADEC | Servicio de Identificación Automática de Enfermedades del Camarón</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="{{ asset('/novus_admin/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{ asset('/novus_admin/css/style.css') }}" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="{{ asset('/novus_admin/css/font-awesome.css') }}" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="{{ asset('/novus_admin/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('/novus_admin/js/modernizr.custom.js') }}"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="{{ asset('/novus_admin/css/animate.css') }}" rel="stylesheet" type="text/css" media="all">
<script src="{{ asset('/novus_admin/js/wow.min.js') }}"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!--skycons-icons-->
<script src="{{ asset('/novus_admin/js/skycons.js') }}"></script>
<!--//skycons-icons-->
<!--circlechart-->
<script src="{{ asset('/novus_admin/js/jquery.circlechart.js') }}"></script>
<!--circlechart-->
<!-- Metis Menu -->
<script src="{{ asset('/novus_admin/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('/novus_admin/js/custom.js') }}"></script>
<link href="{{ asset('/novus_admin/css/custom.css') }}" rel="stylesheet">
<!--//Metis Menu -->

<style>
	.circular {
		height: 100px;
		width: 100px;
		border-radius: 150px;
		-webkit-border-radius: 150px;
		-moz-border-radius: 150px;
		box-shadow: 0 0 8px rgba(0, 0, 0, .8);
		-webkit-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
		-moz-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
	}
</style>
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="/home" class="active"><i class="fa fa-home nav_icon"></i>Inicio</a>
						</li>
						<li>
							<a href="/analisisMicroscopio"><i class="fa fa-eye nav_icon"></i>An&aacute;lisis</a>
							<!-- /nav-second-level -->
						</li>
						
					</ul>
					<div class="clearfix"> </div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="/home">
						<h1>SIADEC</h1>
						<span>Administrador</span>
					</a>
				</div>
				<!--//logo-->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details_left"><!--notifications of menu start -->
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<div class="user-name">
										<p>Pedro</p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
								<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>	      
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
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
									<li>WSSV <span class="pull-right">30%</span>  
										<div class="progress progress-striped active progress-right">
											<div style="width:30%;" class="bar yellow"></div>
										</div>
									</li>
									<li>Vibriosis <span class="pull-right">90%</span>  
										<div class="progress progress-striped active progress-right">
											<div style="width:90%;" class="bar blue"></div>
										</div>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; Sistema Desarrollado por <a href="http://www.cidis.espol.edu.ec" target="_blank">CIDIS</a></p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="{{ asset('/novus_admin/js/classie.js') }}"></script>
		<script>
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
	<!--scrolling js-->
	<script src="{{ asset('/novus_admin/js/jquery.nicescroll.js') }}"></script>
	<script src="{{ asset('/novus_admin/js/scripts.js') }}"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="{{ asset('/novus_admin/js/bootstrap.js') }}"> </script>
</body>
</html>
