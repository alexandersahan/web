    <form method="POST" id="update_order_str_form">
      <div class="form-group">
      <label>Ідентифікатор</label>
        <input type="text" class="form-control" name="order_str_id_update" id="order_str_id_update" placeholder="артикул" required readonly>
      <label>Артикул</label>
        <input type="text" class="form-control" name="order_str_article_update" id="order_str_article_update" placeholder="артикул" required>
      <label>Клієнт</label>
        <input type="text" class="form-control" name="order_str_client_update" id="order_str_client_update" placeholder="магазин" required readonly>
        <label>Ціна</label>
        <input type="text" class="form-control" name="order_str_price_update" id="order_str_price_update" placeholder="ціна за одиницю товару" required>
        <label>Кількість</label>
        <input type="text" class="form-control" name="order_str_counter_update" id="order_str_counter_update" placeholder="кількість товару" required>
        <label>Дата</label>
        <input type="date" class="form-control" name="order_str_date_update" id="order_str_date_update" placeholder="дата покупки" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-info mb-2" name="btn-order_str-update" id="btn-order_str-update">Оновити запис</button>
      </div>
  </form>