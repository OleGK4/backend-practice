<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="../../public/style/main.css">
    <title>Pop it MVC</title>
</head>
<body>
<header>
    <nav class="navbar">
        <button class="nav-bar-button">
            <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
        </button>
        <button class="nav-bar-button">
            <a href="<?= app()->route->getUrl('/login') ?>">Группы</a>
        </button>
        <button class="nav-bar-button">
            <a href="<?= app()->route->getUrl('/login') ?>">Предметы</a>
        </button>
        <?php
        if (!app()->auth::check()):
        ?>
        <button class="nav-bar-button">
            <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
        </button>
        <button class="nav-bar-button">
            <a href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
        </button>

        <?php
        else:
        ?>
        <button class="nav-bar-button">
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход(<?= app()->auth::user()->name ?>)</a>
        </button>
    </nav>
    <?php
    endif;
    ?>
</header>
<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>
