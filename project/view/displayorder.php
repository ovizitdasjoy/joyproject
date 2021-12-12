<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Request Medicine</title>
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
			<?php include 'head.php';?>

			</td>
		</tr>
		<tr height = "200px">
			<td width="33%">
				<h4> &nbsp &nbsp &nbsp Account </h4>
				<hr width="90%">
				<ul>
				<?php include 'item.php';?>


				</ul>
			</td>
			<td colspan="2">


<div id="main_content">
<fieldset style="width: 80%">
    <legend><b>DISPLAY</b></legend>
	<table border="1" cellspacing="0">
	    <tbody>
	    	<tr>
	            <th>Customer ID</th>
	            <th>Customer Name</th>
	            <th>Ship Method</th>
	            <th>Ship Address</th>
	    	</tr>
	    	<tr>
	            
	            <td>#57</td>
	            <td>Joy Das</td>
	            <td>Home Delivery</td>
	            <td>Santhia, pabna , rajshahi</td>
	    	</tr>
		</tbody>
	</table>
</fieldset>
</div>
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="3">
			<?php include 'footer.php';?>

			</td>
		</tr>
	</table>
</body>
</html>

<?php

	}else{
		echo "Please do Registration before login in";
		header('location: registration.php');
	}

?>