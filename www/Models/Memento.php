<?php
namespace App\Models;
use App\Memento\Interfaces\IMemento;

class Memento
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
    public function getState()
    {
        return $this->state;
    }

    /**
     * The rest of the methods are used by the Caretaker to display metadata.
     */
    public function getName()
    {
        $state = $this->getState();
        return $this->date . " / (" . substr($state->getContent(), 0, 9) . "...)"." / ".$state->getId();
    }

    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param mixed $state
     */
    public function setState($state): void
    {
        $this->state = $state;
    }


}
