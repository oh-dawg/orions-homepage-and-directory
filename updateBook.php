<?php

// get the data from the POST
$id = $_POST['updateID'];
$genre = $_POST['updateGenre'];
$title = $_POST['updateTitle'];
$purpose = $_POST['updatePurpose'];
$description = $_POST['updateDescription'];

require("dbAccess.php");
$db = getdb();

try
{
	// Add the Scripture

	// We do this by preparing the query with placeholder values
	$query = 'UPDATE public.bookrepository SET genre = :genre, title = :title, purpose = :purpose, description = :description WHERE id = :id';
	$statement = $db->prepare($query);
	
	$statement->bindValue(':id', $id);
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