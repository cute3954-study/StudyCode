<?php
session_start();
include '../../db/db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginId = $_POST['loginId'];
    $loginPwd = $_POST['loginPwd'];
}

$sql = "select * from userInfo where userId='$loginId'";

$result = $db->query($sql);
if ($result->num_rows == 1) {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if ($row['userPwd'] == $loginPwd) {
        $_SESSION['userId'] = $row['userId'];
        $_SESSION['userName'] = $row['userName'];
        ;
        if (isset($_SESSION['userId'])) {
            echo "<script>location.href=' ../../index.php';</script>";
        } else {
            echo "세션 저장 실패";
        }
    } else {
        echo "<script>alert('IDもしくはパスワードが一致しません。');history.back();</script>";
    }
} else {
    echo "<script>alert('IDもしくはパスワードが一致しません。');history.back();</script>";
}
?>