<head>
    <title>Add subjects</title>
</head>
<div class="d-flex justify-content-center">
    <div class="form-container" style="height: max-content; padding: 20px">
        <h2 class="block-header-h2">Выбор предметов</h2>
        <form method="post">
            <?php if ($subjects) {
                foreach ($subjects as $subject) {
                    ?>
                    <div class="row">
                        <div class="col-sm-">
                            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                            <label><input type="text" class="form-control" disabled
                                          value="<?= $subject->name ?>"></label><br>
                        </div>
                        <div class="col-sm">
                            <label><input type="checkbox" class="form-control" name="id[]"
                                          value="<?= $subject->id ?>"></label><br>
                        </div>
                    </div>
                    <?php
                }
            } ?>
            <button class="btn btn-warning" type="submit" value="Submit">Подтвердить</button>
        </form>
    </div>
</div>
