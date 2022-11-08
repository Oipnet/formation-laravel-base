# Les classes

## Présentation
Une classe est un rassemblement de propriétés et de méthodes sur un sujet particulier.

Pour chaques propriété ou méthode nous pouvons preciser le niveau de visibilité :
 - public : Accessible pour tout le monde.
 - privé : Accessible uniquement dans la classe.
 - protected : Accessible dans la classe et les classes qui hérite de cette dernière.

Une classe permet de construire des objets que l'on appele instance de classe.

## Exemple :

```php
class Voiture {
    public function __construct(
        private string $marque,
        private int $cylidree = 150
    ) {}
    
    public function getMarque(): string
    {
        return $this->marque;
    }
    
    public function getCylindree(): int
    {
        return $this->cylidree;
    }
}

$voiture1 = new Voiture({ marque: "Citroen" });
$voiture2 = new Voiture({ marque: "Renault", cylindree: 120 });

echo $voiture1->getCylindree(); // 150
echo $voiture2->getMarque(); // Renault
```

## Les propriété ou méthodes statique

Une propriété ou méthode statique est une propriété ou méthode qui 
n'appartient pas à une instance mais à la classe dans laquelle elle a 
été définie.

## Exemple

```php
class Foo {
    private static string $bar = 'bar';
    
    public static getBar(): string
    {
        return self::$bar;
    }
}

echo Foo::getBar(); // bar
```
    