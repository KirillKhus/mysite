<?php
	session_start();
  require('db.php');
  	
    $sql = mysqli_query($con, "INSERT INTO `comments` (`page_id`, `name`, `text_comment`) 
    	VALUES ('{$_POST['page_id']}', '{$_SESSION["username"]}', '{$_POST['text_comment']}')");
    header("Location: ".$_SERVER["HTTP_REFERER"]);
    
?>
