<?php

session_start();

//if user has already registered then take user to account page
if(isset($_SESSION['logged_in'])){
  header('location: account.php');
  exit;
}

include('server/getregistration.php');

include('layouts/header.php');

?>
  </div>
</div>

<!--------- registration-page ------------>
<section class="my-5 py-5">
	<div class="container text-center mt-3 pt-5">
		<h2 class="form-weight-bold">Registration</h2>
		<hr class="max-auto">
	</div>
	<div class="max-auto container">
		<form id="registrationform" method="POST" action="registration.php">
			<p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error'];} ?></p>
			<div class="form-group">
				<label>First Name</label>
				<input type="text" class="form-control" id="registrationfirstname" name="flduserfirstname" placeholder="First Name" required/>
			</div>
			<div class="form-group">
			<label>Last Name</label>
				<input type="text" class="form-control" id="registrationlastname" name="flduserlastname" placeholder="Last Name" required/>
			</div>
			<div class="form-group">
			<label>Addressline1</label>
				<input type="text" class="form-control" id="registrationaddressline1" name="flduseraddressline1" placeholder="Addressline1" required/>
			</div>
			<div class="form-group">
			<label>Addressline2</label>
				<input type="text" class="form-control" id="registrationaddressline2" name="flduseraddressline2" placeholder="Addressline2"/>
			</div>
			<div class="form-group">
			<label>Postal Code</label>
				<input type="text" class="form-control" id="registrationpostalcode" name="flduserpostalcode" placeholder="Postalcode" required/>
			</div>
			<div class="form-group">
			<label>City</label>
				<input type="text" class="form-control" id="registrationcity" name="fldusercity" placeholder="City" required/>
			</div>
			<div class="form-group">
			<label>Country</label>
				<input type="text" class="form-control" id="registrationcountry" name="fldusercountry" placeholder="Country" required/>
			</div>
			<div class="form-group">
			<label>Phone Number</label>
				<input type="text" class="form-control" id="registrationphonenumber" name="flduserphonenumber" placeholder="Phone Number" required/>
			</div>
			<div class="form-group">
			<label>Email</label>
				<input type="text" class="form-control" id="registrationemail" name="flduseremail" placeholder="Email" required/>
			</div>
			<div class="form-group">
			<label>ID Number</label>
				<input type="text" class="form-control" id="registrationidnumber" name="flduseridnumber" placeholder="ID Number" required/>
			</div>
			<div class="form-group">
			<label>Password</label>
				<input type="password" class="form-control" id="registrationpassword" name="flduserpassword" placeholder="Password" required/>
			</div>
			<div class="form-group">
			<label>Confirm Password</label>
				<input type="password" class="form-control" id="registrationconfirmpassword" name="flduserconfirmpassword" placeholder="Confirm Password" required/>
			</div>
			<div class="form-group">
				<button type="submit" name="registrationbtn" class="btn" id="registration-btn" required>Register</button>
				<a id="loginurl" href="login.php">Do you have an account? Login</a>
			</div>
		</form>
	</div>
</section>


<?php

include('layouts/footer.php');
	
?>