<?php
    require_once("../../database/db_lead.php");
    $id = $_POST['shop_id_update'];
    $shop_lead = $_POST['shop_lead_update'];
    $shop_address = $_POST['shop_address_update'];
    $shop_sold = $_POST['shop_sold_update'];
    $shop_bought = $_POST['shop_bought_update'];
    $shop_rent = $_POST['shop_rent_update'];
    $update = "CALL update_shop('$id', '$shop_lead', '$shop_address', '$shop_sold', '$shop_bought', '$shop_rent')";
	$run = mysqli_query($conn,$update);
?>
