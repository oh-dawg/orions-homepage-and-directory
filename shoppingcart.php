<?php
session_start();

?>

<!DOCTYPE html>
<html>
   <head>
   <title>shoppingcart</title>
   <link rel="stylesheet" type="text/css" href="masterstylesheet.css">
   <!--<script type="text/javascript" src="shoppingcartJavascript.js"></script>-->
   
   </head>
   <body>
   
   <div class="TitleBar">
		<h2>shopping cart page </h2>
   </div>
   
   <?php
   $_SESSION["boughtWidget"] = $_POST['widget'];
   $_SESSION["boughtGizmo"] = $_POST['gizmo'];
   $_SESSION["boughtWhatzit"] = $_POST['whatzit'];
   $_SESSION["boughtInfindibulator"] = $_POST['infindibulator'];
   
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
   
   <div class="leftsidenav">
		<a href="browsingpage.php">back to browsing page</a>
		<br>
		<a href="checkout.php">checkout</a>
   </div>
   
   <div class="main" align="center">
		<form id="cartForm" method="post" action="checkout.php">
      
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
					<td> new item quantity? <input id="removeWidget" type="text" name="removeWidget" value="<?php echo $_SESSION["boughtWidget"];?>"> </td>
			
				</tr>
				<tr>
					<td>Gizmo</td>
					<td> $15.00</td>
					<td> new item quantity? <input id="removeGizmo" type="text" name="removeGizmo" value="<?php echo $_SESSION["boughtGizmo"];?>"> </td>
			
				</tr>
				<tr>
					<td>whatzit</td>
					<td> $20.00</td>
					<td> new item quantity? <input id="removeWhatzit" type="text" name="removeWhatzit" value="<?php echo $_SESSION["boughtWhatzit"];?>"> </td>
			
				</tr>
				<tr>
					<td>InfinDibulator</td>
					<td> $25.00</td>
					<td> new item quantity? <input id="removeInfindibulator" type="text" name="removeInfindibulator" value="<?php echo $_SESSION["boughtInfindibulator"];?>"> </td>
				</tr>
			</table>
      <br>
      
      <button id="submitCart" name="validateCart" type="submit">submit</button>
      
      </form>
	</div>
   
      </body>
</html>
