<head>
    <title>Delete subjects</title>
</head>
<div class="d-flex justify-content-center">
    <div class="form-container" style="height: max-content; padding: 20px">
        <h2 class="block-header-h2">Удаление предметов <?= $_GET['semester'] ?> семестра</h2>
        <?php if (!empty($subjects[0])) { ?>
        <form method="post">
            <?php foreach ($subjects as $subject) {
                ?>
                <div class="row">
                    <div class="col-sm-">
                        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                        <label><input type="text" class="form-control" disabled
                                      value="<?= $subject->subject->name ?>"></label><br>
                    </div>
                    <div class="col-sm">
                        <label><input type="checkbox" class="form-control" name="subject_id[]"
                                      value="<?= $subject->subject_id ?>"></label><br>
                    </div>
                </div>
                <?php
            }
            } else { ?>
                <h2 class="block-header-h2-yellow">Предметов на этом семестере нет!</h2>
                <?php
            } ?>
            <button class="btn btn-warning" type="submit" value="Submit">Подтвердить</button>
        </form>
    </div>
</div>
