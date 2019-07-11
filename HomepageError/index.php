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
include $_SERVER['DOCUMENT_ROOT'] . '/HomepageError/inc/linkCSS.php';
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
									class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
									role="button" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">購入</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown"
										class='buyHouse'>
										<a class="dropdown-item scroll active" href="#" id="新築マンション"
											onclick="location.href='/HomepageError/list/newHouse.php'">新築マンション</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item scroll" href="#" id="新規一戸建て"
											onclick="location.href='/HomepageError/list/newHouse.php'">新規一戸建て</a>
									</div></li>
									<?php
        if (isset($_SESSION['userId']) && isset($_SESSION['userName'])) {
            ?>
								<li class="nav-item"><a class="nav-link" href="contact.html">マイページ</a></li>
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
include $_SERVER['DOCUMENT_ROOT'] . '/HomepageError/inc/login.php';
?>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/HomepageError/inc/register.php';
?>
	<!-- //banner -->

	<!-- banner-bottom -->
	<div class="serach-w3agile py-5" id="searchArea" style="display: none;">
		<div class="container py-xl-4 py-lg-3">
			<h3 class="title-w3ls mb-md-5 mb-4 font-weight-bold"
				id="selectRegionName" align="center">キーワードから探す - 全国</h3>
			<div class="place-grids">
				<form action="/HomepageError/list/resultList.php" method="post">
					<div class="row">
						<div class="col-sm-2 col-6 place-grid mt-sm-0 mt-3"
							style="margin: 0 !important;">
							<select class="sel" id="regionSelect" name="regionSelect">
								<option id="------" class="noSelect" selected="selected">------</option>
								<option id="全国">全国</option>
								<?php
        include_once $_SERVER['DOCUMENT_ROOT'] . '/HomepageError/list/db/regionSepAll.php';
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
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/HomepageError/inc/linkJS.php';
?>
</body>
</html>
