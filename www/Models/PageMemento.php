<?php

namespace App\Models;

class PageMemento
{
    private $id;
    private $title;
    private $content;
    private $modificationDate;
    private $html;

    public function __construct($id, $title, $content, $modificationDate, $html)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->modificationDate = $modificationDate;
        $this->html = $html;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getModificationDate()
    {
        return $this->modificationDate;
    }

    public function getHTML()
    {
        return $this->html;
    }
}
