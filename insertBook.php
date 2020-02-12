<?php

// get the data from the POST
$Genre = $_POST['txtGenre'];
$title = $_POST['txtTitle'];
$purpose = $_POST['txtPurpose'];
$description = $_POST['txtDescription'];

require("dbAccess.php");
$db = getdb();

?>