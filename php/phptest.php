<?php
require_once 'core/init.php';

$db = DB::singleton();
$params = array(
    "run_group"=>"10",
);

// $db->update("runner", $condition=array("number","=","24"), $params);
// $db->insert("runner", $params);
$s = $db->getSeveral("runner");
// $s = $db->get("runner", array("id","=",1))->firstResult();
print_r($s);