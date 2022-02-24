<form method="POST" id="create_lead_form">
      <div class="form-group">
        <label>Керівник</label>
        <input type="text" class="form-control" name="lead_name_create" id="lead_name_create" placeholder="прізвище, ім'я керівника" required>
        <label>Номер телефону</label>
        <input type="phone" class="form-control" name="lead_phone_create" id="lead_phone_create" placeholder="номер телефону" required>
        <label>Email адреса</label>
        <input type="email" class="form-control" name="lead_email_create" id="lead_email_create" placeholder="name@example.com" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success mb-2" name="btn-lead-create" id="btn-lead-create">Додати запис</button>
      </div>
  </form>