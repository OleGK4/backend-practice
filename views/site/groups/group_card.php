<head>
    <title>Group card</title>
</head>
<div class="d-flex justify-content-center">
    <div class="form-container" style="width: max-content; height: max-content; padding: 30px ">
        <div class="col">
            <div class="row">
                <div class="row">
                    <div class="col-sm">
                        <h2 class="block-header-h2-yellow"><?= $message ?? ''; ?></h2>
                        <h2 class="block-header-h2" style="width: max-content">Группа №</h2>
                    </div>
                    <div class="col-sm">
                        <h2 class="block-header-h2-yellow">
                            <?= $group->name; ?>
                        </h2>
                    </div>
                </div>
                <div class="col-sm">
                    <h2 class="block-header-h2">Карточка группы</h2>
                </div>
                <div class="col-">
                    <button class="nav-bar-button">
                        <a href="<?= app()->route->getUrl('/group_edit') ?>?id=<?= $group->id ?>">Редактировать</a>
                    </button>
                </div>
            </div>
            <div class="container" style="background-color: white; width: 1500px; height: max-content; padding: 20px">
                <div class="row">
                    <div class="col-md"">
                        <h4 class="h4-subheader-card-description">Студенты</h4>
                    </div>
                    <div class="col-md"">
                        <h4 class="h4-subheader-card-description"> О группе</h4>
                    </div>
                    <div class="col-md"">
                        <h4 class="h4-subheader-card-description">Выборка по предметам</h4>
                    </div>
                    <div class="col-md"">
                        <h4 class="h4-subheader-card-description">Изображение</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                            <form method="post">
                                <label><input type="text" class="form-control" name="search" placeholder="Найти студента"></label><br>
                                <button class="btn btn-warning" type="submit" value="Submit">Найти</button>
                                <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                            </form>
                            <ul>
                            <?php
                            foreach ($students as $student) {
                                ?>
                                <li>
                                    <a href="<?= app()->route->getUrl('/student_card') ?>?id=<?= $student->id ?>&group_id=<?= $group->id ?>"> <?= $student->first_name . ' ' . $student->last_name . ' ' . $student->patronymic; ?></a>
                                </li>
                                <?php
                            } ?>
                            </ul>
                    </div>
                    <div class="col-md">
                        <p>Количество студентов: <?= $student_count ?></p>
                        <p>Номер: <?= $group->name ?></p>
                        <p>Курс: <?= $group->course ?></p>
                        <a href="<?= app()->route->getUrl('/group_choose_semester') ?>?group_id=<?= $group->id ?>">Изучаемые
                            предметы</a>
                    </div>

                    <div class="col-md">
                        <a href="<?= app()->route->getUrl('/student_all_subject_filter') ?>?group_id=<?= $group->id ?>&group_name=<?= $group->name ?>">По
                            всем студентам</a>
                    </div>
                    <div class="col-md">
                        <div class="row">
                            <div class="col-md">
                                <a href="<?= app()->route->getUrl('/group_change_image') ?>?group_id=<?= $group->id ?>">Изменить картинку</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <img style="width: 200px" src="/backend-practice/public/images/<?= $group->image ?>" alt="group image"
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>