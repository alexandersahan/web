<table id="lead_table" class="table  container justify-content-center">
  <thead>
     <tr>
        <th>id</th>
        <th>Керівник</th>
        <th>Телефон</th>
        <th>Email</th>
     </tr>
  </thead>   
<?php              
  $select_lead = "SELECT * FROM lead";
  $run = mysqli_query($conn,$select_lead);
  while ($row = mysqli_fetch_array($run)){
?>
    <tr id="<?php echo $row['_id'].'lead_tr'; ?>" class="out-tr">                        
        <td id="<?php echo $row['_id'].'lead_id'; ?>"><?php echo $row['_id']; ?></td>
        <td id="<?php echo $row['_id'].'lead_name'; ?>"><?php echo $row['_name']; ?></td>
        <td id="<?php echo $row['_id'].'lead_phone'; ?>"><?php echo $row['_phone']; ?></td>
        <td id="<?php echo $row['_id'].'lead_email'; ?>"><?php echo $row['_email']; ?></td>
        <td id="<?php echo $row['_id'].'lead_e'; ?>" class="btn lead_editor btn-info">Змінити</td>
        <td id="<?php echo $row['_id'].'lead_d'; ?>" class="btn lead_deleter btn-danger">Видалити</td>                    
    </tr> 
<?php } ?>
</table>
            