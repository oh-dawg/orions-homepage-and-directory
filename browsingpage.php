<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
   <head>
   <title>BrowsingPage</title>
   <link rel="stylesheet" type="text/css" href="masterstylesheet.css">
   <!--<script type="text/javascript" src="shoppingcartJavascript.js"></script>-->
   
   </head>
   <body>
   
   <div class="leftsidenav">
   <a href="directory.html">back to directory</a>
   <br>
   <a href="shoppingcart.php">view Shopping cart</a>
   </div>
   
   <?php
   
   $_SESSION["boughtWidget"] = 0;
   $_SESSION["boughtGizmo"] = 0;
   $_SESSION["boughtWhatzit"] = 0;
   $_SESSION["boughtInfindibulator"] = 0;
   $_SESSION["firstName"] = "";
   $_SESSION["lastName"] = "";
   $_SESSION["address"] = "";
   $_SESSION["phoneNumber"] = 0;
   
   ?>
   
   <?php
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
	   
	   
    $_SESSION["boughtWidget"] = test_input($_SESSION["boughtWidget"]);
   
    $_SESSION["boughtGizmo"] = test_input($_SESSION["boughtGizmo"]);
   
    $_SESSION["boughtWhatzit"] = test_input($_SESSION["boughtWhatzit"]);
   
    $_SESSION["boughtInfindibulator"] = test_input($_SESSION["boughtInfindibulator"]);
   }
   
   function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
   }
   ?>
   
   <div class="main" align="center">
		<form id="salesForm" method= "post" action="shoppingcart.php">
      
			<br>
			<br>
      
			<table>
				<tr>
					<th> Item Name</th>
					<th> Item Price</th>
					<th> add item to checkout</th>
				</tr>
				<tr>
					<td> Widget</td>
					<td> $10.00</td>
					<td><input id="widget" type="text" name="widget" ></td>
				</tr>
				<tr>
					<td>Gizmo</td>
					<td> $15.00</td>
					<td><input id="gizmo" type="text" name="gizmo" ></td>
				</tr>
				<tr>
					<td>whatzit</td>
					<td> $20.00</td>
					<td><input id="whatzit" type="text" name="whatzit" ></td>
				</tr>
				<tr>
					<td>InfinDibulator</td>
					<td> $25.00</td>
					<td><input id="infindibulator" type="text" name="infindibulator" ></td>
				</tr>
			</table>

      <br>
       
      <br>
      <br>
      <button id="submitOrder" name="validate" type="submit">submit</button>
      
      </form>
	</div>
   
   
      </body>
</html>