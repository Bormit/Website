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
#otzivtext{
  margin-top: 0%;
  margin-bottom: 3%;
  display:block;
  font-size: 58px;
  font-family: segoe print;
}
#VivodAdminsInfa{
  margin-left:-10%;
  margin-top: -20%;
  font-family: segoe print;
  font-size: 20px;
}
#VivodAdminsInfa2{
  margin-left: 65%;
  margin-top: -11%;
  font-family: segoe print;
  font-size: 20px;
}
#AddName{
  margin-left: 600%;
  margin-top: -65%;
}
#AddCity{
  margin-left: 484%;
  margin-top: -30%;
}
#AddSex{
  margin-left: 369%;
  margin-top: 5%;
}
#AddAge{
  margin-left: 601%;
  margin-top: 10%;
}
#buttonAddInfo{
  margin-left: 184%;
  margin-top: 0%;
}
#buttondelUsers{
  margin-left: 1%;
  margin-top: 0%;
}

#otzivtext{
  margin-top: 0%;
  display:block;
  font-size: 58px;
  font-family: segoe print;
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

$mysql = new mysqli('localhost', 'root', 'root', 'census');
if ($mysql->connect_error) {
  die('<script>swal("Ошибка!", "Не удается установить соединение с базой данных", "error");</script>');
}

$sql = $mysql->query("SELECT * FROM `population` WHERE `name`!=''");
    ?><div class="head_info" align="center">
      <table>
  <colgroup>
    <col span="1" style="background:#4DFFFF">
    <col span="4" style="background:Mistyrose">
    <col style="background-color:LightCyan">
  </colgroup>
  <tr>
    <th>Номер строки</th>
    <th>Имя</th>
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
<div>
<p id="VivodAdminsInfa">Удаление информации о населении через номер строки</p>
</div>
<div class="container">
<form action="DelInfa.php" method="post">
  <div class="col-sm-4">
  <input id="DelId" type="text" name="DelId" class="form-control" placeholder="Введите номер строки" style="width: 200px; "><br>
  </div>
  <button id="buttondelUsers" class="btn btn-danger" type=submit>Удалить информацию</button>
</div>
</form>
</div>
<div>
<p id="VivodAdminsInfa2">Добавление информации о населении</p>
</div>

<div class="container">
<form action="AddInfa.php" method="post">
  <div class="row">
    <div class="col-sm-4">
      <input type="text" id="AddName"name="AddName" class="form-control" placeholder="Введите имя">
    </div>
    <div class="col-sm-4">
      <input type="text" id="AddCity"name="AddCity" class="form-control" placeholder="Введите город">
    </div>
    <div class="col-sm-4">
      <input type="text" id="AddSex"name="AddSex" class="form-control" placeholder="Введите пол">
    </div>
    <div class="col-sm-4">
      <input type="text" id="AddAge"name="AddAge" class="form-control" placeholder="Введите возраст">
    </div>
  </div>
  <button id="buttonAddInfo" class="btn btn-danger" type=submit style="margin-top: 5%;">Добавить информацию</button>
</form>
</div>

</div>
</div>
</div>

	</body>
</html>
