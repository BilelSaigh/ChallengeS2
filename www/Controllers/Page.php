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
        $_SESSION['page'] = $_GET["id"];
        $lastpage = $lastpage->lastInsert($_SESSION['page']);
        $allVersion = $this->recupAllByOrder($_SESSION['page']);
        $view = new View("Dash/pageBuilder", "builder");
        $view->assign("page",$lastpage);
        $view->assign("allVersion",$allVersion);
    }
    public function updatePage(): void
    {
            $pageBuild = new Build();
            $originator = new Originator();
            $caretaker = new Caretaker($originator);
            $originator->setState($pageBuild->lastInsert($_SESSION['page']));
            $caretaker->backup();
        if(!empty($_POST["action"]) && $_POST["action"] === "send-content"){
            $pageBuild->setContent($_POST["content"][0]);
            $pageBuild->setUserId($_SESSION['user']['id']);
            $pageBuild->setPageId( $_SESSION['page']);
            $pageBuild->setUpdatedAt();
            $pageBuild->setStatus(0);
            $originator->setState($pageBuild);
            $caretaker->backup();
            $pageBuild->save();
            $caretaker->showHistory();
        }else if(!empty($_GET["action"]) && $_GET["action"] === "undo"){
            echo "\nClient: Now, let's rollback!\n\n";
            $caretaker->undo();
            $restoredContent = $originator->getState()->getContent();
            echo json_encode(['content' => $restoredContent]);

        }
    }
    public function publish()
    {
        $page = new Build();
        $page = $page->search(["user_id"=>$_SESSION['user']['id']]);
        $page->setStatus(1);
        $page->save();
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
