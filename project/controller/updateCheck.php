<?php
	session_start();
	#require_once('../model/dbConnection.php');
	require_once('../model/webtech.php');

	require_once('../model/productModel.php'); 
	if(isset($_POST['update']))
	{
		$id = $_SESSION['id'];
		$name = $_POST['name'];
		$bPrice = $_POST['bPrice'];
		#$sPrice = $_POST['sPrice'];
		#$displayable = "No";
		echo"$id";
		echo"$name";
		echo"$bPrice";
		if(isset($_POST['check']))
		{
			global $displayable;
			$displayable = "Yes";
		}
		$productDetails = array('Name' => $name, 'Price' => $bPrice,  'Display' => $displayable);
		$connection = getConnection();
		$check = updateProduct($id, $productDetails);
		if($check)
		{
			echo "Product updated!";
			header('location: ../view/displayProduct.php');
		}
		else
		{
			echo "Error occured!";
		}
		if(isset($_POST['check']))
		{
			#session_start();
			$_SESSION['check'] = true;
		}
	}
?>