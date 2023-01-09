# Enum binding

---

[Formation laravel de base](../../README.md) > [Les controlleurs](../README.md) > [Le routeur](./README.md) > 
[Le binding de paramètre](./README.md) > Enum binding

---

Avec l'introduction des Enum en php 8.1 laravel a mis en place un binding 
depuis ces derniers.

Si le paramètre ne matche pas avec les valeur de l'enum une erreur 404 sera
retournée.

```php
<?php
 
namespace App\Enums;
 
enum Category: string
{
    case Fruits = 'fruits';
    case People = 'people';
}
```
```php
use App\Enums\Category;
use Illuminate\Support\Facades\Route;
 
Route::get('/categories/{category}', function (Category $category) {
    return $category->value;
});
```