<form method="POST" id="update_goods_form">
    <div class="form-group">
    <label>Артикул</label>
      <input type="text" class="form-control" name="goods_id_update" id="goods_id_update" placeholder="артикул" required readonly>
    <label>Магазин</label>
      <input type="text" class="form-control" name="goods_shop_update" id="goods_shop_update" placeholder="магазин" required readonly>
      <label>Найменування товару</label>
      <input type="text" class="form-control" name="goods_name_update" id="goods_name_update" placeholder="найменування товару" required>
      <label>Ціна</label>
      <input type="price" class="form-control" name="goods_price_update" id="goods_price_update" placeholder="ціна" required>
      <label>Кількість</label>
      <input type="number" class="form-control" name="goods_counter_update" id="goods_counter_update" placeholder="кількість" required>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-info mb-2" name="btn-goods-update" id="btn-goods-update">Оновити запис</button>
    </div>
</form>