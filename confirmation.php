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
   
   <a href="shoppingcart.php">back to shoppingcart page</a>
   <br>
   <a href="confirmation.php">confirmation</a>
   <br>
   
   <p>First Name           <?php echo $_SESSION["firstName"];   ?> </p>
   <p>Last Name            <?php echo $_SESSION["lastName"];      ?> </p>
   <p>Address              <?php echo $_SESSION["address"];      ?> </p>
   <p>Phone Number         <?php echo $_SESSION["phoneNumber"];      ?> </p>
   <p>Widgets              <?php echo $_SESSION["boughtWidgets"];      ?> </p>
   <p>Gizmos               <?php echo $_SESSION["boughtGizmos"];      ?> </p>
   <p>Whatzits             <?php echo $_SESSION["boughtWhatzit"];      ?> </p>
   <p>Infindibulators      <?php echo $_SESSION["boughtInfindibulator"];      ?> </p>
   
    </body>
</html>