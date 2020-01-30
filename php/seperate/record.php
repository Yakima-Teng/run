<body>
    <center style="margin-top: 5vh">
        <div>
            <img class="logo" src="logo.png">
            <br>
            <span class="finish-h">完賽記錄</span>
            <br>
            <br>
            <br>
            <input id="num" type="number" placeholder="請輸入跑者ID">
            <br>
            <br>
            <br>
            <button id="but">登錄</button>
            <br>
            <br>
            <br>
            <span>製作 陳家威</span>
        </div>
    </center>

</body>

<script>
    $("#but").click(function () {
        var id = $("#num").val();
        // alert(id);
        $.get("finish.php?id=" + id, function (data, status) {
            alert(data);
        }
        )
    })

    $('#num').keypress(function (e) {
        var key = e.which;
        if (key == 13)  // the enter key code
        {
            $("#but").trigger("click");
        }
    });
</script>