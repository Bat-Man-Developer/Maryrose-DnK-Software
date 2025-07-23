<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Mary Rose Home</title>
			<link rel="stylesheet" type="text/css" href="style.css">
			<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300&display=swap" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		</head>
	  <body>

	  <div class="header">
		  <div class="container">
		    <div class="navbar">
			    <div class="logo">
				    <a href="index.php"><img src="assets/images/Logo (2).jfif" alt="Snow" width="160px" height="100px" align="left"></a>
			    </div>
			    <nav>
						<ul id="MenuItems" style="background: whitesmoke;">
							<li id="nav-exit"style="visibility: collapse" onclick="menutoggle()" style="margin-right: 30px; color: black;">X</li>
							<li><a href="index.php" style="color: black;">Home</a></li>
							<li><a href="about.php" style="color: black;">About</a></li>
							<li><a href="products.php" style="color: black;">Products</a></li>
							<li><a href="contact.php" style="color: black;">Contact</a></li>
							<li><a href="login.php" style="color: black;">Account</a></li>
				    </ul>
					</nav>
					<a href="cart.php"><img id = "cart-pic" src="assets/images/cartpic.png" alt="Snow" width="30px" height="30px" align="left"></a>
					<img src="assets/images/menu.png" alt="Snow" class="menu-icon" onclick="menutoggle()" align="center">
				</div>
