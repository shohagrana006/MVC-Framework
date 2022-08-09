<?php 
namespace App\Base;
use Exception;

trait Connect {
   
    protected function connect() : \PDO
    {  
        $db_host =  env('DB_HOST');
        if(empty($db_host)){
            throw new Exception('Host name is must be required');
        }
        $db_name =  env('DB_NAME');
        if(empty($db_name)){
            throw new Exception('Database name is must be required');
        }
        $db_user =  env('DB_USER');
        if(empty($db_user)){
            throw new Exception('User name is must be required');
        }
        $db_pass =  env('DB_PASS');
        $db_connect =  env('DB_CONNECTION');
       
      
        try {
            return new \PDO("{$db_connect}:host={$db_host};dbname={$db_name}", $db_user, $db_pass );           
        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}