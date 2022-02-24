<form method="POST" id="update_client_form">
    <div class="form-group">
    <label>Ідентифікатор</label>
      <input type="text" class="form-control" name="client_id_update" id="client_id_update" placeholder="ідентифікатор клієнта" required readonly>
      <label>Клієнт</label>
      <input type="text" class="form-control" name="client_name_update" id="client_name_update" placeholder="прізвище, ім'я клієнта" required>
      <label>Номер телефону</label>
      <input type="phone" class="form-control" name="client_phone_update" id="client_phone_update" placeholder="номер телефону" required>
      <label>Email адреса</label>
      <input type="email" class="form-control" name="client_email_update" id="client_email_update" placeholder="name@example.com" required>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-info mb-2" name="btn-client-update" id="btn-client-update">Оновити запис</button>
    </div>
</form>