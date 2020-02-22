<?php

// get the data from the POST
$BRID = $_POST['txtBRID'];
$worldgenre = $_POST['txtWorldGenre'];

require("dbAccess.php");
$db = getdb();

try
{
	// Add the Scripture

	// We do this by preparing the query with placeholder values
	$query = 'INSERT INTO public.worldGenreTable(bookrepository_id, worldgenre) VALUES(:bookrepository_id, :worldgenre)';
	$statement = $db->prepare($query);
	
	// :genre = $genre;
	$statement->bindValue(':bookrepository_id', $BRID);
	$statement->bindValue(':worldgenre', $worldgenre);
	
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
header("Location: viewBookRepository.php");

die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.

?>