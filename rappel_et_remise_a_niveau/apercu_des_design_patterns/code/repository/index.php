<?php

require_once 'ArticleRepository.php';
require_once 'InMemoryPersistence.php';
require_once 'Article.php';

$articleRepository = new ArticleRepository(
    new InMemoryPersistence()
);

$article = new Article(
    title: 'Mon super titre',
    content: 'Le contenu de mon article'
);

$article2 = new Article(
    title: 'Mon super titre 2',
    content: 'Le contenu de mon article 2'
);

$article = $articleRepository->save($article);
$article2 = $articleRepository->save($article2);

var_dump($article);
echo '<br>';
var_dump($article2);
echo '<br>';
var_dump($articleRepository->find(2));