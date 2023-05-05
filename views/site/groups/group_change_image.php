
<head>
    <title>HTML-форма для загрузки файлов</title>
    <meta charset='utf-8'>
</head>
<form method="post" enctype="multipart/form-data">
    <h2>Форма для загрузки файлов</h2>
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input type="file" class="form-control" name="filename"><br>
    <input class="btn btn-warning" type="submit" value="Отправить">
</form>

