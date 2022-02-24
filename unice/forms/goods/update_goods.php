<?php
    require_once("../../database/db_lead.php");
    $id = trim($_POST["goods_id_update"]);
    $name = trim($_POST["goods_name_update"]);
    $price = trim($_POST["goods_price_update"]);
    $counter = trim($_POST["goods_counter_update"]);
    $update = "CALL update_goods('$name', '$price', '$counter', '$id')";
    $run = mysqli_query($conn,$update);
?>