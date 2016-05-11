<?php 

	include '../includes/db_conn.php';

	$username = $_GET['login'];
	$password = $_GET['password'];

	$sql = "SELECT * FROM user WHERE email = '$username' AND password = '$password'";
    $result = $db_conn->query($sql);

    $count = mysql_num_rows($result);

    if ($count==1) {
    	echo "succes";
    } else {
    	echo "Wrong username or Password";
    }



?>