<form method="POST" id="delete_goods_form">
    <div class="form-group">
    <label>Артикул</label>
      <input type="text" class="form-control" name="goods_id_delete" id="goods_id_delete" placeholder="артикул" required readonly>
    <label>Магазин</label>
      <input type="text" class="form-control" name="goods_shop_delete" id="goods_shop_delete" placeholder="магазин" required readonly>
      <label>Найменування товару</label>
      <input type="text" class="form-control" name="goods_name_delete" id="goods_name_delete" placeholder="найменування товару" required readonly>
      <label>Ціна</label>
      <input type="price" class="form-control" name="goods_price_delete" id="goods_price_delete" placeholder="ціна" required readonly>
      <label>Кількість</label>
      <input type="number" class="form-control" name="goods_counter_delete" id="goods_counter_delete" placeholder="кількість" required readonly>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-danger mb-2" name="btn-goods-delete" id="btn-goods-delete">Видалити запис</button>
    </div>
</form>