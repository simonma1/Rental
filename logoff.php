<?php session_start(); ?>
<!DOCTYPE html>
<html>

	<head>
	
	</head>
	
	<body>

	<?php
 
		session_unset();	
		
		$_SESSION["loggedin"]=false;
		echo "in logoff";
		header('Location: index.php');
	
	?>

</body>

</html>