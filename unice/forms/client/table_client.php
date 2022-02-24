<table id="client_table" class="table  container justify-content-center">
  <thead>
     <tr>
        <th>id</th>
        <th>Клієнт</th>
        <th>Телефон</th>
        <th>Email</th>
     </tr>
  </thead>   
  <?php              
      $select_client = "SELECT * FROM client";
      $run = mysqli_query($conn,$select_client);
      while ($row = mysqli_fetch_array($run)){
   ?>
      <tr id="<?php echo $row['_id'].'client_tr'; ?>" class="out-tr">                        
          <td id="<?php echo $row['_id'].'client_id'; ?>"><?php echo $row['_id']; ?></td>
          <td id="<?php echo $row['_id'].'client_name'; ?>"><?php echo $row['_name']; ?></td>
          <td id="<?php echo $row['_id'].'client_phone'; ?>"><?php echo $row['_phone']; ?></td>
          <td id="<?php echo $row['_id'].'client_email'; ?>"><?php echo $row['_email']; ?></td>
          <td id="<?php echo $row['_id'].'client_e'; ?>" class="btn client_editor btn-info">Змінити</td>
          <td id="<?php echo $row['_id'].'client_d'; ?>" class="btn client_deleter btn-danger">Видалити</td>              
       </tr> 
    <?php } ?>
</table>       