@extends("guest_base")

@section('content')
<div class="main-page">
	<div class="container">

		<div class="col-md-8 col-offset-md-1 widget-shadow" style="padding: 0;">
			<h4 class="title3" style="background-color: #315384; color: #fff;">SIADEC | Automatic Identification of Shrimp disease Service</h4>
			<div id="tabContent" class="tab-content">
				<div class="tab-pane fade active in" id="cultiva">
					<div id="bannerCultiva" class="profile-top" style='background-position: center; background-image: url({{ asset("camarones_bg0.jpg") }}); background-size: 100%; background-repeat: no-repeat; height: 400px;'>
					</div>
					<div class="profile-text">
						<!--<div class="profile-row row-middle">-->
						<div class="profile-row">
							<div class="profile-left">
								<i class="fa fa-warning profile-icon" style="font-size: 2em;"></i>
							</div>
							<div class="profile-right">
								<h4>Keep in mind</h4>
								<p>Shrimps are prone to diseases cause of known infectious agents, this disease are the reason of significant economic losses in shrimps production, especially at early age.</p>
							</div> 
							<div class="clearfix"> </div>	
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="chequea">
					<div id="bannerChequea" class="profile-top" style='background-position: center; background-image: url({{ asset("camarones_bg1.jpg") }}); background-size: 100%; background-repeat: no-repeat; height: 400px;'>
					</div>
					<div class="profile-text">
						<div class="profile-row">
							<div class="profile-left">
								<i class="fa fa-check profile-icon" style="font-size: 2em;"></i>
							</div>
							<div class="profile-right">
								<h4>Have a periodic check with your product</h4>
								<p>SIADEC is a tool that helps users to detect numerous disease that affects the shrimps on an easy and effective way. Will lend you steady control over your product and help you remove or prevent sickness.</p>
							</div> 
							<div class="clearfix"> </div>	
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="disfruta">
					<div id="bannerDisfruta" class="profile-top" style='background-position: center; background-image: url({{ asset("camarones_bg6.jpg") }}); background-size: 100%; background-repeat: no-repeat; height: 400px;'>
					</div>
					<div class="profile-text">
						<div class="profile-row">
							<div class="profile-left">
								<i class="fa fa-comments-o profile-icon" style="font-size: 2em;"></i>
							</div>
							<div class="profile-right">
								<h4>Ecuadorean Shrimp</h4>
								<p>Shrimp are low fat and calories, have a good source of carotene, beta carotene, omega 3 and vitamin A. Ecuadorean shrimp has a delicious taste, good color and texture; Is known as a globally gourmet product. Weather benefits shrimps growth, allowing up to 3 harvests per year. Whiteleg shrimp or Litopenaeus Vannamei, represents 95% of Ecuadorean production.
								</p>
							</div> 
							<div class="clearfix"> </div>	
						</div>
					</div>
				</div>
			</div>
			<div class="profile-btm">
				<ul>
					<li class="tabSelector active">
						<a href="#cultiva" data-toggle="tab">
							<h4>Farm</h4>
						</a>
					</li>
					<li class="tabSelector">
						<a href="#chequea" data-toggle="tab">
							<h4>Diagnostic</h4>
						</a>
					</li>
					<li class="tabSelector">
						<a href="#disfruta" data-toggle="tab">
							<h4>Provide</h4>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<?php
		include(app_path()."/statistics.php");
		?>
	</div>
</div>
@stop

@section('scripts')
<script type="text/javascript">
	$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
	  var target = $(e.target).attr("href") // activated tab
	});

	$('a[data-toggle="tab"]').click( function (e) {
		console.log("CLICKED ELEMENT FROM TAB");
		$('.tabSelector').css('background-color', '#e4e4e4');
		$(e.target).parent().parent().css('background-color','white');
	});

	var interval = 30;
	var image_current = 0;
	var random_images_chequea = new Array ();
    random_images_chequea[0] = "camarones_bg0.jpg"; // these are the background images
    random_images_chequea[1] = "camarones_bg3.jpg"; 
    random_images_chequea[2] = "camarones_bg4.jpg";

    var random_images_cultiva = new Array ();
    random_images_cultiva[0] = "camarones_bg1.jpg"; // these are the background images
    random_images_cultiva[1] = "camarones_bg2.jpg"; 
    random_images_cultiva[2] = "camarones_bg5.jpg";
    
    var random_images_disfruta = new Array ();
    random_images_disfruta[0] = "camarones_bg6.jpg"; // these are the background images
    random_images_disfruta[1] = "camarones_bg7.jpg";
    random_images_disfruta[2] = "camarones_bg8.jpg"; 

	var fade = function(){

		image_current++;
		if (image_current > 2){
			image_current = 0;
		}

		$("#bannerCultiva").css('background-image', "url('" + random_images_chequea[image_current] + "')");
		$("#bannerChequea").css('background-image', "url('" + random_images_cultiva[image_current] + "')");
		$("#bannerDisfruta").css('background-image', "url('" + random_images_disfruta[image_current] + "')");
		setTimeout(fade, interval *100);
	};
	fade();
</script>
@stop