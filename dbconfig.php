<?php
	$mysqli = new mysqli("localhost","root","safetywagon@#$123","vidyavijay");
	if($mysqli->connect_error){
		die("Connection failed:" . $mysqli->connect_error);
	}

	// try {
	// 	$pdo = new PDO("mysql:host=localhost;dbname=vidyavijay;charset=latin1", "root", "");
	// 	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// } catch (PDOException $e) {
	// 	die("Connection failed:" . $e->getMessage());
	// }
?>