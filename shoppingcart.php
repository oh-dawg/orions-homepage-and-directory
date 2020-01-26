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
   
   <?php
   $_SESSION["boughtWidgets"] = $_POST['widget'];
   $_SESSION["boughtGizmo"] = $_POST['gizmo'];
   $_SESSION["boughtWhatzit"] = $_POST['whatzit'];
   $_SESSION["boughtInfindibulator"] = $_POST['infindibulator'];
   
   ?>
   
   
   <a href="browsingpage.php">back to browsing page</a>
   <br>
   <a href="checkout.php">checkout</a>
   
   
   <form id="cartForm" method="post" action="checkout.php">
      
      <!--<p id="blankWarning" style="display:none"> fields can not be left blank </p>
      
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
      <input id="phoneField" type="text" name="phone" placeholder="Phone Number" onchange="checkPhone(this)">
      -->
      
      <!-- float the second div to the right -->
      
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
			<td> new item quantity? <input id="removeWidget" type="text" name="removeWidget" value="<?php echo $_SESSION["boughtWidgets"];?>"> </td>
			
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
   
   
      </body>
</html>
