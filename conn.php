<?php
	
	define('SERVER', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', '');
	define('DBNAME', 'donating');
	 
	$conn = new mysqli(SERVER, USERNAME, PASSWORD, DBNAME);
	 
	
	if($conn === false){
		die("ERROR: Could not connect. " . $conn->connect_error);
	}
?>