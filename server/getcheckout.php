<?php

include('connection.php');

if(isset($_POST['checkoutbtn'])){
		//1.get user info and store in database
	//1.1 get the post records for billing
	$_SESSION['fldbillingfirstname'] = $billingfirstname = $_POST['fldbillingfirstname'];
	$_SESSION['fldbillinglastname'] = $billinglastname = $_POST['fldbillinglastname'];
	$_SESSION['fldbillingaddressline1'] = $billingaddressline1 = $_POST['fldbillingaddressline1'];
	$_SESSION['fldbillingaddressline2'] = $billingaddressline2 = $_POST['fldbillingaddressline2'];
	$_SESSION['fldbillingpostalcode'] = $billingpostalcode = $_POST['fldbillingpostalcode'];
	$_SESSION['fldbillingcity'] = $billingcity = $_POST['fldbillingcity'];
	$_SESSION['fldbillingcountry'] = $billingcountry = $_POST['fldbillingcountry'];
	$_SESSION['fldbillingemail'] = $billingemail = $_POST['fldbillingemail'];
	$_SESSION['fldbillingphonenumber'] = $billingphonenumber = $_POST['fldbillingphonenumber'];
	$_SESSION['fldbillingidnumber'] = $billingidnumber = $_POST['fldbillingidnumber'];

	//1.2 get the post records for user
	$_SESSION['flduserfirstname'] = $userfirstname = $_POST['fldbillingfirstname'];
	$_SESSION['flduserlastname'] = $userlastname = $_POST['fldbillinglastname'];
	$_SESSION['flduseraddressline1'] = $useraddressline1 = $_POST['fldbillingaddressline1'];
	$_SESSION['flduseraddressline2'] = $useraddressline2 = $_POST['fldbillingaddressline2'];
	$_SESSION['flduserpostalcode'] = $userpostalcode = $_POST['fldbillingpostalcode'];
	$_SESSION['fldusercity'] = $usercity = $_POST['fldbillingcity'];
	$_SESSION['fldusercountry'] = $usercountry = $_POST['fldbillingcountry'];
	$_SESSION['flduseremail'] = $useremail = $_POST['fldbillingemail'];
	$_SESSION['flduserphonenumber'] = $userphonenumber = $_POST['fldbillingphonenumber'];
	$_SESSION['flduseridnumber'] = $useridnumber = $_POST['fldbillingidnumber'];

	//1.3 get the post records for shipping
	$_SESSION['fldshippingfirstname'] = $shippingfirstname = $_POST['fldshippingfirstname'];
	$_SESSION['fldshippinglastname'] = $shippinglastname = $_POST['fldshippinglastname'];
	$_SESSION['fldshippingaddressline1'] = $shippingaddressline1 = $_POST['fldshippingaddressline1'];
	$_SESSION['fldshippingaddressline2'] = $shippingaddressline2 = $_POST['fldshippingaddressline2'];
	$_SESSION['fldshippingpostalcode'] = $shippingpostalcode = $_POST['fldshippingpostalcode'];
	$_SESSION['fldshippingcity'] = $shippingcity = $_POST['fldshippingcity'];
	$_SESSION['fldshippingcountry'] = $shippingcountry = $_POST['fldshippingcountry'];
	$_SESSION['fldshippingemail'] = $shippingemail = $_POST['fldshippingemail'];
	$_SESSION['fldshippingphonenumber'] = $shippingphonenumber = $_POST['fldshippingphonenumber'];
	$_SESSION['fldshippingdeliverycomment'] = $shippingdeliverycomment = $_POST['fldshippingdeliverycomment'];

	//1.4 get Order info and store in database
	$_SESSION['fldordercost'] = $ordercost = $_SESSION['total'];
	$_SESSION['fldorderstatus'] = $orderstatus = "Processing Payment";
	$_SESSION['fldorderdate'] = $orderdate = date('Y-m-d H:i:s');
	$_SESSION['checkoutbtn'] = $_POST['checkoutbtn'];

	header('location: ../payment.php');
}

?>