<?php

require './Facade.php';

$facade = new Facade();
echo sprintf('Resultat du calcul : %d', $facade->process());