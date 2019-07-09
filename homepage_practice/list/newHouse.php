<!DOCTYPE html>
<html lang="zxx">
<head>
<title>まるまる不動産 | 新築マンション</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" />
<meta name="keywords"
	content="District Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<?php
include $_SERVER['DOCUMENT_ROOT'].'/homepage_practice/inc/linkCSS.php';
?>
</head>
<head>
<body>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/homepage_practice/inc/header.php';
include $_SERVER['DOCUMENT_ROOT'].'/homepage_practice/inc/searchForm.php';
?>
<div class="col">
		<div class="row mapArea">
			<div class="col-12 col-md-6 col-lg-5" align="center">
				<div class="card">
				<?php
				include_once $_SERVER['DOCUMENT_ROOT'].'/homepage_practice/list/db/regionSepAll_Map.php';
    ?>
					<img class="map_img" src="<?php $_SERVER['DOCUMENT_ROOT']?>/homepage_practice/images/japanese_archipelago-1.png"
						alt="Card image cap">
				</div>
			</div>
		</div>
	</div>
	<!-- footer top -->
	<div class="footer-top py-5 text-center">
		<div class="container py-xl-5 py-lg-3">
			<h2 class="text-white mb-4">Select Your Dream Property</h2>
			<h5 class="text-white mb-sm-5 mb-4 pb-sm-5 pb-4">Contact Us</h5>
			<i class="fas fa-map-marker-alt"></i>
		</div>
	</div>
	<!-- //footer top -->

	<!-- footer -->
	<div class="footer py-5 text-center">
		<div class="container py-xl-5 py-lg-3">
			<div class="address row mb-4">
				<div class="col-lg-4 address-grid">
					<div class="row address-info">
						<div class="col-md-3 address-left text-center">
							<i class="far fa-envelope"></i>
						</div>
						<div class="col-md-9 address-right text-left">
							<h6 class="ad-info text-uppercase mb-2">Email</h6>
							<p>
								<a href="mailto:example@email.com"> mail 1@example.com</a>
							</p>
							<p>
								<a href="mailto:example@email.com"> mail 2@example.com</a>
							</p>
						</div>

					</div>
				</div>
				<div class="col-lg-4 address-grid my-lg-0 my-4">
					<div class="row address-info">
						<div class="col-md-3 address-left text-center">
							<i class="fas fa-mobile-alt"></i>
						</div>
						<div class="col-md-9 address-right text-left">
							<h6 class="ad-info text-uppercase mb-2">call us</h6>
							<p>+1 234 567 8901</p>
							<p>+1 567 567 9876</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 address-grid">
					<div class="row address-info">
						<div class="col-md-3 address-left text-center">
							<i class="far fa-map"></i>
						</div>
						<div class="col-md-9 address-right text-left">
							<h6 class="ad-info text-uppercase mb-2">Address</h6>
							<p>786 Main Road, hollies</p>
							<p>California, USA</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer -->

	<!-- copyright -->
	<div class="copy_right py-4 text-center">
		<p class="text-white">
			© 2018 District. All rights reserved | Design by <a
				href="http://w3layouts.com/">W3layouts</a>
		</p>
	</div>
	<!-- //copyright -->

</body>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/homepage_practice/inc/linkJS.php';
?>
</html>
