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
					<form
						action="<?php $_SERVER['DOCUMENT_ROOT']?>/HomepageError/register/db/registerMember.php"
						method="post">
						<div class="form-group btn-group-toggle" data-toggle="buttons"
							class="bors">
							<label class="btn buyorsell"><input type="radio" id="bsbutton1"
								name="購買者" checked="checked" />購買者</label> <label
								class="btn buyorsell"><input type="radio" id="bsbutton2"
								name="販売者" />販売者</label>
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
							<select name="userYear" id="userYear" onchange="birthCheck();"><option value="0">----</option></select>年
							<select name="userMonth" id="userMonth" onchange="birthCheck();"><option value="0">--</option></select>月
							<select name="userDay" id="userDay" onchange="birthCheck();"><option value="0">--</option></select>日
							<font class="msg" id="birthCheckMsg">生年月日を指定してください。</font>
						</div>
						<div class="form-group">
							<font class="msg" id="emailCheckMsg"></font> <input type="text"
								class="form-control inputWidth" name="userEmail"
								placeholder="メールアドレス" id="userEmail" onchange="attrDisabled();">
							<button class="btn btn-primary submit bu_w" id="mailCheckBtn"
								onclick="mailCheck();" type="button" disabled="disabled">メール送信</button>
							<font class="msg" id="postCheckMsg"></font> <input type="text"
								class="form-control inputWidth-address" name="userPost"
								placeholder="郵便番号" id="userPost"
								onKeyUp="AjaxZip3.zip2addr(this,'','userAdd1','userAdd2','userAdd3');" />
							<input type="text" class="form-control inputWidth-address" name="userAdd1"
								placeholder="都道府県" id="userAdd1"> <input type="text"
								class="form-control inputWidth-address" name="userAdd2" placeholder="市区町村"
								id="userAdd2"> <input type="text" class="form-control"
								name="userAdd3" placeholder="番地" id="userAdd3"> <input
								type="text" class="form-control" name="userAdd4"
								placeholder="建物名・部屋番号" id="userAdd4">
						</div>
						<button type="submit" id="registerbtn"
							class="btn btn-primary submit padding_sub mb-4">会員登録</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!--//register-->