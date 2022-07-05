<?php
require('DB.php');

if($db_object->update_data($post)){
    header("location:index.php?msg=updated");
}else{
    header("location:index.php?msg=notupdated");
}



?>