<?php

include('layouts/header.php');
	
?>
  </div>
</div>

<!--------- single product details ------------> 
<div class="small-container">
	<div class="row">
	
	<?php include('server/getproduct-details.php'); ?>

	<?php while($row = $product->fetch_assoc()) { ?>

		<div class="col-2">
			<img class = "shop-item-image" src="assets/images/<?php echo $row['fldproductimage']; ?>" alt="Snow" width="50%" id="ProductImg">
						<div class="small-img-row">
							<div class="small-img-col">
								<img src="assets/images/<?php echo $row['fldproductimage1']; ?>" alt="Snow" width="100%" class="small-img">
							</div>
							<div class="small-img-col">
								<img src="assets/images/<?php echo $row['fldproductimage2']; ?>" alt="Snow" width="100%" class="small-img">
							</div>
							<div class="small-img-col">
								<img src="assets/images/<?php echo $row['fldproductimage3']; ?>" alt="Snow" width="100%" class="small-img">
							</div>
							<div class="small-img-col">
								<img src="assets/images/<?php echo $row['fldproductimage4']; ?>" alt="Snow" width="100%" class="small-img">
							</div>
						</div>
		</div>
		<div class="col-2">
			<p>Home / Product-details</p>
			<h1 class = "shop-item-title"><?php echo $row['fldproductname']; ?></h1>
			<h4 class = "shop-item-price" style="margin-left: 10px;"><?php echo $row['fldproductprice']; ?></h4>

		<form method="POST" action="cart.php">

			<input type="hidden" name="fldproductid" value="<?php echo $row['fldproductid']; ?>"/>
			<input type="hidden" name="fldproductimage" value="<?php echo $row['fldproductimage']; ?>"/>
			<input type="hidden" name="fldproductname" value="<?php echo $row['fldproductname']; ?>"/>
			<input type="hidden" name="fldproductprice" value="<?php echo $row['fldproductprice']; ?>"/>
					<input type="number" name="fldproductquantity" value="1"/>
					<button type="submit" name="addtocartbtn" class="btn btn-primary shop-item-button" id="cart-button">Add to Cart</button>
		
		</form>

			<h3>Product Details <i class="fa fa-indent"></i></h3><br>
			<p><?php echo $row['fldproductdescription']; ?></p>
		</div>

	<?php } ?>
	</div>
</div>    

<!----------title------------>
<div class="small-container">
	<div class="row row-2">
		<h2>Related Products</h2>
		<p>View More</p>
	</div>
</div>


<!---------products----------->
<div class="small-container">
	<div class="row">

		<?php include('server/getrandomproducts.php'); ?>

		<?php while($row = $randomproducts->fetch_assoc()) { ?>

		<div class="col-4">
			<a href="<?php echo "product-details.php?fldproductid=". $row['fldproductid']; ?>"><img src="assets/images/<?php echo $row['fldproductimage']; ?>" alt="Snow"></a>
			<a href="<?php echo "product-details.php?fldproductid=". $row['fldproductid']; ?>"><h4><?php echo $row['fldproductname']; ?></h4></a>
			<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
			</div>
			<p><?php echo $row['fldproductprice']; ?></p>
		</div>

		<?php } ?>
	</div>
</div> 

<!----------js for product gallery ---------->
<script>
	var ProductImg = document.getElementById("ProductImg");
	var SmallImg = document.getElementsByClassName("small-img");

	    SmallImg[0].onclick = function()
	    {
	        ProductImg.src = SmallImg[0].src;	
	    }
	    SmallImg[1].onclick = function()
	    {
	        ProductImg.src = SmallImg[1].src;	
	    }
	    SmallImg[2].onclick = function()
	    {
	        ProductImg.src = SmallImg[2].src;	
	    }
	    SmallImg[3].onclick = function()
	    {
	        ProductImg.src = SmallImg[3].src;	
	    }
</script>

<?php

include('layouts/footer.php');

?>