 <?php
$mysql_hostname = 'localhost';
$mysql_username = 'root';
$mysql_password = '123456';
$mysql_database = 'homepagepra';
$mysql_port = '3306';

$db = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port);
$db->set_charset("utf8");
?>