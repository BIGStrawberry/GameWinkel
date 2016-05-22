<?php

$db_conn = mysqli_connect("localhost", "root", "wachtwoord", "gamewinkel2");

if (mysqli_connect_errno()) {
	echo mysqli_connect_error();
	exit();
} 
?>
