<?php
namespace App\Controllers;

use App\Core\Sql;
use App\Core\View;
use App\Models\Caretaker;
use App\Models\Originator;
use App\Models\Page as Build;
use App\Models\PageMemento;
use App\Models\User;

use App\Models\Pages;
use DateTime;
use PHPageBuilder\PHPageBuilder;
use PHPageBuilder\Modules\GrapesJS\PageBuilder;
class Page extends Sql
{
    public function updateTheme(): void
    {
        $view = new View("Dash/pageBuilder","builder");
    }

    public function showPage():void
    {
        $lastpage= new Build();
        $originator = new Originator();
        //AND where name = $_GET["pageName"]
        $_SESSION['page'] = $_GET["id"];
        $lastpage = $lastpage->lastInsert($_SESSION['page']);
        $view = new View("Dash/pageBuilder", "builder");
        $view->assign("page",$lastpage);
    }
    public function updatePage(): void
    {
//        $lastpage= new Build();
//        $originator = new Originator();
//        //AND where name = $_GET["pageName"]
//        $lastpage = $lastpage->search(["user_id"=>$_SESSION['user']['id'],"page_id"=>$_GET["id"]]);
//        $pageId = $_GET["id"];
//        $originator->setState($lastpage);
//        $caretaker = new Caretaker($originator);
//        $view = new View("Dash/pageBuilder", "builder");
//        $view->assign("page",$lastpage);
        if(!empty($_POST["action"] ) && $_POST["action"]=== "send-content"){
//            $caretaker->backup($lastpage);
            $pageBuild = new Build();
            $pageBuild->setContent($_POST["content"][0]);
            $pageBuild->setUserId($_SESSION['user']['id']);
            $pageBuild->setPageId( $_SESSION['page']);
            $pageBuild->setUpdatedAt();
            $pageBuild->setStatus(0);
            $pageBuild->save();

//            $caretaker->backup("test1");
//            $caretaker->backup("test9");
//            $caretaker->backup("test10");
//            $caretaker->backup("testml");
//            $caretaker->backup("testRT");
//            echo "\n";
//            $caretaker->showHistory();
//            echo "\nClient: Now, let's rollback!\n\n";
//            $caretaker->undo();
//            echo "\nClient: Once more!\n\n";
//            $caretaker->undo();
        }else if(!empty($_POST["action"]) && $_POST["action"]=== "undo"){
            echo "\n";
//            $oldContent = $lastpage->multipleSearch((["name" => 'New Website', "user_id" => $_SESSION["user"]["id"]]));
//            foreach ($oldContent as $content){
//                $obj = $content->mementos[0]->getState();
//                $content = $obj->content;
//                echo $content;
//                $caretaker->backup($content);
//            }
//            var_dump($caretaker);
//            $caretaker->showHistory();
//            echo "\nClient: Now, let's rollback!\n\n";
//            $caretaker->undo();
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

    public function publish()
    {
        $page = new Build();
        $page = $page->search(["user_id"=>$_SESSION['user']['id']]);
        $page->setStatus(1);
        $page->save();
        // Afficher la page
        $view = new View("Dash/pageBuild", "cleanPage");
        $view->assign("page",$page);

    }


    public function listPages(): void
    {
        $page = new Pages();
        $user = new User();
        $pages = $page->showAllPages();
        $users = $user->showAllUsers();
        $subscribers = $this->countUsersWithRoleZero($users,3);
        $team = $this->countUsersWithRoleZero($users,2) + $this->countUsersWithRoleZero($users,1) + $this->countUsersWithRoleZero($users,0);
        $view = new View("Dash/pages", "back");
        $view->assign("page", $pages);
        $view->assign("subscribers", $subscribers);
        $view->assign("users", $users);
        $view->assign("team", $team);

    }
    function countUsersWithRoleZero($users,$indice): int
    {
        $filteredUsers = array_filter($users, function ($user) use ($indice) {
            return $user['role'] === $indice;
        });
        return count($filteredUsers);
    }

    public function deletePage():void
    {
        $deletePage = new Pages();
        $deletePage->setId($_SESSION["page"]);
        $deletePage->delete();
    }


    public function getSlug($slug): void
    {
        $page = new Pages();
        $page = $page->search(["slug" => $slug]);
        if ($page) {
            $pageData = new Build();
            $pageData = $pageData->lastInsert($page->getId());
        } else {
            $error = new Error();
            $error->errorRedirection(404);
        }
        $view = new View("Dash/pageBuild", "cleanPage");
        $view->assign("page", $pageData);
    }
}
