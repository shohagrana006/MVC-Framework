<?php 
namespace App\Base;

class Model{
    function __construct()
    {
        $this->connect();
    }
    protected function connect() : \PDO
    {  
        try {
            return new \PDO('mysql:host=localhost;dbname=mvc_framework', 'root', "");           
        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function fetchAll(mixed $query) :array
    {
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(2);
    }
    function fetch(){
        
    }

}