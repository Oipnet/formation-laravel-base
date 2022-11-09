<?php

require_once __DIR__.'/controller/IndexController.php';
require_once __DIR__.'/controller/NotFoundController.php';

$page = $_GET['page'] ?? 'index';

switch ($page) {
    case 'index':
        $controller = new IndexController();
        break;
    default:
        $controller = new NotFoundController();
}

echo $controller->handle();