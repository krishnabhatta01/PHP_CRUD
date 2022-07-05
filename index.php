<?php
require('DB.php');
$datas = $db_object->check_table();

if (isset($_POST['submit'])) {
    //save data from about pageY


    if ($db_object->save($_POST)) {
        echo "Data saved";
    } else {
        echo "Data failed to save";
    }
} else {
    $message = null;
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/fa75532a93.js" crossorigin="anonymous"></script>
</head>

<body>



    <div class="card" p-5>
        <div class="card-body">
            <h5 class="alert alert-success" role="alert">

                <?php
                if (isset($_GET['msg']) == 'deleted') {
                    echo 'Data deleted';
                } elseif (isset($_GET['msg']) == 'notdeleted') {
                    echo 'Data failed to delete';
                }
                
                ?>
            </h5>

            <form action="" method="post">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">age</th>
                            <th scope="col">religion</th>
                            <th scope="col">gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><input type="text" name="name"></td>
                            <td><input type="number" name="age"></td>
                            <td><input type="text" name="religion"></td>
                            <td><input type="text" name="gender"></td>
                        </tr>
                    </tbody>
                </table>
                <input type="submit" name='submit' class="btn btn-primary" value="Add">
            </form>
        </div>
    </div>



    <form class="row g-3">
        <!-- ========== tables-wrapper start ========== -->
        <div class="tables-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">

                        <div class="table-wrapper table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>

                                        <th>
                                            <h6>S.no</h6>
                                        </th>
                                        <th>
                                            <h6>Name</h6>
                                        </th>
                                        <th>
                                            <h6>Age</h6>
                                        </th>
                                        <th>
                                            <h6>religion</h6>
                                        </th>
                                        <th>
                                            <h6>Gender</h6>
                                        </th>
                                    </tr>
                                    <!-- end table row-->
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($datas as $one) { ?>

                                        <tr>

                                            <td class="min-width">
                                                <?=
                                                $one['id'];
                                                ?>
                                            </td>
                                            <td class="min-width">
                                                <?=
                                                $one['name']
                                                ?>
                                            </td>
                                            <td class="min-width">
                                                <?=
                                                $one['age']
                                                ?>
                                            </td>
                                            <td class="min-width">
                                                <?=
                                                $one['religion']
                                                ?>
                                            </td>
                                            <td class="min-width">
                                                <?=
                                                $one['gender']
                                                ?>
                                            </td>
                                            <td>

                                                <div class="action">
                                                    <a href="delete.php?id=<?= $one['id'] ?>" mx-3>

                                                        <i class="fa-regular fa-trash-can"></i>

                                                    </a>
                                                    <a href="edit.php?id=<?= $one['id'] ?>">
                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                    </a>

                                                </div>

                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    <!-- end table row -->
    </form>

</body>

</html>