<?php

namespace App\Models;
use App\Core\Sql;
class Caretaker extends Sql
{
    /**
     * @var Memento[]
     */
    private $mementos = [];

    /**
     * @var Originator
     */
    private $originator;

    public function __construct(Originator $originator)
    {
        $this->originator = $originator;
    }

    public function backup($newState): void
    {
        echo "\nCaretaker: Saving Originator's state...\n";
        $this->mementos[] = $this->originator->save();
        $backup = new PageMemento($this->mementos);
        $backup->save();
        $this->originator->setState($newState);
    }

    public function undo(): void
    {
        if (!count($this->mementos)) {
            return;
        }
        $memento = array_pop($this->mementos);
        var_dump($memento);
        echo "Caretaker: Restoring state to: " . $memento["id"]. "\n";
        try {
            $this->originator->restore($memento);
        } catch (\Exception $e) {
            $this->undo();
        }
    }

    public function showHistory(): void
    {
        echo "Caretaker: Here's the list of mementos:\n";
        $allVersions = PageMemento::getAllVersions();
        foreach ($allVersions as $version) {
            echo "Version: " . $version['id'] . ", Date: " . $version['date'] . "\n";

        }
    }


}