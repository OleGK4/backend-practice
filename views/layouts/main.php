<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="../../public/style/main.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet"/>
    <title>Pop it MVC</title>
</head>
<body>
<header>
    <nav class="nav-bar">
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
