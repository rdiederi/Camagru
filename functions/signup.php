<?php

function signup($mail, $username, $password, $host) {
  include_once '../Config/database.php';
  include_once 'mail.php';

  
  try {
	  $dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
	  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $query= $dbh->prepare("SELECT id FROM users WHERE username=:username OR mail=:mail");
	  $mail = strtolower($mail);
	  $query->execute(array(':username' => $username, ':mail' => $mail));
	  
	  if ($val = $query->fetch()) {
		  $_SESSION['error'] = "user already exist";
		  $query->closeCursor();
		  return(0);
		}
		$query->closeCursor();
		
		$password = hash("whirlpool", $password);
		
		$query= $dbh->prepare("INSERT INTO users (username, mail, password, token) VALUES (:username, :mail, :password, :token)");
		$token = uniqid(rand(), true);
		$query->execute(array(':username' => $username, ':mail' => $mail, ':password' => $password, ':token' => $token));
		send_verification_email($mail, $username, $token, $host);
		
		$_SESSION['signup_success'] = "Signup Succesfull
		 Check email";
		return (1);
	  } catch (PDOException $e) {
		  $_SESSION['error'] = "ERROR: ".$e->getMessage();
	  }
}
?>
