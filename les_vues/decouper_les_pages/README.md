# Découper les pages

---

[Formation laravel de base](../../README.md) > [Les vues](../README.md) > Découper les pages

---

## Introduction

La découpe d'une page en vues partielles permet de réduire la 
duplication de code et de faciliter la maintenance de votre 
application. Au lieu de répéter le même code HTML dans plusieurs 
vues, vous pouvez créer des vues partielles qui contiennent le 
code réutilisable et les inclure dans les vues nécessaires.

## Création d'une vue partielle

Pour créer une vue partielle dans Laravel, vous devez créer un 
fichier dans le répertoire "resources/views/partials". Le nom de 
ce fichier sera utilisé pour accéder à la vue partielle. 
Par exemple, si vous créez un fichier "_header.blade.php", vous 
pourrez utiliser "_header" comme nom de vue partielle.

Par convention on prefixe le nom d'une vue partielle par un '_'

## Utilisation d'une vue partielle

Pour utiliser une vue partielle dans une autre vue, vous pouvez 
utiliser la directive @include. Par exemple, pour inclure la vue 
partielle "header" dans la vue "welcome", vous pouvez utiliser 
la directive suivante:

```html
@include('partials._header')
```

## Passage de données

Il est également possible de passer des données à une vue 
partielle en utilisant la directive @include et en fournissant un 
tableau associatif de données. Par exemple, pour passer un tableau 
de données $menu à la vue partielle "header", vous pouvez utiliser 
la directive suivante:

```html
@include('partials._header', ['menu' => $menu])
```