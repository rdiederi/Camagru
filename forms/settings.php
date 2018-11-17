<?php
session_start();
if (isset($_POST['notify'])) {
    $_SESSION['notify'] = true;
} else {
    $_SESSION['notify'] = false;
}
header("Location: ../gallery.php");
?>
