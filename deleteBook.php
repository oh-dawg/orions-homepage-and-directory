<?php

// get the data from the POST
$id = $_POST['deleteID'];

require("dbAccess.php");
$db = getdb();

try
{
	// Add the Scripture

	// We do this by preparing the query with placeholder values
	$wQuery = 'DELETE FROM public.worldGenreTable WHERE bookrepository_id = :id';
	$wStatement = $db->prepare($wQuery);
	$wStatement->bindValue(':id', $id);
	$wStatement->execute();
	
	
	$query = 'DELETE FROM public.bookrepository WHERE id = :id';
	$statement = $db->prepare($query);
	
	$statement->bindValue(':id', $id);
	
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