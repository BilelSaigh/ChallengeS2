<?php

/**
namespace App\Core;
//Contrainte : utilisation des Namespace


class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = yaml_parse_file("routes.yml");
    }

    public function routeRequest(){
        $uriExploded = explode("?",$_SERVER["REQUEST_URI"]);
        $uri = rtrim(strtolower(trim($uriExploded[0])),"/");
        $uri = (empty($uri))?"/":$uri;

        if (empty($this->routes[$uri])) {
            throw new \Exception("Page non trouvée", 404);
        }

        $route = $this->routes[$uri];


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


        if (empty($route["controller"]) || empty($route["action"])) {
            throw new \Exception("Absence de controller ou d'action dans le ficher de routing pour la route ".$uri);
        }

        // $controller = "\\App\\Controllers\\" . $route["controller"];
        // $action = $route["action"];

        $controller = $routes[$matchedRoute]["controller"];
        $action = $routes[$matchedRoute]["action"];

        if (!class_exists($controller)) {
            throw new \Exception("La class ".$controller." n'existe pas", 500);
        }



        $controllerInstance = new $controller();

        if (!method_exists($controllerInstance, $action)) {
            throw new \Exception("L'action ".$action." n'existe pas", 500);
        }



        // echo "Route trouvée : " . $uri . PHP_EOL;
        // echo "Contrôleur : " . $controller . PHP_EOL;
        // echo "Action : " . $action . PHP_EOL;

        $controllerInstance->$action();


    }
}
**/


namespace App\Core;
//Contrainte : utilisation des Namespace


use App\Controllers\Error;

class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = yaml_parse_file("routes.yml");
    }

    public function routeRequest()
    {

        $uriExploded = explode("?", $_SERVER["REQUEST_URI"]);
        $uri = rtrim(strtolower(trim($uriExploded[0])), "/");
        $uri = (empty($uri)) ? "/" : $uri;

        $matchedRoute = null;
        $matchedParams = [];

        foreach ($this->routes as $route => $config) {
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
                if ($uri === $route) {
                    $matchedRoute = $route;
                    break;
                }
            }
        }

        if (empty($matchedRoute)) {
            $error = new Error();
            $error->errorRedirection(404);
        }

        $route = $this->routes[$matchedRoute];

            $controller = "\\App\\Controllers\\" . $route["controller"];
            $action = $route["action"];

        // Gérer les autres routes du routeur normalement
        $security = $route["security"];

        if (!class_exists($controller)) {
            throw new \Exception("La class " . $controller . " n'existe pas", 500);
        }

        $controllerInstance = new $controller();
        $secu = new Security();

        if (isset($security) && $security === true && !$secu->isLoggedIn()) {
            $view = new View("Auth/login", "front");
        } elseif (isset($role) && !$secu->whoIAm($route["role"])) {
            $error = new Error();
            $error->errorRedirection(404);
        }

        if (!method_exists($controllerInstance, $action)) {
            throw new \Exception("L'action " . $action . " n'existe pas", 500);
        }
        $controllerInstance->$action(...$matchedParams);
    }
}


?>