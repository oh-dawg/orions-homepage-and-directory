<?php
ini_set('display_errors', 1);

require ('dbAccess.php');
$db = getdb();
//SELECT id, genre, title, purpose, description;

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
   
   <a href="directory.html">directory</a>
   
   </div>
   
   <div class="main" align="center">
   
   <h1> add record to table </h1>
   <div class = "edit_table" align = "center">
   
		<form id="bookEntryForm" method= "post" action="insertBook.php">
	
			<input type="text" id="txtGenre" name="txtGenre"></input>
			<label for="txtGenre">Genre</label>
			<br /><br />

			<input type="text" id="txtTitle" name="txtTitle"></input>
			<label for="txtTitle">Title</label>
			<br /><br />

			<input type="text" id="txtPurpose" name="txtPurpose"></input>
			<label for="txtPurpose">Purpose</label>
			<br /><br />

			<label for="txtDescription">Description:</label><br />
			<textarea id="txtDescription" name="txtDescription" rows="4" cols="50"></textarea>
			<br /><br />
	
			<button id="submitRecord" name="validate" type="submit">submit</button>
      
		</form>
	  
	</div>
	
	<h1> update record </h1>
	<div class = "update_table" align = "center">
	
		<form id="bookUpdateForm" method= "post" action="updateBook.php">
	
			<input type="text" id="updateID" name="updateID"></input>
				<label for="updateID">insert recordID to change record</label>
				<br /><br />
	
			<input type="text" id="updateGenre" name="updateGenre"></input>
				<label for="updateGenre">Genre change</label>
				<br /><br />
			
			<input type="text" id="updateTitle" name="updateTitle"></input>
				<label for="updateTitle">Title change</label>
				<br /><br />
			
			<input type="text" id="updatePurpose" name="updatePurpose"></input>
				<label for="updatePurpose">Purpose change</label>
				<br /><br />
			
			<label for="updateDescription">Description change:</label><br />
			<textarea id="updateDescription" name="updateDescription" rows="4" cols="50"></textarea>
			<br /><br />
	
			<button id="submitRecord" name="validate" type="submit">submit</button>
	
		</form>
	
	</div>
	
   <h1> delete a record </h1>
   
   <div class = "delete_record" align = "center">
	<form id="bookDeleteForm" method= "post" action="deleteBook.php">
   
		<input type="text" id="deleteID" name="deleteID"></input>
			<label for="deleteID">insert recordID to delete a record</label>
			<br /><br />
			
		<button id="submitRecord" name="validate" type="submit">submit</button>
		
	</form>
	
	</div>
   
   <h1> book list.</h1>
   
		<ul>
		
		<?php
		
		foreach ($books as $book)
		{
			
			$id = $book['id'];
			$genre = $book['genre'];
			$title = $book['title'];
			$purpose = $book['purpose'];
			$description = $book['description'];
			
			echo "<li><p><a href='viewWorldGenre.php?book_id=$id'>$id - $genre - $title - $purpose - $description</a></p></li>";
			
		}
		
		?>
		
		</ul>
		
   <br>
   
   </div>
   
    </body>
</html>
