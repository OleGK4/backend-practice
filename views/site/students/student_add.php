<head>
    <title>Login</title>
</head>
<div class="d-flex justify-content-center">
    <div class="form-container" style="height: max-content; padding: 20px">
        <h2 class="block-header-h2">Новый ученик</h2>
        <form method="post">
            <label><input type="text" class="form-control" required name="last_name" placeholder="Фамилия"></label><br>
            <label><input type="text" class="form-control" required name="first_name" placeholder="Имя"></label><br>
            <label><input type="text" class="form-control" required name="patronymic" placeholder="Отчество"></label><br>
            <label><input type="text" class="form-control" required name="gender" placeholder="Пол"></label><br>
            <label><input type="date" class="form-control" required name="date_of_birth" placeholder="Дата рождения"></label><br>
            <label><input type="text" class="form-control" required name="address" placeholder="Адрес"></label><br>
            <button class="btn btn-warning" type="submit" value="Submit">Создать</button>
        </form>
    </div>
</div>
