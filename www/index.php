<?php


namespace App;
use App\Core\Router;
use App\Core\Security;
use App\Core\View;
use App\Forms\AddComment;

session_start();

// Constraint : utilisation des Namespace

spl_autoload_register(function ($class) {
    // Core/View.php
    $class = str_replace("App\\","", $class);
    $class = str_replace("\\","/", $class).".php";
    if(file_exists($class)){
        include $class;
    }
});


try {
    $router = new Router();
    $router->routeRequest();
} catch (\Exception $e) {
    header("HTTP/1.0 " . $e->getCode() . " " . $e->getMessage());
    echo "Erreur " . $e->getCode() . " - " . $e->getMessage();
    exit();
}



