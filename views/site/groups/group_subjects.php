<head>
    <title>Subjects</title>
</head>

<?php
//print_r($_GET); // group id & course
?>

<div class="d-flex justify-content-center">
    <div class="form-container" style="height: max-content; padding: 20px">
        <h2 class="block-header-h2">Предметы <?= $_GET['semester'] ?> семестра</h2>
        <div class="row" style="background-color: white">
            <?php if(!empty($groupsubjects[0])){
               ?>
                <div class="col-sm">
                    <ul style="padding: 20px">Предметы:
                        <?php
                        foreach ($groupsubjects as $object) { ?>
                            <li><?= $object->subject->name; ?></li>
                        <?php }
                        ?>
                    </ul>
                </div>
                <div class="col-sm">
                    <ul style="padding: 20px">Часы:
                        <?php
                        foreach ($groupsubjects as $object){ ?>
                            <li><?= $object->hours; ?></li>
                        <?php }
                        ?>
                    </ul>
                </div>
            <?php
            } else {?>
                <div class="col-sm">
                    <h4>Предметов на этом семестре нет!</h4>
                </div>
            <?php
            }  ?>
        </div>
    </div>
</div>
