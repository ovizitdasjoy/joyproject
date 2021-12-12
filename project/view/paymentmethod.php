
<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Public Home</title>
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
				<form method="post" action="../controller/payment.php" onsubmit="return validateform()">
                <script type="text/javascript" src="paymentscript.js"></script>

                    <fieldset align="center">
                  <!--  <legend>Payment Method</legend>
                    <fieldset align="center">-->
                    <h1 id="head">Payment Policy</h1>

					<legend>Payment</legend>
                    <legend>Category</legend>

			        <input type="text" name="category" id="category"  value="" onkeyup="CategoryValidate()"> <br>
            
					<legend>Name</legend>

					<input type="text" name="myname" id="myname"  value="" onkeyup="NameValidation()"> <br>

                    <legend>Method</legend>

					<input type="text" name="method" id="method"  value="" onkeyup="MethodValidate()"> <br>

                    <legend>Amount</legend>

					<input type="text" name="amount" id="amount" value="" onkeyup="AmountValidate()"> <br>
			        <input type="checkbox" name="check"> Display
			
			<hr>
            
            
              
                <br>
               <!-- <input type="submit" name="submit" value="Submit" onclick="NameValidation(); CategoryValidate(); MethodValidate(); AmountValidate()";>-->
               <input type="submit" name="submit" value="Submit">

            </fieldset>
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