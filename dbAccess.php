<?php

function getdb() {
	
	$db = NULL;
	
	try {
		
		// default Heroku postgres configuration URL
		$dbUrl = getenv('DATABASE_URL');
		
		//get the various parts of the DB Connection from the URL
		$dbopts = parse_url($dbUrl);
		
		$dbHost = $dbopts["host"];
		$dbPort = $dbopts["port"];
		$dbUser = $dbopts["user"];
		$dbPassword = $dbopts["pass"];
		$dbName = ltrim($dbopts["path"],'/');
		
		// create the PDO 
		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
		
		// this line makes PDO give us an exception when there are problems, and can be very helpful in debugging!
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch (PDOException $ex) {
		
		// if this where in production, you would not want to echo
		// the details of the exception.
		echo "Error connection to DB. Details: $ex";
		die();
	}
	return $db;
}
?>