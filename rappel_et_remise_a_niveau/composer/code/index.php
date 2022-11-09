<?php

use App\Demo;
use Realodix\ChangeCase\ChangeCase;

require __DIR__.'/vendor/autoload.php';

$constantCase = ChangeCase::constant('monSuperTest');

var_dump($constantCase);

new Demo();