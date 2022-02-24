<?php
    require_once("../../database/db_lead.php");
    $id = trim($_POST["order_str_id_update"]);
    $article = trim($_POST["order_str_article_update"]);
    $client = trim($_POST["order_str_client_update"]);
    $price = trim($_POST["order_str_price_update"]);
    $counter = trim($_POST["order_str_counter_update"]);
    $date = trim($_POST["order_str_date_update"]);

    $update = "CALL update_order_str('$id', '$article', '$client', '$price', '$counter', '$date')";
    $run = mysqli_query($conn,$update);
?>