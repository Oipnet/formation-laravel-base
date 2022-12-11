<?php

require_once 'Dvd.php';
require_once './RentManager.php';

class DvdRentManager extends RentManager
{
    function createProduct(): Product
    {
        return new Dvd();
    }
}