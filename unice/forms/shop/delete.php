<form method="POST" id="delete_shop_form">
    <div class="form-group">
      <label>Ідентифікатор</label>
      <input type="text" class="form-control" name="shop_id_delete" id="shop_id_delete" placeholder="ідентифікатор магазину" readonly>
      <label>Керівник</label>
      <input type="text" class="form-control" name="shop_lead_delete" id="shop_lead_delete" placeholder="ідентифікатор керівника" readonly>
      <label>Адреса</label>
      <input type="text" class="form-control" name="shop_address_delete" id="shop_address_delete" placeholder="адреса магазину" readonly>
      <label>Продано</label>
      <input type="text" class="form-control" name="shop_sold_delete" id="shop_sold_delete" placeholder="сумарна вартість проданих товарів" readonly>
      <label>Закуплено</label>
      <input type="text" class="form-control" name="shop_bought_delete" id="shop_bought_delete" placeholder="сумарна вартість закуплених товарів" readonly>
      <label>Оренда</label>
      <input type="text" class="form-control" name="shop_rent_delete" id="shop_rent_delete" placeholder="вартість оренди" readonly>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-danger mb-2" name="btn-shop-delete" id="btn-shop-delete">Видалити запис</button>
    </div>
</form>