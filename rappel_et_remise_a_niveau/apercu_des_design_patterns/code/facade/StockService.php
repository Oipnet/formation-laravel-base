<?php

class StockService
{

    public function removeProductFromStock(Product $product): void
    {
        echo 'Suppresion du produit'.$product->name.' des stock<br>';
    }
}