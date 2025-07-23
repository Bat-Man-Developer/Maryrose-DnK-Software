<?php
session_start();
?>
<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Mary Rose Home</title>
			<link rel="stylesheet" type="text/css" href="assets/styles/styledefault.css">
			<link rel="stylesheet" type="text/css" href="assets/styles/stylecart.css">
			<link rel="stylesheet" type="text/css" href="assets/styles/stylebanner.css">
			<link rel="stylesheet" type="text/css" href="assets/styles/styletrackorderbanner.css">
			<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300&display=swap" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		</head>
	  <body>

	  <div class="header">
		  <div class="container">
		    <div class="navbar">
			    <div class="logo">
				    <a href="index.php"><img class="logo" src="assets/images/Logo (2).jfif" alt="Snow" width="130px" height="70px" align="left"></a>
			    </div>
			    <nav>
						<ul id="MenuItems" style="background: whitesmoke;">
							<li id="nav-exit"style="visibility: collapse" onclick="menutoggle()" style="margin-right: 30px; color: black;">X</li>
							<li><a href="index.php" style="color: black;">Home</a></li>
							<li><a href="about.php" style="color: black;">About</a></li>
							<li><a href="products.php" style="color: black;">Products</a></li>
							<li><a href="contact.php" style="color: black;">Contact</a></li>
							<li><a href="resellerregistration.php" style="color: black;">Become a Reseller</a></li>
							<li><a href="careers.php" style="color: black;">Careers</a></li>
				    </ul>
					</nav>
					<!---------------Account Image---------------->
					<a href="login.php" style="margin-right: 3%;"><img id="accountpic" class="accountpic" src="assets/images/accountpic.png" alt="Snow" width="30px" height="30px" align="left"></a>
					<!---------------Cart Image---------------->
					<a href="cart.php"><img id="cart-pic" class="cartpic" src="assets/images/cartpic.png" alt="Snow" width="30px" height="30px" align="left">

					<?php if(isset($_SESSION['totalquantity']) && $_SESSION['totalquantity'] != 0) { ?>
							
						<span class="cartquantity"><?php echo $_SESSION['totalquantity']; ?></span>
						
					<?php }?></a>

					<img src="assets/images/menu.png" alt="Snow" class="menu-icon" onclick="menutoggle()" align="center">
				</div>

				<!----------js for toggle menu----------->
				<script>
					var MenuItems = document.getElementById("MenuItems");

					MenuItems.style.maxHeight = "0px";

					function menutoggle(){
						if(MenuItems.style.maxHeight == "0px")
						{
							MenuItems.style.maxHeight = "200px"
							document.getElementById("nav-exit").style.visibility = "";
						}
						else
						{
								MenuItems.style.maxHeight = "0px"
								document.getElementById("nav-exit").style.visibility = "collapse";	
						}
					}
				</script>
