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
<p style="background:#ADD8E6; padding:20px"><big><font face="Verdana">Nike x Off-White AIR MAX 97 'MENTA'</font></big></p>
<p>
  <img src="image/models/airmax97off.jpg" style="margin: 50px 30px 50px 30px" width="440" height="230"/> 
  <img src="image/models/airmax97off1.jpg" style="margin: 50px 30px 50px 30px" width="440" height="230"/>
  <img src="image/models/airmax97off2.jpg" style="margin: 50px 30px 50px 30px" width="420" height="225"/>
  <img src="image/models/airmax97off3.jpg" style="margin: 50px 30px 50px 30px" width="460" height="180"/>
</p>
</div>
<center style="background:#DCDCDC; padding:20px">
	<p><big><font face="Verdana" size:20px>Обзор данной модели:</font></big></p><br>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/NUzBKLg7dcw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center> 
	<p style="padding:20px"><big><font face="Verdana" >Где купить:</font></big></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://stockx.com/nike-air-max-97-off-white-menta" style="font-size: 21px">StockX</a></font></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://outofstock.cc/model/772" style="font-size: 21px">Out of stock</a></font></p>
	<br><br>
	
<p style="background:#ADD8E6; padding:20px"><big><font face="Verdana" >Nike x Sean Wotherspoon AIR MAX 1/97 'SEAN WOTHERSPOON'</font></big></p>
<p>
  <img src="image/models/airmax197.jpg" style="margin: 50px 30px 50px 30px" width="480" height="250"/> 
  <img src="image/models/airmax1971.jpg" style="margin: 50px 30px 50px 30px" width="480" height="250"/><br>
  <img src="image/models/airmax1972.jpg" style="margin: 30px 30px 50px 30px" width="380" height="285"/>
  <img src="image/models/airmax1973.jpg" style="margin: 30px 30px 50px 30px" width="470" height="190"/>
</p>
</div>
<center style="background:#DCDCDC; padding:20px">
	<p><big><font face="Verdana" size:20px>Обзор данной модели:</font></big></p><br>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/rNk8ICZz9Qc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center> <br>
	<p style="padding:20px"><big><font face="Verdana" >Где купить:</font></big></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://stockx.com/nike-air-max-1-97-sean-wotherspoon-na" style="font-size: 21px">StockX</a></font></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://outofstock.cc/model/814" style="font-size: 21px">Out of stock</a></font></p>
	<br><br>
	
<p style="background:#ADD8E6; padding:20px"><big><font face="Verdana" >Nike x Supreme AIR MAX 98 SUPREME VARSITY RED</font></big></p>
<p>
  <img src="image/models/airmax98sup.jpg" style="margin: 50px 30px 50px 30px" width="520" height="335"/> 
  <img src="image/models/airmax98sup1.jpg" style="margin: 50px 30px 50px 30px" width="590" height="335"/>
</p>
</div>
<center style="background:#DCDCDC; padding:20px">
	<p><big><font face="Verdana" size:20px>Обзор данной модели:</font></big></p><br>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/U-oqMiwygcg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center> <br>
	<p style="padding:20px"><big><font face="Verdana" >Где купить:</font></big></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://stockx.com/air-max-98-supreme-varsity-red" style="font-size: 21px">StockX</a></font></p>
	<br><br>
<br><br><br><br><br>
<div id="footer">
   <p>Sneaker Guide<p> 
   <p> <a href="index.php?logout='1'" style="font-size: 14px">Выход</a> </p>
 </div>	
</body>
</html>
