<?php session_start(); ?>
<!DOCTYPE html>

<html>

	<head>
	
	</head>
	
	<body>

	<?php
		if(IsSet($_POST['login'])){
	
			session_start();
		
			$data_missing = array();
			
			if(empty($_POST['usr'])){
				
				$data_missing[] = 'User Name';
			}else{
				$u_name= trim($_POST['usr']);
			}
	
			if(empty($_POST['pswd'])){
					
				$data_missing[] = 'Password';
			}else{
				$pswrd= trim($_POST['pswd']);
			}

			require_once('mysqli_connect.php');
			
			$query = "SELECT * FROM userinfo WHERE user_name='$u_name'";
			
			$response = @mysqli_query($mysqli,$query);
			
			
			if($response){
				$row = mysqli_fetch_array($response);
				
				
				$pass = $row['password'];
				$role = $row['Role'];
				
				
				if($pass == $pswrd){
					
					$_SESSION["user_name"] = $u_name;
					$_SESSION["role"] = $role;
					$_SESSION["loggedin"] = true;
					
					
					
					header('Location: index.php');
				}
			}else{
				echo "User name not found";
			}
			
		}
	
	?>

</body>

</html>