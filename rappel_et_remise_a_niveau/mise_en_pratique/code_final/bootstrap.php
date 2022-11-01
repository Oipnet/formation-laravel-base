<?php

use App\DI\Container;
use App\Facade\Validator;
use App\Factory\DatabaseConnector;
use App\Factory\DriverFactory;
use App\Factory\FileConnector;
use App\Factory\FileDriver;
use App\Factory\PdoConnector;
use App\Factory\PdoDriver;
use App\Repository\UserRepository;

function register_container(): Container
{
    $container = new Container();

    $container->register(Validator::class, fn() => new Validator());

    $container->register(PDO::class, fn() => new PDO($_ENV['DATABASE_URL'], $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD']));

    $container->register(DatabaseConnector::class, function () use ($container) {
        return new FileConnector(__DIR__.'/data/');
        // return new PdoConnector($container->get(PDO::class));
    });

    $container->register(DriverFactory::class, function () use ($container) {
        return new FileDriver($container->get(DatabaseConnector::class));
        //return new PdoDriver($container->get(DatabaseConnector::class));
    });

    $container->register(UserRepository::class, function () use ($container) {
        /** @var DriverFactory $driver */
        $driver = $container->get(DriverFactory::class);

        return new UserRepository($driver->getDatabaseConnector());
    });

    return $container;
}