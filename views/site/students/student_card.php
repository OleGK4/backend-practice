<head>
    <title>Student card</title>
</head>
<div class="d-flex justify-content-center">
    <div class="form-container" style="width: max-content; height: max-content; padding: 30px ">
        <div class="col">
            <div class="row">
                <div class="row">
                    <div class="col-">
                        <h2 class="block-header-h2-yellow"><?= $message ?? ''; ?></h2>
                        <h2 class="block-header-h2" style="width: max-content">Студент:</h2>
                    </div>
                    <div class="col-sm">
                        <h2 class="block-header-h2-yellow">
                            <?= $student->first_name .' '. $student->last_name .' '. $student->patronymic; ?>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-">
                        <button class="nav-bar-button">
                            <a href="<?= app()->route->getUrl('/student_edit') ?>?id=<?= $student->id ?>">Редактировать</a>
                        </button>
                    </div>
                    <div class="col-">
                        <button class="nav-bar-button">
                            <a href="<?= app()->route->getUrl('/student_delete_confirm') ?>?student_id=<?= $student->id ?>&name=<?= $student->first_name .' '. $student->last_name .' '. $student->patronymic ?>&group_id=<?= $_GET['group_id'] ?>">Удалить</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="container" style="background-color: white; width: 700px; height: max-content; padding: 20px">
                <div class="row">
                    <div class="col-sm-4">
                        <h4 class="h4-subheader-card-description">О студенте</h4>
                    </div>
                    <div class="col-sm-4">
                        <h4 class="h4-subheader-card-description">Успеваемость</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <ul>
                           <li>Фамилия: <?= $student->last_name ?></li>
                           <li>Имя: <?= $student->first_name ?></li>
                           <li>Отчество: <?= $student->patronymic ?></li>
                           <li>Пол: <?= $student->gender ?></li>
                           <li>Дата рождения: <?= $student->date_of_birth ?></li>
                           <li>Адрес: <?= $student->address ?></li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <a href="<?= app()->route->getUrl('/students_subject_filter') ?>?student_id=<?= $_GET['id'] ?>&name=<?= $student->first_name .' '. $student->last_name .' '. $student->patronymic ?>">Выборка по предметам</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>