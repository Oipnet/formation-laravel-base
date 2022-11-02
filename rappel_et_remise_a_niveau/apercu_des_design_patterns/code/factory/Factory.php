<?php

require_once './Vehicule.php';

abstract class Factory
{
    protected Vehicule $vehicule;

    abstract function createVehicule(): Vehicule;

    public function roule() {
        $this->vehicule = $this->createVehicule();

        $this->vehicule->roule();
    }
}