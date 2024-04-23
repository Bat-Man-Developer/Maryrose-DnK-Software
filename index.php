<<<<<<< HEAD
<?php

include('layouts/header.php');
	
?>
  </div>
</div>

<!------------- offer0 ----------->
<div class="offer0">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<h1>Experience Taste Of The Queens!</h1>
				<p>Doing your best requires you to have the best so do your best discover your hidden potentials & ideas from the tip of your hands. Wine<br>designed for the Queens & Kings.</p>
				<a href="products.html" class="btn">Explore Now &#8594;</a>
			</div>
			<div class="col-2">
				<img src="assets/images/Vintage normal1.jpg" alt="Snow">
			</div>
		</div>
	</div>
</div>

<!------- featured categories ----------->
<div class="categories">
	<div class="small-container">
		<div class="row">
			<div class="col-3">
				<img src="assets/images/Gallery.jpg" alt="Snow">
			</div>
			<div class="col-3">
				<img src="assets/images/gallery1.jfif" alt="Snow">
			</div>
			<div class="col-3">
				<img src="assets/images/Gallery2.jpg" alt="Snow">
			</div>
			</div>
		</div>
</div>

<!------- featured products ----------->
<div class="small-container">
	<h2 class="title">Featured Products</h2>
	<div class="row"> 
		<?php include('server/getfeaturedproducts.php'); ?>
		<?php while($row = $featuredproducts->fetch_assoc()) { ?>
		<div class="col-4">
			<a href="<?php echo "product-details.php?fldproductid=". $row['fldproductid']; ?>"><img src="assets/images/<?php echo $row['fldproductimage']; ?>" alt="Snow">
			<h4><?php echo $row['fldproductname']; ?></h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p><?php echo $row['fldproductprice']; ?></p>
		</div>
		<?php } ?>
	</div>
</div>

<!------------- Latest products ----------->
<div class="small-container">
	<h2 class="title">Latest Products</h2>
	<div class="row"> 
		<?php include('server/getlatestproducts.php'); ?>
		<?php while($row = $latestproducts->fetch_assoc()) { ?>
		<div class="col-4">
			<a href="<?php echo "product-details.php?fldproductid=". $row['fldproductid']; ?>"><img src="assets/images/<?php echo $row['fldproductimage']; ?>" alt="Snow">
			<h4><?php echo $row['fldproductname']; ?></h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p><?php echo $row['fldproductprice']; ?></p>
		</div>
		<?php } ?>
	</div>
</div>

<!------------- offer ----------->
<div class="offer">
	<div class="small-container">
		<div class="row">
			<div class="col-2">
				<a href="product-details8.html"><img src="assets/images/Black Mary Rose Red Wine.jfif" class="offer-img" alt="Snow"></a>
				<a href="product-details8.html"><h4>Mary Rose Black Rose</h4></a>
			</div>
			<div class="col-2">
				<p>Exclusively Available on our Website</p>
				<h1>Mary Rose Black Rose</h1>
				<small>The Black Rose is crafted by the leading wine manufacturer in the world.
					Grapevines located in the Western Cape region offer the juiciest taste ever, only the Queens of the old times would indulge in.<br>
				</small>
				<a href="product-details8.html" class="btn">Buy Now &#8594;</a>
			</div>
		</div>
	</div>
</div>

