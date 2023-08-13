<?php

include('connection.php');

if(isset($_POST['search'])){
  $type = $_POST['type'];
  $price = $_POST['price'];

  $stmt = $conn->prepare("SELECT * FROM products WHERE fldproductprice <= ? AND fldproducttype = ?");

  $stmt->bind_param('ss',$price,$type);

  $stmt->execute();

  $allproducts = $stmt->get_result();// This is an array

}
else{// return all products

  $stmt = $conn->prepare("SELECT * FROM products");

  $stmt->execute();

  $allproducts = $stmt->get_result();// This is an array

}

?>