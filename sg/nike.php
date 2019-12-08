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
	<center><img src="image/nike.jpg" width="130" height="115" align="center"/></center>
	<a href="airjordan.php" style="background:#ADD8E6; font-size: 20px; padding:10px 180px 10px 10px">Nike Air Jordan</a>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana">Air Jordan — именной бренд, разработанный американской компанией Nike для легендарного баскетболиста Майкла Джордана, также известный как Jordans.
	Основной акцент — высококачественная дорогая баскетбольная обувь и одежда. Под брендом также производится обувь для боксёров, профессиональных борцов, а также игроков в американский футбол.</font></p>
	<p style="padding:10px 80px 20px 20px"><font face="Verdana" ><img src="image/models/aj1og.jpg" width="500" height="370" align="center" style="margin-right:10px"/></font></p>
	<br>
	<a href="airmax.php" style="background:#ADD8E6; font-size: 20px; padding:10px 180px 10px 10px">Nike Air Max</a>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana">День 26 марта 1987 года навсегда изменил мир кроссовок. Именно тогда бренд Nike начал продажу кроссовок Air Max,
	а видимая воздушная подушка стала не только отличительной чертой всей серии Air Max, но также синонимом новаторства и стиля.</font></p>
	<p style="padding:10px 80px 20px 20px"><font face="Verdana" ><img src="image/airmax.jpg" width="720" height="410" align="center" style="margin-right:10px"/></font></p>
	<br>
	<a href="airforce.php" style="background:#ADD8E6; font-size: 20px; padding:10px 180px 10px 10px">Nike Air Force</a>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana">Массовая модель Nike Air Force 1 была представлена в 1982 году. Оригинальные Air Force 1 были высокими белого и нейтрально-серого цветов с отстёгивающимся фиксирующим ремнём и сеточной боковой панелью.
	Для рекламы, определившей дальнейшее будущее новых кроссовок, Nike привлекли шестерых звёзд НБА – Майкла Купера, Бобби Джонса, Мозеса Мэлоуна, Келвина Натта, Майкла Томпсона и Джамала Уилкса.</font></p>
	<p style="padding:10px 80px 20px 20px"><font face="Verdana" ><img src="image/models/airforce.jpg" width="520" height="520" align="center" style="margin-right:10px"/></font></p>
	</div>
<br><br><br><br><br>
<div id="footer">
   <p>Sneaker Guide<p> 
   <p> <a href="index.php?logout='1'" style="font-size: 14px">Выход</a> </p>
 </div>	
</body>
</html>