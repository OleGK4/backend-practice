
<head>
    <title>HTML-форма для загрузки файлов</title>
    <meta charset='utf-8'>
</head>
<?php
if ($_FILES) {
    if (move_uploaded_file($_FILES['filename']['tmp_name'],
        '/backend-practice/public/images' . $_FILES['filename']['name'])) {
        echo 'Файл успешно загружен';
    } else {
        echo 'Ошибка загрузки файла';
    }
}
?>
<form method="post" enctype="multipart/form-data">
    <h2>Форма для загрузки файлов</h2>
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input type="file" name="filename"><br>
    <input type="submit" value="Отправить">
</form>

