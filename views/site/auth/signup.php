<head>
    <title>Registration</title></head>
<body>
<div class="d-flex justify-content-center">
    <div class="form-container">
        <h2 class="block-header-h2-yellow"><?= $message ?? ''; ?></h2>
        <h2 class="block-header-h2">Регистрация/Вход</h2>
        <?php
        if (!app()->auth::check()):
        ?>
        <form method="post">
            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
            <label><input type="text" class="form-control"  name="login" placeholder="Login"></label><br>
            <label><input type="password" class="form-control"  name="password" placeholder="Password"></label><br>
            <label><input type="text" class="form-control"  name="name" placeholder="Name"></label><br>
            <button class="btn btn-warning" type="submit" value="Submit">Регистрация</button>
        </form>
    </div>
</div>
<?php endif;
