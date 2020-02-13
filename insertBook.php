<?php

// get the data from the POST
$genre = $_POST['txtGenre'];
$title = $_POST['txtTitle'];
$purpose = $_POST['txtPurpose'];
$description = $_POST['txtDescription'];

require("dbAccess.php");
$db = getdb();

try
{
	// Add the Scripture

	// We do this by preparing the query with placeholder values
	$query = 'INSERT INTO public.bookrepository(genre, title, purpose, description) VALUES(:genre, :title, :purpose, :description)';
	$statement = $db->prepare($query);
	
	$statement->bindValue(':genre', $genre);
	$statement->bindValue(':title', $title);
	$statement->bindValue(':purpose', $purpose);
	$statement->bindValue(':description', $description);
	
	$statement->execute();


}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

// finally, redirect them to a new page to actually show the topics
header("Location: showBook.php");

die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.

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