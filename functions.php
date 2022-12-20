<?php 
function check_login($connect)
{
	if(isset($_SESSION['id'])){
		$id=$_SESSION['id'];
		$query = "SELECT * FROM USER WHERE id = '$id' limit 1";

		$result= mysqli_query($connect, $query);
		if($result && mysqli_num_rows($result) > 0){
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}  
	}

	header("Location: login.php");
	die;
}
function cid(){
	$file = 'counter.txt';
        	$counter = 1;  
        	if (file_exists($file)) {
        	$counter += file_get_contents($file);
        	}
        	file_put_contents($file, $counter);
        	$id=$counter;
        	$paddedid = sprintf("%04d", $id);
        	return $paddedid;
}
?>