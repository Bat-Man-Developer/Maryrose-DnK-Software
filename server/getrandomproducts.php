<<<<<<< HEAD
<?php

include('connection.php');

$stmt = $conn->prepare("SELECT * FROM products WHERE fldproductid BETWEEN 2 AND 5");

$stmt->execute();

$randomproducts = $stmt->get_result();// This is an array

=======
<?php
include('connection.php');
$stmt = $conn->prepare("SELECT * FROM products WHERE fldproductid BETWEEN 2 AND 5");
if($stmt->execute()){
  $randomproducts = $stmt->get_result();// This is an array
}
else{
  header('location: ../index.php?error=Something Went Wrong. Contact Support Team!!');
}
>>>>>>> 0a7878f (commit)
?>