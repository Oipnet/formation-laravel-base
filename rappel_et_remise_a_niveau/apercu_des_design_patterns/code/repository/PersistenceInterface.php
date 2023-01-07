<?php

require_once 'Model.php';

interface PersistenceInterface
{
    public function getLastId(string $model): int;
    public function persist(Model $model): void;
    public function retrieve(string $model, int $id): ?Model;
    public function delete(string $model, int $id): void;
}