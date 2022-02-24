<?php
    require_once("../../database/db_lead.php");
    $id = $_POST['lead_id_delete'];
    $delete = "CALL delete_lead('$id')";
    $run = mysqli_query($conn,$delete); //if run true
?>
