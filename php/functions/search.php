<?php
require_once("../core/init.php");

if(Session::exist('user') && Session::get('user')=='admin'){
    if(Input::exist()){

        $toSearch = Input::get('text');


        if($toSearch!=""){
            //搜尋跑者
            if(Input::get('action')=='runner'){
                $result = Runner::singleton()->search($toSearch)->getResults();
                echo json_encode($result, JSON_UNESCAPED_UNICODE);
    
    
            //搜尋工作人員
            }elseif(Input::get('action')=='staff'){
    
            }
        }

    }
}