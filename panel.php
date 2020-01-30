<?php 
require_once 'php/core/init.php';
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>主控台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/panel.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/sidebar.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/tab.js"></script>
    <script src="js/timer.js"></script>


</head>


<body>
<?php if (isset($_SESSION['user']) && $_SESSION['user'] == 'admin') { ?>
    <div class="sidebar">
        <img src="logo.png" id="sidebar-logo">
        <span>路跑管理系統</span>
        <ul>
            <li class id="li_overall"><a href="#">總覽</a></li>
            <li class id="li_personnel"><a href="#">工人</a></li>
            <li class id="li_runner"><a href="#">跑者</a></li>
            <li class id="li_contact"><a href="#">通訊錄</a></li>
            <li class id="li_logout"><a href="php/logout.php">登出</a></li>

        </ul>
    </div>
    <div class="main">
        <div id="overall">
        <!-- 挑戰組vs樂活組主控區 -->
            <div id="run_panel">
                <div id="long_run">
                    <h1>挑戰組</h1>
                    <div>
                        <p>開始時間</p>
                        <h2 id="1_start_time"></h2>
                        <p>經過時間</p>
                        <h2 id="1_passed_time"></h2>
                        <button id = "1_start_btn" class="start_button">開始</button>
                    </div>
                </div>
                <div id="short_run">
                    <h1>樂活組</h1>
                    <div>
                        <p>開始時間</p>
                        <h2 id="2_start_time"></h2>
                        <p>經過時間</p>
                        <h2 id="2_passed_time"></h2>     
                        <button id = "2_start_btn" class="start_button">開始</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="personnel">
            <h1>2</h1>
            <p>這邊管理工作人員權限</p>
            <h1>2</h1>
            <p>這邊管理工作人員權限</p>
            <h1>2</h1>
            <p>這邊管理工作人員權限</p>
            <h1>2</h1>
            <p>這邊管理工作人員權限</p>
            <h1>2</h1>
            <p>這邊管理工作人員權限</p>
            <h1>2</h1>
            <p>這邊管理工作人員權限</p>
            <h1>2</h1>
            <p>這邊管理工作人員權限</p>
            <h1>2</h1>
            <p>這邊管理工作人員權限</p>
            <h1>2</h1>
            <p>這邊管理工作人員權限</p>

        </div>
        <div id="runner">
            <h1>3</h1>
            <p>這邊更新跑者資訊/上傳跑者資料</p>
            <h1>3</h1>
            <p>這邊更新跑者資訊/上傳跑者資料</p>
            <h1>3</h1>
            <p>這邊更新跑者資訊/上傳跑者資料</p>
            <h1>3</h1>
            <p>這邊更新跑者資訊/上傳跑者資料</p>
            <h1>3</h1>
            <p>這邊更新跑者資訊/上傳跑者資料</p>
            <h1>3</h1>
            <p>這邊更新跑者資訊/上傳跑者資料</p>
            <h1>3</h1>
            <p>這邊更新跑者資訊/上傳跑者資料</p>
            <h1>3</h1>
            <p>這邊更新跑者資訊/上傳跑者資料</p>
        </div>
        <div id="contact">
            <h1>4</h1>
            <p>這邊放緊急聯絡資訊</p>
            <h1>4</h1>
            <p>這邊放緊急聯絡資訊</p>
            <h1>4</h1>
            <p>這邊放緊急聯絡資訊</p>
            <h1>4</h1>
            <p>這邊放緊急聯絡資訊</p>
            <h1>4</h1>
            <p>這邊放緊急聯絡資訊</p>
            <h1>4</h1>
            <p>這邊放緊急聯絡資訊</p>
            <h1>4</h1>
            <p>這邊放緊急聯絡資訊</p>
            <h1>4</h1>
            <p>這邊放緊急聯絡資訊</p>
                    <h1>4</h1>
            <p>這邊放緊急聯絡資訊</p>
            
        </div>

    </div>



<?php 
} else {
    header("Location: login.php");
}
?>
    
</body>
</html>