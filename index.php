<?php
session_start();
$_SESSION['notify'] = true;
?>
<!DOCTYPE html>
<HTML>
	<header>
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<meta charset="UTF-8">
		<title>CAMAGRU</title>
	</header>
	<body>
	<?php include('fragments/header_2.php') ?>
		<div class="main_head">CAMAGRU</div>
		<div id="login">
			<div class="title">LOGIN</div>
			<div id="blue">
				<?php if(isset($_SESSION['id'])) { ?>
					You are connected as <?php print_r(htmlspecialchars($_SESSION['username'])) ?>
					<?php sleep(1); ?>
					<?php header("Location: gallery.php"); ?>
				<?php } else { ?>
				<form class=form method="post" style="position: relative;" action="forms/login.php">
					<label>Email: </label>
					<input id="mail" name="email" placeholder="email" type="mail">
					<label>Password: </label>
					<input id="password" name="password" placeholder="password" type="password">
					<input name="submit" type="submit" value=" LOGIN "><br>
					<a class="help" href="signup.php">Create account</a>
				 	<br>
					<a class="help" href="forgot.php">Forget password ?</a>
					<div class="msg">
						<div class="success">
							<?php
							if (isset($_SESSION['signup_success'])) {
								echo $_SESSION['signup_success'];
								$_SESSION['signup_success'] = null;
							}
							?>
						<div class="error">
							<?php
							if (isset($_SESSION['error'])) {
								echo $_SESSION['error'];
								$_SESSION['error'] = null;
							}
							?>
						</div>
					</div>
					<div class="success">
						<?php
						?>
					</div>
				</form>
				<?php } ?>
			</div>
		</div>
	</body>
</HTML>
