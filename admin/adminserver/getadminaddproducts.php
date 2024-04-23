<?php
include('adminconnection.php');
//Edit Product Details
if(isset($_POST['adminaddproductsbtn'])){
  $productid = $_POST['fldproductid'];
  $productname = $_POST['fldproductname'];
  $producttype = $_POST['fldproducttype'];
  $productdescription = $_POST['fldproductdescription'];
  $productprice = $_POST['fldproductprice'];
  $productoffer = $_POST['fldproductspecialoffer'];

  //The File
  $target_dir = $_SERVER['DOCUMENT_ROOT']."/assets/images/";
  $productimage = basename($_FILES["fldproductimage"]["name"]);

  //Check Files
  $uploadOk = 1;
  $imageFileType = pathinfo($productimage,PATHINFO_EXTENSION);
  $check = getimagesize($productimage);

  // Check if file already exists
  if(file_exists($target_file)){
    $uploadOk = 0;
    header('location: ../admin/adminaddproducts.php?editmessage=Error Occured, File Already Exists.');
  }
  // Check file size
  if($_FILES["fldproductimage"]["size"] > 500000) {
    $uploadOk = 0;
    header('location: ../admin/adminaddproducts.php?editmessage=Error Occured, Your File Is Too Large.');
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif"){
    $uploadOk = 0;
    header('location: ../admin/adminaddproducts.php?editmessage=Error Occured, Only JPG, JPEG, PNG & GIF Files Are Allowed.');
  }
  else if($imageFileType == "jpg"){
    //Image Name
    $productimagename = $productname.uniqid().".jpg";
    $target_file = $target_dir.$productimagename;
  }
  else if($imageFileType == "jpeg"){
    $productimagename = $productname.uniqid().".jpeg";
    $target_file = $target_dir.$productimagename;
  }
  else if($imageFileType == "png"){
    $productimagename = $productname.uniqid().".png";
    $target_file = $target_dir.$productimagename;
  }
  else if($imageFileType == "gif"){
    $productimagename = $productname.uniqid().".gif";
    $target_file = $target_dir.$productimagename."gif";
  }
  
  // Check if $uploadOk is set to 0 by an error
  if($uploadOk == 0){
    header('location: ../admin/adminaddproducts.php?errormessage=Unexpected Error, Try Again.');
  }
  else{// if everything is ok, try to Upload File
    if(move_uploaded_file($_FILES["fldproductimage"]["tmp_name"], $target_file)){

    }
    else{
      header('location: ../admin/adminaddproducts.php?errormessage=Image Upload Failed, Try Again.');
    }
  }

  //1. insert in Products Table
  $stmt = $conn->prepare("INSERT INTO products (fldproductname,fldproducttype,fldproductdescription,fldproductimage,fldproductprice,fldproductspecialoffer)
  VALUES (?,?,?,?,?,?)");
  $stmt->bind_param('ssssss',$productname,$producttype,$productdescription,$productimagename,$productprice,$productoffer); 
  //1.2 Issue New Product ID & store Product info in Database
  $_SESSION['fldproductid'] = $productid = $stmt->insert_id;
  
  if($stmt->execute()){
    header('location: ../admin/adminaddproducts.php?editmessage=Product Added Succesfully!');
  }
  else{
    header('location: ../admin/adminaddproducts.php?errormessage=Error Occured, Try Again.');
  }
}

?>