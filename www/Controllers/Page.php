<?php

namespace App\Controllers;

use App\Core\Sql;
use App\Core\View;
use App\Models\Page as Build;
use PHPageBuilder\PHPageBuilder;
use PHPageBuilder\Modules\GrapesJS\PageBuilder;
class Page extends Sql
{
    public function updateTheme(): void
    {
        $view = new View("Dash/pageBuilder","builder");
    }
    public function createPage(): void
    {
        $view = new View("Dash/pageBuilder","builder");
        if($_POST){
            $pageBuild = new Build();
            //$_SESSION["user"]["id"]
            $pageBuild->setUserId(1);
            foreach($_POST as $element => $value){
                $pageBuild->setElement($element);
                if(is_array($value)){
                    $pageBuild->setX($value["x"]);
                    $pageBuild->setY($value["y"]);
                }
                $pageBuild->save();
            }
        }

    }

    public function newPage(){
//        $installationFolder = __DIR__ .'/../Views/PageBuilder';
//        require_once $installationFolder . '/src/Core/helpers.php';
//        spl_autoload_register('phpb_autoload');
//
//        $config = require $installationFolder . '/config/config.example.php';
//        $builder = new PHPageBuilder($config);
//        $builder->handleRequest();
//
//        // Générer la page avec PHPageBuilder
//        $html = $builder->generate();

        // Afficher la page
        $view = new View("Dash/pageBuilder", "builder");
//        $view->assign("html", $html);

    }
}