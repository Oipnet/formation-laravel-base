<?php

require './Subsystem.php';
require './Subsystem2.php';

class Facade
{
    private Subsystem $subsystem;
    private Subsystem2 $subsystem2;

    public function __construct()
    {
        $this->subsystem = new Subsystem();
        $this->subsystem2 = new Subsystem2();
    }

    public function process(): int
    {
        return $this->subsystem->compute() + $this->subsystem2->compute();
    }
}