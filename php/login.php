<?php
if (isset($_POST['uid'])) {
    session_start();
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    echo "in";

    //
    if($uid=="ted" && $pwd=="123"){
        $_SESSION['user'] = 'admin';
    }
} else {
    die("<p>你在幹嘛</p>");
}

?>