<?php

require './DatabaseManager.php';

$databaseManager = DatabaseManager::getInstance();
$databaseManager2 = DatabaseManager::getInstance();

echo sprintf('Emplacement memoire : %s', spl_object_hash($databaseManager)).'<br>';
echo sprintf('Emplacement memoire : %s', spl_object_hash($databaseManager2));
