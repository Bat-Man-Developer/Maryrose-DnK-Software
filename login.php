<?php

session_start();

//if user has already logged in then take user to account page
if(isset($_SESSION['logged_in'])){
  header('location: account.php');
  exit;
}

include('server/getlogin.php');

include('layouts/header.php');

?>
  </div>
</div>

<!--------- login-page ------------>
<section class="my-5 py-5">
	<div class="container text-center mt-3 pt-5">
		<h2 class="form-weight-bold">Login</h2>
		<hr class="max-auto">
	</div>
	<div class="max-auto container">
		
		<div class="formcontainer">
			
				<img src="assets/images/Vintage blue1.jpg" alt="Snow" height="100px" alt="Snow" style="width: 20%; margin-right: 10px">
			
			<form id="loginform" method="POST" action="login.php">
				<p style="color: red" class="text-center"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
				<p style="color: green" class="text-center"><?php if(isset($_GET['message'])){ echo $_GET['message']; }?></p>
				<div class="form-group">
					<label>Email</label><br>
					<input type="text" class="form-control" id="loginemail" name="flduseremail" placeholder="Email" required/>
				</div>
				<div class="form-group">
				<label>Password</label><br>
					<input type="password" class="form-control" id="loginpassword" name="flduserpassword" placeholder="Password" required/>
				</div>
				<div class="form-group">
					<button type="submit" name="loginbtn" class="btn" id="loginbtn" required>Login</button>
					<a id="forgotpasswordurl" href="resetpassword.php">Forgot password</a><br>
					<a id="registerurl" href="registration.php">Don't have account? Register</a>
				</div>
			</form>
		
		</div>
		
	</div>
</section>

<?php

include('layouts/footer.php');
	
?>