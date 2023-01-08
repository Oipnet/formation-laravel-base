# Les bases du routeur

---

[Formation laravel de base](../../README.md) > [Les controlleurs](../README.md) > [Le routeur](./README.md) > Les bases du routeur

---

Les routes sont définis dans le dossier routes. Pour les routes accessible en 
http elle seront définis dans les fichiers web.php et api.php.

Une route xde base se défini à l'aide d'une URI et une closure qui 
sera exécuté lorsque l'on intéroge cette route.

```php
use Illuminate\Support\Facades\Route;
 
Route::get('/hello-world', function () {
    return 'Hello World';
});
```

Les fichiers de routes sont chargé à l'aide d'un provider (App\Providers\RouteServiceProvider)

Le fichier web.php défini les routes accessible depuis le navigateur 
web. Elles sont assigné au middleware web qui met en place le systeme
de session ainsi que la protection CSRF.

Le fichier api.php défini les routes api de l'application. Elles ont 
un fonctionnement stateless et propose une authentification via token.
Le middleware api ajoute par défaut le préfix /api aux url des routes.

## Les méthodes disponibles

Le routeur permet de définir le verb http auquel la route répond.

```php
Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);
```

Il est parfois nécessaire de réponde à plusieurs verbs

```php
Route::match(['get', 'post'], '/', function () {
    //
});
 
Route::any('/', function () {
    //
});
```

## Injection de dépendance

Il est possible d'injecter des dépendances dans le callback en 
typant les données. Le service doit etre définit dans le service provider 
pour pouvoir être injecté.

Par exemple il est possible d'injecter la requête.

```php
use Illuminate\Http\Request;
 
Route::get('/users', function (Request $request) {
    // ...
});
```

## La protection CSRF

Tous les formulaires ayant pour méthode POST, PUT, PATCH ou DELETE
doivent inclure un token CSRF. Sinon la requête sera rejetée.

Le moteur de template blade met a disposition une directive pour 
injecter le token.

```html
<form method="POST" action="/profile">
    @csrf
    ...
</form>
```

## Les redirections

Il est possible de définir des redirections. 

Par défaut le routeur retourne une redirection de type temporaire (302)

```php
Route::redirect('/here', '/there');
```

Il est possible de définir le type de redirection.

```php
Route::redirect('/here', '/there', 301);
```

Il existe également une mthode afin de faire une redirection permanante.

```php
Route::permanentRedirect('/here', '/there');
```

## Les routes vues

Il est possible d'avoir des route pour lequel on souhaite uniquement 
afficher une vue sans avoir besoin de controller (Ex : Conditions générale
de vente)

```php
Route::view('/bienvenue', 'bienvenue');
 
Route::view('/bienvenue', 'bienvenue', ['name' => 'John DOE']);
```

## Lister les routes

Artisan fourni des commandes afin cde lister les routes de notre 
application

```php
php artisan route:list
```

Afin d'avoir les middleware applique aux différentes route il est 
possible d'ajouter l'option -v

```php
php artisan route:list -v
```

Il est aussi possible de filtrer les resultats

```php
php artisan route:list --path=api
```