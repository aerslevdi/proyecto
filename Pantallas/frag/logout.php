<?php
	session_start();
setcookie("hello", "", time()-3600);
	session_destroy();

var_dump($_COOKIE['id']);
	exit;
