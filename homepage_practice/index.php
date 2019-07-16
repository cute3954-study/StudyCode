<!DOCTYPE html>
<html lang="zxx">

<head>
<title>まるまる不動産</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1"
	CONTENT="no-cache">
<meta charset="UTF-8" />
<meta name="keywords"
	content="District Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="text/javascript">
	addEventListener("load", function() {
		setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar() {
		window.scrollTo(0, 1);
	}
</script>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/homepage_practice/inc/linkCSS.php';
?>
</head>

<body>
	<!-- banner -->
	<div class="bannerbg-w3l">
		<!-- header -->
		<header>
			<div class="header_topw3layouts_bar">
				<div class="container">
					<!-- header-top -->
					<div class="row border-bottom py-lg-4 py-3">
						<div class="col-xl-7 col-lg-6 header_agileits_left">
							<ul>
								<li class="mr-3"><i class="fas fa-phone mr-2"></i> +(080) 0000
									0000</li>
								<li><i class="fas fa-envelope mr-2"></i> <a
									href="mailto:info@example.com">info@example.com</a></li>
							</ul>
						</div>
						<div
							class="col-xl-5 col-lg-6 header_right text-center mt-lg-0 mt-2">
							<div class="row" align="right">
								<!-- //social icons -->
								<div class="col-12 header-loginw3ls text-lg-right text-center">
							<?php
    session_start();
    if (! isset($_SESSION['userId']) || ! isset($_SESSION['userName'])) {
        ?>

										<a href="#" class="log" data-toggle="modal"
										data-target="#exampleModalCenter1"> <i
										class="fas fa-user mr-2"></i>ログイン&nbsp;&nbsp;
									</a> <a href="#" class="log" data-toggle="modal"
										data-target="#exampleModalCenter2"> <i class="fas fa-key mr-2"></i>新規登録
									</a>


							<?php
    } else {
        $userId = $_SESSION['userId'];
        $userName = $_SESSION['userName'];
        ?>
									<a href="#"> <i class="fas fa-user mr-2"></i>こんにちは、<?php echo $userName."(".$userId.")"?>さん！&nbsp;&nbsp;
									</a> <a href="login/logout.php"> <i class="fas fa-key mr-2"></i>ログアウト
									</a>

							<?php } ?>
							</div>
							</div>
						</div>
					</div>
					<!--// header-top -->

					<!-- navigation -->
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="index.php">まるまる不動産 </a>
						<button class="navbar-toggler" type="button"
							data-toggle="collapse" data-target="#navbarSupportedContent"
							aria-controls="navbarSupportedContent" aria-expanded="false"
							aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item active mx-lg-3"><a class="nav-link"
									href="index.php">トップ<span class="sr-only">(current)</span>
								</a></li>
								<li class="nav-item dropdown mx-lg-3"><a
									class="nav-link dropdown-toggle" href="list/borrowSearch.php"
									id="navbarDropdown" role="button" data-toggle="dropdown"
									aria-haspopup="true" aria-expanded="false">賃貸</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item scroll" href="list/newHouse.php">賃貸住宅</a>
										<a class="dropdown-item scroll" href="#pricings">賃貸事務所</a> <a
											class="dropdown-item scroll" href="#clients">賃貸店舗</a> <a
											class="dropdown-item" href="about.html">賃貸駐車場</a> <a
											class="dropdown-item" href="about.html">賃貸倉庫など</a>
									</div></li>
								<li class="nav-item dropdown mx-lg-3"><a
									class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
									role="button" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">購入</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown"
										class='buyHouse'>
										<a class="dropdown-item scroll active" href="#" id="新築マンション"
											onclick="location.href='/homepage_practice/list/newHouse.php'">新築マンション</a>
										<a class="dropdown-item scroll" href="#" id="中古マンション"
											onclick="location.href='/homepage_practice/list/oldHouse.php'">中古マンション</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item scroll" href="#" id="新規一戸建て"
											onclick="location.href='/homepage_practice/list/newHouse.php'">新規一戸建て</a>
										<a class="dropdown-item" name="houseChk" href="about.html"
											id="中古一戸建て">中古一戸建て</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" name="houseChk" href="about.html"
											id="注文住宅">注文住宅</a> <a class="dropdown-item" name="houseChk"
											href="about.html" id="土地">土地</a>
									</div></li>
								<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3"><a
									class="nav-link" href="about.html">販売</a></li>
									<?php
        if (isset($_SESSION['userId']) && isset($_SESSION['userName'])) {
            ?>
								<li class="nav-item"><a class="nav-link" href="/homepage_practice/mypage/mypage.php">マイページ</a></li>
								<?php
        }
        ?>
							</ul>
						</div>
					</nav>
					<!-- //navigation -->
				</div>
			</div>
		</header>
		<!-- //header -->
		<!-- banner text -->
		<div class="banner-text-agile">
			<div class="container">
				<div class="banner-w3lstexts text-white text-center">
					<h1>最大2ヶ月分賃料無料</h1>
					<h4 class="text-uppercase mt-md-3 mt-2 mb-md-4 mb-3">ご好評につき7月も延長決定！</h4>
					<a href="#searchArea" class="banner-button btn mt-md-5 mt-4"
						id="toSearch">今すぐ探す</a>
				</div>
			</div>
		</div>
		<!-- //banner text -->
	</div>
	<?php
include $_SERVER['DOCUMENT_ROOT'] . '/homepage_practice/inc/login.php';
?>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/homepage_practice/inc/register.php';
?>
	<!-- //banner -->

	<!-- banner-bottom -->
	<div class="serach-w3agile py-5 searchArea" id="searchArea">
		<div class="container py-xl-4 py-lg-3">
			<h3 class="title-w3ls mb-md-5 mb-4 font-weight-bold"
				id="selectRegionName" align="center">キーワードから探す - 全国</h3>
			<div class="place-grids">
				<form action="/homepage_practice/list/resultList.php" method="post">
					<div class="row">
						<div class="col-sm-2 col-6 place-grid mt-sm-0 mt-3"
							style="margin: 0 !important;">
							<select class="sel" id="regionSelect" name="regionSelect">
								<option id="------" class="noSelect" selected="selected">------</option>
								<option id="全国">全国</option>
								<?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/homepage_practice/list/db/regionSepAll.php';
        ?>
							</select>
						</div>
						<div class="col-sm-2 col-6 place-grid mt-sm-0 mt-3"
							style="margin: 0 !important;">
							<select class="sel" id="reregionSelect" name="reregionSelect">
								<option value="------" class="noSelect" selected="selected">------</option>
							</select>
						</div>
						<div class="col-sm-3 col-6 place-grid">
							<select class="sel" name="houseKind">
								<option value="新築マンション" selected="selected">新築マンション</option>
								<option value="新築一戸建て">新築一戸建て</option>
								<option value="中古マンション">中古マンション</option>
								<option value="中古一戸建て">中古一戸建て</option>
								<option value="土地">土地</option>
								<option value="賃貸住宅">賃貸住宅</option>
							</select>
						</div>
						<div class="col-sm-4 col-6 place-grid">
							<input type="text" class="form-control" name="searchKeyword"
								placeholder="物件名、 路線名、 駅名などを入力" id="searchList"
								onkeyup="searchCheck();">
						</div>
						<div class="col-sm-1 col-6 place-grid">
							<button type="submit" disabled="disabled"
								class="btn btn-primary submit padding_sub mb-4" id="searchBtn">検索</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- //banner-bottom -->

	<!-- middle section -->
	<div class="middle-w3l">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-4 button"></div>
				<div class="col-lg-6 col-md-8 left-build-wthree py-5 px-sm-5 px-4">
					<div class="py-xl-5 py-lg-3 px-xl-4">
						<h4>A Beautiful Beach House</h4>
						<h6 class="mt-3 mb-xl-5 mb-4">Excepteur sint occaecat</h6>
						<p>sed do eiusmod tempor incididunt ut labore et dolore magna
							aliqua. Ut enim ad minim veniam, quis nostrud exercitation
							ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<ul class="list-beach mt-lg-5 mt-4">
							<li>
								<div class="row">
									<div class="col-1 text-center">
										<i class="fas fa-hand-point-right"></i>
									</div>
									<div class="col-10">
										<p>Totam rem aperiamet quasi architecto beatae vitae dicta
											sunt explicabo beatae vitae dicta.</p>
									</div>
								</div>
							</li>
							<li class="my-3">
								<div class="row">
									<div class="col-1 text-center">
										<i class="fas fa-hand-point-right"></i>
									</div>
									<div class="col-10">
										<p>A rchitecto beatae Totam rem aperiamet quasi architecto
											beatae vitae dicta sunt explicabo.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1 text-center">
										<i class="fas fa-hand-point-right"></i>
									</div>
									<div class="col-10">
										<p>Dicta sunt explicabo Totam rem aperiamet quasi architecto
											beatae vitae dicta sunt explicabo.</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //middle section -->

	<!-- stats section -->
	<div class="middlesection-agile py-5">
		<div class="container-fluid py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-6 left-build-wthree aboutright-agilewthree mt-0">
					<h4>Sell Your Best House</h4>
					<h6 class="mt-3 mb-5">Some words about our property</h6>
					<div class="row mb-xl-5 mb-4">
						<div class="col-4 w3layouts_stats_left w3_counter_grid">
							<i class="fas fa-bed"></i>
							<p class="counter">6</p>
							<p class="para-text-w3ls">Bedroom</p>
						</div>
						<div class="col-4 w3layouts_stats_left w3_counter_grid2">
							<i class="fas fa-bath"></i>
							<p class="counter">4</p>
							<p class="para-text-w3ls">Bathroom</p>
						</div>
						<div class="col-4 w3layouts_stats_left w3_counter_grid1">
							<i class="fas fa-car"></i>
							<p class="counter">2</p>
							<p class="para-text-w3ls">Car Parking</p>
						</div>
					</div>
					<p>Cras sagittis mi sit amet malesuada mollis. Mauris porroinit
						consectetur cursus tortor vel interdum. Suspendisse interdum velit
						vel qu dapibus condimentum. Pellentesque consequat.</p>
				</div>
				<div class="col-lg-6 text-lg-left text-center mt-lg-0 mt-md-5 mt-4">
					<img src="images/middle.jpg" alt="" class="img-fluid" />
				</div>
			</div>
		</div>
	</div>
	<!-- //stats -->
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
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/homepage_practice/inc/linkJS.php';
?>
</body>
</html>
