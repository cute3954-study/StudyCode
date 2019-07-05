<!DOCTYPE html>
<html lang="zxx">

<head>
<title>まるまる不動産</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<!--// Meta tag Keywords -->

<!-- Custom-Files -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!-- Style-CSS -->
<link rel="stylesheet" href="css/fontawesome-all.css">
<!-- Font-Awesome-Icons-CSS -->
<!-- //Custom-Files -->

<!-- Web-Fonts -->
<link
	href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
	rel="stylesheet">
<link
	href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	rel="stylesheet">
<!-- Japanese -->
<link
	href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap"
	rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kosugi&display=swap"
	rel="stylesheet">
<!-- //Web-Fonts -->
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
									aria-expanded="false">賃貸</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item scroll" href="list/house.php">賃貸住宅</a>
										<a class="dropdown-item scroll" href="#pricings">賃貸事務所</a> <a
											class="dropdown-item scroll" href="#clients">賃貸店舗</a> <a
											class="dropdown-item" href="about.html">賃貸駐車場</a> <a
											class="dropdown-item" href="about.html">賃貸倉庫など</a>
									</div></li>
								<li class="nav-item dropdown mx-lg-3"><a
									class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
									role="button" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">購入</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item scroll" href="list/house.php">新築マンション</a>
										<a class="dropdown-item scroll" href="#pricings">中古マンション</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item scroll" href="#clients">新規一戸建て</a> <a
											class="dropdown-item" href="about.html">中古一戸建て</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="about.html">注文住宅</a> <a
											class="dropdown-item" href="about.html">土地</a>
									</div></li>
								<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3"><a
									class="nav-link" href="about.html">販売</a></li>
								<li class="nav-item"><a class="nav-link" href="contact.html">マイページ</a></li>
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
	<!-- login -->
	<div class="modal fade" id="exampleModalCenter1" tabindex="-1"
		role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true" class="closeBtn">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login px-4 mx-auto mw-100">
						<h5 class="text-center mb-4">ログイン</h5>
						<form action="login/db/loginCheck.php" method="post">
							<div class="form-group">
								<font class="msg" id="idLoginCheckMsg"></font> <input
									type="text" class="form-control" name="loginId"
									placeholder="ID" id="loginId" onkeyup="loginIdCheck();">
							</div>
							<div class="form-group">
								<font class="msg" id="pwdLoginCheckMsg"></font> <input
									type="password" class="form-control inputWidth" name="loginPwd"
									placeholder="パスワード" id="loginPwd" onkeyup="loginPwdCheck();">
								<button class="btn btn-primary pwdVisible bu_w" id="pwdVisLogin"
									type="button" onclick="pwdVisibleLogin();">表示</button>
							</div>
							<button type="submit" class="btn btn-primary submit mb-4"
								id="loginbtn" disabled="disabled">ログイン</button>
							<p class="text-center pb-4">
								<a href="#">IDもしくはパスワードを忘れた方はこちら</a>
							</p>
							<p class="text-center pb-4">
								<a href="#" data-toggle="modal"
									data-target="#exampleModalCenter2">新規登録</a>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //login -->
	<!-- register -->
	<div class="modal fade" id="exampleModalCenter2" tabindex="-1"
		role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true" class="closeBtn">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login px-4 mx-auto mw-100">
						<h5 class="text-center mb-4">まるまる不動産へようこそ！</h5>
						<form action="register/db/registerMember.php" method="post">
							<div class="form-group" class="bors">
								<button type="button" class="btn buyorsell" data-toggle="button"
									aria-pressed="false" value="false">購買者</button>
								<button type="button" class="btn buyorsell" data-toggle="button"
									aria-pressed="false" value="true">販売者</button>
							</div>
							<div class="form-group">
								<font class="msg" id="idCheckMsg"></font> <input type="text"
									class="form-control" name="userId" placeholder="ID" id="userId"
									maxlength="20" onkeyup="idCheck();"> <font class="msg"
									id="pwdCheckMsg"></font> <input type="password"
									class="form-control inputWidth" name="userPwd1" id="userPwd1"
									placeholder="パスワード" onkeyup="passwordCheck();" maxlength="20">
								<button class="btn btn-primary pwdVisible bu_w" id="pwdVis1"
									type="button" onclick="pwdVisible1();">表示</button>
								<input type="password" class="form-control inputWidth"
									name="userPwd2" id="userPwd2" placeholder="パスワード確認"
									onkeyup="passwordCheck();" maxlength="20">
								<button class="btn btn-primary pwdVisible bu_w" id="pwdVis2"
									type="button" onclick="pwdVisible2();">表示</button>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="userName"
									placeholder="名前" id="userName" maxlength="30">
							</div>
							<div class="form-group" id="userBirth">
								<select id="userYear" onchange="birthCheck();"><option value="0">----</option></select>年
								<select id="userMonth" onchange="birthCheck();"><option
										value="0">--</option></select>月 <select id="userDay"
									onchange="birthCheck();"><option value="0">--</option></select>日
								<font class="msg" id="birthCheckMsg">生年月日を指定してください。</font>
							</div>
							<div class="form-group">
								<font class="msg" id="emailCheckMsg"></font> <input type="text"
									class="form-control inputWidth" name="userEmail"
									placeholder="メールアドレス" id="userEmail" onchange="attrDisabled();">
								<button class="btn btn-primary submit bu_w"
									onclick="mailCheck();" type="button">メール送信</button>
								<font class="msg" id="postCheckMsg"></font> <input type="text"
									class="form-control inputWidth" name="userPost"
									placeholder="郵便番号" id="userPost">
								<button class="btn btn-primary submit bu_w" type="button"
									onclick="setAddress();">住所取得</button>
								<input type="text" class="form-control" name="userAdd1"
									placeholder="都道府県" id="userAdd1"> <input type="text"
									class="form-control" name="userAdd2" placeholder="市区町村"
									id="userAdd2"> <input type="text" class="form-control"
									name="userAdd3" placeholder="番地" id="userAdd3"> <input
									type="text" class="form-control" name="userAdd4"
									placeholder="建物名・部屋番号" id="userAdd4">
							</div>
							<button type="submit" id="registerbtn"
								class="btn btn-primary submit padding_sub mb-4"
								disabled="disabled">会員登録</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//register-->
	<!-- //banner -->

	<!-- banner-bottom -->
	<div class="serach-w3agile py-5" id="searchArea">
		<div class="container py-xl-4 py-lg-3">
			<h3 class="title-w3ls mb-md-5 mb-4 font-weight-bold" align="center">キーワードから探す
				- 全国</h3>
			<div class="regionSelect" align="center">
				<span><a href="#">全国</a></span><?php
    include_once 'list/db/regionSepAll.php';
    ?></div>
			<div class="place-grids">
				<form action="#" method="post">
					<div class="row">
						<div class="col-sm-5 col-6 place-grid">
							<input type="text" class="form-control"
								placeholder="物件名、 路線名、 駅名などを入力" id="searchList"
								onkeyup="searchCheck();">
						</div>
						<div class="col-sm-3 col-6 place-grid">
							<select class="sel">
								<option value="" selected="selected">新築マンション</option>
								<option value="">新築一戸建て</option>
								<option value="">中古マンション</option>
								<option value="">中古一戸建て</option>
								<option value="">土地</option>
								<option value="">賃貸住宅</option>
							</select>
						</div>
						<div class="col-sm-2 col-6 place-grid mt-sm-0 mt-3"
							style="margin: 0 !important;">
							<select class="sel">
								<option value="0" class="noSelect" selected="selected">------</option>
								<?php
        include_once 'list/db/regionListAll.php';
        ?>
							</select>
						</div>
						<div class="col-sm-2 col-6 place-grid">
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

	<!-- services -->
	<div class="what-w3ls py-5" id="services">
		<div class="container py-xl-5 py-lg-3">
			<div class="text-center mb-md-5 mb-4">
				<h3 class="tittle mb-sm-2">Our Services</h3>
				<p>Some words about our property services</p>
			</div>
			<div class="what-grids">
				<div class="row">
					<div class="col-md-6 what-grid1">
						<div class="row what-top">
							<div class="col-2 what-left">
								<i class="fas fa-key"></i>
							</div>
							<div class="col-10 what-right">
								<h4>Renting Service</h4>
								<p class="mt-2">Consectetur adipisicing elit. Ab aut dignissimos
									ea est, laboriosam consectetur adipisicing elit.</p>
							</div>
						</div>
						<div class="row what-top my-md-5 my-4">
							<div class="col-2 what-left">
								<i class="far fa-money-bill-alt"></i>
							</div>
							<div class="col-10 what-right">
								<h4>Saling Service</h4>
								<p class="mt-2">Consectetur adipisicing elit. Ab aut dignissimos
									ea est, laboriosam consectetur adipisicing elit.</p>
							</div>
						</div>
						<div class="row what-top">
							<div class="col-2 what-left">
								<i class="fas fa-user-secret"></i>
							</div>
							<div class="col-10 what-right">
								<h4>Non Stop Security</h4>
								<p class="mt-2">Consectetur adipisicing elit. Ab aut dignissimos
									ea est, laboriosam consectetur adipisicing elit.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 what-grid1 my-md-0 my-4">
						<div class="row what-top">
							<div class="col-2 what-left">
								<i class="far fa-building"></i>
							</div>
							<div class="col-10 what-right">
								<h4>Property Management</h4>
								<p class="mt-2">Consectetur adipisicing elit. Ab aut dignissimos
									ea est, laboriosam consectetur adipisicing elit.</p>
							</div>
						</div>
						<div class="row what-top my-md-5 my-4">
							<div class="col-2 what-left">
								<i class="fas fa-clipboard-list"></i>
							</div>
							<div class="col-10 what-right">
								<h4>Property Listing</h4>
								<p class="mt-2">Consectetur adipisicing elit. Ab aut dignissimos
									ea est, laboriosam consectetur adipisicing elit.</p>
							</div>
						</div>
						<div class="row what-top">
							<div class="col-2 what-left">
								<i class="fas fa-wrench"></i>
							</div>
							<div class="col-10 what-right">
								<h4>Luxurious Fittings</h4>
								<p class="mt-2">Consectetur adipisicing elit. Ab aut dignissimos
									ea est, laboriosam consectetur adipisicing elit.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->

	<!-- pricing -->
	<section class="pricing py-5" id="pricings">
		<div class="container py-xl-5 py-lg-3">
			<div class="text-center mb-lg-5 mb-4">
				<h3 class="tittle mb-2 text-white">Our Pricings</h3>
				<p class="test-title-paara">A few word about our Planes</p>
			</div>
			<div class="inner-sec">
				<div class="card-deck text-center row mt-5">
					<div class="price-info-grid col-lg-4">
						<div class="price-inner">
							<div class="price-header">
								<h4>Starter</h4>
							</div>
							<div class="price-body">
								<h5 class="pricing-title">
									<span class="dolor">$</span> 789.00 <label>Per Month</label>

								</h5>

								<ul class="list-unstyled mt-3 mb-4">
									<li class="py-2 border-bottom">Advertising</li>
									<li class="py-2 border-bottom">Branding Services</li>
									<li class="py-2 border-bottom">Online Marketing</li>
									<li class="py-2 border-bottom">Creative Marketing</li>
									<li class="py-2">-</li>
								</ul>
								<a href="#" class="btn btn-block py-2" data-toggle="modal"
									data-target="#exampleModalCenter2"> <i class="far fa-user"></i>
									Get Started
								</a>
							</div>
						</div>
					</div>
					<div class="price-info-grid col-lg-4 my-lg-0 my-3">
						<div class="price-inner">
							<div class="price-header">
								<h4>Professional</h4>
							</div>
							<div class="price-body">
								<h5 class="pricing-title">
									<span class="dolor">$</span>1089.00 <label>Per Month</label>
								</h5>
								<ul class="list-unstyled mt-3 mb-4">
									<li class="py-2 border-bottom">Advertising</li>
									<li class="py-2 border-bottom">Branding Services</li>
									<li class="py-2 border-bottom">Online Marketing</li>
									<li class="py-2 border-bottom">Creative Marketing</li>
									<li class="py-2">-</li>
								</ul>
								<a href="#" class="btn btn-block btn-outline-primary py-2"
									data-toggle="modal" data-target="#exampleModalCenter2"> <i
									class="far fa-user"></i> Get Started
								</a>
							</div>
						</div>
					</div>
					<div class="price-info-grid col-lg-4">
						<div class="price-inner">
							<div class="price-header">
								<h4>Enterprise</h4>
							</div>
							<div class="price-body">
								<h5 class="pricing-title">
									<span class="dolor">$</span>2189.00 <label>Per Month</label>

								</h5>
								<ul class="list-unstyled mt-3 mb-4">
									<li class="py-2 border-bottom">Advertising</li>
									<li class="py-2 border-bottom">Branding Services</li>
									<li class="py-2 border-bottom">Online Marketing</li>
									<li class="py-2 border-bottom">Creative Marketing</li>
									<li class="py-2">-</li>
								</ul>
								<a href="#" class="btn btn-block btn-outline-primary py-2"
									data-toggle="modal" data-target="#exampleModalCenter2"> <i
									class="far fa-user"></i> Get Started
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //pricing -->

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

	<!-- testimonials -->
	<div class="testimonials py-5" id="clients">
		<div class="container py-xl-5 py-lg-3">
			<div class="text-center mb-lg-5 mb-4">
				<h3 class="tittle mb-2 text-white">What Clients Say</h3>
				<p class="test-title-paara">A few word about our Clients</p>
			</div>
			<div class="w3_testimonials_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3_testimonials_grid">
									<p>"Nam Cumque nihil impedit quo minuslibero tempore, nihil
										impedit quo minus id quod possimus, Nam Cumque nihil impedit
										quo minuslibero tempore, cum soluta nobis est eligendi optio
										cumque nihil impedit omnis voluptas".</p>
									<ul class="testi-w3ls-rate mt-4">
										<li><i class="fas fa-star"></i></li>
										<li class="mx-2"><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li class="mx-2"><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
									<div class="row person-w3ls-testi mt-5">
										<div class="col-6 agile-left-test text-right">
											<img src="images/te1.jpg" alt=" "
												class="img-fluid rounded-circle" />
										</div>
										<div class="col-6 agile-right-test text-left mt-4">
											<h5>John Frank</h5>
											<p>Tempore Quo</p>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="w3_testimonials_grid">
									<p>"Nam Cumque nihil impedit quo minuslibero tempore, nihil
										impedit quo minus id quod possimus, Nam Cumque nihil impedit
										quo minuslibero tempore, cum soluta nobis est eligendi optio
										cumque nihil impedit omnis voluptas".</p>
									<ul class="testi-w3ls-rate mt-4">
										<li><i class="fas fa-star"></i></li>
										<li class="mx-2"><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li class="mx-2"><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
									<div class="row person-w3ls-testi mt-5">
										<div class="col-6 agile-left-test text-right">
											<img src="images/te2.jpg" alt=" "
												class="img-fluid rounded-circle" />
										</div>
										<div class="col-6 agile-right-test text-left mt-4">
											<h5>John Frank</h5>
											<p>Tempore Quo</p>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="w3_testimonials_grid">
									<p>"Nam Cumque nihil impedit quo minuslibero tempore, nihil
										impedit quo minus id quod possimus, Nam Cumque nihil impedit
										quo minuslibero tempore, cum soluta nobis est eligendi optio
										cumque nihil impedit omnis voluptas".</p>
									<ul class="testi-w3ls-rate mt-4">
										<li><i class="fas fa-star"></i></li>
										<li class="mx-2"><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li class="mx-2"><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
									<div class="row person-w3ls-testi mt-5">
										<div class="col-6 agile-left-test text-right">
											<img src="images/te3.jpg" alt=" "
												class="img-fluid rounded-circle" />
										</div>
										<div class="col-6 agile-right-test text-left mt-4">
											<h5>John Frank</h5>
											<p>Tempore Quo</p>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</section>

			</div>
		</div>
	</div>
	<!-- //testimonials -->

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


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- flexSlider (for testimonials) -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css"
		media="screen" />
	<script defer src="js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation : "slide",
				start : function(slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider (for testimonials) -->

	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
	<script src="js/common.js"></script>
	<script src="js/list/list.js"></script>
	<script src="js/login/login.js"></script>
	<script src="js/register/register.js"></script>
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/district.js"></script>

	<script src="js/bootstrap.js"></script>

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //Js files -->

</body>
</html>
