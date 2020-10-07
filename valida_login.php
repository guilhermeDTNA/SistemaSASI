<?php
error_reporting(0);
session_start();
/**/
if(!$_SESSION['usuario']) {
	echo"<script language='javascript' type='text/javascript'>alert('Faça o login primeiro!');window.location.href='./home.php';</script>";
	exit();
}

?>
