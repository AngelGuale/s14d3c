<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>SIADEC | Automatic Identification of Shrimp disease Service</title>
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
<link href="{{ asset('font-icons.css') }}" rel="stylesheet">
<!-- //font-awesome icons -->
 <!-- js-->
<script src="{{ asset('/novus_admin/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('/novus_admin/js/modernizr.custom.js') }}"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<script src="http://maps.googleapis.com/maps/api/js"></script>
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
<!--Main Menu-->
<link href="{{ asset('/css/main_menu.css') }}" rel="stylesheet">


<script src="{{ asset('/jquery-steps-master/build/jquery.steps.js') }}"></script>
<link href="{{ asset('/jquery-steps-master/demo/css/jquery.steps.css') }}" rel="stylesheet">
<script src="{{ asset('/node_modules/chart.js/dist/Chart.bundle.js') }}"></script>


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
<body class="cbp-spmenu-push col-sm-12 col-md-12 col-lg-12">
	<div class="main-content col-sm-12 col-md-12 col-lg-12">
		<!--left-fixed -navigation-->
		<div class=" sidebar col-sm-12 col-md-12 col-lg-12" role="navigation">
            <div class="navbar-collapse col-sm-3 col-md-3 col-lg-3">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left cbp-spmenu-open col-sm-3 col-md-3 col-lg-3" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="/home"><i class="fa fa-home nav_icon"></i>Home</a>
						</li>
						<li>
							<a href="/clasificador"><i class="fa fa-eye nav_icon"></i>Analysis</a>
							<!-- /nav-second-level -->
						</li>
						<!-- <li>
							<a href="/clasificador"><i class="fa fa-search nav_icon"></i>Clasificador</a>
							
						</li>
						 --><li>
							<a href="/analyzeLog"><i class="fa fa-th-list nav_icon"></i>History</a>
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
		<div class="sticky-header header-section col-sm-12 col-md-12 col-lg-12">
			<div class="header-left col-sm-10 col-md-10 col-lg-10">
				<!--toggle button start-->
				<div class="col-sm-1 col-md-1 col-lg-1">
					<button id="showLeftPush" style="margin-left: -70%"><i class="fa fa-bars"></i></button>
					<!--toggle button end-->
				</div>
				<!--logo -->
				<div class="logo col-sm-2 col-md-2 col-lg-2" id="logoPlacement">
					<a href="/home">
						<h1>SIADEC</h1>
						<span>Admin</span>
					</a>
				</div>
				<!--//logo-->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right col-sm-2 col-md-2 col-lg-2">
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
										<p>{{ $name }}</p>
										<span>Admin</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="/signout"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
			@yield('content')
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; Developed by <a href="http://www.cidis.espol.edu.ec" target="_blank">CIDIS</a></p>
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
		</script>
		@yield('scripts')
		
	<!--scrolling js-->

	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="{{ asset('/novus_admin/js/bootstrap.js') }}"> </script>
</body>
</html>