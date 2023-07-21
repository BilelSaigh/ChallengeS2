<?php
namespace App\Controllers;

use App\Core\Sql;
use App\Core\View;
use App\Forms\AddComment;
use App\Models\Page as Build;
use App\Models\User;
use App\Models\Setting;

use App\Models\Pages;
use App\Models\Comment;
class Page extends Sql
{

    public function createPage(): void
    {
        if (!empty($_SESSION['page'])) {
            unset($_SESSION['page']);
        }
        $view = new View("Dash/pageBuilder","builder");
        $view->assign("title","New page");

    }

    public function showPage():void
    {
        $lastpage= new Build();
        $page = new Pages();
        $_SESSION['page'] = $_GET["id"];
        $lastpage = $lastpage->lastInsert($_SESSION['page']);
        $allVersion = $this->recupAllByOrder($_SESSION['page']);
        $page = $page->search(["id"=>$_SESSION['page']]);
        $status = $page->getStatus();
        $title= trim($page->getTitle());
        $commentStatus = $page->isComment();
        $view = new View("Dash/pageBuilder", "builder");
        $view->assign("page",$lastpage);
        $view->assign("option",$commentStatus);
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
                    $new->setSlug();
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
            $newTitle->setStatus(0);
            $newTitle->save();
        }
    }
    public function publish()
    {
        if (isset($_GET["id"])){
            $page = new Pages();
            $pages = new Pages();
            $pages = $pages->recupAll();
            $pageData = new Build();
            $setting = new Setting();
            $setting = $setting->search(['id'=>1]);
            $page = $page->search(["id"=>$_GET["id"]]);
            $pageData = $pageData->search(["page_id"=>$_GET["id"]]);
            $page->setStatus(1);
            $page->save();
            $view = new View("Dash/pageBuild", "cleanPage");
            $view->assign("pageData",$pageData);
            $view->assign("front",$setting);
            $view->assign("pages",$pages);
            $view->assign("title",$page->getTitle());
            $view->assign("content",$pageData->getContent());
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
        $view->assign("title", 'My Pages');
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
        $menu = new Pages();
        $menu = $menu->recupAll();
        $comment = new Comment();
        var_dump($page->getId());
        $comments = $comment->multipleSearch(['page_id'=>$page->getId()]);
        $formComment = new addComment();
        if (!empty($page)) {
            $pageData = new Build();
            $pageData = $pageData->lastInsert($page->getId());
            $front = new Setting();
            $front = $front->search(['id'=>1]);
            $view = new View("Dash/pageBuild", "cleanPage");
            $view->assign("title",$page->getTitle());
            $view->assign("front", $front);
            $view->assign("pages", $menu);
            if (!empty($pageData))
            {
                $view->assign("content", $pageData->getContent());
                $view->assign("comments",$comments);
                $view->assign("form", $formComment->getConfig());
            }
        } else {
            $error = new Error();
            $error->errorRedirection(404);
        }
        if ($formComment->isSubmit())
        {
            $comment->setContent($_POST["commentaire"]);
            $comment->setCreatedDate();
            $comment->setPageId($page->getId());
            $comment->setUserId($_SESSION['user']['id']);
            $comment->save();
        }
    }

}
