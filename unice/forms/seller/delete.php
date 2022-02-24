<form method="POST" id="delete_seller_form">
    <div class="form-group">
    <label>Ідентифікатор</label>
      <input type="text" class="form-control" name="seller_id_delete" id="seller_id_delete" placeholder="ідентифікатор продавця" readonly>
      <label>Магазин</label>
      <input type="text" class="form-control" name="seller_shop_delete" id="seller_shop_delete" placeholder="магазин" required>
      <label>Продавець</label>
      <input type="text" class="form-control" name="seller_name_delete" id="seller_name_delete" placeholder="прізвище, ім'я керівника" readonly>
      <label>Номер телефону</label>
      <input type="phone" class="form-control" name="seller_phone_delete" id="seller_phone_delete" placeholder="номер телефону" readonly>
      <label>Email адреса</label>
      <input type="email" class="form-control" name="seller_email_delete" id="seller_email_delete" placeholder="name@example.com" readonly>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-danger mb-2" name="btn-seller-delete" id="btn-seller-delete">Видалити запис</button>
    </div>
</form>