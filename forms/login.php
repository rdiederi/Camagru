<?php
session_start();

include '../functions/login.php';

$mail = $_POST['email'];
$password = $_POST['password'];

if (($email == "" && $email == NULL) || ($password == "" && $password == NULL)){
	$_SESSION['error'] = "Please enter a email and password.";
}
if (($val = log_user($mail, $password)) == -1) {
	$_SESSION['error'] = "user not found";
} else if (isset($val['err'])) {
	$_SESSION['error'] = $val['err'];
} else {
	$_SESSION['id'] = $val['id'];
	$_SESSION['username'] = $val['username'];
}
header("Location: ../index.php");
?>
