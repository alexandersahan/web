<?php
    require_once("../../database/db_lead.php");
    $id = $_POST['client_id_update'];
    $name = $_POST['client_name_update'];
    $phone = $_POST['client_phone_update'];
    $email = $_POST['client_email_update'];
    $update = "CALL update_client('$id', '$name', '$phone', '$email')";
	$run = mysqli_query($conn,$update);
?>
