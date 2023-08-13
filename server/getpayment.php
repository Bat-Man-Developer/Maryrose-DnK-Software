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

?>