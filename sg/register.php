<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Регистрация Sneaker Guide</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="log">
  <div class="header">
  	<h2>Регистрация</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Логин</label>
  	  <input type="text" placeholder="Введите логин" name="username" value="<?php echo $username; ?>" required />
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" placeholder="Введите email" name="email" value="<?php echo $email; ?>" required />
  	</div>
  	<div class="input-group">
  	  <label>Пароль</label>
  	  <input type="password" placeholder="Введите пароль" name="password_1" required />
  	</div>
  	<div class="input-group">
  	  <label>Повторите пароль</label>
  	  <input type="password" placeholder="Введите пароль" name="password_2" required />
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Готово</button>
  	</div>
  	<p>
  		<font face="Verdana">Уже зарегистрированы?</font> <a href="login.php">Войти</a>
  	</p>
  </form>
</body>
</html>