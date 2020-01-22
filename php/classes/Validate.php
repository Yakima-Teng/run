<?php


/**
 * Class : Validate
 * 
 * 在接收到使用者輸入的資訊並傳到資料庫之前，
 * 先用一個Validate類別檢查是否符合規定，
 * 例如不含特殊字元、字數太少...
 * 
 * 這邊寫的檢查內容包含：
 * 必填： required: true/false
 * 已經存在：unique: (col_name)
 * 最長、最短：max, min: num
 * 相符：match: (filed name)
 * 
 * 用法：
 * $validate->check($_POST,
 *      array(
 *          "field"=>array(
 *                      "rule1"=>??, 
 *                      "rule2"=>??
 *                  )
 *      )
 * )
 */

class Validate{

    private $_errorMsg="", 
            $_errors=array(),
            $db;


    public function __construct()
    {
        $this->_toCheck = $s;
        $this->db = DB::singleton();    //refer to database to check uniqueness
    }

    public function check($source, $fields=array()){
        foreach($fields as $field=> $rules){
            foreach($rules as $rule){
                $source[$field];
            }
        }

    }
}