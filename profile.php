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
								<a href="" class="header__link">Electric guitars</a>
							</li>
							<li>
								<a href="" class="header__link">Bass guitars</a>
							</li>
							<li>
								<a href="" class="header__link">Accesories</a>
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
			if($_COOKIE['user'] != '') {
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
			
		?>
		<div class="main">
			<div class="profile-info">
				<div class="profile-info__col-1">
					<div class="profile-info__data">
						<h3>Name: </h3>
						<p><?php echo $name;?></p>
					</div>
					<div class="profile-info__data">
						<h3>Surname: </h3>
						<p><?php echo $surname;?></p>
					</div>
					<div class="profile-info__data">
						<h3>Username: </h3>
						<h3><?php echo $username;?></h3>
					</div>
					<div class="profile-info__data">
						<h3>Balance: </h3>
						<h3><?php echo $balance;?></h3>
					</div>
					<a href="top_up_balance.html"><div class="btn btn_balance">Top up balance</div></a>
				</div>

				<div class="profile-info__col-2">
					<div class="products-list">
						<h3>Products, you want to buy</h3>
					<div class="products-content">
							<div class="product">
								<div class="product__image">
									<img src="images/guitar.jpg" alt="">
								</div>
								<h3 class="product__title">Some title</h3>
								<p class="product__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									Accusantium reprehenderit, molestiae similique dignissimos dolorem dicta adipisci
									necessitatibus incidunt esse laborum nemo explicabo, quod enim iure quidem alias inventore.
									Sed, nihil?</p>
								<p class="product__price">300 $</p>
								<div class="product__about btn">Buy</div>
							</div>

							<div class="product">
								<div class="product__image">
									<img src="images/guitar.jpg" alt="">
								</div>
								<h3 class="product__title">Some title</h3>
								<p class="product__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									Accusantium reprehenderit, molestiae similique dignissimos dolorem dicta adipisci
									necessitatibus incidunt esse laborum nemo explicabo, quod enim iure quidem alias inventore.
									Sed, nihil?</p>
								<p class="product__price">300 $</p>
								<div class="product__about btn">Buy</div>
							</div>

							<div class="product">
								<div class="product__image">
									<img src="images/guitar.jpg" alt="">
								</div>
								<h3 class="product__title">Some title</h3>
								<p class="product__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									Accusantium reprehenderit, molestiae similique dignissimos dolorem dicta adipisci
									necessitatibus incidunt esse laborum nemo explicabo, quod enim iure quidem alias inventore.
									Sed, nihil?</p>
								<p class="product__price">300 $</p>
								<div class="product__about btn">Buy</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--MAIN-->

		<footer class="footer">

		</footer>
	</div>
</body>

</html>