<?php

/*******************************************
 * Session
 * 
 * Session是用來把客戶端（連到網路的那個人）
 * 的資料，存在伺服器上。
 * 要使用seesion前都要先開始
 * 因此放這裡啟動
 * 
 *******************************************/

session_start();

/*******************************************
 * Global Configuration Array
 * 
 * 把所有需要用到的資訊(configuration)統一蒐集
 * 這樣之後如果要改資料庫的位置
 * 改變這個檔案的這個部分就好
 * 不用所有檔案連接資料庫的程式碼都改掉
 * 
 *******************************************/
$GLOBALS['config']=array(       //$GLOBALS 表示他是全域變數
    'mysql'=>array(
        'host'=>'127.0.0.1',    //  127.0.0.1表示連接到本地伺服器
        'db'=>'runner',         //  到時候每一年都會創造一個新的資料庫
        'username'=>'root',     //  資料庫登入帳密
        'password'=>''
    ),
    'remember'=>array(
        'cookie_name'=>'hash',
        'cookie_expiry'=>'86400'    //cookie 一天後過期
    ),
    'session'=>array(
        'session_name'=>'user'
    )
);

/*******************************************
 * Auto Loading Classes
 * 
 * 為了避免每次要使用一個class都要先include，
 * 也避免重複include，這一部分設定只有在要用到
 * 那個class的時候，才include 那個檔案。
 * 
 *******************************************/

 spl_autoload_register(function($class){
    require_once 'classes/' . $class . '.php';
 });

 require_once 'functions/sanitize.php';