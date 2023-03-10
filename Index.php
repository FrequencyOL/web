<?php
session_start();
include('connection.php');
include('functions.php');
$user_data = check_login($connect);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles/adaptive.css">

	<title>Index</title>
</head>
<body>
<div class="banner">
	<header id="header">
		<a href="#top" class="logo" >Tomasso's</a>
		<ul>
			<li><a href="about.php"class="scroll-to">About us</a></li>
			<li><a href="menu.php" class="scroll-to">Menu</a></li>
			<li><a href="logout.php" class="scroll-to">Log Out</a></li>
			<li><a href="cart.php" class="scroll-to">Cart</a></li>
		</ul>
	</header>
	<div id="top" class="container">
		<div class="slider">
			<button class="slider-prev"><img src="img/prev.png"></button>
			<button class="slider-next"><img src="img/next.png"></button>
			<div class="slider-line">
				<img src="img/pizza.jpg" alt="" class="image_s">
				<img src="img/burger.jpg" alt="" class="image_s">
				<img src="img/order.jpg" alt="" class="image_s">
			</div>
		</div>
	</div>
	<div id="main" class="main">
		<div class="main-top">
			<h2 class="title">Recommendations</h2>
			<div class="reccs">
				<div class="column">
					<img src="img/combo1.jpg">
					<h2>Lorem ipsum</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
				</div>
				<div class="column">
					<img src="img/combo2.jpg">
					<h2>Lorem ipsum</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
				</div>
				<div class="column">
					<img src="img/combo3.jpg">
					<h2 >Lorem ipsum</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
				</div>
			</div>
			<a href="menu.php">View Full Menu</a>
		</div>
	</div>
	<div id="transparent-section" class="transparent-section">
		<h2>Learn Our history and all</h2>
		<a href="about.php">About Us</a>
	</div>
	<div id="bottom" class="bottom">
		<div class="column">
			<img src="img/app.jpg">
			<h2>New mobile app</h2>
			<p>Get our new mobile app and order food there.<br> You'll get 20% off for your first order.</p>
		</div>
		<h2 class="inb">OR</h2>
		<div class="column">
			<img src="img/location.png">
			<h2>Location map</h2>
			<p>Open our restaraunts location map all around <br>Kazakhstan and find the closest one to you.</p>
		</div>
	</div>
	<footer>
			<a href="#top" class="logo">Tomasso's</a>
			<div class="center">
				<p style="color:#fff">&copy; copyright 2023 | all rights reserved.
			</div>
	</footer>
</div>
<script src="scripts.js"></script>
</body>
</html>