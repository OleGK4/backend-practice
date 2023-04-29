<head>
    <title>Group card</title>
</head>
<div class="d-flex justify-content-center">
    <div class="form-container" style="width: max-content; height: max-content; padding: 30px ">
        <div class="row">
            <div class="col-sm" style="display:flex; flex-direction: row">
                <h2 class="block-header-h2" style="width: max-content">Группа №</h2>
                <h2 class="block-header-h2-yellow">
                    <?= $group->name; ?>
                </h2>
            </div>
            <div class="col-sm">
                <h2 class="block-header-h2" style="width: max-content">Карточка группы</h2>
            </div>
            <div class="col-sm">
                <button class="nav-bar-button">
                    <a href="<?= app()->route->getUrl('/group_edit') ?>?id=<?= $group->id ?>">Редактировать</a>
                </button>
            </div>
        </div>
        <div class="container" style="background-color: white; width: max-content; height: max-content; padding: 10px">
            <div class="row">
                <div class="col-sm">
                    <h4>Ученики</h4>
                </div>
                <div class="col-sm">
                    <h4>О группе</h4>
                </div>
                <div class="col-sm">
                    <h4>Выборка по предметам</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <ul>
                        <?php
                        $student_count = 0;
                        foreach ($group->students as $student) {
                            $student_count++;
                            ?>
                            <li><a href="#student-profile"><?= $student->first_name ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-sm">
                    <p>Количество учеников: <?= $student_count ?></p>
                    <p>Номер: <?= $group->name ?></p>
                    <a href="<?= app()->route->getUrl('/group_choose_semester') ?>?group_id=<?= $_GET['id'] ?>">Изучаемые предметы</a>
                </div>
                <div class="col-sm">
                    <h4>Предметы</h4>
                </div>
            </div>
        </div>
    </div>
</div>