# L'autoloader

---

[Formation laravel de base](../../README.md) > [Rappel et remise a niveau](../README.md) > [Composer](README.md) > L'autoloader

---

Après avoir installé une librairie je peux alors l'utiliser dans mon code directement

```php
<?php

use Realodix\ChangeCase\ChangeCase;

require __DIR__.'/vendor/autoload.php';

$constantCase = ChangeCase::constant('monSuperTest');

var_dump($constantCase);
```

## Autoload de classe perso
Dans le fichier composer.json il est possible de definir son autoloader.

Je vais mettre mon application dans le dossier src et son namespace sera App

```json
{
    "name": "forelse/code",
    "autoload": {
        "psr-4" : {"App\\" : "src"}
    },
    "authors": [
        {
            "name": "Arnaud POINTET",
            "email": "arnaud.pointet@gmail.com"
        }
    ],
    "require": {
        "realodix/change-case": "^3.4"
    }
}
```

Je créé ma classe dans le dossier src
```php
<?php

namespace App;

class Demo
{
    public function __construct()
    {
        echo 'Construction de la classe Demo';
    }
}
```

Je peux maintenant utiliser directement ma classe
```php
<?php

use App\Demo;
use Realodix\ChangeCase\ChangeCase;

require __DIR__.'/vendor/autoload.php';

$constantCase = ChangeCase::constant('monSuperTest');

var_dump($constantCase);

new Demo();
```