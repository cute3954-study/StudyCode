<?php
$mysql_hostname = 'localhost';
$mysql_username = 'root';
$mysql_password = '123456';
$mysql_database = 'homepagepra';
$mysql_port = '3306';

$mysqli = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port);

$userId = $_POST['userId'];
$userPwd = md5($_POST['userPwd']);
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
$userBS = $_POST['userBS'];

$sql = "insert into userInfo (userId, userPwd, userName, userYear, userMonth, userDay, userEmail, userPost, userAdd1, userAdd2, userAdd3, userAdd4, userBS)";
$sql = $sql . " value('$userId', '$userPwd', '$userName', '$userYear', '$userMonth', '$userDay', '$userEmail', '$userPost', '$userAdd1', '$userAdd2', '$userAdd3', '$userAdd4', '$userBS')";

if ($mysqli->query($sql)) {
    echo 'success inserting';
}else{
    echo 'fail to insert sql';
}
?>