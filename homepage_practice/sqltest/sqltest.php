<?php
$mysql_hostname = 'localhost';
$mysql_username = 'root';
$mysql_password = '1234';
$mysql_database = 'homepagepra';
$mysql_port = '3306';
$mysql_charset = 'utf8';

$connect = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port);
if ($connect->connect_errno) {
    echo '[失敗]:' . $connect->connect_error . '';
} else {
    echo '[成功]';
}

if (! $connect->set_charset($mysql_charset)) {
    echo '[変更失敗]:' . $connect->connect_error;
}
$query = ' select \'complete\' as col from dual';
$result = $connect->query($query) or die($this->_connect->error);
while ($row = $result->fetch_array()) {
    echo $row['col'];
}
$connect->close();
?>