<?php
    require_once("../../database/db_lead.php");
    $name = trim($_POST["lead_name_create"]);
    $phone = trim($_POST["lead_phone_create"]);
    $email = trim($_POST["lead_email_create"]);
    $insert = "CALL create_lead('$name', '$phone', '$email')";
    $run = mysqli_query($conn,$insert);
?>