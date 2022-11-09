<?php

interface Combatant
{
    public function attaque(): void;
}

interface Soigneur
{
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
        echo 'Donne un coup d\'une force de ' . $this->force . '<br>';
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

    public function soigne(): void
    {
        echo 'Soin de ' . ($this->force * 10) . '<br>';
    }


    public function ditTonNom(): void
    {
        echo 'Je suis un mage <br>';
    }
}

$archer = new Archer();
$archer->ditTonNom();
echo ($archer instanceof Combatant ? 'Je peux attaquer' : 'Je ne peux pas attaquer').'<br>';
echo ($archer instanceof Soigneur ? 'Je peux soigner' : 'Je ne peux pas soigner').'<br>';
$archer->attaque();

$mage = new Mage();
$mage->ditTonNom();
echo ($mage instanceof Combatant ? 'Je peux attaquer' : 'Je ne peux pas attaquer').'<br>';
echo ($mage instanceof Soigneur ? 'Je peux soigner' : 'Je ne peux pas soigner').'<br>';
$mage->attaque();
$mage->soigne();
