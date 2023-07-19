<?php
namespace App\Controllers;
use App\Core\View;

class Main{
    public function index(){
        
        echo json_encode(["yves","test"]);
        die();
        
        $pseudo = "Prof";
        
        $view = new View("Main/index", "front");
        $view->assign("pseudo", $pseudo);

    }

    public function contact(){
        $view = new View("Main/contact", "front");
    }

    public function dashboard(){
        echo "Mon tableau de bord";
    }
}