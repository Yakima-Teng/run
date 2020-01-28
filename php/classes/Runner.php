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

    private $_db;

    private $runnerInformation;
    
    public function __construct()
    {
        $this->_db = DB::singleton();

    }

    public function add($info){
        $newInfo = $this->setInfo($info);   //changes info to database friendly format
        $this->_db->insert('runner',$newInfo);
 
    }

    public function update($number, $info){
        $newInfo = $this->setInfo($info);
        $this->_db->update('runner',$newInfo, $condition = ['number','=',$number]);

    }

    public function remove(){}



    public function setInfo($info){
        /**
         * Data to send to database
         *              original    ensure
         * run_group    string      id
         * run_type     string      id
         * 
         */
        $toReturn=array();

        if(array_key_exists('name', $info)){
            $toReturn['name']=$info['name'];
        }

        if(array_key_exists('number', $info)){
            //uniqueness should be validated in the input level
            $toReturn['number']=$info['number'];
        }

        if(array_key_exists('run_group', $info)){

            //如果沒有填寫跑團，跳過
            if(empty($info['run_group'])){
                //empty means  'run_group'=>""
                $$toReturn['run_group'] = "null";   //should be string since will be passed to sql string
            }else{
                //如果跑團存在，找到他的number並指定
                $rgName = $info['run_group'];
                $rg = new RunGroup();
                $rgNum;  //run group id
                if($rg->exist($rgName)){
                    $rgNum = $rg->getNum($rgName);
                }else{
                    //跑團不存在，則建立一個
                    $rgNum = $rg->add($rgName);
                }
                $toReturn['run_group'] = $rgNum;
            }
        }

        if(array_key_exists('run_type', $info)){
            $rt = new RunType();
            $toReturn['run_type']  =  $rt->setID($info['run_type']);
        }

        if(array_key_exists('altered', $info)){
            if($info['altered']==true || $info['altered']=='1'){
                $toReturn['altered']  = 1;
            }else{
                $toReturn['altered'] = 0;
            }
        }

        return $toReturn;
    }
   

}