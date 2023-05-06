<head>
    <title>Subject filter</title>
</head>
<div class="d-flex justify-content-center">
    <div class="form-container" style="width: max-content; height: max-content; padding: 30px ">
        <div class="col">
            <div class="row">
                <div class="row">
                    <div class="col-">
                        <h2 class="block-header-h2-yellow"><?= $message ?? ''; ?></h2>
                        <h2 class="block-header-h2" style="width: max-content">Сводка студента:</h2>
                    </div>
                    <div class="col-sm">
                        <h2 class="block-header-h2-yellow">
                            <?= $_GET['name'] ?>
                        </h2>
                    </div>
                </div>
            </div>
            <?php if (!empty($studentMarks[0])) { ?>
                <div class="container"
                     style="background-color: white; width: 700px; height: max-content; padding: 20px">
                    <div class="row">
                        <div class="col-md">
                            <h4 class="h4-subheader-card-description">Предмет</h4>
                        </div>
                        <div class="col-md">
                            <h4 class="h4-subheader-card-description">Оценка</h4>
                        </div>
                        <div class="col-md">
                            <h4 class="h4-subheader-card-description">Дата</h4>
                        </div>
                        <div class="col-md">
                            <h4 class="h4-subheader-card-description">Тип</h4>
                        </div>
                        <div class="col-md">
                            <h4 class="h4-subheader-card-description">Комментарий</h4>
                        </div>
                    </div>
                    <?php foreach ($studentMarks as $mark) { ?>
                        <div class="row">
                            <div class="col-md">
                                <?= $mark->subject->name ?>
                            </div>
                            <div class="col-md">
                                <?= $mark->mark ?>
                            </div>
                            <div class="col-md">
                                <?= $mark->date ?>
                            </div>
                            <div class="col-md">
                                <?= $mark->mark_control->name ?>
                            </div>
                            <div class="col-md">
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