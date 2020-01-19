<?php
require_once 'core/init.php';

$db = DB::singleton();
$params = array("first"=>1, "second"=>3, "third"=>5, "forth"=>7);

$db->update("runner", $condition=array("col3","=","true"), $params);
