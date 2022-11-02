<?php

class Singleton
{
    private static Singleton|null $instance = null;

    private function __construct()
    {
        echo 'Construction du Singleton<br>';
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }
}