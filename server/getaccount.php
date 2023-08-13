<?php

include('connection.php');

if(isset($_GET['logout'])){
  if(isset($_SESSION['logged_in'])){
    unset($_SESSION['logged_in']);
    unset($_SESSION['flduseremail']);
    unset($_SESSION['flduserfirstname']);
    unset($_SESSION['flduserlastname']);
    header('location: ../login.php');
    exit;
  }
}

//get Orders
if(isset($_SESSION['logged_in'])){
  $useridnumber = $_SESSION['flduseridnumber'];

  $stmt = $conn->prepare("SELECT * FROM orders WHERE fldbillingidnumber = ?");

  $stmt->bind_param('s',$useridnumber);

  $stmt->execute();

  $orders = $stmt->get_result();

}


?>