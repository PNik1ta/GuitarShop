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
		<div class="main">
			<div class="products-content">

				<?php
					
					$mysql = new mysqli('localhost','root','','guitarshopdb');
					$command = "SELECT * FROM goods";
					$result = $mysql->query($command);
					$mysql->close();
					while($goods = $result ->fetch_assoc())
					{
						if($goods['Type'] == "Accessories") {
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
							<div class='product__about btn basket_btn'>Move to basket</div>
						</div>";
						}
						
					}
				?>
							
			</div>
		</div>
		<!--MAIN-->

		<footer class="footer">

		</footer>
	</div>
	<script src="scripts/move_to_basket.js"></script>
	<script src="scripts/burger.js"></script>
</body>

</html>