<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Главное меню</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/glav.css">
  <meta name=viewport content="width=1000">
</head>
<style>
body {overflow:hidden;}
#a {margin: 0px 0px 0px -162px}
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
<div>
<?php
if($_COOKIE['user']==''):?>
  <center><p id="AccountHello">Привет, Гость</p>
  <center><p id="AccountHello">Не заполнили анкету?</p>
  <center><form align = "left" action ="populationreg.php" method = "post">
  <center><button id="b" class="btn btn-primary" type=submit>Заполнить</button></center>
  <?php else:?>
    <center><p id="AccountHello">Привет, <?=$_COOKIE['user']?></p>
    <center><p id="AccountHello">Не заполнили анкету?</p>
    <center><form align = "left" action ="populationreg.php" method = "post">
    <center><button id="b" class="btn btn-primary" type=submit>Заполнить</button></center>
  <?php endif;?>
</div>
</div>
</div>
</div>
	</body>
</html>
