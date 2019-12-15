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
<p style="background:#ADD8E6; padding:20px"><big><font face="Verdana" >ADIDAS YEEZY BOOST 380 'ALIEN'</font></big></p>
<p>
  <img src="image/models/yeezy380.jpg" style="margin: 50px 30px 50px 30px" width="430" height="265"/> 
  <img src="image/models/yeezy3801.jpg" style="margin: 50px 30px 50px 30px" width="430" height="265"/>
  <img src="image/models/yeezy3802.jpg" style="margin: 20px 30px 50px 30px" width="350" height="285"/>
  <img src="image/models/yeezy3803.jpg" style="margin: 20px 30px 50px 30px" width="460" height="300"/>
</p>
</div>
<center style="background:#DCDCDC; padding:20px">
	<p><big><font face="Verdana" size:20px>Обзор данной модели:</font></big></p><br>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/PI9qDtdNO6M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center> 
	<p style="padding:20px"><big><font face="Verdana" >Где купить:</font></big></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://stockx.com/adidas-yeezy-boost-380-alien" style="font-size: 21px">StockX</a></font></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://outofstock.cc/model/1024" style="font-size: 21px">Out of stock</a></font></p>
	<br><br>
	
<p style="background:#ADD8E6; padding:20px"><big><font face="Verdana" >ADIDAS YEEZY BOOST 700 V2 'TEPHRA'</font></big></p>
<p>
  <img src="image/models/yeezy700.jpg" style="margin: 50px 30px 50px 30px" width="460" height="240"/> 
  <img src="image/models/yeezy7001.jpg" style="margin: 50px 30px 50px 30px" width="460" height="240"/><br>
  <img src="image/models/yeezy7003.jpg" style="margin: 30px 30px 50px 30px" width="375" height="255"/>
  <img src="image/models/yeezy7002.jpg" style="margin: 30px 30px 50px 30px" width="470" height="210"/>
</p>
</div>
<center style="background:#DCDCDC; padding:20px">
	<p><big><font face="Verdana" size:20px>Обзор данной модели:</font></big></p><br>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/8cB4dM5yraM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center> <br>
	<p style="padding:20px"><big><font face="Verdana" >Где купить:</font></big></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://stockx.com/adidas-yeezy-boost-700-v2-tephra" style="font-size: 21px">StockX</a></font></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://outofstock.cc/model/645" style="font-size: 21px">Out of stock</a></font></p>
	<br><br>
	
<p style="background:#ADD8E6; padding:20px"><big><font face="Verdana" >ADIDAS YEEZY BOOST 350 V2 'BELUGA 2.0'</font></big></p>
<p>
  <img src="image/models/yeezy350v2.jpg" style="margin: 50px 30px 50px 30px" width="445" height="250"/> 
  <img src="image/models/yeezy350v21.jpg" style="margin: 50px 30px 50px 30px" width="445" height="250"/><br>
  <img src="image/models/yeezy350v23.jpg" style="margin: 10px 30px 50px 30px" width="385" height="270"/>
  <img src="image/models/yeezy350v22.jpg" style="margin: 50px 30px 50px 30px" width="450" height="210"/>
</p>
</div>
<center style="background:#DCDCDC; padding:20px">
	<p><big><font face="Verdana" size:20px>Обзор данной модели:</font></big></p><br>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/ICaCuex21rU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center> <br>
	<p style="padding:20px"><big><font face="Verdana" >Где купить:</font></big></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://stockx.com/adidas-yeezy-boost-350-v2-beluga-2-0" style="font-size: 21px">StockX</a></font></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://outofstock.cc/model/723" style="font-size: 21px">Out of stock</a></font></p>
	<br><br>
<br><br><br><br><br>
<div id="footer">
   <p>Sneaker Guide<p> 
   <p> <a href="index.php?logout='1'" style="font-size: 14px">Выход</a> </p>
 </div>	
</body>
</html>
