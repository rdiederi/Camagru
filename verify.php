<?php
session_start();
include_once("./functions/verify.php");
?>
<!DOCTYPE html>
<HTML>
	<header>
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<meta charset="UTF-8">
		<title>CAMAGRU - VERIFY</title>
	</header>
	<body>
		<?php include('fragments/header.php') ?>
		<div id="v_login">
		<div class="title">VERIFY</div>
		<?php if (verify($_GET["token"]) == 0) { ?>
			<div class="success">
				Your account as been verified
				<script>
						setTimeout(function() {
  					window.location = "index.php";
						}, 3000);
				</script>
			</div>
		<?php } else { ?>
			<div class="error">
				Account not found
				<script>
						setTimeout(function() {
  					window.location = "signup.php";
						}, 3000);
				</script>
			</div>
		<?php } ?>
		</div>
		<?php include('fragments/footer.php') ?>
	</body>
</HTML>
