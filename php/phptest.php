<?php
require_once 'core/init.php';

// //新增跑者
// $r = new Runner();
// $r->add($_POST);

// //更改跑者資料
// $r->alter($number = '1234', array('alter'=>0, 'run_type'=>1, 'name'=>"改過的名字"));

//顯示下一筆跑者資料
// $rt1 = new RunType();  //樂活組

// $rt = new RunType(1);
// $rt->reset();

// DB::singleton()->delete('runner', ['number','=','3333']);

// echo(password_hash('123', PASSWORD_DEFAULT));

$u = new Staff('admin');
if($u->exist()){
    if(    $u->login('admin')    ){

        echo "logged in";
    }
}


if (Input::exist()) {
    $v = new Validate();
    $v->check($_POST, array(
        'number' => array(
            Validate::REQUIRED => true,
            Validate::UNIQUE => "runner/number",
            Validate::MAX => 4,
            Validate::TYPE=>Validate::NUMBER
        ),
        'name' => array(
            Validate::REQUIRED => true,
            Validate::MAX => 20,
            Validate::MIN => 2


        ),
        'run_group' => array(
            Validate::MAX => 10,
        ),
        'run_type'  => array(
            Validate::EXIST=>"run_type/name"
        )
    ));

    if (count($v->getError()) == 0) {
        Runner::singleton()->add($_POST);
        $_POST = [];

    }else{
        print_r ($v->getError());
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>測試用</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="" method="POST" id="t">
        <p>背號</p>
        <input type="text" name="number" value=<?php echo Input::get('number') ?>>
        <p>姓名</p>
        <input type="text" name="name" value=<?php echo Input::get('name') ?>>
        <p>跑團</p>
        <input type="text" name="run_group" value=<?php echo Input::get('run_group') ?>>
        <p>組別</p>
        <select name="run_type">
            <option value="挑戰組">挑戰組</option>
            <option value="樂活組">樂活組</option>
        </select>
        <br>      <br>
        <input type="submit" value="增加">
    </form>

    
</body>
</html>

