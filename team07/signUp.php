<?php
//session_start();

?>

<!DOCTYPE html>
<html>
   <head>
   
		<title> Sign Up </title>
   </head>
   <body>
   
		<div>
   
			<h1> sign up for a new account </h1>
   
			<form id="mainForm" action="createAccount.php" method="POST">
   
				<input type="text" id="txtUser" name="txtUser" placeholder="Username">
				<label for="txtUser">username</label>
				<br>
   
				<input type="password" id="txtPassword" name="txtPassword" placeholder="password"></input>
				<label for="txtPassword">password</label>
				<br>
   
				<input type="submit" value="Create Account"/>
   
			</form>
   
		</div>
   </body>
</html>