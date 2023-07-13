<?php
namespace App\Models;
use App\Memento\Interfaces\IMemento;

class Memento implements IMemento
{
    private $state;
    private $id =0;
    private $date;

    public function __construct( $state)
    {
        $this->state = $state;
        $this->date = date('Y-m-d H:i:s');
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
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
        echo $this->state->getId();
        return $this->date . " / (" . substr($this->state->getId(), 0, 9) . "...)";
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

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }


}
