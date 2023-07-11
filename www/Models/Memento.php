<?php
namespace App\Models;
use App\Memento\Interfaces\IMemento;

class Memento implements IMemento
{
    private $state;
    private $date;

    public function __construct( $state)
    {
        $this->state = $state;
        $this->date = date('Y-m-d H:i:s');
    }

    /**
     * The Originator uses this method when restoring its state.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * The rest of the methods are used by the Caretaker to display metadata.
     */
    public function getName(): string
    {
        return $this->date . " / (" . substr($this->state, 0, 9) . "...)";
    }

    public function getDate(): string
    {
        return $this->date;
    }
}
