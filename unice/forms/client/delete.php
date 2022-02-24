<form method="POST" id="delete_client_form">
    <div class="form-group">
    <label>Ідентифікатор</label>
      <input type="text" class="form-control" name="client_id_delete" id="client_id_delete" placeholder="ідентифікатор клієнта" readonly>
      <label>Клієнт</label>
      <input type="text" class="form-control" name="client_name_delete" id="client_name_delete" placeholder="прізвище, ім'я клієнта" readonly>
      <label>Номер телефону</label>
      <input type="phone" class="form-control" name="client_phone_delete" id="client_phone_delete" placeholder="номер телефону" readonly>
      <label>Email адреса</label>
      <input type="email" class="form-control" name="client_email_delete" id="client_email_delete" placeholder="name@example.com" readonly>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-danger mb-2" name="btn-client-delete" id="btn-client-delete">Видалити запис</button>
    </div>
</form>