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
<p style="background:#ADD8E6; padding:20px"><big><font face="Verdana" >Nike x Travis Scott AIR JORDAN 1 RETRO HIGH OG 'MOCHA'</font></big></p>
<p>
  <img src="image/models/aj1trevis.jpg" style="margin: 50px 30px 50px 30px" width="430" height="265"/> 
  <img src="image/models/aj1trevis1.jpg" style="margin: 50px 30px 50px 30px" width="430" height="265"/>
  <img src="image/models/aj1trevis2.jpg" style="margin: 50px 30px 50px 30px" width="350" height="285"/>
  <img src="image/models/aj1trevis3.jpg" style="margin: 50px 30px 50px 30px" width="460" height="180"/>
</p>
</div>
<center style="background:#DCDCDC; padding:20px">
	<p><big><font face="Verdana" size:20px>Обзор данной модели:</font></big></p><br>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/SxlHDmnLnUU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center> 
	<p style="padding:20px"><big><font face="Verdana" >Где купить:</font></big></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://stockx.com/air-jordan-1-retro-high-travis-scott" style="font-size: 21px">StockX</a></font></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://outofstock.cc/model/655" style="font-size: 21px">Out of stock</a></font></p>
	<br><br>
	
<p style="background:#ADD8E6; padding:20px"><big><font face="Verdana" >Nike x Travis Scott AIR JORDAN 6 RETRO 'OLIVE'</font></big></p>
<p>
  <img src="image/models/aj6trevis.jpg" style="margin: 50px 30px 50px 30px" width="410" height="270"/> 
  <img src="image/models/aj6trevis1.jpg" style="margin: 50px 30px 50px 30px" width="410" height="270"/><br>
  <img src="image/models/aj6trevis2.jpg" style="margin: 30px 30px 50px 30px" width="345" height="285"/>
  <img src="image/models/aj6trevis3.jpg" style="margin: 30px 30px 50px 30px" width="470" height="270"/>
</p>
</div>
<center style="background:#DCDCDC; padding:20px">
	<p><big><font face="Verdana" size:20px>Обзор данной модели:</font></big></p><br>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/dfPJpTtrhHs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center> <br>
	<p style="padding:20px"><big><font face="Verdana" >Где купить:</font></big></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://stockx.com/air-jordan-6-retro-travis-scott" style="font-size: 21px">StockX</a></font></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://outofstock.cc/model/681" style="font-size: 21px">Out of stock</a></font></p>
	<br><br>
	
<p style="background:#ADD8E6; padding:20px"><big><font face="Verdana" >Nike x Off-White AIR JORDAN 1 RETRO HIGH OG 'CHICAGO'</font></big></p>
<p>
  <img src="image/models/aj1off.jpg" style="margin: 50px 30px 50px 30px" width="440" height="285"/> 
  <img src="image/models/aj1off1.jpg" style="margin: 50px 30px 50px 30px" width="440" height="285"/>
  <br>
  <img src="image/models/aj1off2.jpg" style="margin: 10px 30px 50px 30px" width="345" height="300"/>
  <img src="image/models/aj1off3.jpg" style="margin: 50px 30px 50px 30px" width="450" height="255"/>
</p>
</div>
<center style="background:#DCDCDC; padding:20px">
	<p><big><font face="Verdana" size:20px>Обзор данной модели:</font></big></p><br>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/Dnw1zlJ5gps" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center> <br>
	<p style="padding:20px"><big><font face="Verdana" >Где купить:</font></big></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://stockx.com/air-jordan-1-retro-high-off-white-chicago" style="font-size: 21px">StockX</a></font></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://outofstock.cc/model/757" style="font-size: 21px">Out of stock</a></font></p>
	<br><br>
<br><br><br><br><br>
<div id="footer">
   <p>Sneaker Guide<p> 
   <p> <a href="index.php?logout='1'" style="font-size: 14px">Выход</a> </p>
 </div>	
</body>
</html>
