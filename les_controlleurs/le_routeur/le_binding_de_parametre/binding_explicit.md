# Binding explicit

---

[Formation laravel de base](../../README.md) > [Les controlleurs](../README.md) > [Le routeur](./README.md) >
[Le binding de paramètre](./README.md) > Binding explicit

---

Il est possible de de definir dans le RouteServiceProvider comment 
Laravel doit effectuer le binding.

```php
use App\Models\User;
use Illuminate\Support\Facades\Route;
 
/**
 * Define your route model bindings, pattern filters, etc.
 *
 * @return void
 */
public function boot()
{
    Route::model('user', User::class);
 
    // ...
}
```

Ainsi toutes les route comportant un paramètre 'user' iront chercher 
l'utilisateur en base de donnée.

## Personalisation de la logique de recupération

Dans le RouteServiceProvider on peut définir la facon de récupérer 
l'utilisateur en base.

```php
use App\Models\User;
use Illuminate\Support\Facades\Route;
 
/**
 * Define your route model bindings, pattern filters, etc.
 *
 * @return void
 */
public function boot()
{
    Route::bind('user', function ($value) {
        return User::where('name', $value)->firstOrFail();
    });
 
    // ...
}
```

On peut également surcharger la méthode resolveRouteBinding dans
le modèle Eloquent

```php
/**
 * Retrieve the model for a bound value.
 *
 * @param  mixed  $value
 * @param  string|null  $field
 * @return \Illuminate\Database\Eloquent\Model|null
 */
public function resolveRouteBinding($value, $field = null)
{
    return $this->where('name', $value)->firstOrFail();
}
```

