<?php

include('connection.php');

if(isset($_POST['registrationbtn'])){
  $userfirstname = $_POST['flduserfirstname'];
  $userlastname = $_POST['flduserlastname'];
  $useraddressline1 = $_POST['flduseraddressline1'];
  $useraddressline2 = $_POST['flduseraddressline2'];
  $userpostalcode = $_POST['flduserpostalcode'];
  $usercity = $_POST['fldusercity'];
  $usercountry = $_POST['fldusercountry'];
  $userphonenumber = $_POST['flduserphonenumber'];
  $useremail = $_POST['flduseremail'];
  $useridnumber = $_POST['flduseridnumber'];
  $userpassword = $_POST['flduserpassword'];
  $userconfirmpassword = $_POST['flduserconfirmpassword'];

  //if password dont match
  if($userpassword !== $userconfirmpassword){
    header('location: ../registration.php?error=passwords dont match');
  }
  else if(strlen($userpassword) < 8)
  {//if password is less than 8 characters
    header('location: ../registration.php?error=password must be atleast 8 characters');
  }
  else{//if there is no error
    
    //check whether there is a user with this email or not
    $stmt1 = $conn->prepare("SELECT count(*) FROM users WHERE flduseremail=?");
    $stmt1->bind_param('s',$useremail);
    $stmt1->execute();
    $stmt1->bind_result($num_rows);
    $stmt1->store_result();
    $stmt1->fetch();

    //if there is a user already registered with this email
    if($num_rows != 0){
      header('location: ../registration.php?error=User With This Email Already Exists');
    }
    else{//if no user registered with this email before
      //create a new user
      $stmt = $conn->prepare("INSERT INTO users (flduserfirstname,flduserlastname,flduseraddressline1,flduseraddressline2,flduserpostalcode,fldusercity,fldusercountry,flduserphonenumber,flduseremail,flduseridnumber,flduserpassword,flduserconfirmpassword)
            VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");

      $stmt->bind_param('ssssssssssss',$userfirstname,$userlastname,$useraddressline1,$useraddressline2,$userpostalcode,$usercity,$usercountry,$userphonenumber,$useremail,$useridnumber,md5($userpassword),$userconfirmpassword);

      //if account was created succesfully
      if($stmt->execute()){
        $userid = $stmt->insert_id;
        $_SESSION['flduserid'] = $userid;
        $_SESSION['flduseremail'] = $useremail;
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
        $_SESSION['flduserpassword'] = $userpassword;
        $_SESSION['flduserconfirmpassword'] = $userconfirmpassword;
        $_SESSION['logged_in'] = true;
        header('location: ../account.php?registermessage=You Registered Succesfully');
      }
      else{//account could not be created
        header('location: ../registration.php?error=Could Not Create An Account At The Moment');
      }
    }
  }
}

?> 