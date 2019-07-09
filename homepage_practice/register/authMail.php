<?php
include 'sendMail.php';

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<?php
include $_SERVER['DOCUMENT_ROOT'].'/homepage_practice/inc/linkCSS.php';
?>
</head>
<body>
	<div align="center">
		<label>認証番号を入力してください。</label>
		<div>
			<input type="text" id="mailCode" name="mailCode"
				class="form-control inputWidth" placeholder="認証番号6文字">
			<button class="btn btn-primary submit" onclick="mailNumberCheck();">確認</button>
		</div>
	</div>
</body>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/homepage_practice/inc/linkJS.php';
?>
</html>

