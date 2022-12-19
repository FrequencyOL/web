<?php 
session_start();
$connect = mysqli_connect("localhost", "admin", "Ert56701!", "web");


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="adaptive.css">

	<title>Midterm</title>
</head>
<body>
	<header id="header">
		<a href="#top" class="logo" >Tomasso's</a>
		<ul>
			<li><a href="about.php" class="scroll-to">About us</a></li>
			<li><a data-link="bottom" class="scroll-to">Menu</a></li>
			<li><a data-link="main" class="scroll-to">Log In</a></li>
			<li><a data-link="main" class="scroll-to">Cart</a></li>
		</ul>
	</header>
	<div id="main" class="main">
			<div class="main-top">
				<div class="reccs">
	<?php
				$query = "SELECT * FROM storage ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?><form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
					<div class="column">
						<img src="<?php echo $row["dir"]; ?>"/>
						<h4 class="text-info"><?php echo $row["name"]; ?></h4>
						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
						<input type="text" name="quantity" value="1" />
						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" />
					</div>
				</form>
		<?php
					}
				}
			?>
				</div>
			</div>
		</div>

	<footer>
		
		<div class="center">
			<p style="color:#fff">&copy; copyright 2023 | all rights reserved.</p>
		</div>
	</footer>
</body>
</html>