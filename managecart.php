<?php 
session_start();


if(isset($_POST['add_to_cart'])){
	if(isset($_SESSION['cart'])){
		$myitems=array_column($_SESSION['cart'], 'item_name');
		if(in_array($_POST['hidden_name'], $myitems)){
			echo "<script>
			alert('Item Already Added');
			window.location.href='menu.php';
			</script>";
		} else{
			$count=count($_SESSION['cart']);
			$_SESSION['cart'][$count]=array('item_name' =>$_POST['hidden_name'], 'price'=>$_POST['hidden_price'], 'quantity' =>$_POST[ 'quantity']);
			echo "<script>
				alert('Item Added');
				window.location.href='menu.php';
			</script>";
		}
	}
	else{
		$_SESSION['cart'][0]=array('item_name' =>$_POST['hidden_name'], 'price'=>$_POST['hidden_price'], 'quantity' =>$_POST['quantity']);
		echo "<script>
			alert('Item Added');
			window.location.href='menu.php';
			</script>";
	}

}
if(isset($_POST['remove_item'])){
		foreach($_SESSION['cart'] as $key => $value){
			if($value['item_name']==$_POST['item_name']){
				unset($_SESSION['cart'][$key]);
				 $_SESSION['cart']=array_values($_SESSION['cart']);
				 echo"<script>
				 	alert('Item removed');
				 	window.location.href='cart.php';
				 </script>";
		}
		} 
	}


?>