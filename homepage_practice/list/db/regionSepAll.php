<?php
include 'db/db.php';

$sql = "select DISTINCT regionSep from regionInfo";

$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($result)) {
    $regionSep = $row['regionSep'];
    echo "|&nbsp;<span><a href='#' class='" . $regionSep . "' onclick='regionPart();'>" . $regionSep . "&nbsp;</a></span>";
}
?>