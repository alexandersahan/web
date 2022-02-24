<form method="POST" id="delete_order_str_form">
      <div class="form-group">
      <label>Ідентифікатор</label>
        <input type="text" class="form-control" name="order_str_id_delete" id="order_str_id_delete" placeholder="артикул" required readonly>
      <label>Артикул</label>
        <input type="text" class="form-control" name="order_str_article_delete" id="order_str_article_delete" placeholder="артикул" required readonly>
      <label>Клієнт</label>
        <input type="text" class="form-control" name="order_str_client_delete" id="order_str_client_delete" placeholder="магазин" required readonly>
        <label>Ціна</label>
        <input type="text" class="form-control" name="order_str_price_delete" id="order_str_price_delete" placeholder="ціна за одиницю товару" required readonly>
        <label>Кількість</label>
        <input type="text" class="form-control" name="order_str_counter_delete" id="order_str_counter_delete" placeholder="кількість товару" required readonly>
        <label>Дата</label>
        <input type="date" class="form-control" name="order_str_date_delete" id="order_str_date_delete" placeholder="дата покупки" required readonly>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-danger mb-2" name="btn-order_str-delete" id="btn-order_str-delete">Видалити запис</button>
      </div>
  </form>