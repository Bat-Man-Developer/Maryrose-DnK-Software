<?php

include('layouts/header.php');
	
?>
  </div>
</div>

<section>
<div id="search" class="my-5 py-5 ms-2">
	<div class="container mt-5 py-5">
		<p>Filter</p>
		<hr>
	</div>

	<form method="POST" action="products.php" id="searchtype">
		<div class="row mx-auto container">
			<div class="col-lg-12 col-md-12 col-sm-12" id="searchtype">
				
				<p>Type</p>
					<div class="form-check">
					  <label class="form-check-label">Pinot Noir
						  <input class="form-check-input" type="radio" name="type" id="type1" value="pinot noir" <?php if(isset($type) && $type == 'pinot noir'){ echo 'checked'; } ?>>
					  </label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">Pinotage
						  <input class="form-check-input" type="radio" name="type" id="type2" value="pinotage" <?php if(isset($type) && $type == 'pinotage'){ echo 'checked'; } ?>>
						</label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">Cabernet Sauvignon
						  <input class="form-check-input" type="radio" name="type" id="type3" value="cabernet sauvignon" <?php if(isset($type) && $type == 'cabernet sauvignon'){ echo 'checked'; } ?>>
						</label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">Sauvignon blanc
						  <input class="form-check-input" type="radio" name="type" id="type4" value="sauvignon blanc" <?php if(isset($type) && $type == 'sauvignon blanc'){ echo 'checked'; } ?>>
						</label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">Merlot
						  <input class="form-check-input" type="radio" name="type" id="type5" value="merlot" <?php if(isset($type) && $type == 'merlot'){ echo 'checked'; } ?>>
						</label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">Chardonnay
						  <input class="form-check-input" type="radio" name="type" id="type6" value="chardonnay" <?php if(isset($type) && $type == 'chardonnay'){ echo 'checked'; } ?>>
						</label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">Riesling
						  <input class="form-check-input" type="radio" name="type" id="type7" value="riesling" <?php if(isset($type) && $type == 'riesling'){ echo 'checked'; } ?>>
						</label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">Syrah
						  <input class="form-check-input" type="radio" name="type" id="type8" value="syrah" <?php if(isset($type) && $type == 'syrah'){ echo 'checked'; } ?>>
						</label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">Malbec
						  <input class="form-check-input" type="radio" name="type" id="type9" value="malbec" <?php if(isset($type) && $type == 'malbec'){ echo 'checked'; } ?>>
						</label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">Cabernet Franc
						  <input class="form-check-input" type="radio" name="type" id="type10" value="cabernet franc" <?php if(isset($type) && $type == 'cabernet franc'){ echo 'checked'; } ?>>
						</label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">Chenin blanc
						  <input class="form-check-input" type="radio" name="type" id="type11" value="chenin blanc" <?php if(isset($type) && $type == 'chenin blanc'){ echo 'checked'; } ?>>
						</label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">Silvaner
						  <input class="form-check-input" type="radio" name="type" id="type12" value="silvaner" <?php if(isset($type) && $type == 'silvaner'){ echo 'checked'; } ?>>
						</label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">Nebbiolo
						  <input class="form-check-input" type="radio" name="type" id="type13" value="nebbiolo" <?php if(isset($type) && $type == 'nebbiolo'){ echo 'checked'; } ?>>
						</label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">Tempranillo
						  <input class="form-check-input" type="radio" name="type" id="type14" value="tempranillo" <?php if(isset($type) && $type == 'tempranillo'){ echo 'checked'; } ?>>
						</label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">Muscat
						  <input class="form-check-input" type="radio" name="type" id="type15" value="muscat" <?php if(isset($type) && $type == 'muscat'){ echo 'checked'; } ?>>
						</label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">Grenache
						  <input class="form-check-input" type="radio" name="type" id="type16" value="grenache" <?php if(isset($type) && $type == 'grenache'){ echo 'checked'; } ?>>
						</label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">Pinot gris
						  <input class="form-check-input" type="radio" name="type" id="type17" value="pinot gris" <?php if(isset($type) && $type == 'pinot gris'){ echo 'checked'; } ?>>
						</label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">Sangiovese
						  <input class="form-check-input" type="radio" name="type" id="type18" value="sangiovese" <?php if(isset($type) && $type == 'sangiovese'){ echo 'checked'; } ?>>
						</label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">Zinfandel
						  <input class="form-check-input" type="radio" name="type" id="type19" value="zinfandel" <?php if(isset($type) && $type == 'zinfandel'){ echo 'checked'; } ?>>
						</label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">Barbera
						  <input class="form-check-input" type="radio" name="type" id="type20" value="barbera" <?php if(isset($type) && $type == 'barbera'){ echo 'checked'; } ?>>
						</label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">Viognier
						  <input class="form-check-input" type="radio" name="type" id="type21" value="viognier" <?php if(isset($type) && $type == 'viognier'){ echo 'checked'; } ?>>
						</label>
					</div>
					<div class="form-check" id="type13">
					  <label class="form-check-label">Gewurtztraminer
						  <input class="form-check-input" type="radio" name="type" id="type22" value="gewurtztraminer" <?php if(isset($type) && $type == 'gewurtztraminer'){ echo 'checked'; } ?>>
						</label>
					</div>
			</div>
		</div><br><br>

		<div class="row">
			<div class="row mx-auto container">
				<div class="col-lg-12 col-md-12 col-sm-12">

				  <div class="searchprice">
						<label for="fader">R 
							<input type="range" min="0" max="1000" value="<?php if(isset($price)){ echo $price; }else{ echo "100";} ?>" id="fader" step="50" list="pricesearch" name="price" oninput="rangeValue.innerText = this.value">
				    </label><p id="rangeValue">100</p>
					</div>
				</div>

			</div>
		</div>

		<div class="form-group my-3 mx-3">
			<div class="row">
			  <input type="submit" name="search" value="Search" class="searchbtn">
			</div>
		</div>

	</form>
</div>

	<div class="row"> 
		<?php include('server/getallproducts.php'); ?>

		<?php while($row = $allproducts->fetch_assoc()) { ?>

		<div class="displayallproducts">
			<a href="<?php echo "productdetails.php?fldproductid=". $row['fldproductid']; ?>"><img src="assets/images/<?php echo $row['fldproductimage']; ?>" alt="Snow"></a>
			<a href="<?php echo "productdetails.php?fldproductid=". $row['fldproductid']; ?>"><h4><?php echo $row['fldproductname']; ?></h4></a>
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
		<span class="page-item <?php if($pagenumber <= 1){ echo 'disabled';} ?>"><a class="page-link" href="<?php if($pagenumber <= 1){ echo '#';}else{ echo "?pagenumber=".($pagenumber - 1);} ?>">Prev</a></span>

		<span class="page-item"><a class="page-link" href="?pagenumber=1">1</a></span>
		<span class="page-item"><a class="page-link" href="?pagenumber=2">2</a></span>

		<?php if($pagenumber >= 3) { ?>
			<span class="page-item"><a class="page-link" href="#">...</a></span>
		  <span class="page-item"><a class="page-link" href="<?php echo "?pagenumber=".$pagenumber; ?>"><?php echo $pagenumber; ?></a></span>
		<?php } ?>

		<span class="page-item <?php if($pagenumber >= $totalnumberofpages){ echo 'disabled';} ?>"><a class="page-link" href="<?php if($pagenumber >= $totalnumberofpages){ echo '#';}else{ echo "?pagenumber=".($pagenumber + 1);} ?>">Next</a></span>
	</div>
</section> 

<?php

include('layouts/footer.php');
	
?>