<?php

class Product
{
    public function __construct(
        public string $name,
        public int $price,
    )
    {
    }
}