<?php

require_once 'PersistenceInterface.php';
require_once 'Article.php';
require_once 'ArticleRepositoryInterface.php';

class ArticleRepository implements ArticleRepositoryInterface
{

    public function __construct(
        private readonly PersistenceInterface $persistence
    )
    {
    }

    public function save(Article $article): Article
    {
        $article->setId($this->persistence->getLastId(Article::class) + 1);

        $this->persistence->persist($article);

        return $article;
    }

    public function find(int $id): ?Article
    {
        return $this->persistence->retrieve(Article::class, $id);
    }
}