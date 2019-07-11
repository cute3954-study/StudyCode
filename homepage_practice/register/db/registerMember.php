<?php
include $_SERVER['DOCUMENT_ROOT'] . '/homepage_practice/db/db.php';
$userId = $_POST['userId'];
$userPwd = $_POST['userPwd1'];
$userName = $_POST['userName'];
$userYear = $_POST['userYear'];
$userMonth = $_POST['userMonth'];
$userDay = $_POST['userDay'];
$userEmail = $_POST['userEmail'];
$userPost = $_POST['userPost'];
$userAdd1 = $_POST['userAdd1'];
$userAdd2 = $_POST['userAdd2'];
$userAdd3 = $_POST['userAdd3'];
$userAdd4 = $_POST['userAdd4'];

$sql = "insert into userInfo (userId, userPwd, userName, userYear, userMonth, userDay, userEmail, userPost, userAdd1, userAdd2, userAdd3, userAdd4) values('$userId','$userPwd','$userName','$userYear','$userMonth','$userDay','$userEmail','$userPost','$userAdd1','$userAdd2','$userAdd3','$userAdd4')";
$result = $db->query($sql);
try {
    if ($result) {
        ?>
<script>
alert('<?php echo $userId?>さん、新規登録が完了しました！<br/>ログインお願いします。');
location.href='/homepage_practice/index.php';
</script>
<?php
    } else {
        throw new Exception("新規登録が失敗しました。");
    }
} catch (Exception $e) {
    $msg = $e->getMessage();
?>
	<script>
		alert(<?php echo $msg?>);
		history.back();
	</script>
<?php
}
?>