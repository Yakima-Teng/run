<?php
require_once("../core/init.php");

if(Input::exist()){
    $staff_type = [];
    $staff_group= [];

    //get type
    $type_org = StaffGroup::singleton()->getTypes();
    foreach($type_org as $value){
        $staff_type[$value->id] = $value->name;
    }

    //get group
    $group_org = StaffGroup::singleton()->getGroups();
    foreach($group_org as $value){
        $staff_group[$value->id] = [$value->name, $value->staff_type];
    }

    echo json_encode(array($staff_type, $staff_group), JSON_UNESCAPED_UNICODE)
}