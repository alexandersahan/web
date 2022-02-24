<form method="POST" id="create_order_str_form">
      <div class="form-group">

      <label>Артикул</label>
      <select class="form-control" name="order_str_article_create" id="order_str_article_create" placeholder="артикул" required>
      <?php
      $select_goods = "SELECT * FROM goods";
          $run = mysqli_query($conn,$select_goods);
          while ($row = mysqli_fetch_array($run)){
          echo "<option value=".$row['_article'].">".$row['_name']."</option>";
          }
?>

</select>
      
        <label>Клієнт</label>
        <select class="form-control" name="order_str_client_create" id="order_str_client_create" placeholder="клієнт" required>
 <?php
$select_client = "SELECT * FROM client";
          $run = mysqli_query($conn,$select_client);
          while ($row = mysqli_fetch_array($run)){
          echo "<option value=".$row['_id'].">".$row['_name']."</option>";
          }
?>
</select>
        <label>Магазин</label>
       

  <select class="form-control" name="order_str_client_create" id="order_str_shop_create" placeholder="магазин" required>
 <?php
$select_shop = "SELECT * FROM shop";
          $run = mysqli_query($conn,$select_shop);
          while ($row = mysqli_fetch_array($run)){
          echo "<option value=".$row['_id'].">".$row['_address']."</option>";
          }
?>
</select>

        <label>Ціна</label>
        <input type="text" class="form-control" name="order_str_price_create" id="order_str_price_create" placeholder="ціна за одиницю товару" required>
        <label>Кількість</label>
        <input type="text" class="form-control" name="order_str_counter_create" id="order_str_counter_create" placeholder="кількість товару" required>
        <label>Дата</label>
        <input type="date" class="form-control" name="order_str_date_create" id="order_str_date_create" placeholder="дата покупки" required>
      </div>
      <div class="form-group">
      <button type="button" onclick="makeObjArr(objArr)" class="btn btn-success mb-2" name="btn-order_str-create" id="btn-order_str-create">Додати запис</button>
      <button type="button" onclick="buyHandler(objArr)" class="btn btn-success mb-2" name="btn-order_str-create" id="btn-order_str-create">Купити</button>
      </div>
  </form>