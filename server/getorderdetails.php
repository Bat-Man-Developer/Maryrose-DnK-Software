<?php

include('connection.php');

if(isset($_POST['orderdetailsbtn']) && isset($_POST['fldorderid'])){
  $orderid = $_POST['fldorderid'];
  $orderstatus = $_POST['fldorderstatus'];

  $stmt = $conn->prepare("SELECT * FROM orderitems WHERE fldorderid = ?");

  $stmt->bind_param('i',$orderid);

  $stmt->execute();

  $orderdetails = $stmt->get_result();

}

?>