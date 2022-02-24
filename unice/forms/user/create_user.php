<?php
$conn = mysqli_connect('localhost', 'root','','unice');
$name = trim($_POST["user_name_create"]);
$phone = trim($_POST["user_phone_create"]);
$email = trim($_POST["user_email_create"]);
$pass = trim($_POST["user_pass_create"]);
$pass = md5($pass."#cXow32%fW");
$insert = "CALL create_user('$name', '$phone', '$email', '$pass')";
$run = mysqli_query($conn,$insert);
header('Location: /unice/lead.php');
?>  