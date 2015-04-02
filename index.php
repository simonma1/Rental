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
		}
		 
		//echo $_SESSION["user_name"];
		
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
	
		<h1>Welcome to Housing Montreal</h1>
	
		<p>	You have been hired to design and implement an e-commerce rental housing website for the general
			public. The website is a matching market which matches property owners and tenants. In particular,
			the market is a two-sided matching market, in which tenants select their preferred properties based on
			their preferences and, at the same time, property owners select their preferred tenants based on their
			tenant selection criteria. We assume that each owner can only list one property at a time. Therefore, a
			property owner and their property are interchangeable for matching purpose. Before using the
			website, property owners and tenants will be required to create an account. After registration, the
			marketplace allows property owners to post properties they have available for rent, as well as their
			tenant selection criteria; it also allows tenants to post their profiles and preferences for renting a
			property. Inputs from owners and tenants are stored in a database (which you will do for assignment
			4). Once a tenant invokes the matching function, the website will return a list of properties which
			match the tenants’ preferences. On the other hand, when an owner invokes the matching function, the
			website will return a list of tenants which match the owner’s tenant selection criteria. The matching
			results should also provide detailed contact information of owners or tenants, so they can contact each
			other directly. The matching function will be required later in assignment 4.
			Here are the specifications which you need to follow for Assignment 3. You can add more features if
			you like.
		</p>
	</div>
	
	<footer>
		<p>Copyright &copy: Simon Monière Abes</p>
		<p><a href="mailto:simon.moniereabes@gmail.com">Contact</a></p>
	</footer>
</body>


</html>