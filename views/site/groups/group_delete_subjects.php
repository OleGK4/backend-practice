<head>
    <title>Delete subjects</title>
</head>
<div class="d-flex justify-content-center">
    <div class="form-container" style="height: max-content; padding: 20px">
        <h2 class="block-header-h2">Выберите семестр, на котором установлены предметы для удаления</h2>
        <div class="row" style="background-color: white">
            <a style="padding: 10px" href="<?= app()->route->getUrl('/group_delete_subjects') ?>?semester=<?= 1 ?>&group_id=<?= $_GET['group_id'] ?>">1</a>
            <a style="padding: 10px" href="<?= app()->route->getUrl('/group_delete_subjects') ?>?semester=<?= 2 ?>&group_id=<?= $_GET['group_id'] ?>">2</a>
            <a style="padding: 10px" href="<?= app()->route->getUrl('/group_delete_subjects') ?>?semester=<?= 3 ?>&group_id=<?= $_GET['group_id'] ?>">3</a>
            <a style="padding: 10px" href="<?= app()->route->getUrl('/group_delete_subjects') ?>?semester=<?= 4 ?>&group_id=<?= $_GET['group_id'] ?>">4</a>
            <a style="padding: 10px" href="<?= app()->route->getUrl('/group_delete_subjects') ?>?semester=<?= 5 ?>&group_id=<?= $_GET['group_id'] ?>">5</a>
            <a style="padding: 10px" href="<?= app()->route->getUrl('/group_delete_subjects') ?>?semester=<?= 6 ?>&group_id=<?= $_GET['group_id'] ?>">6</a>
            <a style="padding: 10px" href="<?= app()->route->getUrl('/group_delete_subjects') ?>?semester=<?= 7 ?>&group_id=<?= $_GET['group_id'] ?>">7</a>
            <a style="padding: 10px" href="<?= app()->route->getUrl('/group_delete_subjects') ?>?semester=<?= 8 ?>&group_id=<?= $_GET['group_id'] ?>">8</a>
            </div8
        </div>
    </div>
</div>
