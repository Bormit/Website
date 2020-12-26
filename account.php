<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Личный кабинет</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/glav.css">
  <meta name=viewport content="width=1000">
</head>
<style>
body {overflow:hidden;}
#Avatar{
  display:block;
  margin-top: 10%;
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
  margin-left: 613px;
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
<div align="center" >
<input type="image" id="Avatar" src="assets/Avatar.png">
</div>
<div align="center" >
  <?php
  if($_COOKIE['user']==''):?>
<p id="AccountHello">Гость</p>
<p id="AccountHello2">Хотите <a href ="/reg.php">зарегистрироваться</a> или <a href ="/index.php">авторизоваться</a>?</p>
<?php else:?>
    <p id="AccountHello"><?=$_COOKIE['user']?></p>
        </div>
    <form action="logout.php">
    <button id="ButtonExit" class="btn btn-primary">Выйти</button>
    </form>
  <?php endif;?>

  <?php
  $UserRole=$_COOKIE['user'];
  $mysql = new mysqli('localhost', 'root', 'root', 'census');
  if ($mysql->connect_error) {
    die('<script>swal("Ошибка!", "Не удается установить соединение с базой данных", "error");</script>');
  }
  $result = $mysql->query("SELECT * FROM `users` WHERE `login`='$UserRole' AND `role`='admin'");
  $user = $result->fetch_assoc();
  if(count($user)!=0){
    ?>

    <form action="adminPanel.php">
    <button id="ButtonExit" class="btn btn-primary">Админ панель</button>
  </form>
    <?php
  }
  $mysql->close();
    ?>
</div>
</div>
</div>

	</body>
</html>
