<head>
    <title>Semester of subjects</title>
</head>

<?php
//print_r($_GET); // group id

?>
<div class="d-flex justify-content-center">
    <div class="form-container" style="height: max-content; padding: 20px">
        <h2 class="block-header-h2">Выберите семестр</h2>
        <div class="row" style="background-color: white">
            <a style="padding: 10px" href="/backend-practice/group_subjects?semester=<?= 1 ?>&group_id=<?= $_GET['group_id'] ?>">1</a>
            <a style="padding: 10px" href="/backend-practice/group_subjects?semester=<?= 2 ?>&group_id=<?= $_GET['group_id'] ?>">2</a>
            <a style="padding: 10px" href="/backend-practice/group_subjects?semester=<?= 3 ?>&group_id=<?= $_GET['group_id'] ?>">3</a>
            <a style="padding: 10px" href="/backend-practice/group_subjects?semester=<?= 4 ?>&group_id=<?= $_GET['group_id'] ?>">4</a>
            <a style="padding: 10px" href="/backend-practice/group_subjects?semester=<?= 5 ?>&group_id=<?= $_GET['group_id'] ?>">5</a>
            <a style="padding: 10px" href="/backend-practice/group_subjects?semester=<?= 6 ?>&group_id=<?= $_GET['group_id'] ?>">6</a>
            <a style="padding: 10px" href="/backend-practice/group_subjects?semester=<?= 7 ?>&group_id=<?= $_GET['group_id'] ?>">7</a>
            <a style="padding: 10px" href="/backend-practice/group_subjects?semester=<?= 8 ?>&group_id=<?= $_GET['group_id'] ?>">8</a>
        </div>
    </div>
</div>
