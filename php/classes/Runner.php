<?php
class Runner{
    /**
     * Runner Class
     * 顯示跑者資訊
     * 新增跑者資料
     * 更新跑者內容（改號碼、完賽）
     * 
     * 
     */

    private $_db,
            $_table,
            $loaded;     //目前顯示到底幾個 

    private $runnerInformation;
    
    public function __construct()
    {
        $_db = DB::singleton();
        $_table = Config::get("tables/runner");
        $_loaded
    }

    public static function next(){

    }

}