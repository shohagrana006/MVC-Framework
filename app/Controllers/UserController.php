<?php 
namespace App\Controllers;

use App\Base\Controller;
use App\Models\User;

class UserController extends Controller{
    function index(){
        $user = new User();
        $datas = $user->getAll();
        return view('user/index.php', ['datas' => $datas]);
    }


}