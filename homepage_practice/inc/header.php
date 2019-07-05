<!-- banner -->
<div class="bannerbg-w3l">
	<!-- header -->
	<header>
		<div class="header_topw3layouts_bar" id="headerBlack">
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
								href="index.php">トップ<span class="sr-only">(current)</span>
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
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item scroll" href="#"
										onclick="location.href='../list/newHouse.php'">新築マンション</a> <a
										class="dropdown-item scroll" href="#pricings">中古マンション</a>
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
					<form action="../login/db/loginCheck.php" method="post">
						<div class="form-group">
							<font class="msg" id="idLoginCheckMsg"></font> <input type="text"
								class="form-control" name="loginId" placeholder="ID"
								id="loginId" onkeyup="loginIdCheck();">
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
					<form action="../register/db/registerMember.php" method="post">
						<div class="form-group" class="bors">
							<button type="button" class="btn buyorsell" data-toggle="button"
								aria-pressed="false" value="購買者">購買者</button>
							<button type="button" class="btn buyorsell" data-toggle="button"
								aria-pressed="false" value="販売者">販売者</button>
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
							<font class="msg" id="nameCheckMsg"></font> <input type="text"
								class="form-control" name="userName" placeholder="名前"
								id="userName" maxlength="30" onkeyup="nameCheck();">
						</div>
						<div class="form-group" id="userBirth">
							<select id="userYear" onchange="birthCheck();"><option value="0">----</option></select>年
							<select id="userMonth" onchange="birthCheck();"><option value="0">--</option></select>月
							<select id="userDay" onchange="birthCheck();"><option value="0">--</option></select>日
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