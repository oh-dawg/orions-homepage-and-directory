<?php
ini_set('display_errors', 1);

$scripture_id = htmlspecialchars($_GET['scripture_id']);
require ('dbConnect.php');
$db = getdb();
$stmt = $db->prepare('SELECT book, chapter, verse, content FROM scriptures WHERE id = :id');
$stmt->bindValue(':id', $scripture_id, PDO::PARAM_INT);
$stmt->execute();
$scriptures = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
​
<!DOCTYPE html>
<html>
	<head>
		<title>Scripture Content</title>
	</head>
<body> 
	<h1>Scripture Text</h1>
	
		<ul>
		
		<?php
		foreach ($scriptures as $scripture)
			{
				$book 			= $scripture['book'];
				$chapter 		= $scripture['chapter'];
				$verse 			= $scripture['verse'];
				$content 		= $scripture['content'];
				echo "<h3>$book $chapter:$verse</h3>";
				echo "<li><p>$content</p></li>";
			}
		?>
		</ul>
</body>
</html>