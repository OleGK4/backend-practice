<head>
    <title>Groups</title>
</head>
<div class="d-flex justify-content-center">
    <div class="form-container">
        <div class="container, container-header-2values">
            <h2 class="block-header-h2">Курс №</h2>
            <h2 class="block-header-h2-yellow"><?= $_GET['course'] ?></h2>
        </div>
        <div class="container">
            <?php if (!empty($groups[0])) { ?>
                <h2 class="block-header-h2">Выберите интересующую группу</h2>
                <ul class="nav nav-pills" style="background-color: white;">
                    <?php
                    foreach ($groups as $group) {
                        ?>
                        <li><a style="padding: 10px" href="<?= app()->route->getUrl('/group_card') ?>?id=<?= $group->id ?>"><?= $group->name ?></a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <?php
            } else { ?>
                <h2 class="block-header-h2">Групп на этом курсе нет!</h2>
                <?php
            }
            ?>
        </div>
    </div>
</div>



