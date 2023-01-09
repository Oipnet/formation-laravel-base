# Model binding

---

[Formation laravel de base](../../README.md) > [Les controlleurs](../README.md) > [Le routeur](./README.md) >
[Le binding de paramètre](./README.md) > Model binding

---

Lorsque l'on passe un id de model dans une url on veut 
généralement récuperer ce modèle.

Le model binding de Laravel permet de le récupérer automatiquement.

## Binding implicite

Laravel récupère automatiquement les modèles qui sont typés et ont
un nom qui match avec le nom du paramètre dans l'url.

```php
use App\Models\User;
 
Route::get('/users/{user}', function (User $user) {
    return $user->email;
});
```

Si aucun modèle n'est trouvé une page 404 sera retournée.

Cette technique fonctionne aussi si on utilise un controller.

```php
use App\Http\Controllers\UserController;
use App\Models\User;
 
// Route definition...
Route::get('/users/{user}', [UserController::class, 'show']);
 
// Controller method definition...
public function show(User $user)
{
    return view('user.profile', ['user' => $user]);
}
```

## Personalisation de la clef

L'url ne comporte par toujours un id on peut faire passer un slug.

```php
use App\Models\Post;
 
Route::get('/posts/{post:slug}', function (Post $post) {
    return $post;
});
```

La clef a utilisé dans le model binding peut également être définie
directement dans le modèle en surchargeant la méthode getRouteKeyName

```php
/**
 * Get the route key for the model.
 *
 * @return string
 */
public function getRouteKeyName()
{
    return 'slug';
}
```

## Personalisation de la page d'erreur

Il est possible de changer le comportement en cas de modèle non trouvé.
On peut par exemple renvoyer sur la page d'accueil à la place 
d'une page d'erreur 404

```php
use App\Http\Controllers\LocationsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
 
Route::get('/locations/{location:slug}', [LocationsController::class, 'show'])
        ->name('locations.view')
        ->missing(function (Request $request) {
            return Redirect::route('locations.index');
        });
```