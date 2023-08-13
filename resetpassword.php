<?php

session_start();

//if user did not pay take user to home page
/*if(!isset($_SESSION['emailbtn'])){
  header('location: index.php');
  exit;
}*/

include('server/getresetpassword.php');

include('layouts/header.php');

?>
  </div>
</div>

<!--------- reset password page ------------>
<section class="my-5 py-5">
	<div class="container text-center mt-3 pt-5">
		<h2 class="form-weight-bold">Reset Password</h2>
		<hr class="max-auto">
	</div>
	<div class="max-auto container">
		<form id="resetpasswordform" method="POST" action="resetpassword.php">
			<p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error'];} ?></p>
			
			<div class="form-group">
			<label>Email</label>
				<input type="text" class="form-control" id="resetemail" name="flduseremail" placeholder="Email" required/>
			</div>
			<div class="form-group">
			<label>Password</label>
				<input type="password" class="form-control" id="resetpasswordpassword" name="flduserpassword" placeholder="Password" required/>
			</div>
			<div class="form-group">
			<label>Confirm Password</label>
				<input type="password" class="form-control" id="resetpasswordconfirmpassword" name="flduserconfirmpassword" placeholder="Confirm Password" required/>
			</div>
			<div class="form-group">
				<button type="submit" name="resetpasswordbtn" class="btn" id="resetpasswordbtn" required>Reset Password</button>
			</div>
		</form>
	</div>
</section>


<?php

include('layouts/footer.php');
	
?>