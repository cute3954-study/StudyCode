<?php
include $_SERVER['DOCUMENT_ROOT'].'/HomepageError/db/db.php';
$sql = "select * from regionInfo";

$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($result)) {
    $regionSep = $row['regionSep'];
    $regionName = $row['regionName'];
    echo "<option value=" . $regionName . " class=" . $regionSep . ">";
    echo $regionName . "</option>";
}
?>