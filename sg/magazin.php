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
	<p style=" padding:20px"><big><font face="Verdana" >В Москве есть несколько крупных магазинов кроссовок, помимо официальных магазинов Nike, Adidas и т.д. Мы выбрали для вас лучшие из них:</font></big></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><img src="image/logo1.jpg" width="70" height="60" align="center" /><a href="https://brandshop.ru/" style="font-size: 21px">Brandshop</a></font></p>
	<p style="background:#DCDCDC; padding:10px 80px 20px 20px"><font face="Verdana" ><img src="image/brandshop1.jpg" width="600" height="350" align="center" style="margin-right:10px"/><img src="image/brandshop2.jpg" width="600" height="350" align="center" style="margin-right:10px"/>  </font></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" >Адреса магазинов:<br> BRANDSHOP, Петровский <br> Москва, Петровский бульвар, д. 21 <br>Режим работы – с 10:00 до 22:00, ежедневно<br>BRANDSHOP, Полянка
    <br>Москва, Большая Полянка 65/74с3 <br>Режим работы – с 10:00 до 22:00, ежедневно</font></p>
</div><br>
<div>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><img src="image/logo1.jpg" width="70" height="60" align="center" /><a href=https://sneakerhead.ru/?admitad_uid=e4c7f4b239f87e1eef3d8f9402074f24&utm_source=admitad" style="font-size: 21px">Sneakerhead</a></font></p>
	<p style="background:#DCDCDC; padding:10px 80px 20px 20px"><font face="Verdana" ><img src="image/sneakerhead1.jpg" width="600" height="350" align="center" style="margin-right:10px"/><img src="image/sneakerhead2.jpg" width="600" height="350" align="center" style="margin-right:10px"/>  </font></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" >Адреса магазинов:<br> Москва м. Лубянка ул. Никольская, 10/2 с.2Б<br>часы работы Пн-Вс с 11:00 до 22:00<br>г. Москва м. Дмитровская ул. Бол. Новодмитровская, 36/2<br>часы работы с 10:00 до 21:00
    <br>г. Москва м. Трубная Нижний Кисельный пер., 4<br>часы работы с 11:00 до 22:00<br>г. Москва м. ЦСКА ул. Авиаконструктора Микояна, 10<br>часы работы вс-чт 10:00 - 23:00, пт и сб 10:00 - 23:00</font></p>
</div><br>
<div>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" ><img src="image/logo1.jpg" width="70" height="60" align="center" /><a href=https://street-beat.ru/" style="font-size: 21px">Street beat</a></font></p>
	<p style="background:#DCDCDC; padding:10px 80px 20px 20px"><font face="Verdana" ><img src="image/streetbeat1.jpg" width="600" height="350" align="center" style="margin-right:10px"/><img src="image/streetbeat2.jpg" width="600" height="350" align="center" style="margin-right:10px"/>  </font></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" >Адреса магазинов:<br> ТРЦ Европейский, ТРК Атриум, ТЦ Авиапарк, ТЦ Метрополис, ТЦ Охотный ряд, ТЦ Капитолий Вернадского, ТЦ Авеню Юго-Западная,
	ТРЦ Океания, ТЦ Вегас Крокус Сити.</font></p>
</div><br>


</div>
<br><br><br><br>
<div id="footer">
   <p>Sneaker Guide<p> 
   <p> <a href="index.php?logout='1'" style="font-size: 14px">Выход</a> </p>
 </div>	
</body>
</html>