<?php
	
	DEFINE('DB_USER', 'Simon');
	DEFINE('DB_PASSWORD', '1234');
	DEFINE('DB_Host', 'localhost');
	DEFINE('DB_NAME', 'user');
	
	$mysqli =  mysqli_connect(DB_Host, DB_USER, DB_PASSWORD, DB_NAME)
	OR die('Could not connect to MySQL'.
		mysqli_connect_error());
		
		


?>