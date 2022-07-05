<?php
include'DB.php';
$dat = isset($_GET['id']);
if($dat == true){
    $msg=  "deleted";
}
?>

<p><?=$msg?></p>