<?php
require_once("../core/init.php");

//check session
if(Session::get('user')=='admin'){
    //check use post
    if(Input::exist() && Input::get('type')){
        $type = escape(Input::get('type'));
        $rt = new RunType($type);
        //check whether already started
        if($rt->isStart()){
            echo "404_STARTED";
        }else{
            $rt->start();
            echo "SUCCESS";
        }
    }
}

?>