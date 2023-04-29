<head>
    <title>Groups</title>
</head>
<div class="d-flex justify-content-center">
    <div class="form-container">
        <div class="container, container-header-2values">
            <h2 class="block-header-h2">Курс №</h2>
            <h2 class="block-header-h2-yellow"><?= $_GET['course']?></h2>
        </div>
        <h2 class="block-header-h2">Выберите интересующую группу</h2>
        <div class="container">
            <ul class="nav nav-pills" style="background-color: white;">
                <?php
                foreach ($groups as $group) {
                    ?>
                    <li><a style="padding: 10px" href="/backend-practice/group_card?id=<?= $group->id ?>"><?= $group->name ?></a></li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>



