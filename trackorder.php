<?php

session_start();

//if user did not pay take user to home page
if(!isset($_SESSION['trackorderbtn'])){
  header('location: index.php');
  exit;
}

include('server/gettrackorder.php');

include('layouts/header.php');

?>
  </div>
</div>

<!--------- track order login page ------------>
<section class="my-5 py-5">
	<div class="container text-center mt-3 pt-5">
		<h2 class="form-weight-bold">Track Order</h2>
		<hr class="max-auto">
	</div>
	<div class="small-container">
    <div class="row" style="margin: 20px; padding: 20px; font-family: verdana; font-size: large;">
      <h1>TRACK ORDER COMING SOON....!</h1>
    </div>
  </div>
</section>


<?php

include('layouts/footer.php');
	
?>