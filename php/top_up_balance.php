<?php
	$username = $_COOKIE['user'];
	$mysql = new mysqli('localhost', 'root', '', 'guitarshopdb');
	$command = "SELECT * FROM users WHERE Username = '$username'";
	$user = $mysql->query($command);
	$row = $user->fetch_assoc();
	if($row != null) {
		$money = $_POST['money'];
		$balance = $row['Balance'];
		$balance += $money;
		$command_update = "UPDATE users SET Balance = $balance WHERE Username = '$username'";
		$mysql->query($command_update);
		$mysql->close();
		header('Location: ../profile.php');
	}
?>