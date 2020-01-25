<!DOCTYPE html>
<html>
   <head>
   <title>shoppingcart</title>
   <link rel="stylesheet" type="text/css" href="masterstylesheet.css">
   <script type="text/javascript" src="shoppingcartJavascript.js"></script>
   
   </head>
   <body>
   
   <a href="browsingpage.php">back to browsing page</a>
   <a href="checkout.php">checkout</a>
   
   
   <form id="salesForm" action="undefined">
      
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
			<td> <?php echo $_SESSION["boughtWidgets"] ?> </td>
			
            <!-- <td> <?php echo "widgets " . $_SESSION["boughtWidgets"] ?> </td> -->
         </tr>
         <tr>
            <td>Gizmo</td>
            <td> $15.00</td>
            <td><input id="gizmo" type="checkbox" name="item_2" value="15" onclick="gizmoCost(this)"></td>
         </tr>
         <tr>
            <td>whatzit</td>
            <td> $20.00</td>
            <td><input id="whatzit" type="checkbox" name="item_3" value="20" onclick="whatzitCost(this)"></td>
         </tr>
         <tr>
            <td>InfinDibulator</td>
            <td> $25.00</td>
            <td><input id="infindibulator" type="checkbox" name="item_4" value="25" onclick="infindibulatorCost(this)"></td>
         </tr>
      </table>
      <br>
      total:<br>
      <input id="total" type="text" name="total" readonly onmouseover="total()">
      <br>
      <br>
      Credit card input:
      <br>
      <input type="radio" name="card_type" value="value 1" checked> Visa<br>
      <input type="radio" name="card_type" value="value 2"> Master Card<br>
      <input type="radio" name="card_type" value="value 3"> American Express
      <br>
      
      Credit Card Number:
      <p id="cardWarning" style="display:none"> card number must be 16 numbers </p>
      <input id="cardNumberField" type="text" name="credit_card" placeholder="Credit Card Number" onchange="checkCard(this)">
      <br>
      Credit Card Expiration:
      <p id="cardDateWarning" style="display:none"> card expiration must have a valid month of 1-12 and not expired. <br>
                                                    and be in the form "12/21/2018" </p>
      <input id="cardExpirationField" type="text" name="exp_date" placeholder="expiration date" onchange="checkCardDate(this)">
      <br>
      
      <br>
      <!--<input type="reset" value="Reset">-->
       
      <button id="resetButton" name="reset" type="button" onclick="resetEverything()">reset </button>
      <br>
      <br>
      <button id="submitOrder" name="validate" type="button" onclick="validateEverything()">submit</button>
      
      </form>
   
   
      </body>
</html>
