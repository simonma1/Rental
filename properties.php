<?php session_start(); ?>
<!DOCTYPE html>

<html>

<head>
	<title>Rental Matching Market</title>
	<meta charset="utf-8"/>
	
	<link rel="stylesheet" href="style.css" type="text/css"/>
</head>

<body>
	
	<header class="head">
		
		
		
		<nav class="nav">
			<ul> 
				<li><a href="index.php"> Home</a></li>
				<li><a href="owner.php">Owner</a></li>
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
		<p>Properties can be added to the listing by all owners.  </p>
		
		<p>Tenant will still be able to see the listing through this page</p></br></br>
		
		<div class="listing">
			<table class="tblisting">
				<tr>
					<td>Title of ad</td>
					<td rowspan="4"><img src="house.jpg" alt="picture of house"></td>
				</tr>
				<tr>
					<td>Location of the property (Street Address, City, Postal Code, Province)</td>
				</tr>
				<tr>
					<td>Price and availability of rental</td>
				</tr>
				<tr>
					<td>A personal message (Maximum 300 words)</td>
				</tr>
			</table></br>
			
			<form class="addListingForm" action="">
				<div>Owners can add listing by clicking here
				
					<button onclick="alert('The function will be implemented as part of assignment 4')">Add Listing</button>
				
				</div> 
			</form>
		
		</div>
	
	</div>
	
	<footer>
		<p>Copyright &copy: Simon Monière Abes</p>
		<p><a href="mailto:simon.moniereabes@gmail.com">Contact</a></p>
	</footer>
</body>


</html>