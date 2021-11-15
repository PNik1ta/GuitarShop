<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/main.css">

	

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<title>Admin panel</title>
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
			<form action="php/save_goods.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nameInput">Name: </label>
					<input type="text" class="form-control" name="name" id="nameInput" placeholder="Name">
				</div>

				<div class="form-group">
					<label for="typeInput">Type: </label>
					<input type="text" class="form-control" name="type" id="typeInput" placeholder="Type">
				</div>

				<div class="from-group">
					<label for="priceInput">Price: </label>
					<input type="number" class="forn-control" name="price" id="priceInput">
				</div>

				<div class="form-group">
					<label for="descriptionInput">Description: </label>
					<input type="text" class="form-control" name="description" id="descriptionInput">
				</div>

				<div class="form-group">
					<label for="imageInput">Image: </label>
					<input type="file" class="form-control" name="image" id="imageInput">
				</div>

				<input type="submit" class="btn btn-confirm" value="Add">
			</form>
		</div>
		<!--MAIN-->

		<footer class="footer">

		</footer>
	</div>
</body>

</html>