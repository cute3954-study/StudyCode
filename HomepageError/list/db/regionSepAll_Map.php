<?php
include $_SERVER['DOCUMENT_ROOT'].'/HomepageError/db/db.php';

$sql = "select DISTINCT regionSep from regionInfo";

$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($result)) {
    $regionSep = $row['regionSep'];
    echo "<button class='btn btn-primary mapbtn submit' id='" . $regionSep . "_mapbtn'>" . $regionSep . "</button>";
}
?>