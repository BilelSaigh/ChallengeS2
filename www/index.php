<?php
namespace App;
use App\Core\Router;


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

spl_autoload_register(function ($class) {
    $class = str_replace("App\\", "", $class);
    $class = str_replace("\\", "/", $class) . ".php";
    if (file_exists($class)) {
        include $class;
    }
});

// Récupérer l'URI de l'URL
$uriExploded = explode("?", $_SERVER["REQUEST_URI"]);
$uri = rtrim(strtolower(trim($uriExploded[0])), "/");
// Dans le cas où nous sommes à la racine, $uri sera vide, donc on remet "/"
$uri = (empty($uri)) ? "/" : $uri;

try {
    $router = new Router();
    $router->routeRequest();
} catch (\Exception $e) {
    header("HTTP/1.0 " . $e->getCode() . " " . $e->getMessage());
    echo "Erreur " . $e->getCode() . " - " . $e->getMessage();
    exit();
}









