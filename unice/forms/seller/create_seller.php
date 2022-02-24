<?php
    require_once("../../database/db_lead.php");
    $shop = trim($_POST["seller_shop_create"]);
    $name = trim($_POST["seller_name_create"]);
    $phone = trim($_POST["seller_phone_create"]);
    $email = trim($_POST["seller_email_create"]);
    $insert = "CALL create_seller('$shop', '$name', '$phone', '$email')";
    $run = mysqli_query($conn,$insert);
?>