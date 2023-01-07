<?php

class InMemoryPersistence implements PersistenceInterface
{
    private array $datas = [];
    private array $ids = [];

    public function getLastId(string $model): int
    {
        return $this->ids[$model] ?? 0;
    }

    public function persist(Model $model): void
    {
        $this->datas[$model::class][$model->getId()] = $model;

        $this->ids[$model::class] = $model->getId();
    }

    public function retrieve(string $model, int $id): ?Model
    {
        if (!isset($this->datas[$model])) {
            return null;
        }

        return $this->datas[$model][$id] ?? null;
    }

    public function delete(string $model, int $id): void
    {
        if (isset($this->datas[$model]) && isset($this->datas[$model][$id])) {
            unset($this->datas[$model][$id]);
        }
    }
}