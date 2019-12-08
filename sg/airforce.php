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
<p style="background:#ADD8E6; padding:20px"><big><font face="Verdana">Nike x Travis Scott AIR FORCE 1 LOW 'CACTUS JACK'</font></big></p>
<p>
  <img src="image/models/af1trevis.jpg" style="margin: 50px 30px 30px 30px" width="420" height="260"/> 
  <img src="image/models/af1trevis1.jpg" style="margin: 50px 30px 30px 30px" width="420" height="260"/>
  <img src="image/models/af1trevis2.jpg" style="margin: 20px 30px 50px 30px" width="390" height="295"/>
  <img src="image/models/af1trevis3.jpg" style="margin: 20px 30px 50px 30px" width="440" height="170"/>
</p>
</div>
<center style="background:#DCDCDC; padding:20px">
	<p><big><font face="Verdana" size:20px>Обзор данной модели:</font></big></p><br>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/zjktr55vc5k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center> 
	<p style="padding:20px"><big><font face="Verdana" >Где купить:</font></big></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://www.farfetch.com/ru/shopping/men/nike-nike-x-travis-scott-air-force-1-low-cactus-jack-item-14700437.aspx?storeid=11218" style="font-size: 21px">Farfetch</a></font></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://stockx.com/nike-air-force-1-low-travis-scott-cactus-jack" style="font-size: 21px">StockX</a></font></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://outofstock.cc/model/719" style="font-size: 21px">Out of stock</a></font></p>
	<br><br>
	
<p style="background:#ADD8E6; padding:20px"><big><font face="Verdana" >Nike AIR FORCE 1 LOW 'BLACK SKELETON'</font></big></p>
<p>
  <img src="image/models/af1skelet.jpg" style="margin: 50px 30px 20px 30px" width="450" height="230"/> 
  <img src="image/models/af1skelet1.jpg" style="margin: 50px 30px 20px 30px" width="450" height="300"/><br>
  <img src="image/models/af1skelet3.jpg" style="margin: 10px 30px 50px 30px" width="400" height="295"/>
  <img src="image/models/af1skelet2.jpg" style="margin: 10px 30px 50px 30px" width="370" height="380"/>
</p>
</div>
<center style="background:#DCDCDC; padding:20px">
	<p><big><font face="Verdana" size:20px>Обзор данной модели:</font></big></p><br>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/Uc92V1eMLdk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center> <br>
	<p style="padding:20px"><big><font face="Verdana" >Где купить:</font></big></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://stockx.com/nike-air-force-1-low-black-skeleton" style="font-size: 21px">StockX</a></font></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://outofstock.cc/model/720" style="font-size: 21px">Out of stock</a></font></p>
	<br><br>
	
<p style="background:#ADD8E6; padding:20px"><big><font face="Verdana">Nike x Off-White AIR FORCE 1 LOW 'MCA'</font></big></p>
<p>
  <img src="image/models/af1off.jpg" style="margin: 50px 30px 20px 30px" width="430" height="230"/> 
  <img src="image/models/af1off1.jpg" style="margin: 50px 30px 20px 30px" width="430" height="230"/><br>
  <img src="image/models/af1off2.jpg" style="margin: 10px 30px 50px 30px" width="400" height="245"/>
  <img src="image/models/af1off3.jpg" style="margin: 10px 30px 50px 30px" width="470" height="200"/>
</p>
</div>
<center style="background:#DCDCDC; padding:20px">
	<p><big><font face="Verdana" size:20px>Обзор данной модели:</font></big></p><br>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/qsXIelCmSsY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center> <br>
	<p style="padding:20px"><big><font face="Verdana" >Где купить:</font></big></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://www.farfetch.com/ru/shopping/men/nike-air-force-1-low-item-14193141.aspx?storeid=11218" style="font-size: 21px">Farfetch</a></font></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://stockx.com/nike-air-force-1-low-off-white-university-blue" style="font-size: 21px">StockX</a></font></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://outofstock.cc/model/693" style="font-size: 21px">Out of stock</a></font></p>
	<br><br>
<br><br><br>
<div id="footer">
   <p>Sneaker Guide<p> 
   <p> <a href="index.php?logout='1'" style="font-size: 14px">Выход</a> </p>
 </div>	
</body>
</html>