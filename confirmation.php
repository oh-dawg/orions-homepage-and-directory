<?php
session_start();

?>

<!DOCTYPE html>
<html>
   <head>
   <title>confirmationPage</title>
   <link rel="stylesheet" type="text/css" href="masterstylesheet.css">
   <!--<script type="text/javascript" src="shoppingcartJavascript.js"></script>-->
   
   </head>
   <body>
   
   <?php
   $_SESSION["firstName"] = $_POST["First_Name"];
   $_SESSION["lastName"] = $_POST["Last_Name"];
   $_SESSION["address"] = $_POST["address"];
   $_SESSION["phoneNumber"] = $_POST["phone"];
   
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
		<a href="checkout.php">back to checkout page</a>
		<br>
		<br>
	</div>
   
   <div class="main" align="center">
		<p>First Name           <?php echo $_SESSION["firstName"];   ?> </p>
		<p>Last Name            <?php echo $_SESSION["lastName"];      ?> </p>
		<p>Address              <?php echo $_SESSION["address"];      ?> </p>
		<p>Phone Number         <?php echo $_SESSION["phoneNumber"];      ?> </p>
		<p>Widgets              <?php echo $_SESSION["boughtWidgets"];      ?> </p>
		<p>Gizmos               <?php echo $_SESSION["boughtGizmo"];      ?> </p>
		<p>Whatzits             <?php echo $_SESSION["boughtWhatzit"];      ?> </p>
		<p>Infindibulators      <?php echo $_SESSION["boughtInfindibulator"];      ?> </p>
		
	</div>
   
    </body>
</html>