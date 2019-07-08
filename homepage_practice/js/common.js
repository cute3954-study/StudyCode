var inputText = $('input[type=text]');
var inputPwd = $('input[type=password]');
$('.closeBtn').click(
		function() {
			inputText.val('');
			inputPwd.val('');
			$('.msg').html("");
		}
);
