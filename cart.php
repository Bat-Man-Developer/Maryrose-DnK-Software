<?php

session_start();

include('server/getcart.php'); 

include('layouts/header.php');

?>
  </div>
</div>

<!--------- cart items details ------------>
<section class="cart container my-5 py-5">
  <div class="container mt-5">
		<h2 class="fontweightbold">Your Cart</h2>
		<hr>
	</div>

	<table class="mt-5 pt-5">
		<tr>
			<th>Product</th>
			<th>Quantity</th>
			<th>Subtotal</th>
		</tr> 

		<?php if(isset($_SESSION['cart'])) { ?>

		<?php foreach($_SESSION['cart'] as $key => $value) { ?>

		<tr>
			<td>
				<div class="product-info">
					<img id="wine-pic1" src="assets/images/<?php echo $value['fldproductimage']; ?>" alt="Snow">
					<div>
						<p class="productname"><?php echo $value['fldproductname']; ?></p>
						<small class="productprice"><?php echo $value['fldproductprice']; ?></small>
						<br>

						<form method="POST" action="cart.php">
						<input type="hidden" name="fldproductid" class="removebutton" value="<?php echo $value['fldproductid']; ?>"/>
						<input type="submit" name="removeproductbtn" class="removebutton" value="remove"/>
		        </form>

					</div>
				</div>
			</td>
			<td>
				<form method="POST" action="cart.php">
					<input type="hidden" name="fldproductid" value="<?php echo $value['fldproductid']; ?>"/>
					<input type="number" name="fldproductquantity" class="productquantity" value="<?php echo $value['fldproductquantity']; ?>"/>
					<input type="submit" name="editquantitybtn" class="editbtn" value="edit"/>
				</form>
		  </td>
			<td>
				<span>R</span>
				<span class="productsubtotal"><?php echo $value['fldproductquantity'] * $value['fldproductprice']; ?></span>
			</td>
		</tr>

		<?php } ?>

		<?php } ?>
	</table>

	<div class="carttotal">
		<table>
			<tr>
				<td class="productssubtotal">Subtotal</td>
				<td></td>
			</tr>
			<tr>
				<td class="productstax">Tax</td>
				<td></td>
			</tr>
			<tr>
				<td class="productstotal">Total</td>
				<td>R <?php if(isset($_SESSION['total'])){echo $_SESSION['total']; }else{echo "0";} ?></td>
			</tr>
		</table>
	</div>

	<div class="checkoutcontainer">
		<form method="POST" action="cart.php">
	    <input class="checkoutbtn" name="cartbtn" type="submit" id="purchase-button" value="Proceed To Checkout"/>
		</form>
	</div>

</section>

<?php

include('layouts/footer.php');
	
?>