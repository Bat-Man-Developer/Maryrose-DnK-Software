<?php 

include('connection.php');

if(isset($_GET['fldproductid'])){

  $productid = $_GET['fldproductid'];

  $stmt = $conn->prepare("SELECT * FROM products WHERE fldproductid = ?");

  $stmt->bind_param("i",$productid);

  $stmt->execute();
  
  // This is an array of 1 product
  $product = $stmt->get_result();

}
else{// no product id was given
  header('index.php');
}

?>