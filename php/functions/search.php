<?php
require_once("../core/init.php");

if(Session::exist('user') && Session::get('user')=='admin'){
    if(Input::exist()){

        $toSearch = Input::get('text');

        $searchType;
        if($toSearch!=""){
            //搜尋跑者
            if(Input::get('action')=='runner'){
                $searchType = Runner::singleton();

    
    
            //搜尋工作人員
            }elseif(Input::get('action')=='run_group'){
                $searchType = RunGroup::singleton();
            }
            elseif(Input::get('action')=='staff'){
                $searchType = new Staff();   //staff is not singleton, bad design QQ
            }

            $result = $searchType->search($toSearch)->getResults();
            echo json_encode($result, JSON_UNESCAPED_UNICODE);
        }

    }
}