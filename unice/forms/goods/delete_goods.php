<?php
    require_once("../../database/db_lead.php");
    $id = $_POST['goods_id_delete'];
    $delete = "CALL delete_goods('$id')";
    $run = mysqli_query($conn,$delete); //if run true
?>
