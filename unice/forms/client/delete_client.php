<?php
    require_once("../../database/db_lead.php");
    $id = $_POST['client_id_delete'];
    $delete = "CALL delete_client('$id')";
    $run = mysqli_query($conn,$delete); //if run true
?>
