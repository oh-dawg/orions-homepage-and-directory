<?php
ini_set('display_errors', 1);

/*if(isset($_get['book_title']))
{
	
	die("Error, book id not specified");
	
}*/

// book_id comes from the viewBookRepository page, when you hit submit.
// assigned to book_id variable
$book_id = $_GET['book_id'];

require('dbAccess.php');
$db = getdb();


//$query = 'SELECT b.genre, w.worldgenre FROM worldgenretable w JOIN bookrepository b ON w.bookrepository_id = b.id WHERE b.id =:id';
// query runs on the table, use table column names.
$query = 'SELECT bookrepository_id, bookrepository_genre, bookrepository_title, worldgenre FROM worldgenretable WHERE id = :id';
$stmt = $db->prepare($query);
//$stmt->bindValue(':id', $book_title, PDO::PARAM_STR);

// ':id' comes from the table, $book_id is the variable we named on line 13.
$stmt->bindValue(':id', $book_id, PDO::PARAM_INT);
$stmt->execute();

// books_rows is a variable, assigne a associative array to it, places contents of table fetch into this array.
$books_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

//$book_code = $books_rows[0]['genre'];

?>

<!DOCTYPE html>
<html>
   <head>
   
	<title> World Genre</title>
   </head>
   <body>
   
   <h1> World Genres for title <?php echo $book_code; ?></h1>
   
   <ul>
   <?php
   
   
   
   foreach($books_rows as $book_row)
   {
	   // variable = table column contents, 
	   $worldgenre = $book_row['worldgenre'];
	   
	   // display variable contents (a table column with content)
	   echo "<li>$worldgenre</li>";
	   
   }
   ?>
   
   </ul>
   
   </body>
</html>