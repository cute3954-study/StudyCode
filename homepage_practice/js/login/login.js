function attrLoginDisabled() {
	$('#loginbtn').attr('disabled', 'disabled');
}

function removeLoginDisabled() {
	$('#loginbtn').removeAttr('disabled');
}
var loginId, loginPwd;
function loginIdCheck() {
	loginId = $('#loginId').val();
	loginPwd = $('#loginPwd').val();
	if (loginId == null || loginId == "") {
		$('#idLoginCheckMsg').html("IDを入力してください。");
		attrLoginDisabled();
	} else {
		$('#idLoginCheckMsg').html("");
		if (loginPwd == null || loginPwd == "") {
			attrLoginDisabled();
		} else {
			removeLoginDisabled();
		}
	}
}
function loginPwdCheck() {
	loginId = $('#loginId').val();
	loginPwd = $('#loginPwd').val();
	if (loginPwd == null || loginPwd == "") {
		$('#pwdLoginCheckMsg').html("パスワードを入力してください。");
		attrLoginDisabled();
	} else {
		$('#pwdLoginCheckMsg').html("");
		if (loginId == null || loginId == "") {
			attrLoginDisabled();
		} else {
			removeLoginDisabled();
		}
	}
}
function pwdVisibleLogin() {
	var pwdtextlogin = $('#pwdVisLogin').text();
	if (pwdtextlogin == '表示') {
			$('#loginPwd').attr('type', 'text');
			$('#pwdVisLogin').text('非表示');
			$('#pwdVisLogin').css('background-color', '#ff3b44');
			$('#pwdVisLogin').css('border', '1px solid #ff3b44');
			$('#pwdVisLogin').css('color', 'white');

	} else {
			$('#loginPwd').attr('type', 'password');
			$('#pwdVisLogin').text('表示');
			$('#pwdVisLogin').css('background-color', 'white');
			$('#pwdVisLogin').css('border', '1px solid #ff3b44');
			$('#pwdVisLogin').css('color', '#ff3b44');
	}
}