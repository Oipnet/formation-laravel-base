# Les middlewares

---

[Formation laravel de base](../../README.md) > [Les controlleurs](../README.md) > Les middlewares

---

## Introduction

Les middleware sont des classes qui permettent de gérer les 
requêtes HTTP avant qu'elles ne parviennent aux contrôleurs. 
Ils peuvent être utilisés pour différentes tâches, comme 
l'authentification, la validation des données, la modification 
des en-têtes HTTP, etc.

## Création d'un middleware

Pour créer un middleware dans Laravel, vous pouvez utiliser la 
commande Artisan "make:middleware". Par exemple, pour créer un 
middleware nommé "CheckAge", vous pouvez exécuter la commande 
suivante:

```shell
php artisan make:middleware CheckAge
```

Cela créera un nouveau fichier appelé "CheckAge.php" dans le 
répertoire "app/Http/Middleware".

## Structure d'un middleware

Un middleware dans Laravel est simplement une classe qui contient 
une méthode handle() pour gérer les requêtes HTTP. La méthode 
handle() prend en entrée une instance de la classe Request, 
ainsi qu'une fonction de rappel, qui est appelée lorsque le 
middleware a fini de traiter la requête.

Voici un exemple de structure de base pour un middleware:

```php
<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
{
    public function handle($request, Closure $next)
    {
        if ($request->age < 18) {
            return redirect('home');
        }

        return $next($request);
    }
}
```

## Utilisation d'un middleware

Pour utiliser un middleware dans votre application, vous devez 
d'abord l'enregistrer dans le fichier "Kernel.php" dans le 
répertoire "app/Http". 

Vous pouvez enregistrer un middleware pour 
être utilisé pour toutes les requêtes HTTP.

Voici un exemple d'enregistrement d'un middleware pour toutes 
les requêtes HTTP:

```php
protected $middleware = [
    ...
    \App\Http\Middleware\CheckAge::class,
];
```

Vous pouvez enregistrer un middleware pour être utilisé pour un 
groupe de routes.

Voici un exemple d'enregistrement d'un middleware pour un groupe 
de route :

```php
protected $middlewareGroups = [
    'web' => [
        ...,
        \App\Http\Middleware\CheckAge::class,
    ],

    'api' => [
        ...
    ],
];
```

Vous pouvez enregistrer un middleware pour être utilisé pour un
route spécifique dns le fichier `routes/web.php` par exemple.

Voici un exemple d'enregistrement pour une route spécifique :

```php
Route::get('profile', [ProfileController::class, 'index'])
    ->middleware(CheckAge::class);
```