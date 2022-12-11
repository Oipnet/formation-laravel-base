<?php

require_once './BluRay.php';
require_once './RentManager.php';

class BluRayRentManager extends RentManager
{
    function createProduct(): Product
    {
        return new BluRay();
    }
}