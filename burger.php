<?php 
session_start();

include('connection.php');

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/menu.css">
	<link rel="stylesheet" type="text/css" href="styles/adaptive.css">

	<title>Menu</title>
</head>
<body>

	<header id="header">
		<a href="index.php" class="logo" >Tomasso's</a>
		<ul>
			<li><a href="about.php" class="scroll-to">About us</a></li>
			<li><a href="menu.php" class="scroll-to">Menu</a></li>
			<li><a href="logout.php" class="scroll-to">Log Out</a></li>
			<li><a href="cart.php" class="scroll-to">Cart</a></li>
		</ul>
	</header>
		<div class="menu_m">
				<div class="grid-container">
	<?php
				$query = "SELECT * FROM storage ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?><form method="post" action="managecart.php?action=add&id=<?php echo $row["id"]; ?>">
					<div class="column">
						<img src="img/<?php echo $row["dir"]; ?>"/>
						<h4><?php echo $row["name"]; ?></h4>
						<h4>$ <?php echo $row["price"]; ?></h4>
						<input type="text" name="quantity" value="1" />
						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px; background-color:#fcba03; ;" value="Add to Cart" />
					</div>
				</form>
		<?php
					}
				}
			?>
				</div>
			</div>
	<footer style="margin-top:300px">
		
		<div class="center">
			<p style="color:#fff">&copy; copyright 2023 | all rights reserved.</p>
		</div>
	</footer>
	<script src="scripts.js"></script>
</body>
</html>