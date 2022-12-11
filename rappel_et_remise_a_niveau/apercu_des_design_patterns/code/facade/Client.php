<?php

class Client
{
    public function __construct(
        public int $balance,
        public array $products = []
    )
    {
    }
}