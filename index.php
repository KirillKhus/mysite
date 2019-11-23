<?php
session_start();
include("db.php");
$page = $_SERVER['REQUEST_URI'];

if (isset($_SESSION['user'])){								
	echo '<meta charset="UTF-8">Привет, '.$_SESSION['user']['login'].'!';
}else{		
	switch($page){
		case "/login":
			include("login.php");
			break;
		case "/registration":
			include("registration.php");
			break;
		default:
			include("login.php");
			break;
	}							
}

?>
