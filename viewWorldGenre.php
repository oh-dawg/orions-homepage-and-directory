<?php

if(isset($_get['book_id']))
{
	
	die("Error, book id not specified");
	
}
$book_id = htmlspecialchars($_GET['book_id']);

?>

<!DOCTYPE html>
<html>
   <head>
   
	<title> World Genre</title>
   </head>
   <body>
   <h1> World Genre's for book id <?php echo $book_id ?></h1>
   
   </body>
</html>