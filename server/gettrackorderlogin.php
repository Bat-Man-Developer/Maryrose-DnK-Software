<?php

include('connection.php');

if(isset($_POST['trackorderbtn'])) {
  $useremail = $_SESSION['fldbillingemail'];
  $userpassword = $_POST['flduserpassword'];
  $userconfirmpassword = $_POST['flduserconfirmpassword'];
  $_SESSION['trackorderbtn'] = $_POST['trackorderbtn'];

  //1. if password dont match
  if($userpassword !== $userconfirmpassword){
    header('location: ../trackorderlogin.php?error=passwords dont match');
  }
  else if(strlen($userpassword) < 8)
  {//2. if password is less than 8 characters
    header('location: ../trackorderlogin.php?error=password must be atleast 8 characters');
  }
  else{//3. if there is no error
    
    //3.1 check whether there is a user with this email or not
    $stmt = $conn->prepare("SELECT count(*) FROM users WHERE flduseremail=?");
    $stmt->bind_param('s',$useremail);
    $stmt->execute();
    $stmt->bind_result($num_rows);
    $stmt->store_result();
    $stmt->fetch();

    //3.1.1 if there is a user already registered with this email
    if($num_rows != 0){
      //3.1.1.1 check whether the user email has a password already
      $stmt0 = $conn->prepare("SELECT count(*) FROM users WHERE flduseremail=? AND flduserpassword=?");
      $stmt0->bind_param('ss',$useremail,$userpassword);
      $stmt0->execute();
      $stmt0->bind_result($num_rows1);
      $stmt0->store_result();
      $stmt0->fetch();

      //3.1.1.2 if there is a user password already linked with this email
      if($num_rows1 != 0){
        $_SESSION['logged_in'] = true;
        header('location: ../account.php?loginmessage=already a user. succesfully placed order');
      }
      else{
        $stmt1 = $conn->prepare("UPDATE users SET flduserpassword=? WHERE flduseremail=?");

        $stmt1->bind_param('ss',md5($userpassword),$useremail);

        //if account was created succesfully
        if($stmt1->execute()){
          $_SESSION['logged_in'] = true;
          header('location: ../trackorder.php?registermessage=You Placed Order Succesfully');
        }
      }
    }
    else{//3.1.2 if no user registered with this email before
        header('location: ../index.php?error unidentified user');
    }
  }
}

?> 