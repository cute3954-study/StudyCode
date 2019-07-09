<?php
session_start();
if ($_SESSION['userId'] != null) {
    session_destroy();
}
echo "<script>location.href='/homepage_practice/index.php';</script>";
?>