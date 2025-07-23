<?php

session_start();

//if user did not fill in checkout address details home page
if(!isset($_SESSION['checkoutbtn'])){
  header('location: index.php');
  exit;
}

include('server/getpayment.php');

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mary Rose Payment</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="stylepayment.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <section class="my-5 py-5">
      <div class="container text-center mt-3 pt-5">
        <h2 class="form-weight-bold">Payment</h2>
        <hr class="mx-auto">
      </div>
      <form method="POST" action="payment.php">
        <div class="mx-auto container text-center">
          <p>Total Payment: R<?php if(isset($_SESSION['total']) && $_SESSION['total'] != 0){echo $_SESSION['total'];}else{echo "0";} ?></p>
          <?php if(isset($_SESSION['total'])){ ?>
          <input type="submit" name="paymentbtn" class="btn btn-primary" value="Pay Now"/>
          <?php } ?>
        </div>
      </form>
    <div class="col-sm-1"></div>
    <div class="col-sm-2"></div>
    </div> 
    </div> 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <!---------js for Store ------------->
    <script src="store.js">
   
    </script>
  </body>
</html>