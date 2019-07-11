<?php
include $_SERVER['DOCUMENT_ROOT'].'/HomepageError/db/db.php';
$userId = $_POST['userId'];

$sql = "select * from userInfo where userId='" . $userId . "'";

$member = mysqli_query($db, $sql);
if (!$row = mysqli_fetch_array($member)) {
    echo $userId.'は使用できます。';
?>
	<script>
	$('#idCheckMsg').css('color', '#df42ec');
	</script>
<?php
} else {
    echo $userId.'は既に存在します。';
?>
	<script>
	$('#idCheckMsg').css('color', '#ff3c41');
	attrDisabled();
	</script>
<?php
}
?>
