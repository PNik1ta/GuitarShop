<?php
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

	$password = md5($password."asdqryh528");
	echo $password."<br>";
	$mysql = new mysqli('localhost','root','','guitarshopdb');
	$command = "SELECT * FROM users WHERE Email = '$email' and Password = '$password'";
	$user = $mysql->query($command);
	$row = $user->fetch_assoc();
	if($row != NULL) {
		setcookie('user', $row['Username'], time() + 3600, "/");
	} else{
		echo "error";
	}


	exit();
?>