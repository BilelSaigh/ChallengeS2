<?php
//namespace App;
//session_start();
//
////Contrainte : utilisation des Namespace
//spl_autoload_register(function ($class) {
//    //Core/View.php
//    $class = str_replace("App\\","", $class);
//    $class = str_replace("\\","/", $class).".php";
//    if(file_exists($class)){
//        include $class;
//    }
//});
//
////Récupérer dans l'url l'uri /login ou /user/toto
////Nettoyer la donnée
////S'il y a des paramètres dans l'url il faut les enlever :
//$uriExploded = explode("?",$_SERVER["REQUEST_URI"]);
//$uri = rtrim(strtolower(trim($uriExploded[0])),"/");
////Dans le cas ou nous sommes à la racine $uri sera vide du coup je remets /
//$uri = (empty($uri))?"/":$uri;
//
////Créer un fichier yaml contenant le route du type :
//// /login:
////      controller: Security
////      action: login
////Le fichier est dans www et porte le nom de routes.yml
//
////En fonction de l'uri récupérer le controller et l'action
////Effectuer toutes les vérifications que vous estimez nécessaires
////En cas d'erreur effectuer un simple Die avec un message explicite
////Dans le cas ou tout est bon créer une instance du controller
////et appeler la methode action
//
////Exemple :
//// $controller = new Security();
//// $controller->login();
//
//if(!file_exists("routes.yml")) {
//    http_response_code(404);
//    die("Le fichier de routing n'existe pas");
//}
//
//$routes = \yaml_parse_file("routes.yml");
//
////Page 404
//if(empty($routes[$uri])) {
//    http_response_code(404);
//
//}
//
//if(empty($routes[$uri]["controller"]) || empty($routes[$uri]["action"])) {
//    die("Absence de controller ou d'action dans le ficher de routing pour la route ".$uri);
//}
//
//$controller = $routes[$uri]["controller"];
//$action = $routes[$uri]["action"];
//
////Vérification de l'existance de la classe
//if(!file_exists("Controllers/".$controller.".php")){
//    die("Le fichier Controllers/".$controller.".php n'existe pas");
//}
//
//include "Controllers/".$controller.".php";
//
//
//
////Le fichier existe mais est-ce qu'il possède la bonne classe
////bien penser à ajouter le namespace \App\Controllers\Security
//$controller = "\\App\\Controllers\\".$controller;
//if(!class_exists($controller)){
//    die("La class ".$controller." n'existe pas");
//}
//
//$objet = new $controller();
//
////Est-ce que l'objet contient bien la methode
//if(!method_exists($objet, $action)){
//    die("L'action ".$action." n'existe pas");
//}
//
//if ($controller === "Page" && $action === "getSlug"){
//    $slug = ltrim($uri, "/");
//    $objet->$action($slug);
//}else{
//    $objet->$action();
//}
//
//
//
//
//
//
//
//
//

namespace App;
session_start();

// Contrainte : utilisation des Namespace
spl_autoload_register(function ($class) {
    // Core/View.php
    $class = str_replace("App\\","", $class);
    $class = str_replace("\\","/", $class).".php";
    if(file_exists($class)){
        include $class;
    }
});

// Récupérer l'URI de l'URL
$uriExploded = explode("?", $_SERVER["REQUEST_URI"]);
$uri = rtrim(strtolower(trim($uriExploded[0])),"/");
$uri = (empty($uri)) ? "/" : $uri;

// Charger les routes depuis le fichier YAML
if(!file_exists("routes.yml")) {
    http_response_code(404);
    die("Le fichier de routing n'existe pas");
}

$routes = \yaml_parse_file("routes.yml");

// Recherche de la route correspondante avec un slug dynamique
$matchedRoute = null;
$matchedParams = [];

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
    include "Views/error404.tpl.php";
    exit();
}

$controller = $routes[$matchedRoute]["controller"];
$action = $routes[$matchedRoute]["action"];

// Vérification de l'existence du fichier de contrôleur
if (!file_exists("Controllers/" . $controller . ".php")){
    die("Le fichier Controllers/" . $controller . ".php n'existe pas");
}

include "Controllers/" . $controller . ".php";

// Le fichier existe, mais est-ce qu'il possède la bonne classe ?
// N'oubliez pas d'ajouter le namespace \App\Controllers\Security
$controller = "\\App\\Controllers\\" . $controller;
if (!class_exists($controller)){
    die("La classe " . $controller . " n'existe pas");
}

$objet = new $controller();

// Est-ce que l'objet contient bien la méthode ?
if (!method_exists($objet, $action)){
    die("L'action " . $action . " n'existe pas");
}

// Appel de la méthode avec les paramètres dynamiques
$objet->$action(...$matchedParams);
