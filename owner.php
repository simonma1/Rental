<?php session_start(); ?>
<!DOCTYPE html>

<html>

<head>
	<title>Rental Matching Market</title>
	<meta charset="utf-8"/>
	
	<link rel="stylesheet" href="style.css" type="text/css"/>
</head>

<body>
	<?php
	//Tenants will not be able to access the owner part of the website
		if(isset($_SESSION["role"])){
			$role="tenant";
			if($_SESSION["role"]==$role){
				header('Location: tenant.php');
			}
			
		}
	
	?>
	<header class="head">
		
		
		
		<nav class="nav">
			<ul> 
				<li><a href="index.php"> Home</a></li>
				<li><a href=#>Owner</a></li>
				<li><a href="tenant.php">Tenant</a></li>
				<li><a href="properties.php">Properties</a></li>
			</ul>
		</nav>	

		<img src="Montreal.jpg" alt="Picture of Montreal">
	
	</header>
	<aside class="login">
		<?php
		if(!isset($_SESSION["loggedin"])){
			$_SESSION["loggedin"] = false;
			echo "Not set";
		}
		 
		
		
		if($_SESSION["loggedin"]){
			echo '<p class="username">Welcome '. $_SESSION["user_name"] . '!</p>
			<form class="logofForm" action="logoff.php" method="POST">
				<input type="submit" id="submit" name="logoff" value="Log off">
				</form>';
			}else{
				echo '<form class="myForm" action="login.php" method="POST">
		User Name: 
		<input type="text" name="usr" placeholder="name"></br>
		<span class="pss">Password:</span>
		<input type="password" name="pswd" placeholder="password">
		<input type="submit" id="submit" name="login" value="Login">
		<span id="signup"><a href="registration.html"> sign up</a></span>
		</form>';
			}
		?>
	</aside>
	
	<div class="main">
		<p>Owners have the opportunity to sell the houses to tenants with the desired characteristic.  </p>
		
		<p>To update the preferred tenant's characteristic, fill out the following form.</p>
	
		<form class="formPreference" action="">
			Has a pet:</br>
			<input type="radio" name="pet" value="yes" >Yes<br>
			<input type="radio" name="pet" value="no" checked>NO<br></br>
			
			Smoking or Non-smoking:</br>
			<input type="radio" name="smoke" value="smoke" >Smoking<br>
			<input type="radio" name="smoke" value="nosmoke" checked>Non-smoking<br></br>
			
			Age: 
			<input type="text" name="age" placeholder="Your Age"></br></br>
			
			Occupation:
			<input type="text" name="job" placeholder="Your Job"></br></br>
			
			Level of income:
			<input type="text" name="money" placeholder="Your Salary"></br></br>
			
			<button>Save</button>
		</form>
	
	</div>
	
	<footer>
		<p>Copyright &copy: Simon Monière Abes</p>
		<p><a href="mailto:simon.moniereabes@gmail.com">Contact</a></p>
	</footer>
</body>


</html>