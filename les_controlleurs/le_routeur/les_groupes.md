# Les routes nommées

---

[Formation laravel de base](../../README.md) > [Les controlleurs](../README.md) > [Le routeur](./README.md) > Les groupes

---

Il est possible de grouper des routes pour leur appliquer des règles communes.

## Les middlewares

Il est possible d'assigner des middlewares à un groupe de route.
Ces derniers sont exécutés dans l'ordre dans lequel ils sont définis.

```php
Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Uses first & second middleware...
    });
 
    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});
```

Un middleware permet d'exécuter du code avant ou apres le request.
Il va permettre par exemple d'ajouter un élément à la request, un header 
à la réponse.

## Les controlleurs

Il est possible d'appliquer un controlleur à un groupe de route

```php
use App\Http\Controllers\OrderController;
 
Route::controller(OrderController::class)->group(function () {
    Route::get('/orders/{id}', 'show');
    Route::post('/orders', 'store');
});
```

## Les prefix

Il est possible de préfixer toutes les URIs d'un groupe de route.

```php
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});
```

On peut également préfixer tous les noms de route d'un groupe

```php
Route::name('admin.')->group(function () {
    Route::get('/users', function () {
        // Route assigned name "admin.users"...
    })->name('users');
});
```