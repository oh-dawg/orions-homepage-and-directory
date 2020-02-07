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
   
	<p>Orion's HomePage </p>
   
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
			
			echo "<li><p>$id - $genre - $title - $purpose - $description</p></li>";
			
		}
		
		?>
		
		</ul>
		
   <br>
   
   </div>
   
    </body>
</html>
