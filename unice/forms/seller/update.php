<form method="POST" id="update_seller_form">
    <div class="form-group">
    <label>Ідентифікатор</label>
      <input type="text" class="form-control" name="seller_id_update" id="seller_id_update" placeholder="ідентифікатор продавця" required readonly>
      <label>Магазин</label>
      <input type="text" class="form-control" name="seller_shop_update" id="seller_shop_update" placeholder="магазин" requiredклієнта>
      <label>Керівник</label>
      <input type="text" class="form-control" name="seller_name_update" id="seller_name_update" placeholder="прізвище, ім'я керівника" required>
      <label>Номер телефону</label>
      <input type="phone" class="form-control" name="seller_phone_update" id="seller_phone_update" placeholder="номер телефону" required>
      <label>Email адреса</label>
      <input type="email" class="form-control" name="seller_email_update" id="seller_email_update" placeholder="name@example.com" required>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-info mb-2" name="btn-seller-update" id="btn-seller-update">Оновити запис</button>
    </div>
</form>