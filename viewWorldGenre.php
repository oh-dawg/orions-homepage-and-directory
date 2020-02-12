<?php
ini_set('display_errors', 1);

if(isset($_get['book_title']))
{
	
	die("Error, book id not specified");
	
}
$book_title = htmlspecialchars($_GET['book_title']);

require('dbAccess.php');
$db = getdb();

//$query = 'SELECT b.genre, w.worldgenre FROM worldgenretable w JOIN bookrepository b ON w.bookrepository_id = b.id WHERE b.id =:id';
$query = 'SELECT genre, worldgenre FROM worldgenretable WHERE id =:id';
$stmt = $db->prepare($query);
//$stmt->bindValue(':id', $book_title, PDO::PARAM_STR);
$stmt->bindValue(':id', $book_title, PDO::PARAM_INT);
$stmt->execute();
$books_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$book_code = $books_rows[0]['genre'];

?>

<!DOCTYPE html>
<html>
   <head>
   
	<title> World Genre</title>
   </head>
   <body>
   
   <h1> World Genres for title <?php echo $book_code; ?></h1>
   <?php
   
   <ul>
   
   foreach($books_rows as $book_row)
   {
	   
	   $content = $book_row['content'];
	   echo "<p>$content</p>";
	   
   }
   ?>
   
   </ul>
   
   </body>
</html>