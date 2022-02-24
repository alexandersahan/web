<table id="shop_table" class="table  container justify-content-center">
     <thead>
         <tr>
            <th>id</th>
             <th>Керівник</th>
             <th>Адреса</th>
             <th>Продано</th>
             <th>Закуплено</th>
             <th>Оренда</th>
         </tr>
      </thead>   
<?php   
    $select_shop = "SELECT * FROM shop INNER JOIN lead ON lead._id = shop._lead GROUP BY lead._name";             
    //$select_shop = "SELECT * FROM shop";
    $run = mysqli_query($conn,$select_shop);
     while ($row = mysqli_fetch_array($run)){
     ?>
     <tr id="<?php echo $row['_id'].'shop_tr'; ?>" class="out-tr">                    
         <td id="<?php echo $row['_id'].'shop_id'; ?>"><?php echo $row['_id']; ?></td>
         <td id="<?php echo $row['_id'].'shop_lead'; ?>"><?php echo $row['_name']; ?></td>
         <td id="<?php echo $row['_id'].'shop_address'; ?>"><?php echo $row['_address']; ?></td>
         <td id="<?php echo $row['_id'].'shop_sold'; ?>"><?php echo $row['_sold']; ?></td>
         <td id="<?php echo $row['_id'].'shop_bought'; ?>"><?php echo $row['_bought']; ?></td>
         <td id="<?php echo $row['_id'].'shop_rent'; ?>"><?php echo $row['_rent']; ?></td>
         <td id="<?php echo $row['_id'].'shop_e'; ?>" class="btn shop_editor btn-info">Змінити</td>
         <td id="<?php echo $row['_id'].'shop_d'; ?>" class="btn shop_deleter btn-danger">Видалити</td>               
      </tr> 
    <?php } ?>
</table>            