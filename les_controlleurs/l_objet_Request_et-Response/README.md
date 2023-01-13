# L'objet Request et Response

---

[Formation laravel de base](../../README.md) > [Les controlleurs](../README.md) > L'objet Request et Response

---

## Introduction

Dans Laravel, les objets Request et Response permettent de gérer 
les données envoyées et reçues par le serveur lors d'une requête 
HTTP. L'objet Request contient les données envoyées par le client, 
telles que les données de formulaire et les en-têtes, tandis que 
l'objet Response contient les données à renvoyer au client, 
telles que le contenu et les en-têtes de réponse.

## L'objet Request

L'objet Request contient les données envoyées par le client lors 
d'une requête HTTP. Il peut être utilisé pour accéder aux données 
de formulaire, aux en-têtes et aux informations sur l'URL. Par 
exemple, pour accéder à une donnée de formulaire envoyée via la 
méthode post, vous pouvez utiliser la méthode "input" de l'objet 
Request:

```php
$name = $request->input('name');
```

Il est possible de récupérer l'ensemble des données de la Request :

```php
$all = $request->all()
```

Il est ausi possible de filtrer les champs que l'on souhaite 
recuperer dans la request :

```php
$data = $request->only(['name', 'password']);

$data = $request->except(['age']);
```

## Validtaion de la request

L'objet request peut-etre utiliser pour valider la requete recu.

On utilise la méthode validate :

```php
$validatedData = $request->validate([
    'name' => 'required|max:255',
    'email' => 'required|email',
]);
```

Si la request n'est pas valide Laravel renvoie une réponse avec 
un statut HTTP 422 (Unprocessable Entity).

Nous verrons plus en détail la validation des données par la suite.

## L'objet Response

L'objet Response contient les données à renvoyer au client lors 
d'une requête HTTP. Il peut être utilisé pour définir le contenu 
de la réponse, les en-têtes et le statut de réponse. 

Par exemple, pour renvoyer un contenu JSON au client, vous 
pouvez utiliser la méthode "json" de l'objet Response :

```php
return response()->json(['name' => 'John', 'age' => 30]);
```