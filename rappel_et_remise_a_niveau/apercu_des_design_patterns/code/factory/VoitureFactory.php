<?php

require_once 'Voiture.php';
require_once './Factory.php';

class VoitureFactory extends Factory
{
    function createVehicule(): Vehicule
    {
        return new Voiture();
    }
}