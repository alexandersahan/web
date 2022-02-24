<form action="forms/user/create_user.php" method="POST" id="create_user_form">
<div class="form-group">
<h4>Форма реєстрації</h4>
<label>Новий користувач</label>
<input type="text" class="form-control" name="user_name_create" id="user_name_create" placeholder="прізвище, ім'я" required>
<label>Номер телефону</label>
<input type="phone" class="form-control" name="user_phone_create" id="user_phone_create" placeholder="номер телефону" required>
<label>Email-адреса</label>
<input type="email" class="form-control" name="user_email_create" id="user_email_create" placeholder="name@example.com" required>
<label>Пароль</label>
<input type="password" class="form-control" name="user_pass_create" id="user_pass_create" required>
</div>
<div class="form-group">
<button type="submit" class="btn btn-success mb-2" name="btn-user-create" id="btn-user-create">Реєстрація</button>
</div>
</form>
