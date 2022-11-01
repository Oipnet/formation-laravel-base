<?php

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

?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Créer un compte</h1>
            <form method="post" novalidate>
                <div class="form-group has-validation">
                    <label for="login" class="form-label">Identifiant</label>
                    <input type="text" id="login" name="login" class="form-control <?php if (isset($errors['login']) && !empty($errors['login'])): ?>is-invalid<?php endif; ?>" placeholder="Identifiant" required>
                    <div class="invalid-feedback"><?= $errors['login'] ?? '' ?></div>
                </div>
                <div class="form-group has-validation">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" id="password" name="password" class="form-control <?php if (isset($errors['password']) && !empty($errors['password'])): ?>is-invalid<?php endif; ?>" placeholder="Mot de passe" required>
                    <div class="invalid-feedback"><?= $errors['password'] ?? ''?></div>
                </div>
                <div class="mt-2 d-flex">
                    <input type="submit" class="btn btn-primary btn-block w-100" value="Créer un compte">
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>
</html>
