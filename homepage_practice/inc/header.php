<!-- banner -->
<div class="bannerbg-w3l bannerbg-w3l-inner">
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
							<div class="col-12 header-loginw3ls text-lg-right text-center">
							<?php
    session_start();
    if (! isset($_SESSION['userId']) || ! isset($_SESSION['userName'])) {
        ?>

										<a href="#" class="log" data-toggle="modal"
									data-target="#exampleModalCenter1"> <i class="fas fa-user mr-2"></i>ログイン&nbsp;&nbsp;
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
					<a class="navbar-brand" href="../index.php">まるまる不動産 </a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active mx-lg-3"><a class="nav-link"
								href="../index.php">トップ<span class="sr-only">(current)</span>
							</a></li>
							<li class="nav-item dropdown mx-lg-3"><a
								class="nav-link dropdown-toggle" href="list/borrowSearch.php"
								id="navbarDropdown" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">賃貸</a>
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
								<div class="dropdown-menu" aria-labelledby="navbarDropdown"
									id="">
									<a class="dropdown-item scroll" href="#"
										onclick="location.href='../list/newHouse.php'">新築マンション</a> <a
										class="dropdown-item scroll" href="../list/oldHouse.php">中古マンション</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item scroll" href="#"
										onclick="location.href='../list/resultList.php'">新規一戸建て</a> <a
										class="dropdown-item" href="about.html">中古一戸建て</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="about.html">注文住宅</a> <a
										class="dropdown-item" href="about.html">土地</a>
								</div></li>
							<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3"><a
								class="nav-link" href="about.html">販売</a></li>
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
	<!-- banner-text -->
	<div class="banner-w3ltext about-w3bnr">
		<div class="container">
			<h1 class="text-white text-center">
				<a href="../index.php">トップ</a> / <font id="topMsg"></font>
			</h1>
		</div>
	</div>
	<!-- //banner-text -->
</div>
<?php
include 'login.php';
?>
<?php
include 'register.php';
?>
<!-- //banner -->