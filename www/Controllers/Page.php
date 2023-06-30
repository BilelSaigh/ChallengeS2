<?php
namespace App\Controllers;

use App\Core\Sql;
use App\Core\View;
use App\Models\Page as Build;
use App\Models\PageMemento;

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
    public function restorePageFromMemento()
    {
        // Créez une instance de Page
        $page = new Build();

        // Effectuez des modifications sur la page

        // Créez une instance de PageMemento
        $memento = new PageMemento($page->getId(), $page->getTitle(), $page->getContent(), $page->getModificationDate());

        // Restaurez la page à partir du memento
        $page->restoreFromMemento($memento);

        // ... Autres actions ou rendu de vues ...
    }
}
