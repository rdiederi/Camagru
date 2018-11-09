<?php
session_start();
?>
<!DOCTYPE html>
<HTML>
  <header>
    <link rel="stylesheet" type="text/css" href="style/signup.css">
    <meta charset="UTF-8">
    <title>SIwsdfgsdgsdgGNUP</title>
  </header>
  <body>
    <div id="login">
      <div class="title">SIGNUP</div>
      <div id="blue">
        <form class=form method="post" style="position: relative;" action="forms/signup.php">
          <label>Email: </label>
          <input id="mail" name="email" placeholder="email" type="mail">
          <label>Username: </label>
          <input id="name" name="username" placeholder="username" type="text">
          <label>Password: </label>
          <input id="password" name="password" placeholder="password" type="password">
          <div class="error">
            <?php
            if (isset($_SESSION['error'])) {
							echo $_SESSION['error'];
              $_SESSION['error'] = null;
            }
            ?>
          <input name="submit" type="submit" value=" SEND ">
        </form>
      </div>
    </div>
  </body>
</HTML>
