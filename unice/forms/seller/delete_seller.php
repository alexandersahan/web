<?php
    require_once("../../database/db_lead.php");
    $id = $_POST['seller_id_delete'];
    $delete = "CALL delete_seller('$id')";
    $run = mysqli_query($conn,$delete); //if run true
?>
