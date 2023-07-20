<?php

namespace App\Controllers;
use App\Core\Sql;
use App\Core\View;
use App\Models\Pages;
use App\Models\Setting;
class Settings extends Sql
{
    public function update(): void
    {
            $settings = new Setting();
            $settings->setId(1);
        if(!empty($_POST["action"] === "front")){
            $settings->setPolices($_POST["font"]);
            $settings->setBtnColor($_POST['btnColor']);
            $settings->setTextColor($_POST['color']);
            $settings->setTextSize($_POST['fontSize']);
        }elseif ($_POST["action"] === "title" ){
            $settings->setWebsiteName($_POST["title"]);
        }
        $settings->save();
    }

    public function updateMenu(): void
    {
        $pages = new Pages();
        $pagesMenu = $pages->recupAll();
        $view = new View("Dash/gestion");
         $view->assign("title","Gestion de Menu");
        $view->assign("pages",$pagesMenu);
        $page = new Pages();
        if (isset($_POST["addMenu"])){
            $page->setMenu(1);
        $page->setId($_POST["page"]);
        $page->setUpdatedAt();
            $page->save();
        }elseif(isset($_POST["delMenu"])){
        $page->setId($_POST["page"]);
            $page->setMenu(0);
            $page->setUpdatedAt();
            $page->save();
        }
    }
}