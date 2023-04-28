

<!doctype html>
<html lang="ru">
<head>
    <title>Groups</title>
</head>
<body>
<div class="d-flex justify-content-center">
    <div class="form-container">
        <div class="container, container-header-2values">
            <h2 class="block-header-h2">Курс №</h2>
            <h2 class="block-header-h2-yellow"><?= $_GET['course']?></h2>
        </div>
        <h2 class="block-header-h2">Выберите интересующую группу</h2>
        <div class="container" style="background-color: white;">
            <ul class="nav nav-pills" >
                <?php
                foreach ($groups as $group) {
                    ?>
                    <li><a href="/backend-practice/group_card?id=<?= $group->id ?>"><?= $group->name ?></li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>
</body>
</html>


