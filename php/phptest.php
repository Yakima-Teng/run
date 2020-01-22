<?php
require_once 'core/init.php';

// $db = DB::singleton();
// $params = array(
//     "run_group"=>"10",
// );

// $db->update("runner", $condition=array("number","=","24"), $params);
// $db->insert("runner", $params);
// $s = $db->selectSeveral("runner")->getResults();
// print_r($s);
// $s = $db->select("runner", array("id","=",1))->firstResult();

// $v = array(Validate::REQUIRED=>true, Validate::MATCH=>'password');

$source = array(
    'number'=>'204',
    'B'=>'12345',
    'C'=>'8個字元的啦',
    'D'=>'204'
);

$validation = new Validate();

$validation->check($source, array(
    'number'=>array(
        Validate::REQUIRED => true,
        Validate::UNIQUE =>"runner/number"
    ),
    'B'=>array(
        Validate::REQUIRED => true,
        Validate::MIN=> 4,
        
    ),
    'C'=>array(
        Validate::REQUIRED => true,
        Validate::MAX=> 8,
        Validate::MIN=> 4,
    ),
    'D'=>array(
        Validate::REQUIRED => true,
        Validate::MATCH=>'number'
    )
));

$result = $validation->getError();
print_r($result);

