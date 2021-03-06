<?php

class Staff{
    private $_db;
    private $_uid;
    private $_staffData;

    const ADMIN     = 1;    //可操控主控台
    const RECORDER  = 2;    //可登記完賽
    const NORMAL    = 3;    //補給站、繞行etc

    public function __construct($uid=null)
    {
        $this->_db = DB::singleton();
        $this->_uid = $uid;
    }

    public function exist(){
            //uid存在
        if($this->_db->select('staff', ['uid','=',$this->_uid])->count()){
            $this->_staffData = $this->_db->firstResult();
            return true;
            
            //電話存在
        }else if($this->_db->select('staff', ['tel','=',$this->_uid])->count()){
            $this->_staffData = $this->_db->firstResult();
            $this->_uid = $this->_staffData->uid;   //替換傳入的電話為uid
            return true;
        }else{
            return false;
        }
    }

    public function auth($authType){
        if($this->_staffData->staff_type == $authType){
            return true;
        }else{
            return false;
        }
    }

    public function login($password){

        // echo($this->_staffData->password);
        if(password_verify($password, $this->_staffData->password)){
            return true;
        }else{
            return false;
        }
    }

    public function search($keyword){
        $sql = " SELECT * FROM `staff` 
        WHERE 
        `name`LIKE ? 
        or
        `tel` LIKE ?
        or 
        `uid` LIKE ?
        ORDER BY `name` ASC";
 
        return $this->_db->query($sql, ['%'. $keyword.'%' ,'%'. $keyword.'%' ,'%'. $keyword.'%']);
     }

}