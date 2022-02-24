<?php
    require_once("../../database/db_lead.php");
    $id = $_POST['seller_id_update'];
    $shop = $_POST['seller_shop_update'];
    $name = $_POST['seller_name_update'];
    $phone = $_POST['seller_phone_update'];
    $email = $_POST['seller_email_update'];
    $update = "CALL update_seller('$id', '$shop','$name', '$phone', '$email')";
	$run = mysqli_query($conn,$update);
?>
