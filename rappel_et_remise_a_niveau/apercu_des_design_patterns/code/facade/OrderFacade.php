<?php

require_once 'Client.php';
require_once 'Product.php';
require_once 'BankService.php';
require_once 'StockService.php';
require_once 'DeliveryService.php';

class OrderFacade
{
    public function __construct(
        public BankService $bankService,
        public StockService $stockService,
        public DeliveryService $deliveryService,
    )
    {
    }

    public function process(Client $client, Product $product) {
        $this->stockService->removeProductFromStock($product);

        $client = $this->bankService->debitCustomerAccount($client, $product);
        $this->deliveryService->sendProductToClient($client, $product);
    }
}