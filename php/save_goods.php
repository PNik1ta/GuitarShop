<?php
	$mysql = new mysqli('localhost','root','','guitarshopdb');
	$name = $_POST['name'];
	$type = $_POST['type'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$command = "INSERT INTO goods (Name, Type, Price, Description, Image) VALUES ('$name', '$type', $price, '$description', '$image')";
	$mysql->query($command);
	echo $mysql->error;
?>