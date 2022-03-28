<?php
session_start();
if (!isset ($_SESSION['username']) && !isset ($_SESSION['password'])) {
header ('location:Lat3_6-login.php');
}
if (isset ($_POST['cd_order']) && isset ($_POST['dvd_order'])) {
setcookie ("cd_order", $_POST['cd_order']);
setcookie ("dvd_order", $_POST['dvd_order']);
header ("location:Lat3_6-summary.php");
}
?>