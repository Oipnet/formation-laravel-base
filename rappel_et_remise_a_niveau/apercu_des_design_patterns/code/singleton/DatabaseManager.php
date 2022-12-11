<?php

class DatabaseManager
{
    private static DatabaseManager|null $instance = null;
    private PDO $pdo;

    private function __construct()
    {
        $this->pdo = new PDO('mysql:host=sql11.freemysqlhosting.net;dbname=sql11529658', 'sql11529658', 'M2fcJbaHmV');
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new DatabaseManager();
        }

        return self::$instance;
    }

    public function getPdo(): PDO
    {
        return $this->pdo;
    }
}