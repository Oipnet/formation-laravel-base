# Utiliser un layout

---

[Formation laravel de base](../../README.md) > [Les vues](../README.md) > Utiliser un layout

---

## Introduction

Les layouts dans Laravel permettent de définir une structure 
commune pour l'ensemble de votre application. Au lieu d'avoir à 
répéter le même code HTML pour chaque vue, vous pouvez définir un 
layout qui contient le code commun et inclure des sections pour 
les vues spécifiques.

## Création d'un layout

Pour créer un layout dans Laravel, vous devez créer un fichier dans 
le répertoire "resources/views/layouts". Le nom de ce fichier sera 
utilisé pour accéder au layout. Par exemple, si vous créez un 
fichier "app.blade.php", vous pourrez utiliser "app" comme nom de 
layout.

## Structure d'un layout

Un layout est simplement un fichier contenant du code HTML et des 
directives de template pour afficher les sections. Il contient 
généralement le code commun à toutes les vues de votre application, 
comme l'en-tête, le pied de page et la navigation. Il peut 
également inclure des sections pour les vues spécifiques.

Voici un exemple de structure de base pour un layout:

```html
<!DOCTYPE html>
<html>
<head>
    <title>Mon layout</title>
</head>
<body>
    <header>
        <nav>
            <a href="/">Accueil</a>
            <a href="/about">A propos</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>Copyright © {{ date('Y') }}</footer>
</body>
</html>
```

La directive yield permet de créer une section.

## Utilisation d'un layout

Pour utiliser un layout dans vos vues, vous devez utiliser la directive @extends pour définir le layout à utiliser, et la directive @section pour définir les sections spécifiques à inclure.

Voici un exemple de comment utiliser un layout dans une vue:

```html
@extends('layouts.app')

@section('content')
    <h1>Bienvenue sur ma page d'accueil</h1>
@endsection
```

