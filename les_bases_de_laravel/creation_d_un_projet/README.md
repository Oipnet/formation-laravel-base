# Création d'un projet

---

[Formation laravel de base](../../README.md) > [Les bases de Laravel](../README.md) > Création d'un projet

---

## Prérequis

Afin e pouvoir installer un projet laravel on doit s'assurer que 
composer est installé sur la machine locale.

```shell
composer --version
```

## Création du projet

Laravel propose deux façons de créer un projet :
 - Utiliser le "cli" Laravel installé globalement
 - Utiliser composer

```shell
composer global require laravel/installer
 
laravel new example-app
```

```shell
composer create-project laravel/laravel example-app
```

## Environnement de développement local

Laravel met a disposition un server de développement

```shell
cd example-app
php artisan serve
```

L'application est alors disponible http://localhost:8000
