<?php
 require_once("database/db_lead.php");
 $select_article = "SELECT _article AS x, COUNT(_article) AS y FROM order_str";
 $select_client = "SELECT _client, COUNT(_client) FROM order_str";
 $select_date = "SELECT _date, COUNT(_date) FROM order_str";
 
 $dataPoints = array();
    $run = mysqli_query($conn,$select_article);
    
    }



	
?>

    <thead>
        <tr>
            <th>Ідентифікатор</th>
            <th>Артикул</th>
            <th>Клієнт</th>
            <th>Ціна</th>
            <th>Кількість</th>
            <th>Дата</th>
        </tr>
    </thead>   
    <?php     
               
            //$select_order_str = "SELECT * FROM order_str";
        $select_order_str = "SELECT order_str._id AS ID, order_str._article, order_str._price, order_str._client ,order_str._count, order_str._date, client._name  FROM order_str INNER JOIN client ON client._id = order_str._client GROUP BY client._name
        ";
            $run = mysqli_query($conn,$select_order_str);
            while ($row = mysqli_fetch_array($run)){
            ?>
                <tr id="<?php echo $row['ID'].'order_str_tr'; ?>" class="out-tr">
                    <td id="<?php echo $row['ID'].'order_strID'; ?>"><?php echo $row['ID']; ?></td>
                    <td id="<?php echo $row['ID'].'order_str_article'; ?>"><?php echo $row['_article']; ?></td>
                    <td id="<?php echo $row['ID'].'order_str_client'; ?>"><?php echo $row['_name']; ?></td>
                    <td id="<?php echo $row['ID'].'order_str_price'; ?>"><?php echo $row['_price']; ?></td>
                    <td id="<?php echo $row['ID'].'order_str_counter'; ?>"><?php echo $row['_count']; ?></td>
                    <td id="<?php echo $row['ID'].'order_str_date'; ?>"><?php echo $row['_date']; ?></td>
                    <td id="<?php echo $row['ID'].'order_str_e'; ?>" class="btn order_str_editor btn-info">Змінити</td>
                    <td id="<?php echo $row['ID'].'order_str_d'; ?>" class="btn order_str_deleter btn-danger">Видалити</td>
                </tr> 
            <?php } ?>
</table>