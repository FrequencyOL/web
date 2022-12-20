<?php include('header.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/menu.css">
	<title>Cart</title>
</head>
<body>
	<div class="cart">
		<table class="table">
			<thead>
				<tr>
					<th scope="column">Id</th>
					<th scope="column">Name</th>
					<th scope="column">Price</th>
					<th scope="column">Quantity</th>
					<th scope="column"></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$total=0;
					if(isset($_SESSION['cart'])){ 
					foreach ($_SESSION['cart'] as $key => $value) {
						$id=$key+1;
						$total=$total+($value['price']*$value['quantity']);
					 	echo"
					 	<tr>
					 		<td>$id</td>
					 		<td>$value[item_name]</td>
					 		<td>$value[price]</td>
					 		<td>$value[quantity]</td>
					 		<td>
					 		<form action='managecart.php' method='POST'>
					 		<button name='remove_item'>Remove</button>
				<input type='hidden' name='item_name' value='$value[item_name]'></form>
					 		</td>
					 	</tr>
					 	";
					 } 
					}
				?>
			</tbody>
		</table>
		<div class="total">
			<h3>Total:</h3>
			<h5><?php echo $total ?>$</h5>
		</div>
	</div>
		<footer style="margin-top: 550px;">
			<a href="#top" class="logo">Tomasso's</a>
			<div class="center">
				<p style="color:#fff">&copy; copyright 2023 | all rights reserved.
			</div>
	</footer>
<script src="scripts.js"></script>

</body>
</html>