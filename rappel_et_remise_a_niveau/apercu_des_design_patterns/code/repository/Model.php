<?php

abstract class Model
{
    protected int $id;
    abstract public function getId(): int;
    abstract public function setId(int $id): self;
}