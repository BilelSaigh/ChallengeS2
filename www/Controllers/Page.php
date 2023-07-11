<?php
namespace App\Controllers;

use App\Core\Sql;
use App\Core\View;
use App\Models\Caretaker;
use App\Models\Originator;
use App\Models\Page as Build;
use App\Models\PageMemento;

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
        $pageBuild = new Build();
        $originator = new Originator();
        //AND where name = $_GET["pageName"]
        $pageBuild = $pageBuild->search(["user_id"=>$_SESSION['user']['id']]);
        $originator->setState($pageBuild->getContent());
        $view = new View("Dash/pageBuilder", "builder");
        $view->assign("page",$pageBuild);
        if(!empty($_POST["action"])){
            $caretaker = new Caretaker($originator);
            if (empty($pageBuild)){
                $pageBuild->setUserId($_SESSION["user"]["id"]);
            }
            $pageBuild->setContent($_POST["content"][0]);
            $pageBuild->setUpdatedAt();
            $pageBuild->setStatus(0);
            $caretaker->backup("test1");
            $caretaker->backup("test9");
            $caretaker->backup("test10");
            $caretaker->backup("testml");
            $caretaker->backup("testRT");
//            $pageBuild->save();
            echo "\n";
            $caretaker->showHistory();

            echo "\nClient: Now, let's rollback!\n\n";
            $caretaker->undo();
            echo "\nClient: Once more!\n\n";
            $caretaker->undo();
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
