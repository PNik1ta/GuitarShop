<?php
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
	$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

	$password = md5($password."asdqryh528");


	$mysql = new mysqli('localhost','root','','guitarshopdb');
	$command = "INSERT INTO users (Name, Surname, Username, Email, Password)
	VALUES ('$name', '$surname', '$username', '$email', '$password')";

	if(!$mysql->query($command)) {
		printf($mysql->error);
	}
	$mysql->query($command);

	$mysql->close();
?>
