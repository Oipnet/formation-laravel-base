<?php

require_once './Product.php';

abstract class RentManager
{
    protected Product $product;

    abstract function createProduct(): Product;

    public function planARent(): void
    {
        $this->product = $this->createProduct();

        $this->product->rent();
    }
}