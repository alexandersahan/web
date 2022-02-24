<form method="POST" id="create_client_form">
    <div class="form-group">
      <label>Клієнт</label>
      <input type="text" class="form-control" name="client_name_create" id="client_name_create" placeholder="прізвище, ім'я клієнта" required>
      <label>Номер телефону</label>
      <input type="phone" class="form-control" name="client_phone_create" id="client_phone_create" placeholder="номер телефону" required>
      <label>Email адреса</label>
      <input type="email" class="form-control" name="client_email_create" id="client_email_create" placeholder="name@example.com" required>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-success mb-2" name="btn-client-create" id="btn-client-create">Додати запис</button>
    </div>
</form>