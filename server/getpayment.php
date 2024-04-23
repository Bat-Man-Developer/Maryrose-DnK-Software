<<<<<<< HEAD
<?php

include('connection.php');

if(isset($_POST['paymentbtn'])){
		//1.get user info and store in database
	//1.1 get the post records for billing
	$billingfirstname = $_SESSION['fldbillingfirstname'];
	$billinglastname = $_SESSION['fldbillinglastname'];
	$billingaddressline1 = $_SESSION['fldbillingaddressline1'];
	$billingaddressline2 = $_SESSION['fldbillingaddressline2'];
	$billingpostalcode = $_SESSION['fldbillingpostalcode'];
	$billingcity = $_SESSION['fldbillingcity'];
	$billingcountry = $_SESSION['fldbillingcountry'];
	$billingemail = $_SESSION['fldbillingemail'];
	$billingphonenumber = $_SESSION['fldbillingphonenumber'];
	$billingidnumber = $_SESSION['fldbillingidnumber'];

	//1.2 get the post records for user
	$userfirstname = $_SESSION['fldbillingfirstname'];
	$userlastname = $_SESSION['fldbillinglastname'];
	$useraddressline1 = $_SESSION['fldbillingaddressline1'];
	$useraddressline2 = $_SESSION['fldbillingaddressline2'];
	$userpostalcode = $_SESSION['fldbillingpostalcode'];
	$usercity = $_SESSION['fldbillingcity'];
	$usercountry = $_SESSION['fldbillingcountry'];
	$useremail = $_SESSION['fldbillingemail'];
	$userphonenumber = $_SESSION['fldbillingphonenumber'];
	$useridnumber = $_SESSION['fldbillingidnumber'];

	//1.3 get the post records for shipping
	$shippingfirstname = $_SESSION['fldshippingfirstname'];
	$shippinglastname = $_SESSION['fldshippinglastname'];
	$shippingaddressline1 = $_SESSION['fldshippingaddressline1'];
	$shippingaddressline2 = $_SESSION['fldshippingaddressline2'];
	$shippingpostalcode = $_SESSION['fldshippingpostalcode'];
	$shippingcity = $_SESSION['fldshippingcity'];
	$shippingcountry = $_SESSION['fldshippingcountry'];
	$shippingemail = $_SESSION['fldshippingemail'];
	$shippingphonenumber = $_SESSION['fldshippingphonenumber'];
	$shippingdeliverycomment = $_SESSION['fldshippingdeliverycomment'];

	//1.4 get Order info and store in database
	$ordercost = $_SESSION['fldordercost'];
	$orderstatus = $_SESSION['fldorderstatus'];
	$orderdate = $_SESSION['fldorderdate'];
	$_SESSION['paymentbtn'] = $_POST['paymentbtn'];

	//1.1.1 insert in Billing Table
	$stmt = $conn->prepare("INSERT INTO customerbillingaddress (fldbillingfirstname,fldbillinglastname,fldbillingaddressline1,fldbillingaddressline2,fldbillingpostalcode,fldbillingcity,fldbillingcountry,fldbillingemail,fldbillingphonenumber,fldbillingidnumber)
									VALUES (?,?,?,?,?,?,?,?,?,?)");

	$stmt->bind_param('ssssssssss',$billingfirstname,$billinglastname,$billingaddressline1,$billingaddressline2,$billingpostalcode,$billingcity,$billingcountry,$billingemail,$billingphonenumber,$billingidnumber);

	$stmt->execute();

	//1.1.2Issue New Billing and store Billing info in database
	$_SESSION['fldbillingid'] = $billingid = $stmt->insert_id;

	//1.2.1 insert in User Table
	$stmt1 = $conn->prepare("INSERT INTO users (flduserfirstname,flduserlastname,flduseraddressline1,flduseraddressline2,flduserpostalcode,fldusercity,fldusercountry,flduseremail,flduserphonenumber,flduseridnumber)
            VALUES(?,?,?,?,?,?,?,?,?,?)");

  $stmt1->bind_param('ssssssssss',$userfirstname,$userlastname,$useraddressline1,$useraddressline2,$userpostalcode,$usercity,$usercountry,$useremail,$userphonenumber,$useridnumber);
	$stmt1->execute();

	//1.2.2Issue New User and store User info in database
	$_SESSION['flduserid'] = $userid = $stmt1->insert_id;

	//1.3.1 insert in Customer Shipping Table
	$stmt2 = $conn->prepare("INSERT INTO customershippingaddress (fldshippingfirstname,fldshippinglastname,fldshippingaddressline1,fldshippingaddressline2,fldshippingpostalcode,fldshippingcity,fldshippingcountry,fldshippingemail,fldshippingphonenumber,fldshippingdeliverycomment)
									VALUES (?,?,?,?,?,?,?,?,?,?)");

	$stmt2->bind_param('ssssssssss',$shippingfirstname,$shippinglastname,$shippingaddressline1,$shippingaddressline2,$shippingpostalcode,$shippingcity,$shippingcountry,$shippingemail,$shippingphonenumber,$shippingdeliverycomment); 

	$stmt2->execute();

	//1.3.2Issue New Shipping and store Shipping info in database
	$_SESSION['fldshippingid'] = $shippingid = $stmt2->insert_id;

	

	//1.4 insert in Orders Table
	$stmt3 = $conn->prepare("INSERT INTO orders (fldordercost,fldorderstatus,fldorderdate,fldshippingid,fldbillingidnumber,fldbillingphonenumber,fldshippingphonenumber,fldshippingcity,fldshippingcountry,fldshippingaddressline1,fldshippingaddressline2,fldshippingdeliverycomment)
									VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");

	$stmt3->bind_param('ississssssss',$ordercost,$orderstatus,$orderdate,$shippingid,$billingidnumber,$billingphonenumber,$shippingphonenumber,$shippingcity,$shippingcountry,$shippingaddressline1,$shippingaddressline2,$shippingdeliverycomment);

	$stmt3->execute();

	//1.4.1 Issue New Order and store Order info in database
	$orderid = $stmt3->insert_id;

	//1.5 Get products from cart (from session)
	foreach($_SESSION['cart'] as $key => $value){
		$product = $_SESSION['cart'][$key];
		$productid = $product['fldproductid'];
		$_SESSION['fldproductname'] = $productname = $product['fldproductname'];
		$_SESSION['fldproductimage'] = $productimage = $product['fldproductimage'];
		$_SESSION['fldproductprice'] = $productprice = $product['fldproductprice'];
		$_SESSION['fldproductquantity'] = $productquantity = $product['fldproductquantity'];

		//1.5.1 insert each single item in Orders Items Table
		$stmt4 = $conn->prepare("INSERT INTO orderitems (fldorderid,fldproductid,fldproductname,fldproductimage,fldproductprice,fldproductquantity,fldshippingid,fldbillingidnumber,fldorderdate)
						VALUES (?,?,?,?,?,?,?,?,?)");

		$stmt4->bind_param('iissiiiss',$orderid,$productid,$productname,$productimage,$productprice,$productquantity,$shippingid,$billingidnumber,$orderdate);

		$stmt4->execute();
	}

	//6.Remove everything from cart -> Delay until Payment is done

	//7.Inform user if everything is fine or there is a problem
	header('location: ../trackorderlogin.php?fldorderstatus=order placed succesfully');
}

=======
<?php
include('connection.php');
if(isset($_GET['fldtransactionid'])){
  if(isset($_GET['fldorderid']))
  {
    $_SESSION['flduserid'] = $userid = $_GET['flduserid'];
    $orderid = $_GET['fldorderid'];
    $orderstatus = "Paid";
    $transactionid = $_GET['fldtransactionid'];
    $paymentdate = date('Y-m-d H:i:s');
    
    //Insert Payment Info In Payment Table
    $stmt = $conn->prepare("INSERT INTO payments (fldorderid,flduserid,fldtransactionid,fldpaymentdate)
            VALUES (?,?,?,?); ");
    $stmt->bind_param('iiis',$orderid,$userid,$transactionid,$paymentdate);

    //Update Order Status To Paid
    $stmt1 = $conn->prepare("UPDATE orders SET fldorderstatus = ? WHERE fldorderid = ?");
    $stmt1->bind_param('si',$orderstatus,$orderid);

    if($stmt->execute()){
      if($stmt1->execute()){

      }
      else{
        header('cart.php?error=Something Went Wrong!! Contact Support Team.');
      }
    }
    else{
      header('cart.php?error=Something Went Wrong!! Contact Support Team.');
    }

    //Check For Matching Order Id In Customer Shipping Address Table
    $stmt2 = $conn->prepare("SELECT fldshippingid,fldorderid,fldshippingfirstname,fldshippinglastname,fldshippingaddressline1,fldshippingaddressline2,fldshippingpostalcode,fldshippingcity,fldshippingcountry,fldshippingemail,fldshippingphonenumber,fldshippingdeliverycomment FROM customershippingaddress WHERE fldorderid = ? LIMIT 1");
    $stmt2->bind_param('i',$orderid);
    if($stmt2->execute()){
      $stmt2->bind_result($shippingid,$orderid,$shippingfirstname,$shippinglastname,$shippingaddressline1,$shippingaddressline2,$shippingpostalcode,$shippingcity,$shippingcountry,$shippingemail,$shippingphonenumber,$shippingdeliverycomment);
      $stmt2->store_result();
      //If Order Id Is Found In Customer Shipping Address Table
      if($stmt2->num_rows() == 1){
        $stmt2->fetch();
        //Set Shipping Session
        $_SESSION['fldshippingid'] = $shippingid;
        $_SESSION['fldshippingfirstname'] = $shippingfirstname;
        $_SESSION['fldshippinglastname'] = $shippinglastname;
        $_SESSION['fldshippingaddressline1'] = $shippingaddressline1;
        $_SESSION['fldshippingaddressline2'] = $shippingaddressline2;
        $_SESSION['fldshippingpostalcode'] = $shippingpostalcode;
        $_SESSION['fldshippingcity'] = $shippingcity;
        $_SESSION['fldshippingcountry'] = $shippingcountry;
        $_SESSION['fldshippingemail'] = $shippingemail;
        $_SESSION['fldshippingphonenumber'] = $shippingphonenumber;
        $_SESSION['fldshippingdeliverycomment'] = $shippingdeliverycomment;
      }
      else{
        header('index.php?error=Something Went Wrong!! Contact Support Team.');
      }
    }
    else{
      header('index.php?error=Something Went Wrong!! Contact Support Team.');
    }

    //Remove everything from cart -> Delay until Payment is done
    unset($_SESSION['cart']);
    unset($_SESSION['total']);
    unset($_SESSION['totalquantity']);
    unset($_SESSION['checkoutbtn']);
    unset($_SESSION['fldorderid']);
    unset($_SESSION['fldorderstatus']);
    unset($_SESSION['fldordercost']);
    unset($_SESSION['fldorderdate']);
    unset($_SESSION['flddiscountcode']);
    unset($_SESSION['fldcouriercost']);
    unset($_SESSION['protectpaymentpage']);

    header('location: ../noaccountlogin.php?paymentmessage=Paid Successfully. Create New Password For Your Account.');
  }
  else{
    header('location: ../cart.php?error=Something Went Wrong!! Contact Support Team. No Order Id Detected 404');
  }
}
>>>>>>> 0a7878f (commit)
?>