<?php

if(isset($_get['book_title']))
{
	
	die("Error, book id not specified");
	
}
$book_title = htmlspecialchars($_GET['book_title']);

?>

<!DOCTYPE html>
<html>
   <head>
   
	<title> World Genre</title>
   </head>
   <body>
   <h1> World Genre's for title <?php echo $book_title ?></h1>
   
   </body>
</html>