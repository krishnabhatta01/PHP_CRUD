<?php
$id = $_GET['id'];

require('DB.php');
//fetching data from db
$data = $db_object->check_one_table($id);
?>





<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<form class="p-5" method="post" action="DB.php">
    <div class="row mb-3">

        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-5">
            <input type="name" class="form-control" name="name" value="<?= $data['name'] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">age</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="inputPassword3" name="age" value="<?= $data['age'] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Religion</label>
        <div class="col-sm-10">
            <input type="religion" class="form-control" id="inputPassword3" name="religion" value="<?= $data['religion'] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Gender</label>
        <div class="col-sm-10">
            <input type="gender" class="form-control" id="inputPassword3" name="religion" value="<?= $data['gender'] ?>">
        </div>
    </div>


    <a href="update.php?id=<?= $data['id'] ?>">
        <button class="text-danger">
            update
        </button>
    </a>
</form>