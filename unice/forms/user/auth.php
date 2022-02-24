<?php
$email = $_POST["user_email_auth"];
$pass = $_POST["user_pass_auth"];
$pass = md5($pass."#cXow32%fW");
//echo $email.$pass;
$conn = mysqli_connect('localhost', 'root','','unice');

//1) Auth
$select = "SELECT * FROM users WHERE users._email = '$email' AND users._pass = '$pass'";
//$select = "SELECT * FROM users WHERE users._email = 'post@email' AND users._pass = '1111'";
//$select = "SELECT * FROM users WHERE users._email = 'post15@email'";
$run = mysqli_query($conn,$select);
$user = mysqli_fetch_array($run);
if( is_array($user) ){
    //print_r( count($row)) ;
        
        setcookie('user', $user['_name'], time() + 3600, "/");
    echo "Користувача знайдено!<br>";
}

//2) is lead?
$select = "SELECT * FROM lead WHERE lead._email = '$email'";
$run = mysqli_query($conn,$select);
$lead = mysqli_fetch_array($run);
if( is_array($lead) ){
        setcookie('lead', $lead['_email'], time() + 3600, "/");
    echo "Керівника знайдено!<br>";
}else{
    echo "Керівника не знайдено!<br>";}
//3) is seller?
$select = "SELECT * FROM seller WHERE seller._email = '$email'";
$run = mysqli_query($conn,$select);
$seller = mysqli_fetch_array($run);
if( is_array($seller) ){
        setcookie('seller', $seller['_email'], time() + 3600, "/");
    echo "Продавця знайдено!<br>";
}else{
    echo "Продавця не знайдено!<br>";}
header('Location: /unice/lead.php');
?>  

    
