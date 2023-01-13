# Le premier controller

---

[Formation laravel de base](../../README.md) > [Les controlleurs](../README.md) > Le premier controlleur

---

## Introduction

Nous allons apprendre à créer notre premier contrôleur dans Laravel. 

Nous verrons comment utiliser les commandes Artisan pour créer un 
contrôleur, ainsi que les différentes méthodes disponibles pour 
gérer les requêtes HTTP.

## Création du controller

Pour créer un contrôleur dans Laravel, nous pouvons utiliser la 
commande Artisan "make:controller". Par exemple, pour créer un 
contrôleur nommé "ArticleController", nous pouvons exécuter la 
commande suivante:

```shell
php artisan make:controller ArticleController
```

## Structure d'un controller

Un contrôleur dans Laravel est simplement une classe qui etend la 
classe Controller.

Elle contient des méthodes pour gérer les requêtes HTTP. 
Par défaut, un contrôleur créé avec la commande "make:controller" 
contiendra une méthode index(), qui est appelée lorsque 
l'utilisateur accède à la route associée à ce contrôleur.

## Lier une route au controller

Pour lier une route à mon controller il faut configurer dans le fichier 
`routes/web.php`

Voici un exemple de route :

```php
Route::get('/posts', [PostController::class, 'index']);
```

