function attrDisabled() {
	$('#registerbtn').attr('disabled', 'disabled');
}

function removeDisabled() {
	$('#registerbtn').removeAttr('disabled');
}

function idCheck() {
	var userId = $('#userId').val();
	var idExp = /^[A-za-z0-9]{5,15}$/g;
	if (userId == null || userId == "") {
		$('#idCheckMsg').html("IDを入力してください。");
		$('#idCheckMsg').css('color', '#ff3c41');
		attrDisabled();
	} else if (!idExp.test(userId)) {
		$('#idCheckMsg').html("IDは5~15文字の半角英数字で入力してください。");
		$('#idCheckMsg').css('color', '#ff3c41');
		attrDisabled();
	} else {
		$.ajax({
			url : 'register/db/registerIDcheck.php',
			type : 'POST',
			data : {
				'userId' : userId
			},
			success : function(data) {
				$('#idCheckMsg').html(data);
			}
		});
	}
}
function passwordCheck() {
	var userId = $('#userId').val();
	var userPwd1 = $('#userPwd1').val();
	var userPwd2 = $('#userPwd2').val();
	var pwdExp = /^[A-za-z0-9]{5,15}$/g;
	if (userPwd1 == null || userPwd1 == "") {
		$('#pwdCheckMsg').html("パスワードを入力してください。");
		attrDisabled();
	} else if (!pwdExp.test(userPwd1)) {
		$('#pwdCheckMsg').html("パスワードは5~15文字の半角英数字で入力してください。");
		attrDisabled();
	} else {
		if (userId == userPwd1) {
			$('#pwdCheckMsg').html("IDと同じパスワードは使用できません。");
			attrDisabled();
		} else {
			if (userPwd1 != userPwd2) {
				$('#pwdCheckMsg').html("パスワードが一致されていません。");
				attrDisabled();
			} else {
				$('#pwdCheckMsg').html("");
				removeDisabled();
			}
		}
	}
}

function pwdVisible1() {
	var pwdtext1 = $('#pwdVis1').text();
	if (pwdtext1 == '表示') {
		$('#pwdVis1').click(function() {
			$('#userPwd1').attr('type', 'text');
			$('#pwdVis1').text('非表示');
			$('#pwdVis1').css('background-color', '#ff3b44');
			$('#pwdVis1').css('border', '1px solid #ff3b44');
			$('#pwdVis1').css('color', 'white');
		})
	} else {
		$('#pwdVis1').click(function() {
			$('#userPwd1').attr('type', 'password');
			$('#pwdVis1').text('表示');
			$('#pwdVis1').css('background-color', 'white');
			$('#pwdVis1').css('border', '1px solid #ff3b44');
			$('#pwdVis1').css('color', '#ff3b44');
		})
	}
}
function pwdVisible2() {
	var pwdtext2 = $('#pwdVis2').text();
	if (pwdtext2 == '表示') {
		$('#pwdVis2').click(function() {
			$('#userPwd2').attr('type', 'text');
			$('#pwdVis2').text('非表示');
			$('#pwdVis2').css('background-color', '#ff3b44');
			$('#pwdVis2').css('border', '1px solid #ff3b44');
			$('#pwdVis2').css('color', 'white');
		})
	} else {
		$('#pwdVis2').click(function() {
			$('#userPwd2').attr('type', 'password');
			$('#pwdVis2').text('表示');
			$('#pwdVis2').css('background-color', 'white');
			$('#pwdVis2').css('border', '1px solid #ff3b44');
			$('#pwdVis2').css('color', '#ff3b44');
		})
	}
}

$(document).ready(function() {
	var time = new Date();
	var year = time.getFullYear();
	for (var i = year; i >= 1900; i--) {
		$('#userYear').append('<option value="' + i + '">' + i + '</option>');
	}
	for (var i = 1; i <= 12; i++) {
		$('#userMonth').append('<option value="' + i + '">' + i + '</option>');
	}
	for (var i = 1; i <= 31; i++) {
		$('#userDay').append('<option value="' + i + '">' + i + '</option>');
	}

});

function birthCheck() {
	userYear = $('#userYear option:selected').val();
	userMonth = $('#userMonth option:selected').val();
	userDay = $('#userDay option:selected').val();
	if (userYear != '0' && userMonth != '0' && userDay != '0') {
		$('#birthCheckMsg').html("");
		removeDisabled();
	} else {
		$('#birthCheckMsg').html("生年月日を指定してください。");
		attrDisabled();
	}
}

function mailCheck() {
	var userEmail = $('#userEmail').val();
	var emailExp = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
	if (userEmail == null || userEmail == "") {
		$('#emailCheckMsg').html("メールアドレスを入力してください。");
		attrDisabled();
	} else if (!emailExp.test(userEmail)) {
		$('#emailCheckMsg').html("正しいメールアドレスを入力してください。");
		attrDisabled();
	} else {
		$('#emailCheckMsg').html("");
		var width = 350;
		var height = 150;
		var winL = (screen.width - width) / 2;
		var winT = (screen.height - height) / 2;
		var property = "width=" + width + ",height=" + height + ",left=" + winL
				+ ",top" + winT + "menubar = no";
		window.open("register/authMail.php?to=" + $('#userEmail').val(), "認証",
				property);
	}
}

function mailNumberCheck() {

}

function setAddress() {
	var userPost = $('#userPost').val();
	$.ajax({
		type : 'get',
		url : 'https://maps.googleapis.com/maps/api/geocode/json',
		crossDomain : true,
		dataType : 'json',
		data : {
			address : userPost,
			language : 'ja',
			sensor : false
		},
		success : function(data) {
			if (data.status == "OK") {
				var obj = data.results[0].address_components;
				if (obj.length < 5) {
					$('#postCheckMsg').html("正しい郵便番号を入力してください。");
					attrDisabled();
				} else {
					$('#postCheckMsg').html("");
					$('#userAdd1').val(obj[3]['long_name']);
					$('#userAdd2').val(obj[2]['long_name']);
					$('#userAdd3').val(obj[1]['long_name']);
				}
			}
		}
	})
}