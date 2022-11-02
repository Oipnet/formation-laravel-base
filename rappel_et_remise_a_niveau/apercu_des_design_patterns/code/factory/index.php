<?php

require_once './VoitureFactory.php';
require_once './TrainFactory.php';

$voitureFactory = new VoitureFactory();
$voitureFactory->roule();
echo '<br>';

$trainFactory = new TrainFactory();
$trainFactory->roule();