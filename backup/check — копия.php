<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$сity = filter_var(trim($_POST['сity']), FILTER_SANITIZE_STRING);
$sex = filter_var(trim($_POST['sex']), FILTER_SANITIZE_STRING);
$age = filter_var(trim($_POST['age']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);


$pass = md5($pass."ChfkG7Jf9lP63");

$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
$mysql->query("INSERT INTO `users` (`login` , `pass` , `name` , `сity` , `sex` , `age`)
VALUES('$login','$pass','$name','$сity','$sex','$age') ");
$mysql->close();

header('Location:/');
?>
