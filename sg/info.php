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
<div>
<p style=" padding:20px"><big><font face="Verdana" >О сайте:</font></big></p>
<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" >Sneaker Guide - Это сайт эксклюзивной информации о моделях кроссовок разлычных брендов. Здесь вы найдете все, что вам нужно знать о современной сникер культуре: от популярных моделей до дат релизов новых пар.</font></p>
<p style=" padding:20px"><big><font face="Verdana" >Контакты:</font></big></p>
<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://vk.com/" style="font-size: 21px">Мы во Вконтакте</a></font></p>
<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://www.instagram.com/" style="font-size: 21px">Наш Инстаграм</a></font></p>
<p style="background:#DCDCDC; padding:10px 180px 20px 20px; font-size: 21px"><font face="Verdana" >Наша почта sneakerguid@gmail.com</font></p>
</div>
<br><br><br><br>
<div id="footer">
   <p>Sneaker Guide<p> 
   <p><a href="index.php?logout='1'" style="font-size: 14px">Выход</a> </p>
 </div>	
</body>
</html>