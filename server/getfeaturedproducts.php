<?php

include('connection.php');

$stmt = $conn->prepare("SELECT * FROM products LIMIT 4");

$stmt->execute();

$featuredproducts = $stmt->get_result();// This is an array

?>