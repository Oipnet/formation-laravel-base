# Les différentes directives

---

[Formation laravel de base](../../README.md) > [Les vues](../README.md) > Les différentes directives

---

## Introduction

Laravel utilise le moteur de template Blade pour les vues, qui 
offre une variété de directives pour afficher des données, des 
boucles et des conditions. Les directives de Blade permettent de 
rendre votre code plus lisible et plus facile à maintenir.

## Affichage des données

La directive la plus simple de Blade est la double accolade {{ }}, 
qui permet d'afficher des données. Par exemple, pour afficher la 
variable $name, vous pouvez utiliser la directive suivante:

```html
<p>Le nom de l'utilisateur est : {{ $name }}</p>
```

## Les boucles

Blade offre également des directives pour les boucles. La 
directive @foreach permet de boucler sur un tableau de données et 
afficher chaque élément. La directive @for permet de boucler un 
certain nombre de fois et afficher un compteur à chaque itération.

Voici un exemple d'utilisation de la directive @foreach :

```html
<ul>
    @foreach ($items as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>
```

Voici un exemple d'utilisation de la directive @for :

```html
<ul>
    @for ($i = 0; $i < 5; $i++)
        <li>Numéro {{ $i }}</li>
    @endfor
</ul>
```

## Les conditions

Blade offre également des directives pour les conditions. La 
directive @if permet de tester une condition et afficher un 
contenu si elle est vraie. La directive @elseif permet de tester 
une autre condition si la première est fausse. La directive @else 
permet d'afficher un contenu si aucune des conditions précédentes 
n'est vraie.

Voici un exemple d'utilisation de la directive @if :

```html
@if ($age >= 18)
<p>Vous êtes majeur.</p>
@else
<p>Vous êtes mineur.</p>
@endif
```


