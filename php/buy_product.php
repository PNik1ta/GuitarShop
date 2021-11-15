<?php
	$title = $_POST['Title'];
	$description = $_POST['Description'];
	$price = $_POST['Price'];
	$username = $_COOKIE['user'];
	$mysql = new mysqli('localhost','root','','guitarshopdb');
	$command = "SELECT * FROM users WHERE Username = '$username'";
	$result = $mysql->query($command);
	$user = $result ->fetch_assoc();
	$user_Id = $user['Id'];
	$user_balance = $user['Balance'];
	if($user_balance >= $price) {
		$command = "DELETE FROM baskets WHERE Product_Id = (SELECT Id FROM goods WHERE Name = '$title' AND Description= '$description' AND Price = $price) AND User_Id = $user_Id";
		$mysql->query($command);
		$user_balance -= $price;
		$command = "UPDATE users SET Balance = $user_balance WHERE Id = $user_Id";
		$mysql->query($command);
		$mysql->close();
	}
	else {
		echo "Error";
	}
?>