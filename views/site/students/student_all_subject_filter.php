<head>
    <title>All students subject filter</title>
</head>
<div class="d-flex justify-content-center">
    <div class="form-container" style="width: max-content; height: max-content; padding: 30px ">
        <div class="col">
            <div class="row">
                <div class="row">
                    <div class="col-">
                        <h2 class="block-header-h2-yellow"><?= $message ?? ''; ?></h2>
                        <h2 class="block-header-h2" style="width: max-content">Сводка студентов группы №</h2>
                    </div>
                    <div class="col-sm">
                        <h2 class="block-header-h2-yellow">
                            <?= $_GET['group_name'] ?>
                        </h2>
                    </div>
                </div>
            </div>
            <?php if ((!empty($studentsMarks->marks[0]))) { ?>
                <div class="container"
                     style="background-color: white; width: 800px; height: max-content; padding: 20px">
                    <div class="row">
                        <div class="col-lg">
                            <h4 class="h4-subheader-card-description">Студент</h4>
                        </div>
                        <div class="col-lg">
                            <h4 class="h4-subheader-card-description">Предмет</h4>
                        </div>
                        <div class="col-lg">
                            <h4 class="h4-subheader-card-description">Оценка</h4>
                        </div>
                        <div class="col-lg">
                            <h4 class="h4-subheader-card-description">Дата</h4>
                        </div>
                        <div class="col-lg">
                            <h4 class="h4-subheader-card-description">Тип</h4>
                        </div>
                        <div class="col-lg">
                            <h4 class="h4-subheader-card-description">Комментарий</h4>
                        </div>
                    </div>
                    <?php foreach ($studentsMarks->marks as $mark) { ?>
                        <div class="row">
                            <div class="col-lg">
                                <?= $mark->student->first_name . ' ' . $mark->student->last_name . ' ' . $mark->student->patronymic ?>
                            </div>
                            <div class="col-lg">
                                <?= $mark->subject->name ?>
                            </div>
                            <div class="col-lg">
                                <?= $mark->mark ?>
                            </div>
                            <div class="col-lg">
                                <?= $mark->date ?>
                            </div>
                            <div class="col-lg">
                                <?= $mark->mark_control->name ?>
                            </div>
                            <div class="col-lg">
                                <?= $mark->comment ?>
                            </div>
                        </div>
                        <?php
                    } ?>
                </div>
                <?php
            } else { ?>
                <div class="container"
                     style="background-color: white; width: 700px; height: max-content; padding: 20px">
                    <h2 style="width: max-content">Оценок нема!</h2>
                </div>
                <?php
            } ?>
        </div>
    </div>
</div>