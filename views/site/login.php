<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>

<!doctype html>
<html lang="ru">
<head>
    <link type="text/css" rel="stylesheet" href="../../public/style/main.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet"/>
    <title>Document</title></head>
<body>

<div class="container">
    <div class="form-container">
        <h2 class="auth-form">Регистрация/Вход</h2>
        <?php
        if (!app()->auth::check()):
        ?>
        <form method="post">
            <label><input type="text" class="text-input" required name="login" placeholder="Login"></label>
            <label><input type="password" class="text-input" required name="password" placeholder="Login"></label>
            <input class="input-button" type="submit" value="Submit">
        </form>
    </div>
</div>


</body>
</html>

<?php endif;
