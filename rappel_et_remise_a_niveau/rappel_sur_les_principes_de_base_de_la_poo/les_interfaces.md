# Les interfaces

---

[Formation laravel de base](../../README.md) > [Rappel et remise a niveau](../README.md) > [Rappel sur les principes de base de la POO](README.md) > Les interfaces

---

Une interface est un contrat qui permet de guider le développeur
dans la definition d'une classe.

Pour se servir d'une interface on utise le mot clef "implements".

Toute les méthode définie dans une interface doivent être
implementées dans les classe qui utilisent cette interface.

A la différnce de l'héritage une classe peut implementer plusieurs 
interfaces

## Exemple

```php
<?php
interface Combatant {
    public function attaque(): void;
}

interface Soigneur {
    public function soigne(): void;
}
abstract class Personage
{
    protected int $force = 100;

    public function __construct(
        protected int $vie = 100,
    )
    {
    }

    public function attaque(): void
    {
        echo 'Donne un coup d\'une force de ' . $this->force.'<br>';
    }

    abstract public function ditTonNom(): void;
}

class Archer extends Personage implements Combatant
{
    public function __construct()
    {
        $vie = 75;
        $this->force = $this->force / 2;

        parent::__construct(vie: $vie);
    }

    public function ditTonNom(): void
    {
        echo 'Je suis un archer <br>';
    }
}

class Mage extends Personage implements Combatant, Soigneur
{
    public function __construct()
    {
        $vie = 150;
        $this->force = $this->force / 5;

        parent::__construct(vie: $vie);
    }

    public function soigne() {
        echo 'Soin de '.($this->force * 10).'<br>';
    }


    public function ditTonNom(): void
    {
        echo 'Je suis un mage <br>';
    }
}

$archer = new Archer();
$archer->attaque();
$archer->ditTonNom();

$mage = new Mage();
$mage->attaque();
$mage->soigne();
$mage->ditTonNom();
```