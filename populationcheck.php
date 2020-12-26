<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Форма регистрации населения</title>
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
        <center><h1>Форма регистрации населения</h1>
        <form action="populationcheck.php" method="post">
          <input type="text" name="name" class="form-control" id="name" placeholder="Введите имя"><br>
          <input type="text" name="сity" class="form-control" id="city" placeholder="Введите город"><br>
          <input type="text" name="sex" class="form-control" id="sex" placeholder="Введите пол"><br>
          <input type="text" name="age" class="form-control" id="age" placeholder="Введите возраст"><br>
          <button class="btn btn-primary" type=submit>Зарегистрировать</button>
        </form>
      </div>
<center><p><input type="button" id="a" class="btn btn-primary btn-sm" onclick="location.href='index.php'" value="Вернуться на предыдущую страницу"/><p>

</body>
</html>
<?php
  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
  $сity = filter_var(trim($_POST['сity']), FILTER_SANITIZE_STRING);
  $sex = filter_var(trim($_POST['sex']), FILTER_SANITIZE_STRING);
  $age = filter_var(trim($_POST['age']), FILTER_SANITIZE_STRING);

  if($name == ""){
    echo"<script>swal(\"Ошибка!\", \"Поле имя не заполнено\", \"error\");</script>";
    exit();
  }
  if($сity == ""){
    echo"<script>swal(\"Ошибка!\", \"Поле город не заполнено\", \"error\");</script>";
    exit();
  }
  if($sex == ""){
    echo"<script>swal(\"Ошибка!\", \"Поле пол не заполнено\", \"error\");</script>";
    exit();
  }
  if($age == ""){
    echo"<script>swal(\"Ошибка!\", \"Поле возраст не заполнено\", \"error\");</script>";
    exit();
  }
  if($age < 0 || $age > 120){
    echo"<script>swal(\"Недопустимый возраст!\", \"Возраст может быть от 0 до 120\", \"error\");</script>";
    exit();
  }
  $symbols = array('m', 'M', 'f', 'F', 'м', 'М', 'ж', 'Ж');
  $is_sex_valide = False;
  foreach($symbols as $symbol){
      if(strcmp($symbol, $sex) == 0){
        $is_sex_valide = True;
      }
  }
  if(! $is_sex_valide){
    echo"<script>swal(\"Ошибка!\", \"Неверно заполнено поле пол\", \"error\");</script>";
    exit();
  }
  if(! is_numeric($age)){
    echo"<script>swal(\"Недопустимый возраст!\", \"Возраст может быть от 0 до 120\", \"error\");</script>";
    exit();
  }
    $mysql = new mysqli('localhost', 'root', 'root', 'census');
    if ($mysql->connect_error) {
    die('<script>swal("Ошибка!", "Не удается установить соединение с базой данных", "error");</script>');
}
    $mysql->query("INSERT INTO `population` (`name`, `сity`, `sex`, `age`)
      VALUES('$name', '$сity', '$sex', '$age') ");
    $mysql->close();

    echo"<script>swal(\"Успешно!\", \"Вы успешно заполнили анкету\", \"success\");</script>";
?>
