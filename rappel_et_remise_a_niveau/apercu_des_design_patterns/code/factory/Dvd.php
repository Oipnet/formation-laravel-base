<?php

require_once './Product.php';

class Dvd implements Product
{
    public function rent(): void
    {
        echo 'Location d\'un DVD';
    }
}