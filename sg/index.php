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
	 <title>Главная Sneaker Guide</title>
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
<div class="content1">
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p><font face="Verdana">Добро пожаловать</font> <strong><font face="Verdana"><?php echo $_SESSION['username']; ?></font></strong></p>
		<br>
	<p><font face="Verdana" >Выберите интересующий вас бренд:</font></p>
    <?php endif ?>
</div>
 <p>
  <a style="margin: 0px 5px 0px 20px" href="nike.php"><img src="image/nike.jpg" width="90" height="75"/></a> 
  <a style="margin: 0px 10px 0px" href="adidas.php"><img src="image/adidas1.jpg" width="90" height="75"/></a>
  <a style="margin: 0px 10px 0px" href="reebok.php"><img src="image/reebok1.jpg" width="90" height="75"/></a>
  <a style="margin: 0px 10px 0px" href="asics.php"><img src="image/asics1.jpg" width="90" height="75"/></a>
  <a style="margin: 0px 10px 0px" href="newbalance.php"><img src="image/newbalance1.jpg" width="90" height="75"/></a>
 </p>
</div>
<br>
<center style="background:#DCDCDC; padding:20px">
  <p><big><font face="Verdana" size:20px>Новости недели:</font></big></p><br>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/HhiOcKw4y1Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center> <br>
<div class="content1">
	<p><big><font face="Verdana" ><img src="image/logo1.jpg" width="60" height="50" align="center" style="margin-right:10px"/>Новые релизы:</font></big></p>
</div>
<p>
  <a style="margin: 50px 30px 50px 30px" href="airforce.php"><img src="image/models/af1trevis.jpg" width="530" height="335"/></a> 
  <a style="margin: 50px 30px 50px 30px" href="adidas.php"><img src="image/models/YEEZY500stone.jpg" width="550" height="310"/></a>
  <a style="margin: 50px 30px 50px 30px" href="reebok.php"><img src="image/models/yeezy380.jpg" width="540" height="310"/></a>
  <a style="margin: 50px 30px 50px 30px" href="airmax.php"><img src="image/models/airmax97off.jpg" width="560" height="285"/></a>
  <a style="margin: 50px 30px 50px 30px" href="newbalance.php"><img src="image/models/aj6trevis.jpg" width="540" height="355"/></a>
  <a style="margin: 50px 30px 50px 30px" href="airjordan.php"><img src="image/models/aj1trevis.jpg" width="540" height="345"/></a>
</p>
<br><br>
<div>
	<p style="background:#FAEBD7; padding:20px"><big><font face="Verdana" ><img src="image/logo1.jpg" width="60" height="50" align="center" style="margin-right:10px"/>Кто такие сникерхеды?</font></big></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" >Сникерхед (англ. sneakerhead) — человек, коллекционирующий кроссовки. Он в курсе всех новинок в индустрии кроссовок и точно знает, как отличить поддельную пару от настоящей. Коллекционирование кроссовок — это хобби, 
	часто проявляющееся в использовании и хранении обуви, сделанной для определённых видов спорта, таких как баскетбол и скейтбординг.</font></p>
</div><br><br>
<div>
	<p style="background:#FAEBD7; padding:20px"><big><font face="Verdana" ><img src="image/logo1.jpg" width="60" height="50" align="center" style="margin-right:10px"/>Рождение субкультуры</font></big></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" >Рождение субкультуры сникерхедов произошло в 1980-х годах в США. Оно может быть связано с двумя основными источниками: баскетболом, в частности появлением Майкла Джордана в новой линейке кроссовок фирмы Nike Air Jordan
	и ростом популярности хип-хоп музыки. Движение хип-хопа дало новинкам уличную популярность. Разнообразие расцветок и форм Air Jordan привлекало все больше людей из-за этого многие стали их коллекционировать. Некоторые цвета Air Jordan были ограниченными. Счастливчики, которые успели купить такие 
	редкие кроссовки, перепродавали их коллекционерам за большие деньги. Кроссовки стали показателем статуса, из-за этого они все чаще стали появляться на знаменитостях. Сникерхед культура стала пользоваться большой популярностью у молодежи в США, и вскоре она перешла в другие страны.</font></p>
</div><br><br>
<div>
	<p style="background:#FAEBD7; padding:20px"><big><font face="Verdana" ><img src="image/logo1.jpg" width="60" height="50" align="center" style="margin-right:10px"/>Вторичный рынок кроссовок - ресейл</font></big></p>
	<p style="background:#DCDCDC; padding:10px 180px 20px 20px"><font face="Verdana" >По оценке The Financial Times, в 2016 году объём вторичного рынка кроссовок США достиг 1 млрд долларов, где по скромным подсчетам перепродают более 9 млн пар кроссовок. В феврале в США была создана биржа спортивной
	обуви StockX. Одним из её основателей стал бизнесмен и владелец баскетбольного клуба Cleveland Cavaliers Дэниел Гилбер. Основатели биржи оценили глобальный вторичный рынок кроссовок в 6 млрд долларов. На сайте StockX можно найти редкие модели таких брендов, как Nike, Adidas и Jordan. Cамая дорогая 
	пара кроссовок на сайте — Nike Air MAG Back To The Future (2016). Именно в таких летал Марти Макфлай во второй части легендарного фильма «Назад в будущее». Эта пара стоит 22,2 тыс. долларов. Ценность рынка перепродаж на долю Nike, включая бренд Jordan, приходится 96 % всех продаж вторичного рынка кроссовок.
	Абсолютное доминирование. Рынок кроссовок прост — предложение и спрос, но Nike очень удачно использовал предложение: ограниченный выпуск кроссовок и распространение этих кроссовок с прямой и косвенной выгодой для себя. То есть весь трюк в предложении. Сникерхеды говорят, что если выпуск ограничен и это Nike,
	то они покупают не раздумывая. Кроссовки продаются за 8000 долларов только потому что они очень редкие и этот рынок похож на любой коллекционный. В процессе это втянуло в себя и зажгло страстью десятки тысяч людей. Если Nike решат закрыть этот рынок, то они могут это сделать завтра. Всего то им нужно 
	увеличить объёмы серийности выпускаемых кроссовок, но им это ни к чему. </font></p>
	<br><center><img src="image/welcome.jpg" width="330" height="330" style="margin-right:200px"/></center>
</div><br><br>

<br><br><br><br>
<div id="footer">
   <p>Sneaker Guide<p> 
   <p> <a href="index.php?logout='1'" style="font-size: 14px">Выход</a> </p>
 </div>	
</body>
</html>