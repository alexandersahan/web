<?php
    require_once("../../database/db_lead.php");
    $id = $_POST['lead_id_update'];
    $name = $_POST['lead_name_update'];
    $phone = $_POST['lead_phone_update'];
    $email = $_POST['lead_email_update'];
    $update = "CALL update_lead('$id', '$name', '$phone', '$email')";
	$run = mysqli_query($conn,$update);
?>
