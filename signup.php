<?php 
session_start();

include('connection.php');
include('functions.php');

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

			$username = $_POST['username'];
			$password = $_POST['password'];
			$id=cid();
			$query="INSERT INTO USER(id, username, password) VALUES ('$id','$username', '$password')";
			mysqli_query($connect, $query);

			header("Location: login.php");
			die;
		}

?>

<!DOCTYPE html>
<html>
<head>
	<style>
		body{
				background-image: url("img/blur.png");
		}
		.box{
			border: none;
			border-radius: 15px;
			padding: 10px 25px;
			background-color: #fff;
			position: absolute;
			top: 30%;
			left:40%;

	}
	.box input{
		border-radius: 5px;
	border: none;
	appearance: none;
	background: #d0d4db;
	padding: 12px;
	font-size: 12px;
	}
	.box a{
		font-size: 12px;
		text-decoration: none;
	}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup</title>
</head>
<body>	
	<div class="box">
		<form id="signup" method="post">
			<span>Username</span>
			<input type="text" name="username">
			<br> <br> 
			<span>Password   </span>
			<input type="password" name="password">
			<br> <br> 
			<a href="login.php">Login</a>
			<input type="submit" value="Signup" style="cursor: pointer;">
		</form>
	</div>
</body>
<script src="validation.js"></script>
</html>