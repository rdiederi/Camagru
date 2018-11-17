<?php
session_start();
$_SESSION['notify'] = false;
?>
<!DOCTYPE html>
<HTML>
	<header>
		<link rel="stylesheet" type="text/css" href="style/forgot.css">
		<meta charset="UTF-8">
		<title>CAMAGRU - SETTINGS</title>
	</header>
	<body>
	<?php include('fragments/header.php') ?>
		<div id="login">
			<div class="title">SETTINGS</div>
			<div id="blue">
			<form class=form method="post" style="position: relative;" action="forms/settings.php">
				<label>Email Notification: </label>
				<?php if(isset($_SESSION['notify'])) { ?>
				<label class="switch" >
					<input type="checkbox" name="notify" value="yes" checked>
  					<span class="slider round"></span>
				</label>
				<?php } else { ?>
				<label class="switch" >
					<input type="checkbox" name="notify" id="notify" >
  					<span class="slider round"></span>
				</label>
				<?php } ?>
				<input name="submit" type="submit" value=" SAVE "><br>
			</form>
			</div>
			<?php if (isset($_SESSION['notify'])) { ?>
			<div class="success">
				<?php
					echo "Notify is set";
				?>
			</div>
			<?php } else { ?>
			<div class="error">
				<?php
					echo "Notify is OFF";
				?>
			</div>
			<?php } ?>
			</div>
		</div>
	<?php include('fragments/footer.php') ?>
	</body>
</HTML>
