<?php

require_once './DvdRentManager.php';
require_once './BluRayRentManager.php';

$voitureFactory = new DvdRentManager();
$voitureFactory->planARent();
echo '<br>';

$trainFactory = new BluRayRentManager();
$trainFactory->planARent();