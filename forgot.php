<?php
session_start();
?>
<!DOCTYPE html>
<HTML>
	<header>
		<link rel="stylesheet" type="text/css" href="style/forgot.css">
		<meta charset="UTF-8">
		<title>CAMAGRU - FORGOT</title>
	</header>
	<body>
		<div id="login">
			<div class="title">FORGOT</div>
			<div id="blue">
				<form class=form method="post" style="position: relative;" action="forms/forgot.php">
					<label>Email: </label>
					<input id="mail" name="email" placeholder="email" type="mail">
					<input name="submit" type="submit" value=" SEND ">
				</form>
			</div>
			<div class="error">
				<?php
				if (isset($_SESSION['error'])) {
					echo $_SESSION['error'];
					$_SESSION['error'] = null;
				}
				?>
			</div>
			<div class="success">
				<?php
				if (isset($_SESSION['forgot_success'])) {
					echo "An email has been sent to your email address";
					$_SESSION['forgot_success'] = null;
				}
				?>
			</div>
		</div>
	</body>
</HTML>
