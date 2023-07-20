<?php


namespace App;
use App\Core\Router;
use App\Core\Security;
use App\Core\View;

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



foreach ($routes as $route => $config) {
    if (strpos($route, '{slug}') !== false) {
        // Si la route contient "{slug}", il s'agit d'une route avec un slug
        $pattern = str_replace('{slug}', '([^/]+)', $route);
        $regex = '#^' . $pattern . '$#';

        if (preg_match($regex, $uri, $matches)) {
            $matchedRoute = $route;
            $matchedParams = [];

            // Récupérer les valeurs des paramètres
            for ($i = 1; $i < count($matches); $i++) {
                $matchedParams[] = $matches[$i];
            }
            break;
        }
    } else {
        // Si la route est une correspondance exacte
        if ($uri === $route) {
            $matchedRoute = $route;
            break;
        }
    }
}

if ($matchedRoute === null) {
    // Page 404
    http_response_code(404);
    $view = new View("Error/404", "error");
}

$controller = $routes[$matchedRoute]["controller"];
$action = $routes[$matchedRoute]["action"];
$security = $routes[$matchedRoute]["security"];
$role = $routes[$matchedRoute]["role"];

// Vérification de l'existence du fichier de contrôleur
if (!file_exists("Controllers/" . $controller . ".php")){
    http_response_code(404);
    $view = new View("Error/404", "error");
}
include "Controllers/" . $controller . ".php";

// Le fichier existe, mais est-ce qu'il possède la bonne classe ?
// N'oubliez pas d'ajouter le namespace \App\Controllers\Security

$controller = "\\App\\Controllers\\" . $controller;
if (!class_exists($controller)){
    http_response_code(404);
    $view = new View("Error/404", "error");
}
$objet = new $controller();

$secu = new Security();
$controller = "\\App\\Core\\Security";
if (isset($security) && $security === true && !$secu->isLoggedIn()){
    http_response_code(404);
    $view = new View("Error/404", "error");
} elseif(isset($role) && !$secu->whoIAm($role))
{
    http_response_code(404);
    $view = new View("Error/404", "error");
}else {

// Est-ce que l'objet contient bien la méthode ?
    if (!method_exists($objet, $action)) {
        http_response_code(404);
        $view = new View("Error/404", "error");
    }
// Appel de la méthode avec les paramètres dynamiques
    $objet->$action(...$matchedParams);
}