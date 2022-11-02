<?php

require_once './Vehicule.php';

class Voiture implements Vehicule
{
    public function roule(): void
    {
        echo 'Vroum';
    }
}