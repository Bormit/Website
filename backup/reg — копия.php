<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Форма регистрации пользователя системы</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
  </head>
	<style>
	body {overflow:hidden;}
	#a {margin-top:25px}
	</style>
<body>
  <script src="lib/sweet-alert.min.js"></script>
  <div class="container mt-4">
    <div class ="row">
      <div class="col">
				<center><font size="5" color="Black" face="segoe print">Информационно-справочная система<br><b>"Перепись населения"</b></font></center>
        <center><h1>Форма регистрации пользователя системы</h1>
        <form action="check.php" method="post">
          <input type="text" name="login" class="form-control" id="login" placeholder="Введите логин"><br>
          <input type="text" name="name" class="form-control" id="name" placeholder="Введите имя"><br>
          <input type="password" name="pass" class="form-control" id="pass" placeholder="Введите пароль"><br>
          <button class="btn btn-primary" type=submit>Зарегистрировать</button>
        </form>
      </div>
<center><p><input type="button" id="a" class="btn btn-primary btn-sm" onclick="location.href='index.php'" value="Вернуться на предыдущую страницу"/><p>
	<?php
		// include 'check.php';
	?>
</body>
</html>
