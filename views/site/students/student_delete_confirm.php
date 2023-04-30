<head>
    <title>Student delete</title>
</head>
<div class="d-flex justify-content-center">
    <div class="form-container" style="width: max-content; height: max-content; padding: 30px ">
        <div class="col">
            <div class="row">
                <div class="row">
                    <div class="col-">
                        <h2 class="block-header-h2-yellow"><?= $message ?? ''; ?></h2>
                        <h2 class="block-header-h2" style="width: max-content">Удалить студента</h2>
                    </div>
                    <div class="col-sm">
                        <h2 class="block-header-h2-yellow">
                            <?= $_GET['name'] ?>?
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-">
                        <button class="nav-bar-button">
                            <a href="<?= app()->route->getUrl('/student_delete') ?>?id=<?= $_GET['student_id'] ?>&group_id=<?= $_GET['group_id'] ?>">Да</a>
                        </button>
                    </div>
                    <div class="col-">
                        <button class="nav-bar-button">
                            <a href="<?= app()->route->getUrl('/student_card?id=' . $_GET['student_id'] . '&group_id=' . $_GET['group_id'] ) ?>">Нет</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>