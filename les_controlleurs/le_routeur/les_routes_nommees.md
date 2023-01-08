# Les routes nommées

---

[Formation laravel de base](../../README.md) > [Les controlleurs](../README.md) > [Le routeur](./README.md) > Les routes nommées

---

Les routes nommées permettent de générer facilement les urls
ou effectuer des redirections.

```php
Route::get('/user/profile', function () {
    //
})->name('profile');
```

Génération des urls

```php
$url = route('profile');
 
// Generating Redirects...
return redirect()->route('profile');
 
return to_route('profile');
```

Si la route contient un paramètre, on peut passer ce dernier en second
paramètre de la méthode route

```php
Route::get('/user/{id}/profile', function ($id) {
    //
})->name('profile');
 
$url = route('profile', ['id' => 1]);
```

Si l'on passe d'autres paramètres à la méthode route ces derniers seront 
ajouté à la requête.

```php
Route::get('/user/{id}/profile', function ($id) {
    //
})->name('profile');
 
$url = route('profile', ['id' => 1, 'photos' => 'yes']);
 
// /user/1/profile?photos=yes
```