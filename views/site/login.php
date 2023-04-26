<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>

<!doctype html>
<html lang="ru">
<head>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="../../public/style/main.css">
    <title>Login</title></head>
<body>
<div class="d-flex justify-content-center">
    <div class="form-container">
        <h2 class="auth-form-text">Регистрация/Вход</h2>
        <?php
        if (!app()->auth::check()):
        ?>
        <form method="post">
            <label><input type="text" class="form-control" required name="login" placeholder="Login"></label><br>
            <label><input type="password" class="form-control" required name="password" placeholder="Login"></label><br>
            <button class="btn btn-default" type="submit" value="Submit">Submit</button>
        </form>
    </div>
</div>
</body>
</html>

<?php endif;
