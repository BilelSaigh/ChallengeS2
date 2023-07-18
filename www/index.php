<?php
namespace App;
use App\Core\Router;


spl_autoload_register(function ($class) {
    $class = str_replace("App\\", "", $class);
    $class = str_replace("\\", "/", $class) . ".php";
    if (file_exists($class)) {
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









