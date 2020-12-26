<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Статистика</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/glav.css">
  <meta name=viewport content="width=1000">
</head>
<style>
body {overflow:hidden;}
#a {margin: 0px 0px 0px -162px;}
#b {font-family: segoe print;
    font-size: 50px;
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
<div><center><b id="b">Полная статистика населения</b></center></div>
<?php

$mysql = new mysqli('localhost', 'root', 'root', 'census');
if ($mysql->connect_error) {
  die('<script>swal("Ошибка!", "Не удается установить соединение с базой данных", "error");</script>');
}

$sql = $mysql->query("SELECT * FROM `population` WHERE `name`!=''");
    ?><div class="head_info" align="center">
      <table>
  <colgroup>
    <col span="1" style="background:#4DFFFF">
    <col span="4" style="background:LightCyan">
    <col style="background-color:LightCyan">
  </colgroup>
  <tr>
    <th>№ Строки</th>
    <th>Имена</th>
    <th>Город</th>
    <th>Пол</th>
    <th>Возраст</th>
  </tr>
  <?php while ($result = mysqli_fetch_array($sql)) {?>
  <tr>
    <td align="center"><?php echo "{$result['id']}";?></td>
    <td align="center"><?php echo "{$result['name']}";?></td>
    <td align="center"><?php echo "{$result['сity']}";?></td>
    <td align="center"><?php echo "{$result['sex']}";?></td>
    <td align="center"><?php echo "{$result['age']}";?></td>
  </tr>
 <?php
  }
  ?>
</table>
</div>
<?php

$mysql->close();
?>
</div>
</div>
</div>
	</body>
</html>