<!---------- testimonial --------->
<div class="testimonial">
	<div class="small-container">
		<div class="row">
			<div class="col-3">
				<i class="fa fa-quote-left"></i>
				<p>I am really Satisfied with the service
					thumbs up</p>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<img src="assets/images/random people 4.jpg" alt="Snow">
				<h3>Sean Mabel</h3>
			</div>
			<div class="col-3">
				<i class="fa fa-quote-left"></i>
				<p>Overall I have no complains, got my Wine in great condition.</p>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<img src="assets/images/random people.jfif" alt="Snow">
				<h3>Sizwe Xulu</h3>
			</div>
			<div class="col-3">
				<i class="fa fa-quote-left"></i>
				<p>(: Awesome store</p>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<img src="assets/images/random people1.jfif" alt="Snow">
				<h3>Jay Fox</h3>
			</div>
		</div>
	</div>
</div>

<!----------- brands ---------->
<div class="brands">
	<div class="small-container">
		<div class="row">
			<div class="col-5">
				<img src="assets/images/goodrej.jfif" alt="Snow">
			</div>
			<div class="col-5">
				<img src="assets/images/oppo.jpg" alt="Snow">
			</div>
			<div class="col-5">
				<img src="assets/images/cocacola.png" alt="Snow">
			</div>
			<div class="col-5">
				<img src="assets/images/paypal.jpg" alt="Snow">
			</div>
			<div class="col-5">
				<img src="assets/images/phillips.png" alt="Snow">
			</div>
		</div>
	</div>
</div>

<?php

include('layouts/footer.php');
	
=======
<?php
include('layouts/header.php');
?>
  </div>
</div>
<!------------- Website Messages----------->
<p style="color: red; font-weight: bold; text-align: center" class="text-center"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
<p style="color: green" class="text-center"><?php if(isset($_GET['message'])){ echo $_GET['message']; }?></p>
<!------------- offer0 ----------->
<div class="offer0">
	<div class="container">
		<div class="row">
		<!-- Below Header Intro or Banner --> 

			<div class="col-2">
				<h1>Experience Taste Of The Queens!</h1>
				<p>Doing your best requires you to have the best so do your best discover your hidden potentials & ideas from the tip of your hands. Wine<br>designed for the Queens & Kings.</p>
				<a href="<?php echo "products.php"; ?>" class="btn">Explore Now &#8594;</a>
			</div>
			<div class="col-2">
			<?php include('layouts/banner.php'); ?>
				<!-- This was a Home/Index image
				<img src="assets/images/<//?php echo $row['fldproductimage']; ?>" alt="Snow">-->
			</div>	
	  </div>
	</div>
</div>

<!------- featured categories ----------->
<div class="categories">
	<div class="small-container">
		<div class="row">
			<div class="col-3">
				<img src="assets/images/Gallery.jpg" alt="Snow">
			</div>
			<div class="col-3">
				<img src="assets/images/gallery1.jfif" alt="Snow">
			</div>
			<div class="col-3">
				<img src="assets/images/Gallery2.jpg" alt="Snow">
			</div>
			</div>
		</div>
</div>

<!------- featured products ----------->
<div class="small-container">
	<h2 class="title">Featured Products</h2>
	<div class="row"> 
		<!---import the files--->
		<?php include('server/getfeaturedproducts.php'); ?>
		<?php while($row = $featuredproducts->fetch_assoc()) { ?>
		<div class="col-4">
			<a href="<?php echo "productdetails.php?fldproductid=". $row['fldproductid']; ?>"><img src="assets/images/<?php echo $row['fldproductimage']; ?>" alt="Snow">
			<h4><?php echo $row['fldproductname']; ?></h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p><?php echo $row['fldproductprice']; ?></p>
			</a>
		</div>
		<?php } ?>
	</div>
</div>

<!------------- Latest products ----------->
<div class="small-container">
	<h2 class="title">Latest Products</h2>
	<div class="row"> 
		<!---import the files--->
		<?php include('server/getlatestproducts.php'); ?>
		<?php while($row = $latestproducts->fetch_assoc()) { ?>
		<div class="col-4">
			<a href="<?php echo "productdetails.php?fldproductid=". $row['fldproductid']; ?>"><img src="assets/images/<?php echo $row['fldproductimage']; ?>" alt="Snow">
			<h4><?php echo $row['fldproductname']; ?></h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p><?php echo $row['fldproductprice']; ?></p>
			</a>
		</div>
		<?php } ?>
	</div>
</div>

<!------------- offer ----------->
<div class="offer">
	<div class="small-container">
		<div class="row">

		<!---import the files--->
		<?php include('server/getofferproducts.php'); ?>
		<?php while($row = $offerproducts->fetch_assoc()) { ?>

			<div class="col-2">
				<a href="<?php echo "productdetails.php?fldproductid=". $row['fldproductid']; ?>"><img src="assets/images/<?php echo $row['fldproductimage']; ?>" class="offer-img" alt="Snow"></a>
				<a href="<?php echo "productdetails.php?fldproductid=". $row['fldproductid']; ?>"><h4><?php echo $row['fldproductname']; ?></h4></a>
			</div>
			<div class="col-2">
				<p>Exclusively Available on our Website</p>
				<h1><?php echo $row['fldproductname']; ?></h1>
				<small>The Black Rose is crafted by the leading wine manufacturer in the world.
					Grapevines located in the Western Cape region offer the juiciest taste ever, only the Queens of the old times would indulge in.<br>
				</small>
				<a href="<?php echo "productdetails.php?fldproductid=". $row['fldproductid']; ?>" class="btn">Buy Now &#8594;</a>
			</div>

			<?php } ?>

		</div>
	</div>
</div>

<!---------- testimonials --------->
<div class="testimonials">
	<div class="small-container">
	  <h2 class="title">Testimonials & Suggestions</h2>
		<h3 class="titledescription">help us improve by mentioning problems & challenges experienced in our online store. Any response is appreciated.
		<div class="row">
			<!---import the files--->
			<?php include('server/gettestimonials.php'); ?>
			<?php while($row = $testimonials->fetch_assoc()) { ?>
			<div class="col-3">
				<i class="fa fa-quote-left"></i>
				<p><?php echo $row['fldtestimonialscomment']; ?></p>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<img src="<?php if(isset($row['fldtestimonialsimage'])){ echo "assets/images/".$row['fldtestimonialsimage']; }else{ echo "assets/images/unknownimage.png"; } ?>" alt="Snow">
				<h3><?php echo $row['fldtestimonialsemail']; ?></h3>
			</div>
			<?php } ?>
		</div>
		<div class="row">
		<a href="testimonialslogin.php"><button class="btn">Suggestions...</button></a>
		</div>
	</div>
</div>

<!----------- brands ---------->
<div class="brands">
	<div class="small-container">
		<div class="row">
			<div class="col-5">
				<img src="assets/images/paypalpic.png" alt="Snow">
			</div>
		</div>
	</div>
</div>

<?php

include('layouts/footer.php');
	
>>>>>>> 0a7878f (commit)
?>