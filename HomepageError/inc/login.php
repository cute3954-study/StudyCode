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
					<form action="/HomepageError/login/db/loginCheck.php" method="post">
						<div class="form-group">
							<font class="msg" id="idLoginCheckMsg"></font> <input type="text"
								class="form-control" name="loginId" placeholder="ID"
								id="loginId" onkeyup="loginIdCheck();">
						</div>
						<div class="form-group">
							<font class="msg" id="pwdLoginCheckMsg"></font> <input
								type="password" class="form-control inputWidth" name="loginPwd"
								placeholder="パスワード" id="loginPwd" onkeyup="loginPwdCheck();">
							<!-- error: Uncaught ReferenceError: pwdVisibleLogin is not defined
                                at HTMLButtonElement.onclick -->
							<button class="btn btn-primary pwdVisible bu_w" id="pwdVisLogin"
								type="button" onclick="pwdVisibleLogin();">表示</button>
						</div>
						<button type="submit" class="btn btn-primary submit mb-4"
							id="loginbtn" disabled="disabled">ログイン</button>
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