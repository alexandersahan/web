<?php
    require_once("../../database/db_lead.php");
    $id = $_POST['shop_id_delete'];
    $delete = "CALL delete_shop('$id')";
    $run = mysqli_query($conn,$delete); //if run true
?>
