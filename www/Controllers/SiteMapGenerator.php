<?php

namespace App\Controllers;

use App\Core\Sql;
use App\Core\View;
use App\Models\Pages;

class SiteMapGenerator extends Sql
{
    public function generate(): void
    {
        $slug = new Pages();
        $slug = $slug->recupAll();

        $view = new View("Dash/sitemap","sitemap");
        $view->assign('slug',$slug);
        $view->assign('title','Sitemap');

    }

}