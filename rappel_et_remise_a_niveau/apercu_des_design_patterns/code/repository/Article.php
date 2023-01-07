<?php

class Article extends Model
{
    public function __construct(
        public string $title,
        public string $content,
    )
    {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Article
    {
        $this->id = $id;

        return $this;
    }
}