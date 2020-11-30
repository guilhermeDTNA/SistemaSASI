<?php
error_reporting(0);
session_start();
/**/
if(!$_SESSION['usuario']) {
	echo"<script language='javascript' type='text/javascript'>window.location.href='./home.php';</script>";
	exit();
}

?>
