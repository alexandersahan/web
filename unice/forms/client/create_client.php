<?php
    require_once("../../database/db_lead.php");
    $name = trim($_POST["client_name_create"]);
    $phone = trim($_POST["client_phone_create"]);
    $email = trim($_POST["client_email_create"]);
    $insert = "CALL create_client('$name', '$phone', '$email')";
    $run = mysqli_query($conn,$insert);
?>