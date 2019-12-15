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
<p style="background:#ADD8E6; padding:20px"><big><font face="Verdana" >3M X ADIDAS NITE JOGGER</font></big></p>
<p>
  <img src="image/models/nitejogger.jpg" style="margin: 50px 20px 20px 30px" width="430" height="295"/> 
  <img src="image/models/nitejogger1.jpg" style="margin: 50px 20px 20px 30px" width="430" height="295"/>
  <img src="image/models/nitejogger2.jpg" style="margin: 20px 20px 50px 30px" width="430" height="295"/>
  <img src="image/models/nitejogger3.jpg" style="margin: 20px 20px 50px 30px" width="430" height="295"/>
</p>
</div>
<center style="background:#DCDCDC; padding:20px">
	<p><big><font face="Verdana" size:"20px">Обзор данной модели:</font></big></p><br>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/BvxUOkq0fAU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center> 
	<p style="padding:20px"><big><font face="Verdana" >Где купить:</font></big></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://stockx.com/adidas-nite-jogger-3m-core-black-crystal-white" style="font-size: 21px">StockX</a></font></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://www.adidas.ru/krossovki-nite-jogger/EF9419.html" style="font-size: 21px">Adidas</a></font></p>
	<br><br>
	
<p style="background:#ADD8E6; padding:20px"><big><font face="Verdana" >ADIDAS ULTRA BOOST 4.0 BAPE CAMO</font></big></p>
<p>
  <img src="image/models/uboost.jpg" style="margin: 50px 30px 0px 30px" width="420" height="360"/> 
  <img src="image/models/uboost1.jpg" style="margin: 50px 30px 0px 30px" width="420" height="360"/><br>
  <img src="image/models/uboost2.jpg" style="margin: 0px 30px 50px 30px" width="420" height="360"/>
  <img src="image/models/uboost3.jpg" style="margin: 0px 30px 50px 30px" width="420" height="320"/>
</p>
</div>
<center style="background:#DCDCDC; padding:20px">
	<p><big><font face="Verdana" size:20px>Обзор данной модели:</font></big></p><br>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/VdvM2gFTuvw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center> <br>
	<p style="padding:20px"><big><font face="Verdana" >Где купить:</font></big></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://stockx.com/adidas-ultra-boost-4-bape-camo" style="font-size: 21px">StockX</a></font></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://www.farfetch.com/ru/shopping/men/adidas-adidas-x-yeezy-ultra-boost-bape-item-13800179.aspx?storeid=11218" style="font-size: 21px">Farfetch</a></font></p>
	<br><br>
	
<p style="background:#ADD8E6; padding:20px"><big><font face="Verdana" >ADIDAS I-5923 NEIGHBORHOOD OLIVE</font></big></p>
<p>
  <img src="image/models/iniki.jpg" style="margin: 50px 30px 10px 30px" width="395" height="290"/> 
  <img src="image/models/iniki1.jpg" style="margin: 50px 30px 10px 30px" width="395" height="290"/><br>
  <img src="image/models/iniki2.jpg" style="margin: 0px 30px 50px 30px" width="395" height="280"/>
  <img src="image/models/iniki3.jpg" style="margin: 0px 30px 50px 30px" width="405" height="280"/>
</p>
</div>
<center style="background:#DCDCDC; padding:20px">
	<p><big><font face="Verdana" size:20px>Обзор данной модели:</font></big></p><br>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/sniRnpDuqSE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center> <br>
	<p style="padding:20px"><big><font face="Verdana" >Где купить:</font></big></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://stockx.com/adidas-i-5923-neighborhood-olive" style="font-size: 21px">StockX</a></font></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><a href="https://www.farfetch.com/ru/shopping/men/adidas-i-5923-neighborhood-item-13291323.aspx" style="font-size: 21px">Farfetch</a></font></p>
	<br><br>
<br><br><br><br><br>
<div id="footer">
   <p>Sneaker Guide<p> 
   <p> <a href="index.php?logout='1'" style="font-size: 14px">Выход</a> </p>
 </div>	
</body>
</html>