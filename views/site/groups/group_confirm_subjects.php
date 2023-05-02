<?php
$_GET['group_id'] = $group_id;
?>

<head>
    <title>Submit subjects</title>
</head>
<div class="d-flex justify-content-center">
    <div class="form-container" style="height: max-content; padding: 20px">
        <h2 class="block-header-h2">Выбор предметов</h2>
        <form method="post">
            <?php if($choosen){
                foreach ($choosen as $subject){?>
                    <div class="row">
                        <div class="col-sm-">
                            <label><input type="text" class="form-control" disabled value="<?= $subject->name ?>"></label><br>
                            <label><input type="number" name="subject_id[]" hidden value="<?= $subject->id ?>"></label>
                            <label><input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/></label>
                        </div>
                        <div class="col-sm">
                            <label><input type="number" class="form-control" placeholder="Семестр" name="semester[]"></label><br>
                        </div>
                        <div class="col-sm">
                            <label><input type="number" class="form-control" placeholder="Часы" name="hours[]"></label><br>
                        </div>
                    </div>
                    <?php
                }
            } ?>
            <button class="btn btn-warning" type="submit" value="Submit">Подтвердить</button>
        </form>
    </div>
</div>
