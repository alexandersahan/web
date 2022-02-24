<form method="POST" id="create_shop_form">
    <div class="form-group">
    <select class="form-control" name="shop_lead_create" id="shop_lead_create" placeholder="ідентифікатор керівника" required>
    <?php
    
    $select_lead = "SELECT * FROM lead";
            $run = mysqli_query($conn,$select_lead);
            while ($row = mysqli_fetch_array($run)){
            echo "<option value=".$row['_id'].">".$row['_name']."</option>";
                
             }
    ?>
    </select>
      
      <label>Адреса</label>
      <input type="text" class="form-control" name="shop_address_create" id="shop_address_create" placeholder="адреса магазину" required>
      <label>Продано</label>
      <input type="text" class="form-control" name="shop_sold_create" id="shop_sold_create" placeholder="сумарна вартість проданих товарів">
      <label>Закуплено</label>
      <input type="text" class="form-control" name="shop_bought_create" id="shop_bought_create" placeholder="сумарна вартість закуплених товарів">
      <label>Оренда</label>
      <input type="text" class="form-control" name="shop_rent_create" id="shop_rent_create" placeholder="вартість оренди">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-success mb-2" name="btn-shop-create" id="btn-shop-create">Додати запис</button>
    </div>
</form>