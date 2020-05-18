<?php
	$mysqli = new mysqli("localhost","root","safetywagon@#$123","vidyavijay");
	if($mysqli->connect_error){
		die("Connection failed:" . $mysqli->connect_error);
	}
?>
