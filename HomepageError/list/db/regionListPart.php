<?php
$regionSep = $_POST['regionSep'];

$sql = "select * from regionInfo where regionSep = '$regionSep'";

$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($result)) {
    $regionSep = $row['regionSep'];
    $regionName = $row['regionName'];
    echo "<option value=" . $regionName . " class=" . $regionSep . ">";
    echo $regionName . "</option>";
}
?>