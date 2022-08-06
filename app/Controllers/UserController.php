<?php 
namespace App\Controllers;

use App\Base\Controller;

class UserController extends Controller{
    function index(){
        try {
            $pdo  = new \PDO('mysql:host=localhost;dbname=mvc_framework', 'root', "");
            $stmt = $pdo->prepare("SELECT * FROM users");
            $stmt->execute();
            $data = $stmt->fetchAll(2);
            
        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return view('user/index.php', ['datas' => $data]);
    }


}