<?php
$userId = $_POST['userId'];

$sql = mq("select * from userInfo where userId='" . $userId . "'");

$member = $sql->fetch_array();
if ($member == 0) {
    echo $userId.'は使用できます。';
?>
	<script>
	$('#idCheckMsg').css('color', '#df42ec');
	removeDisabled();
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
