<?php
  $connect = mysqli_connect("localhost", "root", "root", "census");
  if ($connect->connect_error) {
    die('<script>swal("Ошибка!", "Не удается установить соединение с базой данных", "error");</script>');
  }
  $query = "SELECT `сity` as label, COUNT(*) AS `value` FROM `population` GROUP by `сity` ORDER by VALUE";
  $result = mysqli_query($connect, $query);
  $chart_data = '';
  while($row = mysqli_fetch_array($result))
  {
    $chart_data .="{ label:'".$row["label"]."', value:".$row["value"]."}, ";
  }
  $chart_data = substr($chart_data, 0, -2);
?>

<html>

<head>

   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
 <meta name=viewport content="width=1000">

    <title>PHP Morris chart</title>

</head>
<style>
body
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
	margin-top: -1000px;
  margin-left: 400px;
}
</style>

<body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<center><font size="5" color="Black" face="segoe print">Информационно-справочная система<br><b>"Перепись населения"</b></font></center>
<div align="center" >
<?php
if($_COOKIE['user']==''):?>
  <p id="AccountHello"> Вы гость</p>
  <p id="AccountHello2">Для просмотра графиков необходимо <a href ="/reg.php">зарегистрироваться</a> и <a href ="/index.php">авторизоваться</a>.</p>
<?php else:?>
  <center><h1>График численности населения по городам</h1>
  <div class="container" style="width:900px;">

      <div id="chart1" style="height: 250px;"></div>
      <h1>График количества населения до пенсионного возраста по возрастам</h1>
      <div id="chart2" style="height: 250px;"></div>
      <h1>График количества населения после пенсионного возраста по возрастам</h1>
      <div id="chart3" style="height: 250px;"></div>

  </div>
      </div>
  <form action="glav.php">
  <button id="ButtonExit" class="btn btn-danger">Выйти</button>
  </form>
<?php endif;?>
</body>

</html>
<script>

new Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'chart1',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  // data: [
  //   { label: 'Москва', value: 10000000 },
  //   { label: 'Владивосток', value: 1000000 },
  //   { label: 'Омск', value: 3000000 },
  //   { label: 'Волгодонск', value: 200000 },
  //   { label: 'Краснодар', value: 1000000 }
  // ],
     data:[<?php echo $chart_data; ?>],
  // The name of the data record attribute that contains x-values.
  xkey: 'label',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value']
});

</script>
<?php
  $connect = mysqli_connect("localhost", "root", "root", "census");
  if ($connect->connect_error) {
    die('<script>swal("Ошибка!", "Не удается установить соединение с базой данных", "error");</script>');
  }
  $query = "SELECT `age` as label, COUNT(*) AS `value` FROM `population` where age < 65 GROUP by `age` ORDER by 1";
  $result = mysqli_query($connect, $query);
  $chart_data = '';
  while($row = mysqli_fetch_array($result))
  {
    $chart_data .="{ label:'".$row["label"]."', value:".$row["value"]."}, ";
  }
  $chart_data = substr($chart_data, 0, -2);
?>
<script>
new Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'chart2',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  // data: [
  //   { label: '21', value: 10000000 },
  //   { label: '22', value: 1000000 },
  //   { label: '3', value: 3000000 },
  //   { label: '66', value: 200000 },
  //   { label: '78', value: 1000000 }
  // ],
     data:[<?php echo $chart_data; ?>],
  // The name of the data record attribute that contains x-values.
  xkey: 'label',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value']
});

</script>
<?php
  $connect = mysqli_connect("localhost", "root", "root", "census");
  if ($connect->connect_error) {
    die('<script>swal("Ошибка!", "Не удается установить соединение с базой данных", "error");</script>');
  }
  $query = "SELECT `age` as label, COUNT(*) AS `value` FROM `population` where age > 65 GROUP by `age` ORDER by 1";
  $result = mysqli_query($connect, $query);
  $chart_data = '';
  while($row = mysqli_fetch_array($result))
  {
    $chart_data .="{ label:'".$row["label"]."', value:".$row["value"]."}, ";
  }
  $chart_data = substr($chart_data, 0, -2);
?>
<script>

new Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'chart3',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  // data: [
  //   { label: '21', value: 10000000 },
  //   { label: '22', value: 1000000 },
  //   { label: '3', value: 3000000 },
  //   { label: '66', value: 200000 },
  //   { label: '78', value: 1000000 }
  // ],
     data:[<?php echo $chart_data; ?>],
  // The name of the data record attribute that contains x-values.
  xkey: 'label',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value']
});

</script>
