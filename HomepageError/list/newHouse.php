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
include $_SERVER['DOCUMENT_ROOT'].'/HomepageError/inc/linkCSS.php';
?>
</head>
<head>
<body>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/HomepageError/inc/header.php';
include $_SERVER['DOCUMENT_ROOT'].'/HomepageError/inc/searchForm.php';
?>
<div class="col">
		<div class="row mapArea">
			<div class="col-12 col-md-6 col-lg-5" align="center">
				<div class="card">
				<?php
				include_once $_SERVER['DOCUMENT_ROOT'].'/HomepageError/list/db/regionSepAll_Map.php';
    ?>
					<img class="map_img" src="<?php $_SERVER['DOCUMENT_ROOT']?>/HomepageError/images/japanese_archipelago-1.png"
						alt="Card image cap">
				</div>
			</div>
		</div>
	</div>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/HomepageError/inc/linkJS.php';
?>
</body>
</html>
