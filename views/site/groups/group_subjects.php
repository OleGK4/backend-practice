<head>
    <title>Subjects</title>
</head>

<?php
print_r($_GET); //group id & course
var_dump($subjects); //group id & course

?>
<div class="d-flex justify-content-center">
    <div class="form-container" style="height: max-content; padding: 20px">
        <h2 class="block-header-h2">Предметы <?= $_GET['semester'] ?> семестра</h2>
        <div class="row" style="background-color: white">
            <?php
            foreach ($subjects->name as $name) {
                echo $name;
            ?>
                <ul>Предметы:
                    <li><?= $subject->name, $subject->hours ?></li>
                </ul>
                <?php
            }
            ?>
        </div>
    </div>
</div>
