<?php
include '../../db/db.php';
$regionSep = $_GET['regionSep'];

$sql = "select * from regionInfo where regionSep = '$regionSep'";

$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($result)) {
    $regionSeq = $row['regionSeq'];
    $regionSep = $row['regionSep'];
    $regionName = $row['regionName'];
    echo "<option value=" . $regionSeq . " class=" . $regionSep . ">";
    echo $regionName . "</option>";
}
?>