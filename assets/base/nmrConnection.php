<?php
	$host = 'localhost';
	$db = 'confraria';
	$user = 'root';
	$pass = '';
	$charset = 'utf8';

	$connection = mysqli_connect($host, $user, $pass);
	
	if(!$connection){
		die("Database connection Failed");
	}

	$select_db = mysqli_select_db($connection, $db);

	if(!$select_db){
		die("Database Selection Failed");
	}

?>