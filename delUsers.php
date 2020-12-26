<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Админ панель</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/glav.css">
  <meta name=viewport content="width=1000">
</head>
<style>
body {overflow:hidden;}
#VivodAdminsInfa{
  margin-right:5%;
  font-family: segoe print;
  font-size: 20px;
}


#DelLogin{
  width: 300px;
}

#AddRole{
  width: 300px;
}

#AddPass{
  width: 300px;
}

#AddName{
  width: 300px;
}

#AddLogin{
  width: 300px;
}

#VivodInfa{
  font-family: segoe print;
  font-size: 20px;
}


#Avatar{
  display:block;
  margin-top:100px;
}

#AccountHello2{
  display:block;
  font-size: 18px;
  font-family: segoe print;
}

#AccountHello{
  display:block;
  font-size: 58px;
  font-family: segoe print;
}


#ButtonExit{
  margin: auto;
  display: block;
	margin-top: 25px;
  margin-left: 610px;
	position: relative;
}
#a{
  margin: 0px 0px 0px -162px;
}

</style>
<body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <div class="container mt-4">
    <div class ="row">
      <div class="col">
<div class="log">
<center><font size="5" color="Black" face="segoe print">Информационно-справочная система<br><b>"Перепись населения"</b></font></center>
<hr>
</form>
</div>
<div class="col">
<center><h1>Главное меню</h1>
</div>
<div class="menu">

	<ul>

		<li><a href="glav.php">Главная</a></li>

		<li><a href="stat.php">Статистика</a></li>

		<li><a href="graphic.php">Графики</a></li>

		<li><a href="diagrams.php">Диаграммы</a></li>

		<li><a href="account.php">Личный кабинет</a></li>

		<li><a href="about.php">Контакты</a></li>

	</ul>

</div>
<div><a id="a" class="btn btn-danger" href="logout.php">Выйти из системы</a></div>
<div id="otzivtext" align="center">
<p>Админ панель</p>
</div>
<?php

$UserRole=$_COOKIE['user'];
$mysql = new mysqli('localhost', 'root', 'root', 'census');
if ($mysql->connect_error) {
  die('<script>swal("Ошибка!", "Не удается установить соединение с базой данных", "error");</script>');
}
$result = $mysql->query("SELECT * FROM `users` WHERE `login`='$UserRole' AND `role`='admin'");
$user = $result->fetch_assoc();
if(count($user)==0){
    header('Location:/index.php');
}
$mysql->close();
?>
<div align="center" style="margin-left: 5%;">
<p id="VivodAdminsInfa">Добавление пользователя</p>
</div>
<div style="margin-left: 39%;">
<form action="addUsers.php" method="post">
  <input id="AddLogin" type="text" name="AddLogin" class="form-control" placeholder="Введите логин"><br>
  <input id="AddName" type="text" name="AddName" class="form-control" placeholder="Введите имя"><br>
  <input id="AddPass" type="password" name="AddPass" class="form-control" placeholder="Введите пароль"><br>
  <select name="AddRole" id="AddRole">
    <option>user</option>
    <option>admin</option>
  </select>
<button id="buttonAddUsers" class="btn btn-danger" type=submit style="margin-left:7%;margin-top:2%;">Добавить пользователя</button>
</form>
</div>
<div align="center" style="margin-top: 10px; margin-left: 5%;">
<p id="VivodAdminsInfa">Удаление пользователя</p>
</div>
<div style="margin-left: 39%;">
<form action="delUsers.php" method="post">
  <input id="DelLogin" type="text" name="DelLogin" class="form-control" placeholder="Введите логин"><br>
  <button id="buttonAddUsers" class="btn btn-danger" type=submit style="margin-left:7%;">Удалить пользователя</button>
</form>
</div>

</div>
</div>
</div>

	</body>
</html>
<?php
include registration.php;
$login = filter_var(trim($_POST['DelLogin']), FILTER_SANITIZE_STRING);


if (mb_strlen($login) < 3 || mb_strlen($login) > 100) {
  echo"<script>swal(\"Недопустимая длина логина!\", \"Логин содержит от 3 до 100 символов\", \"error\");</script>";
    exit();
}
$mysql = new mysqli('localhost', 'root', 'root', 'census');
if ($mysql->connect_error) {
  die('<script>swal("Ошибка!", "Не удается установить соединение с базой данных", "error");</script>');
}

$result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login'");
$user = $result->fetch_assoc();
if(count($user)==0){
  echo"<script>swal(\"Такого пользователя нет!\", \"Поменяйте логин\", \"error\");</script>";
}else{
  $mysql->query("DELETE FROM users WHERE login = '$login'");
  $mysql->close();
  echo"<script>swal(\"Успешно!\", \"Пользователь успешно удален\", \"success\");</script>";
  exit();
}
?>
