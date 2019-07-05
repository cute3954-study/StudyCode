<?php
session_start();
if ($_SESSION['userId'] != null) {
    session_destroy();
}
echo "<script>location.href=' ../index.php';</script>";
?>