<form method="POST" id="create_seller_form">
    <div class="form-group">
    <label>Магазин</label>
      <select class="form-control" name="seller_shop_create" id="seller_shop_create" placeholder="магазин" required>
      <?php
      $select_shop = "SELECT * FROM shop";
          $run = mysqli_query($conn,$select_shop);
          while ($row = mysqli_fetch_array($run)){
          echo "<option value=".$row['_id'].">".$row['_address']."</option>";
          }
      ?>
      </select>
      <label>Продавець</label>
      <input type="text" class="form-control" name="seller_name_create" id="seller_name_create" placeholder="прізвище, ім'я продавця" required>
      <label>Номер телефону</label>
      <input type="phone" class="form-control" name="seller_phone_create" id="seller_phone_create" placeholder="номер телефону" required>
      <label>Email адреса</label>
      <input type="email" class="form-control" name="seller_email_create" id="seller_email_create" placeholder="name@example.com" required>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-success mb-2" name="btn-seller-create" id="btn-seller-create">Додати запис</button>
    </div>
</form>