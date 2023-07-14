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

    public function createPage(): void
    {
        if (!empty($_SESSION['page'])) {
            unset($_SESSION['page']);
        }
        $view = new View("Dash/pageBuilder","builder");
    }

    public function showPage():void
    {
        $lastpage= new Build();
        $title = new Pages();
        $_SESSION['page'] = $_GET["id"];
        $lastpage = $lastpage->lastInsert($_SESSION['page']);
        $allVersion = $this->recupAllByOrder($_SESSION['page']);
        $title = $title->search(["id"=>$_SESSION['page']]);
        $status =$title->getStatus();
        $title= trim($title->getTitle());
        $view = new View("Dash/pageBuilder", "builder");
        $view->assign("page",$lastpage);
        $view->assign("title",$title);
        $view->assign("status",$status);
        $view->assign("allVersion",$allVersion);
    }
    public function updatePage(): void
    {
            $pageBuild = new Build();
        if(!empty($_POST["action"]) && $_POST["action"] === "send-content"){
            $pageBuild->setContent($_POST["content"][0]);
            $pageBuild->setUserId($_SESSION['user']['id']);
            $pageBuild->setPageId( $_SESSION['page']);
            $pageBuild->setUpdatedAt();
            $pageBuild->setStatus(0);
            $pageBuild->save();
        }else if(!empty($_POST["action"]) && $_POST["action"] === "undo"){
            $pageBuild = $pageBuild->search(["id"=>$_POST["id"], "page_id"=>$_SESSION["page"]]);
            $responseData['content'] = $pageBuild->getContent();
            echo json_encode($responseData);
        }else if(isset($_POST["title"]) && !empty($_POST["action"] === "editTitle"))
        {
            $new = new Pages();
            $alreadyExist = $new->search(["title"=>$_POST["title"]]);
            if (empty($alreadyExist)){
                if (isset($_SESSION["page"])){
                    $new->setId($_SESSION["page"]);
                    $new->setTitle($_POST["title"]);
                    $new->setUpdatedAt();
                    $new->save();
                }else{
                    $new = new Pages();
                    $new->setTitle($_POST["title"]);
                    $new->setUpdatedAt();
                    $new->setSlug();
                    $new->setDescription("");
                    $new->save();

                }
            }else{
                $response = array('error' => 'Pages Already exist ! ');
                http_response_code(400);
                echo json_encode($response);
            }
        }
        else if(!empty($_POST["action"] === "backToDraft"))
        {
            $newTitle = new Pages();
            $newTitle->setId($_SESSION["page"]);
            $newTitle->setUpdatedAt();
            $newTitle->save();
        }
    }
    public function publish()
    {
        if (isset($_GET["id"])){
            $page = new Pages();
            $pageData = new Build();
            $page = $page->search(["id"=>$_GET["id"]]);
            $pageData = $pageData->search(["page_id"=>$_GET["id"]]);
            $page->setStatus(1);
            $page->save();
            $view = new View("Dash/pageBuild", "cleanPage");
            $view->assign("pageData",$pageData);
            $view->assign("page",$page);
        }

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
        if (!empty($page)) {
            $pageData = new Build();
            $pageData = $pageData->lastInsert($page->getId());
            $view = new View("Dash/pageBuild", "cleanPage");
            $view->assign("page", $pageData);
        } else {
            $error = new Error();
            $error->errorRedirection(404);
        }
    }

}
