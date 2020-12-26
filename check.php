<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Форма регистрации пользователя системы</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <meta name=viewport content="width=1000">
  </head>
	<style>
	body {overflow:hidden;}
	#a {margin-top:25px}
	</style>
<body>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

</body>
</html>

<?php
  $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

  if($pass == ""){
    echo"<script>swal(\"Ошибка!\", \"Поле пароля не заполнено\", \"error\");</script>";
    exit();
  }
  if(strlen($pass) < 10 || strlen($login) > 32){
    echo"<script>swal(\"Ошибка!\", \"Недопустимая длина пароля\", \"error\");</script>";
    exit();
  }
  if($login == ""){
    echo"<script>swal(\"Ошибка!\", \"Поле логина не заполнено\", \"error\");</script>";
    exit();
  }
  if($name == ""){
    echo"<script>swal(\"Ошибка!\", \"Поле имя не заполнено\", \"error\");</script>";
    exit();
  }
  if(strlen($name)<1 || strlen($name)>50){
    echo"<script>swal(\"Недопустимая длина имени!\", \"Имя содержит от 1 до 50 символов\", \"error\");</script>";
    exit();
  }
  if(strlen($login)<3 || strlen($login) > 100){
    echo"<script>swal(\"Недопустимая длина логина!\", \"Логин содержит от 3 до 100 символов\", \"error\");</script>";
    exit();
  }
  $pass = md5($pass."ChfkG7Jf9lP63");
  $mysql = new mysqli('localhost', 'root', 'root', 'census');
  if ($mysql->connect_error) {
    die('<script>swal("Ошибка!", "Не удается установить соединение с базой данных", "error");</script>');
  }
  $result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login'");
  $user = $result->fetch_assoc();


  if(count($user)==0){
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`, `role`)
      VALUES('$login', '$pass', '$name', 'user')");
    $mysql->close();
    echo"<script>swal(\"Успешно!\", \"Вы зарегистрировались успешно\", \"success\");</script>";
  } else {
    echo"<script>swal(\"Ошибка!\", \"Такой пользователь уже зарегистрирован\", \"error\");</script>";
    exit();
  }
?>
