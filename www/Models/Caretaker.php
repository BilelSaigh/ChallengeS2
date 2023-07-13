<?php

namespace App\Models;
use App\Core\Sql;
class Caretaker extends Sql
{
    /**
     * @var Memento[]
     */
    private $mementos = [];
    protected Int $id = 0;
    protected Int $page_id;

    protected String $name = "New Website";
    protected  $content;
    protected  $updated_at;
    protected Int $status = 0;
    protected Int $user_id;

    /**
     * @var Originator
     */
    private $originator;

    public function __construct(Originator $originator)
    {
        $this->originator = $originator;
    }

    public function backup(): void
    {
        echo "\nCaretaker: Saving Originator's state...\n";
        $this->mementos[] = $this->originator->saveToMemento();
    }

    public function getMemento($index) {
        return $this->mementos[$index];
    }
    public function undo(): void
    {
        if (!count($this->mementos)) {
            return;
        }
        $memento = array_pop($this->mementos);
//        var_dump($memento);
        echo "Caretaker: Restoring state to: " . $memento->getName(). "\n";
        try {
            $this->originator->restoreFromMemento($memento);
        } catch (\Exception $e) {
            $this->undo();
        }

    }
    public function showHistory(): void
    {
        echo "Caretaker: Here's the list of mementos:\n";
        foreach ($this->mementos as $memento) {
            echo $memento->getName() . "\n";
        }
    }

    /**
     * @return Int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param Int $version_id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return Int
     */
    public function getPageId(): int
    {
        return $this->page_id;
    }

    /**
     * @param Int $page_id
     */
    public function setPageId(int $page_id): void
    {
        $this->page_id = $page_id;
    }

    /**
     * @return String
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param String $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return String
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param String $content
     */
    public function setContent( $content): void
    {
        $this->content = $content;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }


    public function setUpdatedAt(): void
    {
        $this->updated_at = date('d-m-Y-H-i-s');
    }
    public function setStatus($status):void
    {
        $this->status = $status;
    }
    public function getStatus():Int
    {
        return $this->status;
    }

    /**
     * @return Int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param Int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }




}