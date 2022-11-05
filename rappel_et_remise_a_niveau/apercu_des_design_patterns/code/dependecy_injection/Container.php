<?php

class Container
{
    private array $classes = [];

    public function register(string $class, $callable) {
        $this->classes[$class] = $callable();

        return $this;
    }

    public function get(string $class) {
        return $this->classes[$class];
    }
}