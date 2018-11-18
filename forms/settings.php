<?php
session_start();
if (isset($_POST['notify_2']) || isset($_POST['notify_1'])) {
    $_SESSION['notify'] = true;
} else {
    $_SESSION['notify'] = null;
}
header("Location: ../gallery.php");
?>
