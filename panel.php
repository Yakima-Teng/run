<?php 
session_start();
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>主控台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/panel.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>


<body>
    <?php 
    if (isset($_SESSION['user']) && $_SESSION['user']=='admin'){
        require "php/seperate/load_main.php" ;
    }else{
        header("Location: login.html");
    }
    ?>
    
</body>
</html>