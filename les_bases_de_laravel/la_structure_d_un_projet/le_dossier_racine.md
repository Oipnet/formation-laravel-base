# Le dossier racine

---

[Formation laravel de base](../../README.md) > [Les bases de Laravel](../README.md) > [La struture d'un projet](./README.md) > Le dossier racine

---

## Le dossier app

Le dossier app contient la code de votre application.

La structure de se répertoire sera présenté par la suite.

Presque toutes les classes de votre application se trouveront dans 
ce repertoire

## Le dossier bootstrap

Le dossier bootstrap contient le fichier app.php qui permet 
d'initialiser le framework.

Il contient également un dossier de cache qui sera généré par le 
framework pour optimiser les performances.

Les fichiers de ce répertoire ne devront en général pas être 
modifiés.

## Le dossier config

Comme son nom l'indique le dossier config contiendra la 
configuration de l'application.

Il est conseillé de prendre le temps de lire les fichiers afin 
de se familiariser avec les options disponibles.

## Le dossier database

Le dossier contient les migrations de base de données. Elles 
permettent de versionner la structure de la base de données

Nous y stockerons également les factories et les seeds qui 
permettre de remplir la base de données.

Nous pouvons aussi utiliser ce dossier pour y mettre placer une 
base de données SQLite.

## Le dossier lang

Le dossier contient les fichiers de traduction de l'application

## Le dossier public

Le repertoire public est le point d'entré de toute les requètes.

Le repertoire contient également les images, css est js nécessaire 
dans votre application.

## Le dossier resources

Le dossier contient les vues ainsi que les fichier js et css non
compilés.

## Le dossier routes

Le repertoire contient la définition des routes de l'application.
Par défaut il contient les fichiers web.php, api.php, console.php 
et channel.php

---
Le fichier web.php contient les routes placées dans le middleware web
qui fournit :

 - une session
 - une protection CSRF
 - Un cryptage des cookies

Si l'application n'est pas une API REST toutes les routes seront 
probablement définient dans ce fichier.
---
Le fichier api.php contient les routes placées dans le middleware api 
qui fournit : 

 - un mécanisme STATELESS (pas de session)
 - Une authentification par jetons
---
Le fichier console.php permet de définir les commandes disponibles
dans votre application.

Même si ce fichier ne définie pas des routes HTTP, il définit des 
points d'entrées de la console.
---
Le fichier channel.php permet d'enregistrer les canaux de diffusion 
d'évènements que l'application prend en charge.


## Le dossier storage

Le dossier contient les logs, les templates compilé, le cache et 
d'autres fichiers généré par le framework.

Ce dossier est divisé en 3 dossiers :
 - Le dossier app : il contient les fichiers généré par l'application
 - le dossier framework : il contient les fichier généré par le framework
et le cache
 - le dossier log : il contient les log de l'application

Le dossier storage/app/public peut etre utilisé pour enregistré les
fichiers générés par l'utilisateur (avatar) qui doivent être accéssible au public

Il faut créer un lien symbolique dans public/storage qui pointera 
vers ce dossier.

```shell
php artisan storage:link
```

## Le dossier tests

Le dossier contient les tests automatisé écrit avec PHPUnit.

Les tests peuvent etre lancé avec la commande suivante.

```shell
php artisan test
```

## Le dossier vendor

Le dossier contient les dépendance composer du projet