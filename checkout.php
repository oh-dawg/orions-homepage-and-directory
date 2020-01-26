<?php
session_start();

?>

<!DOCTYPE html>
<html>
   <head>
   <title>checkout</title>
   <link rel="stylesheet" type="text/css" href="masterstylesheet.css">
   <!-- <script type="text/javascript" src="shoppingcartJavascript.js"></script>-->
   
   </head>
   <body>
   
   <div class="TitleBar">
		<h2>checkout page </h2>
   </div>
   
   <?php
   $_SESSION["boughtWidgets"] = $_POST['removeWidget'];
   $_SESSION["boughtGizmo"] = $_POST['removeGizmo'];
   $_SESSION["boughtWhatzit"] = $_POST['removeWhatzit'];
   $_SESSION["boughtInfindibulator"] = $_POST['removeInfindibulator'];
   
   ?>
   
   <?php
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
	     
    $_SESSION["boughtWidget"] = test_input($_SESSION["boughtWidget"]);
   
    $_SESSION["boughtGizmo"] = test_input($_SESSION["boughtGizmo"]);
   
    $_SESSION["boughtWhatzit"] = test_input($_SESSION["boughtWhatzit"]);
   
    $_SESSION["boughtInfindibulator"] = test_input($_SESSION["boughtInfindibulator"]);
	
	$_SESSION["firstName"] = test_input($_SESSION["firstName"]);
	
	$_SESSION["lastName"] = test_input($_SESSION["lastName"]);
	
	$_SESSION["address"] = test_input($_SESSION["address"]);
	
	$_SESSION["phoneNumber"] = test_input($_SESSION["phoneNumber"]);
	
   }
   
   function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
   }
   ?>
   
   <div class="leftsidenav">
		<a href="shoppingcart.php">back to shoppingcart page</a>
		<br>
		<a href="confirmation.php">confirmation</a>
	</div>
   
   <div class="main" align="center">
		<form id="checkoutForm" method="post" action="confirmation.php">
      
			<p id="blankWarning" style="display:none"> fields can not be left blank </p>
      
			First Name input:<br>
			<input id="firstNameField" type="text" name="First_Name" placeholder="First name">
			<br>
			Last Name input: <br>
			<input id="lastNameField" type="text" name="Last_Name" placeholder="Last name">
			<br>
			Address input:<br>
			<textarea id="addressField" name="address" rows="15" cols="50" placeholder="Address"></textarea>
			<br>
			Phone Number input:
			<p id="phoneWarning" style="display:none"> Phone number must be in the format of "123-123-1234" </p>
      
			<input id="phoneField" type="text" name="phone" placeholder="Phone Number">
	  
			<button id="submitCheckout" name="validateCheckout" type="submit">submit</button>
	  
		</form>
	</div>
   
    </body>
</html>