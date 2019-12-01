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
  <a href="contact.php">Контакты</a>
</div>

<!-- Page content -->
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
		<p><font face="Verdana">Бренды:</font></p>
    <?php endif ?>
</div>
  <div class="block" style="background:#F5F5F5"><a href="nike.php"><img src="image/nike.jpg" width="90" height="75"/></a></div> 
  <div class="block" style="background:#F5F5F5"><a href="adidas.php"><img src="image/adidas1.jpg" width="90" height="75"/></a></div>
  <div class="block" style="background:#F5F5F5"><a href="reebok.php"><img src="image/reebok1.jpg" width="90" height="75"/></a></div>
</div>

<div id="footer">
   <p>Sneaker Guide<p> 
   <p> <a href="index.php?logout='1'" style="font-size: 14px">Выход</a> </p>
 </div>	
</body>
</html>
