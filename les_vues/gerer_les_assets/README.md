# Gérer les assets

---

[Formation laravel de base](../../README.md) > [Les vues](../README.md) > Gerer les assets

---

## Introduction

Webpack est un outil de build utilisé pour gérer les assets de 
votre application, tels que les fichiers JavaScript, CSS et 
images.

Il permet de charger et de combiner ces fichiers de manière 
efficace, ainsi que de les minifier pour une meilleure 
performance.

Afin de faciliter sa configuration Laravel met a disposition un outil
appelé Laravel Mix.

## Installation

Pour utiliser Laravel Mix dans votre application Laravel, 
vous devez d'abord installer les dépendances nécessaires en 
exécutant la commande suivante :

```shell
npm install
```

## Configuration

Vous pouvez configurer Webpack en modifiant le fichier 
"webpack.mix.js" situé à la racine de votre projet. Ce fichier 
contient les paramètres de configuration pour les différents 
types d'assets, tels que les fichiers JavaScript et CSS.

Voici un exemple de configuration pour les fichiers JavaScript et scss:

```js
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
```

## Build

Pour générer les assets optimisés pour votre application, vous 
devez exécuter la commande suivante :

```shell
npm run dev
```

Afin d'ecouter les changement il est également possible d'utiliser
la commande suivante :

```shell
npm run watch
```

Cette commande va compiler et combiner tous les assets selon la 
configuration définie dans le fichier "webpack.mix.js" et les 
placer dans le répertoire "public".
