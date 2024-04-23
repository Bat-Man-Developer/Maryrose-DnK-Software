<?php
include('adminconnection.php');
//1. View Product Details
if(isset($_GET['fldproductid'])){
  $productid = $_GET['fldproductid'];
  $stmt1 = $conn->prepare("SELECT * FROM products WHERE fldproductid = ?");
  $stmt1->bind_param("i",$productid);
  $stmt1->execute();
  // This is an array of 1 product
  $editproducts = $stmt1->get_result();
}
else if($_POST['admineditproductsbtn']){//Edit Product Details
  $productid = $_POST['fldproductid'];
  $productname = $_POST['fldproductname'];
  $productprice = $_POST['fldproductprice'];
  $productdescription = $_POST['fldproductdescription'];
  $productoffer = $_POST['fldproductspecialoffer'];
  $producttype = $_POST['fldproducttype'];

  $stmt = $conn->prepare("UPDATE products SET fldproductname=?, fldproducttype=?, fldproductdescription=?, fldproductprice=?, fldproductspecialoffer=? WHERE fldproductid=?");

  $stmt->bind_param('sssssi',$productname,$producttype,$productdescription,$productprice,$productoffer,$productid);
  
  if($stmt->execute()){
    header('location: ../admin/adminproducts.php?editmessage=Product Updated Succesfully!');
  }
  else{
    header('location: ../admin/adminproducts.php?errormessage=Error Occured, Try Again.');
  }
}
else{//no product id was given
  header('admin/dashboard.php?errormessage=Something went wrong!');
}
?>