<?php
	session_start();
	mail("roelf.diedericks01@gmail.com", "Test Mail 1", "Welcome to WeThinkCode_", "Header Text");
	$_SESSION['signup_success'] = "Mail should be sent";
	header("Location: /Php_projects/Camagru_git/index.php");
?>