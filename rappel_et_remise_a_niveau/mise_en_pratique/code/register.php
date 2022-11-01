<?php

$errors = [];

if (!empty($_POST)) {
    $request = $_POST;
    if (empty($request['login']) ||
        empty($request['password'])
    ) {
        if (empty($request['login'])) {
            $errors['login'] = 'Le login est obligatoire';
        }
        if (empty($request['password'])) {
            $errors['password'] = 'Le le mot de passe est obligatoire';
        }
    }

    if (empty($errors)) {
        $pdo = new PDO('mysql:host=sql11.freemysqlhosting.net;dbname=sql11529658', 'sql11529658', 'M2fcJbaHmV');

        $stmt = $pdo->prepare('INSERT INTO apo_user (login, password) VALUES (:login, :password)');
        $stmt->execute([
            'login' => $request['login'],
            'password' => password_hash($request['password'], PASSWORD_BCRYPT),
        ]);
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
