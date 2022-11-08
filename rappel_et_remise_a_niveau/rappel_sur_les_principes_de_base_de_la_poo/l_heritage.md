# L'héritage

---

[Formation laravel de base](../../README.md) > [Rappel et remise a niveau](../README.md) > [Rappel sur les principes de base de la POO](README.md) > L'héritage

---

L'héritage permet de créer une nouvelle classe qui héritera de toutes
les propriétés et méthodes public et protected de la classe parente.

La classe enfant pourra alors si elle le souhaite redéfinir
certaines propriétés et méthodes.

Afin d'herité d'une classe on utilise le mot clef "abstract"

## Exemple

```php
class Personage
{
    protected int $force = 100;

    public function __construct(
        protected int $vie = 100,
    )
    {
    }

    public function attaque()
    {
        echo 'Donne un coup d\'une force de ' . $this->force.'<br>';
    }
}

class Archer extends Personage
{
    public function __construct()
    {
        $vie = 75;
        $this->force = $this->force / 2;

        parent::__construct(vie: $vie);
    }
}

class Mage extends Personage
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
}

$archer = new Archer();
$archer->attaque();

$mage = new Mage();
$mage->attaque();
$mage->soigne();
```

## Les classes abstraite

Les classes abstraites sont des classe qui ne sont pas instatiable.

On y definie l'implementation des certaine methodes ainsi que la signature 
de methode qui doivent être implementé dans les classes enfants.

## Exemple

```php
abstract class Personage
{
    protected int $force = 100;

    public function __construct(
        protected int $vie = 100,
    )
    {
    }

    public function attaque()
    {
        echo 'Donne un coup d\'une force de ' . $this->force.'<br>';
    }
    
    abstract public function ditTonNom(): string;
}

class Archer extends Personage
{
    public function __construct()
    {
        $vie = 75;
        $this->force = $this->force / 2;

        parent::__construct(vie: $vie);
    }
    
    public function ditTonNom() {
        echo 'Je suis un archer <br>';
    }
}

class Mage extends Personage
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
    
    
    public function ditTonNom() {
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