<?php
include $_SERVER['DOCUMENT_ROOT'].'/homepage_practice/db/db.php';
$regionSep = $_GET['regionSep'];

$sql = "select * from regionInfo where regionSep = '$regionSep'";

$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($result)) {
    $regionSep = $row['regionSep'];
    $regionName = $row['regionName'];
    echo "<option value=" . $regionName . " class=" . $regionSep . ">";
    echo $regionName . "</option>";
}
?>