<?php session_start(); ?>
<!DOCTYPE html>
<html>

	<head>
	
	</head>
	
	<body>
	
	<?php
	
		
	
		if(IsSet($_POST['submit'])){
			
			
			$data_missing = array();
			
			if(empty($_POST['name'])){
				
				$data_missing[] = 'First Name';
			}else{
				$f_name= trim($_POST['name']);
			}
			
			if(empty($_POST['lastName'])){
				
				$data_missing[] = 'Last Name';
			}else{
				$l_name= trim($_POST['lastName']);
			}
			
			$role= $_POST["role"];
			
			if(empty($_POST['phonenum'])){
				
				$data_missing[] = 'Phone Number';
			}else{
				$p_num= trim($_POST['phonenum']);
			}
			
			if(empty($_POST['email'])){
				
				$data_missing[] = 'Email';
			}else{
				$email= trim($_POST['email']);
			}
			
			if(empty($_POST['usrName'])){
				
				$data_missing[] = 'User Name';
			}else{
				$u_name= trim($_POST['usrName']);
			}
			
			if(empty($_POST['password'])){
				
				$data_missing[] = 'Password';
			}else{
				$pswrd= trim($_POST['password']);
			}
			
			
			if(empty($data_missing)){
				
				
				//connect to database
				require_once('mysqli_connect.php');
				
				$query = "INSERT INTO userinfo (first_name, last_name, ID, role, phone_num, email_add, user_name, password) 
					VALUES(?,?,NULL, ?, ?, ?, ?, ?)";
				
				$stmt = mysqli_prepare($mysqli, $query);
				
				mysqli_stmt_bind_param($stmt, "sssssss", $f_name, $l_name, $role, $p_num, $email, $u_name, $pswrd);
				
				mysqli_stmt_execute($stmt);
				
				$affected_rows = mysqli_stmt_affected_rows($stmt);
				
				if($affected_rows == 1){
					
					mysqli_stmt_close($stmt);
				
				}else{
					echo 'Error Occured ';
					echo mysqli_error();
					
					mysqli_stmt_close($stmt);
				}
			
			}
		}
		//Testing the database
		/*
		echo "<p>Data Processed</p>";
		
		$usersName = $_POST['name'];		
		$usersLastName = $_POST['lastName'];
		
		echo $usersName . "</br>";		
		echo $usersLastName . "</br>";
		
		require_once('../mysqli_connect.php');
	
	$query = "SELECT first_name, last_name, ID FROM userinfo";
	
	$response = @mysqli_query($mysqli, $query);
	
	if($response){
		echo '<table align="left" cellspacing="5" cellpadding="8">
	
		<tr>
			<th align="left"`><b>First Name</b></th>
			<th align="left"`><b>Last Name</b></th>
			<th align="left"`><b>ID</b></th>
		</tr>';	
	
		while($row = mysqli_fetch_array($response)){
		
			echo'<tr><td align=left">' . $row['first_name'] . '</td>' .
					'<td align=left">' . $row['last_name'] . '</td>' .
					'<td align=left">' . $row['ID'] . '</td>' ;
					
			echo '</tr>';
			
		}
		
		echo '</table>';
	
	
	} else{
	
		echo "Couldn't issue database query";
		
		echo mysqli_error($mysqli);
		
	}
	
	mysqli_close($mysqli);
		
	*/
	
	//start a session to hold some of the user info
	
	
	
	$_SESSION["user_name"] = $u_name;
	$_SESSION["role"] = $role;
	$_SESSION["loggedin"] = true;
	
	
	
	if($role == "tenant"){
			header('Location: tenant.php');
	}else if($role == "owner"){
		header('Location: owner.php');
	}else{
		echo "Something wrong"; 
	}
	?>
	
	
	
	</body>

</html>