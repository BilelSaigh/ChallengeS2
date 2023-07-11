<?php

namespace App\Memento\Interfaces;

interface IMemento
{
    public function getName(): string;

    public function getDate(): string;
}