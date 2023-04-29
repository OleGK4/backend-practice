<head>
    <title>Group edit</title>
</head>
<div class="d-flex justify-content-center">
    <div class="form-container">
        <h2 class="block-header-h2">Редактирование</h2>
        <div class="row">
            <div class="col-sm">
                <button class="nav-bar-button">
                    <a href="/backend-practice/student_add?group_id=<?= $_GET['id'] ?>">Добавить ученика</a>
                </button>
            </div>
            <div class="col-sm">
                <button class="nav-bar-button">
                    <a href="<?= app()->route->getUrl('/signup') ?>">Добавить предметы</a>
                </button>
            </div>
        </div>
        <div class="row" style="margin-top: 30px">
            <div class="col-sm">
                <button class="nav-bar-button">
                    <a href="<?= app()->route->getUrl('/signup') ?>">Удалить группу</a>
                </button>
            </div>
            <div class="col-sm">
                <button class="nav-bar-button">
                    <a href="<?= app()->route->getUrl('/signup') ?>">Удалить предметы</a>
                </button>
            </div>
        </div>
    </div>
</div>