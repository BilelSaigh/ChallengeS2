<?php

namespace App\Models;
class Caretaker
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
        $this->originator->setState($newState);
    }

    public function undo(): void
    {
        if (!count($this->mementos)) {
            return;
        }
        $memento = array_pop($this->mementos);

        echo "Caretaker: Restoring state to: " . $memento->getName() . "\n";
        try {
            $this->originator->restore($memento);
        } catch (\Exception $e) {
            $this->undo();
        }
    }

    public function showHistory(): void
    {
        echo "Caretaker: Here's the list of mementos:\n";
        var_dump($this->mementos);
        foreach ($this->mementos as $memento) {
            echo $memento->getName() . "\n";
        }
    }
}