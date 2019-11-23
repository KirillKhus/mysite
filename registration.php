<?php

	if ($_POST['login']=='' || $_POST['password']=='') echo 
		'<!DOCTYPE html>
			<html lang="ru">
			<head>
			    <meta charset="UTF-8">
			    <title>Регистрация</title>
			</head>
			<body>
			 
				<form action="registration" method="POST">
					<p>логин
				    <input type="text" name="login" id="login" placeholder="Логин" required/></p>
					<p>e-mail
					<input type="email" name="email" id="email" placeholder="Email" required/></p>
				    <p>пароль
				    <input type="password" name="password" id="password" placeholder="Пароль" required/></p>
				    <input type="submit" id="button" value="Зарегистрироваться">
				</form>
				<p><a href="login">Авторизация</a> </p>
			                
			</body>
			</html>';
	else{
		
		try{
			$sql = "INSERT INTO  `users` (`id` ,`login` ,`email` ,`password`)
					VALUES (
					NULL ,  :login, :email, :pass
					);";
			$result = $pdo->prepare($sql);
			$result->bindvalue(':login', $_POST['login']);
			$result->bindvalue(':email', $_POST['email']);			
			$result->bindvalue(':pass', md5(md5($_POST['password'])));
			$result->execute( );							

			echo '<meta charset="UTF-8">Регистрация успешна!';
		}catch(PDOException $e){
			$Log_File = "log.txt";
			file_put_contents($Log_File, date("Y-m-d H:i:s")." -//- ".$e->getMessage().PHP_EOL, FILE_APPEND | LOCK_EX);				
			echo '<meta charset="UTF-8">Ошибка регистрации';
		}

			
		}
?>