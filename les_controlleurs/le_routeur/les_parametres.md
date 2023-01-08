# Les parametres

---

[Formation laravel de base](../../README.md) > [Les controlleurs](../README.md) > [Le routeur](./README.md) > Les parametres

---

Il est parfois nécessaire d'ajouter des paramêtres aux 
url de l'application (Ex : 'user/{id}').

Le paramètre est défini dans le routeur

```php
Route::get('/user/{id}', function ($id) {
    return 'Utilisateur '.$id;
});
```

Il est possible d'avoir plusieurs paramètres

```php
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});
```

Les paramètres sont inclus entre {}.

Un paramètre est constitue de caractère alphabétique et des underscores.

Les paramètres de l'URI sont injectés dans le callback.

## Paramètres et injection de dépendance

Si des services sont injecté les paramètres de route doivent être 
placé à la fin.

```php
use Illuminate\Http\Request;
 
Route::get('/user/{id}', function (Request $request, $id) {
    return 'User '.$id;
});
```

## Paramètres optionnels

Il est parfois nécessaire de définir des paramètres qui ne sont 
pas obligatoires.

Pour cela on place un ? après le paramètre

```php
Route::get('/user/{name?}', function ($name = 'John') {
    return $name;
});
```

## Verification des paramètres

Il est possible de définir des expressions régulières afin de verifier
les paramètres.

La méthode where prend en argument le nom du paramètre et une expression
regulière.

```php
Route::get('/user/{name}', function ($name) {
    //
})->where('name', '[A-Za-z]+');
 
Route::get('/user/{id}', function ($id) {
    //
})->where('id', '[0-9]+');
 
Route::get('/user/{id}/{name}', function ($id, $name) {
    //
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
```

Pour certaines verifications courantes laravel fournit des helpers

```php
Route::get('/user/{id}/{name}', function ($id, $name) {
    //
})->whereNumber('id')->whereAlpha('name');
 
Route::get('/user/{name}', function ($name) {
    //
})->whereAlphaNumeric('name');
 
Route::get('/user/{id}', function ($id) {
    //
})->whereUuid('id');
 
Route::get('/user/{id}', function ($id) {
    //
})->whereUlid('id');
 
Route::get('/category/{category}', function ($category) {
    //
})->whereIn('category', ['movie', 'song', 'painting']);
```

Si les paramètres ne match pas avec l'expression régulière alors 
une erreur 404 sera levée

## Contrainte globale

Il est possible de définir des contraintes globales dans 
le RouteServiceProvider. Ils sont définis dans la méthode boot.

```php
/**
 * Define your route model bindings, pattern filters, etc.
 *
 * @return void
 */
public function boot()
{
    Route::pattern('id', '[0-9]+');
}
```

Une fois défini le pattern est automatiquement appliqué.

```php
Route::get('/user/{id}', function ($id) {
    // Only executed if {id} is numeric...
});
```