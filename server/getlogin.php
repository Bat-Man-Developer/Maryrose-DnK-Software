<?php

include('connection.php');

if(isset($_POST['loginbtn'])){

  $useremail = $_POST['flduseremail'];
  $userpassword = md5($_POST['flduserpassword']);

  $stmt = $conn->prepare("SELECT flduserid,flduserfirstname,flduserlastname,flduseraddressline1,flduseraddressline2,flduserpostalcode,fldusercity,fldusercountry,flduserphonenumber,flduseremail,flduseridnumber,flduserpassword,flduserconfirmpassword FROM users WHERE flduseremail = ? AND flduserpassword = ? LIMIT 1");

  $stmt->bind_param('ss',$useremail,$userpassword);

  if($stmt->execute()){
    $stmt->bind_result($userid,$userfirstname,$userlastname,$useraddressline1,$useraddressline2,$userpostalcode,$usercity,$usercountry,$userphonenumber,$useremail,$useridnumber,$userpassword,$userconfirmpassword);

    $stmt->store_result();

    if($stmt->num_rows() == 1){
      $stmt->fetch();

      $_SESSION['flduserid'] = $userid;
      $_SESSION['flduserfirstname'] = $userfirstname;
      $_SESSION['flduserlastname'] = $userlastname;
      $_SESSION['flduseraddressline1'] = $useraddressline1;
      $_SESSION['flduseraddressline2'] = $useraddressline2;
      $_SESSION['flduserpostalcode'] = $userpostalcode;
      $_SESSION['fldusercity'] = $usercity;
      $_SESSION['fldusercountry'] = $usercountry;
      $_SESSION['flduserphonenumber'] = $userphonenumber;
      $_SESSION['flduseremail'] = $useremail;
      $_SESSION['flduseridnumber'] = $useridnumber;
      $_SESSION['logged_in'] = true;

      header('location: ../account.php?loginmessage=Logged In Successfully');
    }
    else{//Password or Email is Wrong Or not in Database
      header('location: ../login.php?error=Could Not Verify Your Account!');
    }
  }
  else{
    header('location: ../login.php?error=Could Not Login At The Moment');
  }
}
?>