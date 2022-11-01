# Mise en pratique

Nous allons refactorer le code du fichier [register.php](code/register.php)

composer permettra de gérer l'autoloader.

A l'aide de composer nous installerons les librairies suivantes :
 - rakit/validation
 - symfony/serializer
 - symfony/property-access
 - symfony/dotenv

Nous utiliserons les pattern suivant :
 - une facade afin de gérer la validation des données
 - une factory afin de se connecter à la base de donnée
 - le pattern reporitory pour créer les données
 - L'injection de dépendence pour gérer le tout

Voici le code php du fichier final register.php

```php
require __DIR__.'/vendor/autoload.php';

use App\Facade\Validator;
use App\Model\User;
use App\Repository\UserRepository;
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

$errors = [];

require './bootstrap.php';
$container = register_container();

if (!empty($_POST)) {
    $request = $_POST;
    
    $user = new User(login: $request['login'], password: $request['password']);
    $validator = $container->get(Validator::class);
    $errors = $validator->validate($user, ['login' => 'required', 'password' => 'required']);

    if (empty($errors)) {
        $userRepository = $container->get(UserRepository::class);

        $userRepository->create($user);
    }
}
```

Voici la configuration du Container d'injection de dépendance :
```php
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
```