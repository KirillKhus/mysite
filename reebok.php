<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
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

<div class="header1">
	<h2> <img src="image/logo2.jpg" width="70" height="60" align="center" />Sneaker Guide<img src="image/logo1.jpg" width="70" height="60" align="center" /></h2>
	<p><a href="index.php" style="font-size: 14px">На главную</a> </p>
</div>
<div class="content1">



</div>
<div id="footer">
   <p>Sneaker Guide<p> 
   <p> <a href="index.php?logout='1'" style="font-size: 14px">Выход</a> </p>
 </div>	
</body>
</html>