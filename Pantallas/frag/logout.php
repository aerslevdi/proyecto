<?php
	session_start();
		 setcookie("isolid", '', time() -100,'/proyecto/Pantallas');
	session_destroy();

header('location:../index.php');
	exit;
