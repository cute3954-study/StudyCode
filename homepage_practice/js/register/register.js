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
			url : '/homepage_practice/register/db/registerIDcheck.php',
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
			}
		}
	}
}

function pwdVisible1() {
	var pwdtext1 = $('#pwdVis1').text();
	if (pwdtext1 == '表示') {
		$('#userPwd1').attr('type', 'text');
		$('#pwdVis1').text('非表示');
		$('#pwdVis1').css('background-color', '#ff3b44');
		$('#pwdVis1').css('border', '1px solid #ff3b44');
		$('#pwdVis1').css('color', 'white');
	} else {
		$('#userPwd1').attr('type', 'password');
		$('#pwdVis1').text('表示');
		$('#pwdVis1').css('background-color', 'white');
		$('#pwdVis1').css('border', '1px solid #ff3b44');
		$('#pwdVis1').css('color', '#ff3b44');
	}
}
function pwdVisible2() {
	var pwdtext2 = $('#pwdVis2').text();
	if (pwdtext2 == '表示') {
		$('#userPwd2').attr('type', 'text');
		$('#pwdVis2').text('非表示');
		$('#pwdVis2').css('background-color', '#ff3b44');
		$('#pwdVis2').css('border', '1px solid #ff3b44');
		$('#pwdVis2').css('color', 'white');
	} else {
		$('#userPwd2').attr('type', 'password');
		$('#pwdVis2').text('表示');
		$('#pwdVis2').css('background-color', 'white');
		$('#pwdVis2').css('border', '1px solid #ff3b44');
		$('#pwdVis2').css('color', '#ff3b44');
	}
}

function nameCheck() {
	var userName = $('#userName').val();
	if (userName == null || userName == "") {
		$('#nameCheckMsg').html("お名前を入力してください。");
		$('#nameCheckMsg').css('color', '#ff3c41');
		attrDisabled();
	} else {
		$('#nameCheckMsg').html("");
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
	} else {
		$('#birthCheckMsg').html("生年月日を指定してください。");
		attrDisabled();
	}
}

$("#userEmail")
		.on(
				"change paste keyup",
				function() {
					var userEmail = $('#userEmail').val();
					var emailExp = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
					if (userEmail == null || userEmail == "") {
						$('#emailCheckMsg').html("メールアドレスを入力してください。");
						$('#mailCheckBtn').attr('disabled', 'disabled');
						attrDisabled();
					} else if (!emailExp.test(userEmail)) {
						$('#emailCheckMsg').html("正しいメールアドレスを入力してください。");
						$('#mailCheckBtn').attr('disabled', 'disabled');
						attrDisabled();
					} else {
						$('#emailCheckMsg').html("");
						$('#mailCheckBtn').removeAttr('disabled');
					}
				});

function mailCheck() {
	location.href = '/homepage_practice/register/sendMail.php';

}

function mailNumberCheck() {

}

$('#userPost').on("change paste keyup", function() {
	var zipExp = /^[0-9]/gi;
	var userZip = $('#userPost').val();
	if (!zipExp.test(userZip)) {
		$('#postCheckMsg').html("郵便番号が数字だけで入力してください。");
		$('#zipcodeCheckBtn').attr('disabled', 'disabled');
	} else {
		$('#postCheckMsg').html("");
		$('#zipcodeCheckBtn').removeAttr('disabled');
	}
});

function setAddress() {
	var userPost = {
		zipcode : $('#userPost').val()
	};
	$.ajax({
		type : 'get',
		cache : false,
		url : 'http://zipcloud.ibsnet.co.jp/api/search',
		dataType : 'jsonp',
		data : userPost,
		success : function(res) {
			if (res.status == 200) {
				var add1='';
				var add2='';
				var add3='';
				for (var i = 0; i < res.results.length; i++) {
					var result = res.results[i];
					console.log(res.results);
					add1 += result.address1;
					add2 += result.address2;
					add3 += result.address3;
				}
				$('#userAdd1').html(add1);
				$('#userAdd2').html(add2);
				$('#userAdd3').html(add3);
			}
		}
	})
}