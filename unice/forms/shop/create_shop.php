<?php
    require_once("../../database/db_lead.php");
    $lead = trim($_POST["shop_lead_create"]);
    $address = trim($_POST["shop_address_create"]);
    $sold = trim($_POST["shop_sold_create"]);
    $bought = trim($_POST["shop_bought_create"]);
    $rent = trim($_POST["shop_rent_create"]);
    $insert = "CALL create_shop('$lead', '$address', '$sold', '$bought', '$rent')";
    $run = mysqli_query($conn,$insert);
?>