<?php
// header("Location: ../logo.png");
if (isset($_POST['uid'])) {
    session_start();
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    if($uid=="ted" && $pwd=="123"){
        $_SESSION['user'] = 'admin';
        echo "LOGGED";
    }
} elseif(){ //no user
    echo "NO_USER";
}elseif(){  //wrong password
    echo "WRONG_PASSWORD";
}else{
    echo "ERROR"
}


?>