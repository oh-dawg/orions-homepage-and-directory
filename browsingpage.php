<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
   <head>
   <title>BrowsingPage</title>
   <link rel="stylesheet" type="text/css" href="masterstylesheet.css">
   <script type="text/javascript" src="shoppingcartJavascript.js"></script>
   
   </head>
   <body>
   
   <a href="directory.html">back to directory</a>
   <br>
   <a href="shoppingcart.php">view Shopping cart</a>
   
   <?php
   
   $_SESSION["boughtWidgets"] = 0;
   $_SESSION["boughtGizmos"] = 0;
   $_SESSION["boughtWhatzit"] = 0;
   $_SESSION["boughtInfindibulator"] = 0;
   $_SESSION["firstName"] = "";
   $_SESSION["lastName"] = "";
   $_SESSION["address"] = "";
   $_SESSION["phoneNumber"] = 0;
   
   ?>
   
   <form id="salesForm" method= "post" action="shoppingcart.php">
      
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
   
   
      </body>
</html>