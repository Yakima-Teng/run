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
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/sidebar.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/tab.js"></script>
    <script src="js/timer.js"></script>
    <script src="js/runner.js"></script>



</head>


<body>
<?php if(Session::exist('user')&& Session::get('user')=='admin') { ?>
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
                        <button id="1_reset_btn">重製</button>
  
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
                        <button id="2_reset_btn">重製</button>
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
        <div id="runner" class="grid">
            <div class="data">
                <h1>跑者搜尋</h1>
                <input type="text" id="runner_searchbox">
                <table id="runner_table">
                    <thead>
                        <tr>
                            <th field="number">背號</th>
                            <th field="run_type">組別</th>
                            <th field="name">姓名</th>
                            <th field="run_group">跑團</th>
                            <th field="tel">手機</th>
                            <th field="gender">性別</th>
                            <th field="end_time">成績</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>    
            </div>
            <div class="form">
                <input id="r_insert" type="button" value="新增">
                <form id="runner_form">
                    <fieldset>
                        <legend style="margin:10px">跑者資訊</legend>
                        <input type="hidden" name="action" value="">
                        <input type="hidden" id="r_id" name="id" value="">
                        <div>
                            <label for="number">背號</label>
                            <input type="text" name="number" id="r_number">
                        </div>
                        <div>
                            <label for="run_type">組別</label>
                            <input type="text" name="run_type" id="r_run_type">
                        </div>
                        <div>
                            <label for="name">姓名</label>
                            <input type="text" name="name" id="r_name">
                        </div>
                        <div>
                            <label for="run_group">跑團</label>
                            <input type="text" name="run_group" id="r_run_group">
                        </div>
                        <div>
                            <label for="tel">手機</label>
                            <input type="tel" name="tel" id="r_tel">
                        </div>
                        <div>
                            <label for="gender">姓別</label>
                            <select name="gender" id="r_gender">
                                <option value="1">男</option>
                                <option value="0">女</option>
                            </select>
                        </div>
                        <div>
                            <input id="r_submit" type="submit" value="yee">
                        </div>
                        

                        
                        
                        
                        
                    </fieldset>
                </form>
            </div>


            

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