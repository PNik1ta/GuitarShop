<?php
			if($_COOKIE['user'] != '') {
				$username = $_COOKIE['user'];
				$mysql = new mysqli('localhost','root','','guitarshopdb');
				$command = "SELECT * FROM users WHERE Username = '$username'";
				$user = $mysql->query($command);
				$row = $user->fetch_assoc();
				if($row != null) {
					$GLOBALS['name'] = "some name";
					echo $GLOBALS['name'];
				}
			}
			require_once('../profile.php');
?>