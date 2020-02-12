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
   
   <h1> book list.</h1>
   
		<h1>book Resources</h1>
		<ul>
		
		<?php
		
		foreach ($books as $book)
		{
			
			$id = $book['id'];
			$genre = $book['genre'];
			$title = $book['title'];
			$purpose = $book['purpose'];
			$description = $book['description'];
			
			echo "<li><p><a href='viewWorldGenre.php?book_title=$title'>$id - $genre - $title - $purpose - $description</a></p></li>";
			
		}
		
		?>
		
		</ul>
		
   <br>
   
   </div>
   
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
   
   </div>
   
    </body>
</html>
