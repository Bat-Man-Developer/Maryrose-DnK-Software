<?php

session_start();

//if user did not pay take user to home page
if(!isset($_SESSION['paymentbtn'])){
  header('location: index.php');
  exit;
}

include('server/gettrackorderlogin.php');

include('layouts/header.php');

?>
  </div>
</div>

<!--------- track order login page ------------>
<section class="my-5 py-5">
	<div class="container text-center mt-3 pt-5">
		<h2 class="form-weight-bold">Create Password to Track Order</h2>
		<hr class="max-auto">
	</div>
	<div class="max-auto container">
		<form id="trackorderform" method="POST" action="trackorderlogin.php">
			<p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error'];} ?></p>
			
			<div class="form-group">
			<label>Password</label>
				<input type="password" class="form-control" id="trackorderpassword" name="flduserpassword" placeholder="Password" required/>
			</div>
			<div class="form-group">
			<label>Confirm Password</label>
				<input type="password" class="form-control" id="trackorderconfirmpassword" name="flduserconfirmpassword" placeholder="Confirm Password" required/>
			</div>
			<div class="form-group">
				<button type="submit" name="trackorderbtn" class="btn" id="trackorderbtn" required>Track Order</button>
			</div>
		</form>
	</div>
</section>


<?php

include('layouts/footer.php');
	
?>