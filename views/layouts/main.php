<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
</head>
<body>
<header>
    <nav class="navbar">
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
            <a href="<?= app()->route->getUrl('/todirect') ?>">Главная</a>
        </button>
        <button class="nav-bar-button">
            <a href="<?= app()->route->getUrl('/choose_course_groups') ?>">Группы</a>
        </button>
        <button class="nav-bar-button">
            <a href="<?= app()->route->getUrl('/login') ?>">Предметы</a>
        </button>
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
