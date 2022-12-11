<?php

require './OrderFacade.php';

$stockService = new StockService();
$bankService = new BankService();
$deliveryService = new DeliveryService();

$orderFacade = new OrderFacade($bankService, $stockService, $deliveryService);

$client = new Client(100);
$orderFacade->process($client, new Product('Produit 1', 20));
$orderFacade->process($client, new Product('Produit 2', 30));

var_dump($client);