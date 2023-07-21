<?php

namespace App\Controllers;
use App\Core\Sql;
use App\Models\Front as FrontModel;
class Front extends Sql
{
    public function update(): void
    {
        if(!empty($_POST["action"])){
            $front = new FrontModel();
            $front->setPolices($_POST["font"]);
            $front->setId(1);
            $front->setBtnColor($_POST['btnColor']);
            $front->setTextColor($_POST['color']);
            $front->setTextSize($_POST['fontSize']);
            $front->save();
        }
    }
}