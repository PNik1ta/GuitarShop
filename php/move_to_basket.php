<?php
	$title = $_POST['Title'];
	$description = $_POST['Description'];
	$price = $_POST['Price'];

	$mysql = new mysqli('localhost','root','','guitarshopdb');
	if($_COOKIE['user'] != '') {
		$username = $_COOKIE['user'];
		$command = "SELECT * FROM users WHERE Username = '$username'";
		$user = $mysql->query($command);
		$user_row = $user->fetch_assoc();

		$command = "SELECT * FROM goods WHERE Name = '$title' AND Description = '$description' AND Price = '$price'";
		$product = $mysql->query($command);
		$product_row = $product->fetch_assoc();
		$user_id = $user_row['Id'];
		$prod_id = $product_row['Id'];
		
		$command = "INSERT INTO baskets (User_Id, Product_Id) VALUES ($user_id, $prod_id)";
		$mysql->query($command);
	} 
?>