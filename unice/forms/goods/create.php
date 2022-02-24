<form method="POST" id="create_goods_form">
      <div class="form-group">
      <label>Артикул</label>
        <input type="text" class="form-control" name="goods_id_create" id="goods_id_create" placeholder="артикул" required>

      
        <label>Магазин</label>
       

  <select class="form-control" name="goods_shop_create" id="goods_shop_create" placeholder="магазин" required>
 <?php
$select_shop = "SELECT * FROM shop";
          $run = mysqli_query($conn,$select_shop);
          while ($row = mysqli_fetch_array($run)){
          echo "<option value=".$row['_id'].">".$row['_address']."</option>";
          }
?>
</select>


        
        <label>Найменування товару</label>
        <input type="text" class="form-control" name="goods_name_create" id="goods_name_create" placeholder="найменування товару" required>
        <label>Ціна</label>
        <input type="text" class="form-control" name="goods_price_create" id="goods_price_create" placeholder="ціна" required>
        <label>Кількість</label>
        <input type="text" class="form-control" name="goods_counter_create" id="goods_counter_create" placeholder="кількість" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success mb-2" name="btn-goods-create" id="btn-goods-create">Додати запис</button>
      </div>
  </form>