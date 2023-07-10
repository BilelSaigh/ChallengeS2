<?php

namespace App\Controllers;

use App\Models\Page as Build;
use App\Models\PageMemento;

class Memento extends \App\Core\Sql
{
    public function setMemento()
    {
    }
    public function getMemento()
    {
        return  new PageMemento($page->getId(), $page->getTitle(), $page->getContent(), $page->getModificationDate());

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