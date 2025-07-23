<?php

include('layouts/header.php');
	
?>
  </div>
</div>

<section id="search" class="my-5 py-5 ms-2">
	<div class="container mt-5 py-5">
		<p>Filter</p>
		<hr>
	</div>

	<form method="POST" action="products.php" id="searchtype">
		<div class="row mx-auto container">
			<div class="col-lg-12 col-md-12 col-sm-12">
				
				<p>Type</p>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type1" value="pinot noir">
						<label class="form-check-label" for="flexRadioDefault2">Pinot Noir</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type1" value="pinotage">
						<label class="form-check-label" for="flexRadioDefault2">Pinotage</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type1" value="cabernet sauvignon">
						<label class="form-check-label" for="flexRadioDefault2">Cabernet Sauvignon</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type1" value="sauvignon blanc">
						<label class="form-check-label" for="flexRadioDefault2">Sauvignon blanc</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type" value="merlot">
						<label class="form-check-label" for="flexRadioDefault2">Merlot</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type1" value="chardonnay">
						<label class="form-check-label" for="flexRadioDefault2">Chardonnay</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type1" value="riesling">
						<label class="form-check-label" for="flexRadioDefault2">Riesling</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type1" value="syrah">
						<label class="form-check-label" for="flexRadioDefault2">Syrah</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type1" value="malbec">
						<label class="form-check-label" for="flexRadioDefault2">Malbec</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type1" value="cabernet franc">
						<label class="form-check-label" for="flexRadioDefault2">Cabernet Franc</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type1" value="chenin blanc">
						<label class="form-check-label" for="flexRadioDefault2">Chenin blanc</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type1" value="silvaner">
						<label class="form-check-label" for="flexRadioDefault2">Silvaner</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type1" value="nebbiolo">
						<label class="form-check-label" for="flexRadioDefault2">Nebbiolo</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type1" value="tempranillo">
						<label class="form-check-label" for="flexRadioDefault2">Tempranillo</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type1" value="muscat">
						<label class="form-check-label" for="flexRadioDefault2">Muscat</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type1" value="grenache">
						<label class="form-check-label" for="flexRadioDefault2">Grenache</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type1" value="pinot gris">
						<label class="form-check-label" for="flexRadioDefault2">Pinot gris</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type1" value="sangiovese">
						<label class="form-check-label" for="flexRadioDefault2">Sangiovese</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type1" value="zinfandel">
						<label class="form-check-label" for="flexRadioDefault2">Zinfandel</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type1" value="barbera">
						<label class="form-check-label" for="flexRadioDefault2">Barbera</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="type" id="type1" value="viognier">
						<label class="form-check-label" for="flexRadioDefault2">Viognier</label>
					</div>
					<div class="form-check" id="type13">
						<input class="form-check-input" type="radio" name="type" id="type13" value="gewurtztraminer">
						<label class="form-check-label" for="flexRadioDefault2">Gewurtztraminer</label>
					</div>
			</div>
		</div><br><br>

		<div class="row mx-auto container">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<p>Price</p>
				<input type="range" class="form-range w-50" min="1" max="1000" id="customrange" name="price">
				<div class="w-50">
					<span style="float: left">1</span>
					<span style="float: right">1000</span>
				</div>
			</div>
		</div>

		<div class="form-group my-3 mx-3">
			<input type="submit" name="search" value="Search" class="searchbtn">
		</div>

	</form>
</section>
<section>
	<div class="row"> 
		<?php include('server/getallproducts.php'); ?>

		<?php while($row = $allproducts->fetch_assoc()) { ?>

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
	<div class="page-btn">
		<span class="page-item"><a class="page-link" href="#">Prev</a></span>
		<span class="page-item"><a class="page-link" href="#">1</a></span>
		<span class="page-item"><a class="page-link" href="#">2</a></span>
		<span class="page-item"><a class="page-link" href="#">3</a></span>
		<span class="page-item"><a class="page-link" href="#">Next</a></span>
	</div>
</section> 

<?php

include('layouts/footer.php');
	
?>