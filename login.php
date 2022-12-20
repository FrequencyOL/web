<?php 
session_start();
include('connection.php');
include('functions.php');


if($_SERVER['REQUEST_METHOD'] == "POST")
	{

			$username = $_POST['username'];
			$password = $_POST['password'];

			if(!empty($username) && !empty($password)){		
			$query = "SELECT * FROM USER WHERE username = '$username' limit 1";
				$result = mysqli_query($connect, $query);
				if($result){
					if($result && mysqli_num_rows($result) > 0){

					$user_data = mysqli_fetch_assoc($result);

					if($user_data['password'] === $password){
						$_SESSION['id'] = $user_data['id'];

						header("Location: index.php");
						die;
					}
					}
				}
				echo "<script>
			alert('Wrong username or password');</script>";
			}else{
				echo "<script>
			alert('Input should not be empty');</script>";
			}
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
	<title>Login</title>
</head>
<body>	
	<div class="box">
		<form id="login" method="post">
			<span>Username</span>
			<input type="text" name="username">
			<br> <br> 
			<span>Password   </span>
			<input type="password" name="password">
			<br> <br> 
			<input type="submit" value="Login" style="cursor: pointer;">
			<a href="signup.php">Sign up</a>
		</form>
	</div>
	<script src="validation.js"></script>
</body>
</html>