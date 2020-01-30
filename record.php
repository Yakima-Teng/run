<?php
require_once 'php/core/init.php';
?>

<!DOCTYPE html>
<html> 
    <head>
        <title>路跑手動登錄系統</title>
        <meta name="viewport" content="width=device-width, height=device-height initial-scale=1"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="css/record.css" />
    </head>

    <?php
    if (Session::get('user') == 'recorder' || Session::get('user') == 'admin') {
        require_once('php/seperate/record.php');
    } else {
        header("Location: login.php");
    }
    ?>



</html>