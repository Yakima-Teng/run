<?php
require_once 'php/core/init.php';
?>

<!DOCTYPE html>
<html> 
    <head>
        <title>路跑手動登錄系統</title>
        <meta name="viewport" content="width=device-width, height=device-height initial-scale=1"/>
        <link rel="stylesheet" type="text/css" media="screen" href="css/record.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#but").click(function(){
                    let number = $("#num").val();

                    $.post("php/functions/record.php", {
                        'action':'record',
                        'number': number
                    }, function(result){
                        console.log(result);
                        result = JSON.parse(result);

                        let msg = result['msg'];
                        if(msg === "NO_USER"){
                            alert("無此跑者！");
                        }
                        else if(msg==="NOT_START")
                        {
                            alert(`${result['type']}尚未開始登記！`);
                        }
                        else if(msg==="SUCCESS"){
                            alert(`恭喜${result['name']}以${result['run_time']}完成${result['run_type']}比賽！`);
                        }
                        else if(msg==="REPEAT"){
                            alert(`${result['name']}已登記！以${result['run_time']}完成${result['run_type']}比賽！`);

                        }
                    });

                });

                $('#num').keypress(function (e) {
                    var key = e.which;
                    if (key == 13)  // the enter key code
                    {
                        $("#but").trigger("click");
                    }
                });

            });
        </script>
    </head>

    <?php
    if (Session::get('user') == 'recorder' || Session::get('user') == 'admin') { ?>
    <body>
        <div class="center">
            <img class="logo" src="logo.png">
            <span class="finish-h">完賽記錄</span>
            <input id="num" type="number" placeholder="請輸入跑者ID">
            <button id="but">登錄</button>
            <span>製作 陳家威</span>
        </div>

    </body>
    <?php 
    }else{
        header("Location: login.php");
    }?>



</html>