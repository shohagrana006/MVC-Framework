<?php 
namespace App\Base;
use App\Base\Connect;


class Model{

    use Connect;
    function __construct()
    {
        $this->connect();
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