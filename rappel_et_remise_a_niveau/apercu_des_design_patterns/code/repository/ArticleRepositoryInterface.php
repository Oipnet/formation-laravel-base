<?php

interface ArticleRepositoryInterface
{
    public function save(Article $article): Article;
    public function find(int $id): ?Article;
}