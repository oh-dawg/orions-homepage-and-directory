<?php

// get the data from the POST
$Genre = $_POST['txtGenre'];
$title = $_POST['txtTitle'];
$purpose = $_POST['txtPurpose'];
$description = $_POST['txtDescription'];

require("dbAccess.php");
$db = getdb();

?>

<!DOCTYPE html>
<html>
   <head>
   
   <title>homepage</title>
   <link rel="stylesheet" type="text/css" href="masterstylesheet.css">
   
   </head>
   <body>
   
   <div class="TitleBar">
   
	<p>Orion's book repository </p>
   
    </div>
   
   <div class="leftsidenav">
   
   <a href="directory.html">directory</a>
   
   </div>
   
   <div class="main" align="center">
   
   </div>