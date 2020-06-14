<?php

class StaffGroup
{

    //al
    private $_db;

    private function __construct(){
        $this->_db = DB::singleton();
    }

    private static $_instance = null;
}