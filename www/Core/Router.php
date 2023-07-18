<?php
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

        echo "Route trouvée : " . $uri . PHP_EOL;


        $route = $this->routes[$uri];

        if (empty($route["controller"]) || empty($route["action"])) {
            throw new \Exception("Absence de controller ou d'action dans le ficher de routing pour la route ".$uri);
        }

        $controller = "\\App\\Controllers\\" . $route["controller"];
        $action = $route["action"];

        if (!class_exists($controller)) {
            throw new \Exception("La class ".$controller." n'existe pas", 500);
        }

        echo "Contrôleur : " . $controller . PHP_EOL;

        $controllerInstance = new $controller();

        if (!method_exists($controllerInstance, $action)) {
            throw new \Exception("L'action ".$action." n'existe pas", 500);
        }

        echo "Action : " . $action . PHP_EOL;

        $controllerInstance->$action();
        

    }
}

?>