# Gestion de dependances

---

[Formation laravel de base](../../README.md) > [Rappel et remise a niveau](../README.md) > [Composer](README.md) > Gestion des dépendances

---

Les dependances doivent être lister dans la partie require ou
require-dev du fichier composer.json.

Si par exemle j'ai besoin d'un client http :
```json
{
  "name": "forelse/code",
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

La liste des package est disponible sur le site [packagist.org](https://packagist.org/)

Pour installer les dependances nous utilisons la commande 

```shell
composer install
```

Mise a jour des dépendances

```shell
composer update
```