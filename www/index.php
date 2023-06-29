<?php
namespace App;
//Contrainte : utilisation des Namespace


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

// Charger les routes à partir du fichier YAML
if (!file_exists("routes.yml")) {
    die("Le fichier de routing n'existe pas");
}

$routes = \yaml_parse_file("routes.yml");

// Vérifier si la route demandée existe
if (empty($routes[$uri])) {
    http_response_code(404);
    die("Page 404");
}

// Récupérer le contrôleur et l'action de la route
if (empty($routes[$uri]["controller"]) || empty($routes[$uri]["action"])) {
    http_response_code(500);
    die("Absence de controller ou d'action dans le fichier de routing pour la route " . $uri);
}

$controller = $routes[$uri]["controller"];
$action = $routes[$uri]["action"];
$format = $routes[$uri]["format"]??"html";

// Vérification de l'existence du fichier de contrôleur
$controllerFilePath = "Controllers/" . $controller . ".php";
if (!file_exists($controllerFilePath)) {
    http_response_code(500);
    die("Le fichier " . $controllerFilePath . " n'existe pas");
}

include $controllerFilePath;

// Vérifier l'existence de la classe du contrôleur
$controller = "\\App\\Controllers\\" . $controller;
if (!class_exists($controller)) {
    http_response_code(500);
    die("La classe " . $controller . " n'existe pas");
}
header('Content-Type: '.$format);

$objet = new $controller();

// Vérifier si l'action existe dans le contrôleur
if (!method_exists($objet, $action)) {
    http_response_code(500);
    die("L'action " . $action . " n'existe pas");
}
$response = $objet->$action();



