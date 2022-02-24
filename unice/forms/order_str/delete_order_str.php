<?php
    require_once("../../database/db_lead.php");
    $id = trim($_POST["order_str_id_delete"]);

    $delete = "CALL delete_order_str('$id')";
    $run = mysqli_query($conn,$delete); //if run true
?>
