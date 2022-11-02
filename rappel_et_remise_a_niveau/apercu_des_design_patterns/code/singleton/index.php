<?php

require './Singleton.php';

$singleton = Singleton::getInstance();
$singleton2 = Singleton::getInstance();
$test = new DateTime();

echo sprintf('Emplacement memoire : %s', spl_object_hash($singleton)).'<br>';
echo sprintf('Emplacement memoire : %s', spl_object_hash($singleton2));
