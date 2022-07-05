
<?php
$course_id = $_GET['id'];

require('DB.php');


if ($db_object->delete($course_id)) {
    header("location:index.php?msg=deleted");
} else {
    header("location:index.php?msg=notdeleted");
}



?>