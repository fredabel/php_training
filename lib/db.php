<?php

class DB
{
    private static $instance;

    // public static function singleton()
    // {
    //     if (!isset(self::$instance)) {
    //         $className = __CLASS__;
    //         self::$instance = new $className;
    //     }
    //     return self::$instance;
    // }
	
    // public function __clone()
    // {
    //     trigger_error('Clone is not allowed.', E_USER_ERROR);
    // }

    // public function __wakeup()
    // {
    //     trigger_error('Unserializing is not allowed.', E_USER_ERROR);
    // }
	
    public function dbCon()
    {      
        $dbcon = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB,DB_PORT) or die('unable to connect to DB');
        return $dbcon;
    }
}
?>