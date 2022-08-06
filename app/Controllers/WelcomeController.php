<?php
namespace App\Controllers;

use App\Base\Controller;

class WelcomeController extends Controller {
    public function hello(){
        return view('welcome.php');
    }
}