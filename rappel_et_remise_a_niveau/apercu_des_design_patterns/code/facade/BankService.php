<?php

require_once 'Client.php';
require_once 'Product.php';

class BankService
{
    public function debitCustomerAccount(Client $client, Product $product): Client
    {
        $client->balance = $client->balance - $product->price;

        return $client;
    }
}