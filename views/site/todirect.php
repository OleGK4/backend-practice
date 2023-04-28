<?php ?>


<head>
    <title>Redirect</title>
</head>
<h2>You've been redirected here!</h2>
<ul><h4>DEBUG</h4>
    <li><a href="<?= app()->route->getUrl('/signup') ?>">signup</a></li>
    <li><a href="<?= app()->route->getUrl('/login') ?>">login</a></li>
    <li><a href="<?= app()->route->getUrl('/logout') ?>">logout</a></li>
    <li><a href="<?= app()->route->getUrl('/subjects') ?>">subjects</a></li>
    <li><a href="<?= app()->route->getUrl('/groups_on_course') ?>">groups_on_course</a></li>
    <li><a href="<?= app()->route->getUrl('/choose_course_groups') ?>">choose_course_groups</a></li>
    <li><a href="<?= app()->route->getUrl('/sum') ?>">sum</a></li>
    <li><a href="<?= app()->route->getUrl('/group_card') ?>">group_card</a></li>
    <li><a href="<?= app()->route->getUrl('/todirect') ?>">todirect</a></li>
</ul>

