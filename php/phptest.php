<?php
require_once 'core/init.php';

print_r(DB::singleton()->selectSeveral('runner',4,3)->getResults());
// DB::singleton()->update('runner',['altered'=>0], $condition = ['run_group','=',46]);


if (Input::exist()) {
    echo "yee";
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
            Validate::TYPE=>Validate::NUMBER

        )
    ));

    if (count($v->getError()) == 0) {
        DB::singleton()->insert('runner', $_POST);
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
        <input type="submit" value="增加">
    </form>

    
</body>
</html>

