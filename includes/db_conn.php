<?php

$db_conn = mysqli_connect("localhost", "root", "", "gamewinkel");

if (mysqli_connect_errno()) {
	echo mysqli_connect_error();
	exit();
} 
?>