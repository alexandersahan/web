<form method="POST" id="update_lead_form">
      <div class="form-group">
      <label>Ідентифікатор</label>
        <input type="text" class="form-control" name="lead_id_update" id="lead_id_update" placeholder="ідентифікатор керівника" required readonly>
        <label>Керівник</label>
        <input type="text" class="form-control" name="lead_name_update" id="lead_name_update" placeholder="прізвище, ім'я керівника" required>
        <label>Номер телефону</label>
        <input type="phone" class="form-control" name="lead_phone_update" id="lead_phone_update" placeholder="номер телефону" required>
        <label>Email адреса</label>
        <input type="email" class="form-control" name="lead_email_update" id="lead_email_update" placeholder="name@example.com" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-info mb-2" name="btn-lead-update" id="btn-lead-update">Оновити запис</button>
      </div>
  </form>