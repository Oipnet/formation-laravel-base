<?php

require_once 'Product.php';
require_once 'Client.php';

class DeliveryService
{

    public function sendProductToClient(Client $client, Product $product): void
    {
        $client->products[] = $product;
    }
}