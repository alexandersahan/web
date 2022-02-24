<table id="seller_table" class="table  container justify-content-center">
  <thead>
        <tr>
           <th>id</th>
           <th>Магазин</th>
           <th>Продавець</th>
           <th>Телефон</th>
           <th>Email</th>
       </tr>
 </thead>   
<?php                
  $select_seller = "SELECT * FROM seller";
  $run = mysqli_query($conn,$select_seller);
  while ($row = mysqli_fetch_array($run)){
  ?>
  <tr id="<?php echo $row['_id'].'seller_tr'; ?>" class="out-tr">                        
      <td id="<?php echo $row['_id'].'seller_id'; ?>"><?php echo $row['_id']; ?></td>
      <td id="<?php echo $row['_id'].'seller_shop'; ?>"><?php echo $row['_shop']; ?></td>
      <td id="<?php echo $row['_id'].'seller_name'; ?>"><?php echo $row['_name']; ?></td>
      <td id="<?php echo $row['_id'].'seller_phone'; ?>"><?php echo $row['_phone']; ?></td>
      <td id="<?php echo $row['_id'].'seller_email'; ?>"><?php echo $row['_email']; ?></td>
      <td id="<?php echo $row['_id'].'seller_e'; ?>" class="btn seller_editor btn-info">Змінити</td>
      <td id="<?php echo $row['_id'].'seller_d'; ?>" class="btn seller_deleter btn-danger">Видалити</td>                      
  </tr> 
  <?php } ?>
</table>
            