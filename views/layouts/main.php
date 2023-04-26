<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="../site/style/main.css">
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
        <div class="nav-bar-button">
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход(<?= app()->auth::user()->name ?>)</a>
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
