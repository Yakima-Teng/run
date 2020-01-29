<html>
<head>
    <title>登入</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/login.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("form").submit(function (event) {
                event.preventDefault();
                // console.log($(this).serialize());
                $("input").removeClass('error');
                $.post("php/login.php", $(this).serialize(), function (result) {
                    console.log(result);
                    if(result == "SUCCESS"){
                        window.location.href = "panel.php";
                    }else if(result == "WRONG_PWD"){
                        $("#pwd").addClass("error");
                        alert("密碼錯誤")
                    }else if(result == "NOT_ADMIN"){
                        $("#uid").addClass("error");
                        alert("非管理員")
                    }else if(result == "NO_USER"){
                        $("#uid").addClass("error");
                        alert("無此帳號，請洽主辦單位")
                    }
                    $("#pwd").val("");
                });
            });
        });
    </script>
</head>
<body>
    <header>
        <img class="nav-logo" src="logo.png">
        <span>路跑後台系統</span>
    </header>
    <div class="center-item login">
        <div class="mid">
            <img src="logo.png" class="logo">
            <h2>管理員登入</h2>
        </div>

        <form action="" method="post">
            <div class="inputBox">
                <label>帳戶</label>
                <input id="uid" type="text" name="uid">
            </div>
            <div class="inputBox">
                <label>密碼</label>
                <input id="pwd" type="password" name="pwd">
            </div>
            <input type="submit" name="submit" value="登入">
        </form>   

    </div>
</body>
</html>
