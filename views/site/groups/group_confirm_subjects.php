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
                            <label><input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/></label>
                            <label><input type="text" class="form-control" disabled value="<?= $subject->name ?>"></label><br>
                            <label><input type="number" name="subject_id[]" hidden value="<?= $subject->id ?>"></label>
                        </div>
                        <div class="col-sm">
                            <label for="semesters" class="form-control">Семестр изучения</label>
                                <select class="form-control" id="semesters" name="semester[]">
                                    <option class="form-control" value="1">1</option>
                                    <option class="form-control" value="2">2</option>
                                    <option class="form-control" value="3">3</option>
                                    <option class="form-control" value="4">4</option>
                                    <option class="form-control" value="5">5</option>
                                    <option class="form-control" value="6">6</option>
                                    <option class="form-control" value="7">7</option>
                                    <option class="form-control" value="8">8</option>
                                </select><br>
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
