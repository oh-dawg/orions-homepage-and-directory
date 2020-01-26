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
   
   <?php
   $_SESSION["boughtWidgets"] = $_POST['removeWidget'];
   $_SESSION["boughtGizmo"] = $_POST['removeGizmo'];
   $_SESSION["boughtWhatzit"] = $_POST['removeWhatzit'];
   $_SESSION["boughtInfindibulator"] = $_POST['removeInfindibulator'];
   
   ?>
   
   <a href="shoppingcart.php">back to shoppingcart page</a>
   <br>
   <a href="confirmation.php">confirmation</a>
   
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
   
    </body>
</html>