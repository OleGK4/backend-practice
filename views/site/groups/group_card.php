<head>
    <title>Group card</title>
</head>
<div class="d-flex justify-content-center">
    <div class="form-container" style="width: max-content; height: max-content; padding: 30px ">
        <div class="col">
            <div class="row">
                <div class="row">
                    <div class="col-sm">
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
            <div class="container" style="background-color: white; width: 1200px; height: max-content; padding: 20px">
                <div class="row">
                    <div class="col-sm-4">
                        <h4 class="h4-subheader-card-description">Ученики</h4>
                    </div>
                    <div class="col-sm-4">
                        <h4 class="h4-subheader-card-description"> О группе</h4>
                    </div>
                    <div class="col-sm-4">
                        <h4 class="h4-subheader-card-description">Выборка по предметам</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <ul>
                            <?php
                            $student_count = 0;
                            foreach ($group->students as $student) {
                                $student_count++;
                                ?>
                                <li><a href="<?= app()->route->getUrl('/student_card') ?>?id=<?= $student->id ?>"> <?= $student->first_name .' '. $student->last_name .' '. $student->patronymic; ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="col-md">
                        <p>Количество учеников: <?= $student_count ?></p>
                        <p>Номер: <?= $group->name ?></p>
                        <a href="<?= app()->route->getUrl('/group_choose_semester') ?>?group_id=<?= $_GET['id'] ?>">Изучаемые предметы</a>
                    </div>
                    <div class="col-md">
                        <h4>Предметы</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>