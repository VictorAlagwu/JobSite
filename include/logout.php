<?php
/*
Project: Job Site
Author: Victor Alagwu(victoralagwu@gmail.com)
Date:

 */
session_start();

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
} else if (isset($_SESSION['userSession']) != "") {
	header("Location: home.php");
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['userSession']);
	header("Location: index.php");
}
?>