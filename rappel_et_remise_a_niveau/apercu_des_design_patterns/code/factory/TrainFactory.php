<?php

require_once './Train.php';
require_once './Factory.php';

class TrainFactory extends Factory
{
    function createVehicule(): Vehicule
    {
        return new Train();
    }
}