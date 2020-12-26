<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Авторизация</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <meta name=viewport content="width=1000">
</head>
<style>
body {overflow:hidden;}
#a {margin-top:25px}
#b {margin-top:25px}
</style>
<body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php
    // include 'auth.php';
    ?>
  <div class="container mt-4">
    <div class ="row">
      <div class="col">
<div class="log">
<center><font size="5" color="Black" face="segoe print">Информационно-справочная система<br><b>"Перепись населения"</b></font></center>
<hr>
</form>
</div>
<div class="col">
<center><h1>Авторизация</h1>
<form action ="auth.php" method="post">
  <input type="text" name="login" class="form-control" id="login" placeholder="Введите логин"><br>
  <input type="password" name="pass" class="form-control" id="pass" placeholder="Введите пароль"><br>
  <button class="btn btn-outline-success" type=submit>Авторизоваться</button>
</form>
</div>
<center><form align = "left" action ="reg.php" method = "post">
<center><button id="a" class="btn btn-outline-success" type=submit>Зарегистрироваться</button></center>
</form>
<center><form align = "left" action ="populationreg.php" method = "post">
<center><button id="b" class="btn btn-outline-success" type=submit>Заполнить анкету</button></center>
</form>
<?php
if($_COOKIE['user']==''):
?>
    <div>
    <center><input type="button" id="b" class="btn btn-success btn-sm" onclick="location.href='glav.php'" value="Войти как гость" />
    </div>
    <?php endif;?>
</div>
</div>
</div>
</body>
</html>
