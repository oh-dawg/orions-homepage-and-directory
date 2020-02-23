<?php
/**********************************************************
* File: showTopics.php
* Author: Br. Burton
* 
* Description: This file retrieves the scriptures and topics
* from the DB.
***********************************************************/

require("dbAccess.php");
$db = getdb();


$query = 'SELECT id, genre, title, purpose, description FROM public.bookrepository';
$stmt = $db->prepare($query);
$stmt->execute();
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
   
   <a href="viewBookRepository.php">book repository</a>
   
   </div>
   
   <div class="main" align="center">
   
   <h1> when adding a book, please update the worldgenre table, enter the book id as "bookrepository_id" for reference, here is the bookrepository list:</h1>
	
	<h2> book list.</h2>
   
		<ul>
		
		<?php
		
		foreach ($books as $book)
		{
			
			$id = $book['id'];
			$genre = $book['genre'];
			$title = $book['title'];
			$purpose = $book['purpose'];
			$description = $book['description'];
			
			echo "<li><p>$id - $genre - $title - $purpose - $description</p></li>";
			
		}
		
		?>
		
		</ul>
   
   <h3> add record to table </h3>
   <div class = "edit_table" align = "center">
   
		<form id="bookEntryForm" method= "post" action="insertWorldGenre.php">
	
			<input type="text" id="txtBRID" name="txtBRID"></input>
			<label for="txtBRID">Book Repository ID</label>
			<br /><br />

			<label for="txtWorldGenre">World Genre:</label><br />
			<textarea id="txtWorldGenre" name="txtWorldGenre" rows="4" cols="50"></textarea>
			<br /><br />
	
			<button id="submitRecord" name="validate" type="submit">submit</button>
      
		</form>
	  
	</div>
   
   </div>