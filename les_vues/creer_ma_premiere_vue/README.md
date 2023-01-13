# Créer ma première vue

---

[Formation laravel de base](../../README.md) > [Les vues](../README.md) > Créer ma première vue

---

## Introduction

Les vues dans Laravel sont utilisées pour afficher les données dans 
un navigateur web. Elles sont généralement utilisées pour afficher 
les données retournées par un contrôleur, mais elles peuvent 
également être utilisées pour afficher des vues partielles ou des 
messages d'erreur.

## Création d'une vue

Pour créer une vue dans Laravel, vous devez d'abord créer un 
fichier dans le répertoire "resources/views". Le nom de ce fichier 
sera utilisé pour accéder à la vue. Par exemple, si vous créez un 
fichier "welcome.blade.php", vous pourrez accéder à cette vue en 
utilisant "welcome" comme nom de vue.

## Structure d'une vue

Une vue est simplement un fichier contenant du code HTML et des 
directives de template pour afficher les données. Laravel utilise 
le moteur de template Blade pour les vues, qui permet d'utiliser 
des directives pour afficher des données, des boucles et des 
conditions.

Voici un exemple de structure de base pour une vue:

```html
<!DOCTYPE html>
<html>
<head>
    <title>Ma première vue</title>
</head>
<body>
    <h1>Bienvenue sur ma première vue</h1>

    <p>Le nom de l'utilisateur est : {{ $name }}</p>
</body>
</html>
```

## Utilisation d'une vue

Pour utiliser une vue dans votre application, vous devez la 
retourner à partir d'un contrôleur. Vous pouvez utiliser la 
méthode view() pour retourner une vue, et passer des données à la 
vue en utilisant un tableau associatif.

Voici un exemple de comment utiliser une vue dans un contrôleur:

```php
public function index()
{
    return view('welcome', ['name' => 'John Doe']);
}
```