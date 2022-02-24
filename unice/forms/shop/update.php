<form method="POST" id="update_shop_form">
    <div class="form-group">
      <label>Ідентифікатор</label>
      <input type="text" class="form-control" name="shop_id_update" id="shop_id_update" placeholder="ідентифікатор магазину" required readonly>
      <label>Керівник</label>
      <input type="text" class="form-control" name="shop_lead_update" id="shop_lead_update" placeholder="ідентифікатор керівника" required readonly>
      <label>Адреса</label>
      <input type="text" class="form-control" name="shop_address_update" id="shop_address_update" placeholder="адреса магазину" required>
      <label>Продано</label>
      <input type="text" class="form-control" name="shop_sold_update" id="shop_sold_update" placeholder="сумарна вартість проданих товарів">
      <label>Закуплено</label>
      <input type="text" class="form-control" name="shop_bought_update" id="shop_bought_update" placeholder="сумарна вартість закуплених товарів">
      <label>Оренда</label>
      <input type="text" class="form-control" name="shop_rent_update" id="shop_rent_update" placeholder="вартість оренди">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-info mb-2" name="btn-shop-update" id="btn-shop-update">Оновити запис</button>
    </div>
</form>