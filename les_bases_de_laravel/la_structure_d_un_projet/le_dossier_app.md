# Le dossier app

---

[Formation laravel de base](../../README.md) > [Les bases de Laravel](../README.md) > [La struture d'un projet](./README.md) > Le dossier app

---

Le dossier app contient la majorité du code que vous ecrivez pour 
votre application.

Il sera charger par l'autoloader de composer dans le namespace App

```json
"autoload": {
    "psr-4": {
        "App\\": "app/",
        "Database\\Factories\\": "database/factories/",
        "Database\\Seeders\\": "database/seeders/"
    }
},
```

Debase il contiendra les répertoire Console, Exceptions, Http, Models
et Providers.

D'autres répertoires seront créés en utilisant la commande make de artisan.

Par exemple le repertoire Jobs n'existera pas tant que vous n'aurez 
pas utilisé la commande suivante

```shell
php artisan make:job
```

Cette commande permet de générer un nouveau job.

> De nombreuses classes peuvent être généré grace a la commande make.
> Pour les lister vous vous pouvez lancer
> ```shell
> php artisan list make
> ```

## Le dossier Broadcasting

Le dossier contient les classes des canaux de diffusion (channel) 
de votre application.

Les channel permettent par exemple d'envoyer de manière asynchrone
des données vers les utilisateurs de votre application.

## Le dossier Console

Le dossier permet de définir des commande accessible en ligne de 
commande grâce à artisan

Le dossier contient également le kernel console ou ds taches 
planifiée peuvent être définies.

## Le dossier Events

Le dossier contient les classes d'évènements qui pourront être dispatcher
par votre application (ex : OrderCreated)

Des listeners pourront être définis pour réagir à ses évènements. 

## Le dossier Exception

Le dossier contient le handler d'exception de l'application.

Ce dossier est approprié pour contenir les exceptions 
personnalisées de l'application.

## Le dossier Http

Le dossier contient les controllers, les middleware et les forms requests.

## Le dossier Jobs

Le dossier contient les jobs de l'application.

Un job est un traitement qui peut-etre placé dans une queue afin 
d'être traité de manière asynchrone ou être traité de manière synchrone.

## Le dossier Listeners

Le dossier contient les listeners de l'application.

Ce sont les traitements qui seront exécutés lorsqu'un évènement sera déclanché.
(Ex : Mettre a jour le stock lorsqu'une commande est passée).

## Le dossier Mails

Le dossier contient les classes représentant les mails envoyé par l'application.

Ces classes permet d'encapsuler au même endroit la logique de construction d'un mail.

## Le dossier Models

Le dossier contient les modèles Eloquent de notre application.

L'ORM fourni une implémentation simple du pattern ActiveRecord afin
de gérer les interactions avec la base de données.

## Le dossier Notifications

Le dossier contiendra le notifications de l'application.

Une notification est très ressemblant à un évènement. Elle permet 
d'envoyer un message a un utilisateur via différents canaux (email,
sms, slack...)

## Le dossier Policies

Le dossier contient les policies de l'application.

Une policy est une classe qui permet de verifier si un utilisateur à accès ou non à une
ressource.

## Le dossier Providers

Le dossier contient les services providers de l'application. Un certain 
nombre de providers sont définit par défaut dans l'application.

Un provider permet : 
 - enregistrer des services dans le container de dépendance
 - enregistrer des évènements
 - effectuer des taches afin de préparer l'application à recevoir des 
requetes

## Le dossier Rules

Le dossier contient les règles de validation personnalisées de l'application