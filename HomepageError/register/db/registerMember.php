<?php
include $_SERVER['DOCUMENT_ROOT'] . '/HomepageError/db/db.php';
$userId = $_POST['userid'];
$userPwd = $_POST['userPwd1'];
$userName = $_POST['userName'];
$userYear = $_POST['userYear'];
$userMonth = $_POST['userMonth'];
$userDay = $_POST['userDay'];
$userEmail = $_POST['userEmail'];
$userPost = $_POST['userPost'];
$userAdd1 = $_POST['userAdd1'];
$userAdd2 = $_POST['userAdd2'];
$userAdd3 = $_POST['userAdd3'];
$userAdd4 = $_POST['userAdd4'];

// userPwdをuserPwd1で書きそこなった。
$sql = "insert into userInfo (userId, userPwd1, userName, userYear, userMonth, userDay, userEmail, userPost, userAdd1, userAdd2, userAdd3, userAdd4) values('$userId','$userPwd','$userName','$userYear','$userMonth','$userDay','$userEmail','$userPost','$userAdd1','$userAdd2','$userAdd3','$userAdd4')";
$result = $db->query($sql);
try {
    if ($result) {
        ?>
<script>
//reason of error: 変数userIdの間違い。
/* error: Notice: Undefined index: userid in C:\Users\cute3\git\repository\HomepageError\register\db\registerMember.php on line 3 */
alert('<?php echo $userId?>さん、新規登録が完了しました！/nログインお願いします。');
// location.href='/HomepageError/index.php';
</script>
<?php
        // 値がテーブルに入らない場合、sql文を一応チェック。
        // 画面には何も表示されていない。
    } else {
        throw new Exception("新規登録が失敗しました。");
    }
} catch (Exception $e) {
    // reason of error: 括弧の中に""がなかった。
    /* error: Uncaught SyntaxError: missing ) after argument list */
    echo "<script>alert(' . $e->getMessage() . ');</script>";
}
?>