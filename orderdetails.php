<?php

session_start();

//if user is not logged in then take user to login page
if(!isset($_SESSION['logged_in'])){
  header('location: login.php');
  exit;
}

include('server/getorderdetails.php');

?>
  </div>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mary Rose Track Order</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
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
				<li><a href="account.php" style="color: black;">Account</a></li>
			</ul>
		</nav>
		<a href="cart.php"><img id = "cart-pic" src="assets/images/cartpic.png" alt="Snow" width="30px" height="30px" align="left"></a>
		<img src="assets/images/menu.png" alt="Snow" class="menu-icon" onclick="menutoggle()" align="center">
	</div>
	</div>

<!--------- Order details--------->
<section id="orderdetails" class="orderdetails container my-5 py-3">
	<div class="container mt-2">
		<h2 class="font-weight-bold text-center">Your Orders</h2>
		<hr class="mx-auto">
	</div>
	<table class="mt-5 pt-5">
		<tr>
			<th>Product</th>
			<th>Product Price</th>
			<th>Product Quantity</th>
		</tr>
		<?php while($row = $orderdetails->fetch_assoc()) { ?>
		<tr>
			<td>
				<div>
					<img src="assets/images/<?php echo $row['fldproductimage']; ?>" alt="Snow"/>
					<div>
						<p class="mt-3"><?php echo $row['fldproductname']; ?></p>
					</div>
				</div>
			</td>
			<td>
				<span><?php echo $row['fldproductprice']; ?></span>
			</td>
			<td>
				<span><?php echo $row['fldproductquantity']; ?></span>
			</td>
		<?php }?>
	</table>
	
	<?php if($orderstatus == "Processing Payment") {?>
		<form method="POST" action="trackorder.php">
			<input type="submit" class="btn btn-primary" name="trackorderbtn" value="Track Order"/>
		</form>
	<?php }?>

</section>

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

</body>
</html>