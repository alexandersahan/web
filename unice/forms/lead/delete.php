<form method="POST" id="delete_lead_form">
      <div class="form-group">
      <label>Ідентифікатор</label>
        <input type="text" class="form-control" name="lead_id_delete" id="lead_id_delete" placeholder="ідентифікатор керівника" readonly>
        <label>Керівник</label>
        <input type="text" class="form-control" name="lead_name_delete" id="lead_name_delete" placeholder="прізвище, ім'я керівника" readonly>
        <label>Номер телефону</label>
        <input type="phone" class="form-control" name="lead_phone_delete" id="lead_phone_delete" placeholder="номер телефону" readonly>
        <label>Email адреса</label>
        <input type="email" class="form-control" name="lead_email_delete" id="lead_email_delete" placeholder="name@example.com" readonly>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-danger mb-2" name="btn-lead-delete" id="btn-lead-delete">Видалити запис</button>
      </div>
  </form>