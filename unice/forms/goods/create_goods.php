<?php
    require_once("../../database/db_lead.php");
    $id = trim($_POST["goods_id_create"]);
    $shop = trim($_POST["goods_shop_create"]);
    $name = trim($_POST["goods_name_create"]);
    $price = trim($_POST["goods_price_create"]);
    $counter = trim($_POST["goods_counter_create"]);
    $insert = "CALL create_goods('$id', '$shop', '$name', '$price', '$counter')";
    $run = mysqli_query($conn,$insert);
?>