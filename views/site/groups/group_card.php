<!doctype html>
<html lang="ru">
<head>
    <title>Group card</title>
</head>
<body>
<div class="d-flex justify-content-center">
    <div class="form-container" style="width: max-content; height: max-content">
        <div class="row">
            <div class="col-sm">
                <h2 class="block-header-h2">Группа №</h2>
                <h2 class="block-header-h2-yellow">411</h2>
            </div>
            <div class="col-sm">
                <h2 class="block-header-h2">Карточка группы</h2>
            </div>
            <div class="col-sm">
                <button class="nav-bar-button">
                    <a href="<?= app()->route->getUrl('/login') ?>">Редактировать</a>
                </button>
            </div>
        </div>
        <div class="container" style="background-color: white; width: 1000px; height: 600px">
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
                        <li><a href="#student-profile">Иванов Иван Иванович</a></li>
                        <li><a href="#student-profile">Иванов Иван Иванович</a></li>
                        <li><a href="#student-profile">Иванов Иван Иванович</a></li>
                    </ul>
                    <ul>
                        <li><a href="#student-profile">Василевсов Василий Васильевич</a></li>
                        <li><a href="#student-profile">Василевсов Василий Васильевич</a></li>
                        <li><a href="#student-profile">Василевсов Василий Васильевич</a></li>
                    </ul>
                    <ul>
                        <li><a href="#student-profile">Гошин Гоша Гошанов</a></li>
                        <li><a href="#student-profile">Гошин Гоша Гошанов</a></li>
                        <li><a href="#student-profile">Гошин Гоша Гошанов</a></li>
                    </ul>
                </div>
                <div class="col-sm">
                    <h4>О группе</h4>
                </div>
                <div class="col-sm">
                    <h4>Выборка по предметам</h4>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>