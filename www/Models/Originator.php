<?php
    namespace App\Models;
    class Originator
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
//        public function save(): Memento
//        {
//    echo "oui";
//    var_dump($this->state);
//    return new Memento($this->state);
//    }

    public  function save(): Memento
    {
        return new Memento($this->state);
    }

        /**
         * Restores the Originator's state from a memento object.
         */
        public function restore(Memento $memento): void
        {
            echo "Originator: Going to previous state of \n: {$this->state}\n";
            $this->state = $memento->getState();
        }
    }
