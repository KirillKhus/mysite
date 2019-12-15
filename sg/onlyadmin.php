<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Сначала вы должны войти";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<html>
<head>
	 <title>Sneaker Guide</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	table {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
font-size: 14px;
border-collapse: collapse;
text-align: center;
}
th, td:first-child {
background: #AFCDE7;
color: white;
padding: 10px 20px;
}
th, td {
border-style: solid;
border-width: 0 1px 1px 0;
border-color: white;
}
td {
background: #D8E6F3;
}
th:first-child, td:first-child {
text-align: left;
}
	</style>
</head>
<body>
<div class="sidenav">
  <a href="index.php">На главную</a>
  <a href="magazin.php">Магазины</a>
  <a href="info.php">О нас</a>
</div>


<div class="main">

<div class="header1">
	<h2> <img src="image/logo2.jpg" width="70" height="60" align="center" />Sneaker Guide<img src="image/logo1.jpg" width="70" height="60" align="center" /></h2>
</div>
<br>

<div id="footer">
   <p>Sneaker Guide<p> 
   <p> <a href="index.php?logout='1'" style="font-size: 14px">Выход</a> </p>
 </div>	
</body>
</html>

<?php
session_start();
require('db.php');
$sql = mysqli_query($con, "SELECT * FROM `users` WHERE `username` = '" . $_SESSION['username'] . "'");

if(mysqli_fetch_array($sql)['admin'] < 1){
echo "<h2>Вы не имеете прав администратора</h2>";
exit();
}
?>
<div class="content1">
      <h2><font face="Verdana">АДМИНИСТРИРОВАНИЕ</font></h2>
    	<table>
    
        <tr> 
          <td>id</td>
          <td>Имя</td>
          <td>Почта</td>
          <td>Статус</td>
          <td>Удалить</td>
          <td>Дать права</td>
          <td>Забрать права</td>
        </tr>
        <?php 
        require('db.php');
        $sql = mysqli_query($con, 'SELECT * FROM `users` WHERE (`admin` = "0" or `admin` = "1")');  
        while ($result = mysqli_fetch_array($sql)) {
        echo 
        '<tr>' .
          "<td>{$result['id']}</td>" .
          "<td>{$result['username']}</td>" .
          "<td>{$result['email']}</td>" .
          "<td>{$result['admin']}</td>" .
          "<td><a href='?del={$result['id']}'>Удалить</a></td>" .
          "<td><a href='?mod={$result['id']}'>✔</a></td>" . 
          "<td><a href='?usr={$result['id']}'>×</a></td>" . 
        '</tr>'; 
        }
        ?>

    </table>
</div>


