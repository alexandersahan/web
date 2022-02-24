<table id="goods_table" class="table  container justify-content-center">
    <thead>
       <tr>
          <th>Артикул</th>
          <th>Магазин</th>
          <th>Найменування товару</th>
          <th>Ціна</th>
          <th>Кількість</th>
       </tr>
    </thead>   
   <?php            
        $select_goods = "SELECT * FROM goods";
        $run = mysqli_query($conn,$select_goods);
        while ($row = mysqli_fetch_array($run)){
        ?>
        <tr id="<?php echo $row['_article'].'goods_tr'; ?>" class="out-tr">                        
           <td id="<?php echo $row['_article'].'goods_id'; ?>"><?php echo $row['_article']; ?></td>
           <td id="<?php echo $row['_article'].'goods_shop'; ?>"><?php echo $row['_shop']; ?></td>
           <td id="<?php echo $row['_article'].'goods_name'; ?>"><?php echo $row['_name']; ?></td>
           <td id="<?php echo $row['_article'].'goods_price'; ?>"><?php echo $row['_price']; ?></td>
           <td id="<?php echo $row['_article'].'goods_counter'; ?>"><?php echo $row['_count']; ?></td>
           <td id="<?php echo $row['_article'].'goods_e'; ?>" class="btn goods_editor btn-info">Змінити</td>
           <td id="<?php echo $row['_article'].'goods_d'; ?>" class="btn goods_deleter btn-danger">Видалити</td>                      
       </tr> 
       <?php } ?>
</table>
            