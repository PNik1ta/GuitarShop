<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/main.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<title>Profile</title>
</head>

<body>
	<div class="wrapper">
			<!--HEADER-->
		<header class="header">
			<div class="header__content">
				<div class="header__body">
					<h3 class="header__title">
						Guitar shop
					</h3>

					<div class="header__burger">
						<span></span>
					</div>

					<nav class="header__menu">
						<ul class="header__list">
							<li>
								<a href="index.html" class="header__link">Main</a>
							</li>
							<li>
								<a href="electric_guitars.php" class="header__link">Electric guitars</a>
							</li>
							<li>
								<a href="bass_guitars.php" class="header__link">Bass guitars</a>
							</li>
							<li>
								<a href="accesories.php" class="header__link">Accesories</a>
							</li>
							<li>
								<a href="profile.php" class="header__link">Profile</a>
							</li>
							<li>
								<a href="register.html">
									<div class="register btn">Register</div>
								</a>
							</li>
							<li>
								<a href="login.html">
									<div class="login btn">Login</div>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!--HEADER-->	

		<!--MAIN-->
		<?php
			if(isset($_COOKIE['user'])) {
				$username = $_COOKIE['user'];
				$mysql = new mysqli('localhost','root','','guitarshopdb');
				$command = "SELECT * FROM users WHERE Username = '$username'";
				$user = $mysql->query($command);
				$row = $user->fetch_assoc();
				if($row != null) {
					$name = $row['Name'];
					$surname = $row['Surname'];
					$username = $row['Username'];
					$balance = $row['Balance'];
				}
				$mysql->close();
			}
			else {
				echo "You must register";
			}
		?>
		<div class="main">
			<div class="profile-info">
				<div class="profile-info__col-1">
					<div class="profile-info__data">
						<h3>Name: </h3>
						<p><?php if(isset($name)) echo $name;?></p>
					</div>
					<div class="profile-info__data">
						<h3>Surname: </h3>
						<p><?php if (isset($surname))echo $surname;?></p>
					</div>
					<div class="profile-info__data">
						<h3>Username: </h3>
						<h3><?php if(isset($username))echo $username;?></h3>
					</div>
					<div class="profile-info__data">
						<h3>Balance: </h3>
						<h3><?php if(isset($balance)) echo $balance;?></h3>
					</div>
					<a href="top_up_balance.html"><div class="btn btn_balance">Top up balance</div></a>
				</div>

				<div class="profile-info__col-2">
					<div class="products-list">
						<h3>Products, you want to buy</h3>
					<div class="products-content">

						<?php
							if(isset($_COOKIE['user'])) {
								$mysql = new mysqli('localhost','root','','guitarshopdb');
							$username = $_COOKIE['user'];
							$command_user = "SELECT Id FROM users WHERE Username = '$username'";
							$user_row = $mysql->query($command_user);
							$user = $user_row->fetch_assoc();
							$user_id = $user['Id'];
							$command_goods = "SELECT * FROM goods WHERE Id IN (SELECT Product_Id FROM baskets WHERE User_Id = $user_id)";
							$result = $mysql->query($command_goods);
								$mysql->close();
								while($goods = $result->fetch_assoc()) {
									$name = $goods['Name'];
									$description = $goods['Description'];
									$price = $goods['Price'];
									$image = base64_encode($goods['Image']);

									echo "<div class='product'>
								<div class='product__image'>
									<img src='data:image/jpeg;base64, $image' alt='image'>
								</div>
								<h3 class='product__title'>$name</h3>
								<p class='product__description'>$description</p>
								<p class='product__price'>$price</p>
								<div class='product__about btn buy_btn'>Buy</div>
							</div>";
								}
							}
							
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--MAIN-->

		<footer class="footer">

		</footer>
	</div>
	<script src="scripts/buy_product.js"></script>
	<script src="scripts/burger.js"></script>
</body>

</html>