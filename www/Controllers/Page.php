<?php

namespace App\Controllers;

use App\Core\Sql;
use App\Core\View;
use App\Models\Page as Build;

class Page extends Sql
{
    public function updateTheme(): void
    {
        $view = new View("Dash/pageBuilder","builder");
    }
    public function newPage(): void
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
}