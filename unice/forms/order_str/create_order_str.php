<?php
    require_once("../../database/db_lead.php");
    $obj_array = $_POST["objArr"];
   
    foreach ($obj_array as $item) {
        $article = $item[0];
        $client = $item[1];
        $price = $item[2];
        $counter = $item[3];
        $date = $item[4];

        $insert = "CALL create_order_str('$article', '$client', '$price', '$counter', '$date')";
        $run = mysqli_query($conn,$insert);
    
    }  
?>

