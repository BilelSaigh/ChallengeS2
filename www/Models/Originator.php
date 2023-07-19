<?php
    namespace App\Models;
    use App\Core\Sql;

    class Originator extends Sql
    {
        private $state;
        public function setState($state):void
        {
            $this->state = $state;
        }

        public function getState()
        {
            return $this->state;
        }
         /**
         * Saves the current state inside a memento.
         */
        public function saveToMemento(): Memento
        {

            return new Memento($this->state);
        }


        /**
         * Restores the Originator's state from a memento object.
         */
        public function restoreFromMemento(Memento $memento): void
        {
            echo "Originator: Going to previous state of \n: {$this->state->getName()}\n";
            $this->state = $memento->getState();
        }
    }
