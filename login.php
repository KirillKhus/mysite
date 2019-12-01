<?php include('server.php') ?>

<html>
<head>
  <title>Авторизация Sneaker Guide</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="log">
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Логин</label>
  		<input type="text" name="username"  placeholder="Введите логин" required />
  	</div>
  	<div class="input-group">
  		<label>Пароль</label>
  		<input type="password" name="password" placeholder="Введите пароль" required />
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Войти</button>
  	</div>
  	<p>
  		<font face="Verdana">Еще не зарегистрированы?</font> <a href="register.php">Зарегистрироваться</a>
  	</p>
  </form>
  <div class="info">
  <p>Sneaker Guide - Это сайт эксклюзивной информации о моделях кроссовок разлычных брендов. Здесь вы найдете все, что вам нужно знать о современной сникер культуре: от популярных моделей до дат релизов новых пар.</p>
  </div>
</body>
</html>