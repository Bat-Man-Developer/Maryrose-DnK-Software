<?php

include('connection.php');

if(isset($_POST['addtocartbtn'])){

  //1. if user has already added to cart
  if(isset($_SESSION['cart'])){

    $productsarrayids = array_column($_SESSION['cart'],"fldproductid");

    //1.1 if product has already been added to cart or not
    if(!in_array($_POST['fldproductid'], $productsarrayids)){

      $productid = $_POST['fldproductid'];
      
      $productarray = array(

        'fldproductid' => $_POST['fldproductid'],
        'fldproductname' => $_POST['fldproductname'],
        'fldproductprice' => $_POST['fldproductprice'],
        'fldproductimage' => $_POST['fldproductimage'],
        'fldproductquantity' => $_POST['fldproductquantity'],

      );

      $_SESSION['cart'][$productid] = $productarray;

    }
    else{//1.2 product has already been added

      echo '<script> alert("Product Was Already Added To Cart!")</script>';
        
    }
  }
  else{//2 if this is the first product

    $productid = $_POST['fldproductid'];
    $productname = $_POST['fldproductname'];
    $productprice = $_POST['fldproductprice'];
    $productimage = $_POST['fldproductimage'];
    $productquantity = $_POST['fldproductquantity'];

    $productarray = array(

                    'fldproductid' => $productid,
                    'fldproductname' => $productname,
                    'fldproductprice' => $productprice,
                    'fldproductimage' => $productimage,
                    'fldproductquantity' => $productquantity,

    );

    $_SESSION['cart'][$productid] = $productarray;

  }

  //2.1 calculate total
  calculatetotalcart();

} 
else if(isset($_POST['removeproductbtn'])){//3. remove product from cart

  $productid = $_POST['fldproductid'];
  unset($_SESSION['cart'][$productid]);

  //3.1 calculate total
  calculatetotalcart();

}
else if(isset($_POST['editquantitybtn'])){//4. add quantity to product
  //4.1 we get id & quantity from form
  $productid = $_POST['fldproductid'];
  $productquantity = $_POST['fldproductquantity'];

  //4.2 we  get the product array from the session
  $productarray = $_SESSION['cart'][$productid];

  //4.3 update product quantity
  $productarray['fldproductquantity'] = $productquantity;

  //4.4 return array back to its place
  $_SESSION['cart'][$productid] = $productarray;

  //4.5 calculate total
  calculatetotalcart();

}
else if(!empty($_SESSION['cart']) && isset($_POST['cartbtn'])){//5. let user in
  header('location: ../checkout.php');
}
else if(empty($_SESSION['cart']) && isset($_POST['cartbtn'])){//6. if cart is empty dont let user go to checkout
  header('location: ../cart.php?error=cart is empty');
} 
else{
  //header('location: ../index.php?fldproductid?error=choose product to add to cart');
}

function calculatetotalcart(){
  $total = 0;

  foreach($_SESSION['cart'] as $key => $value){
    $product = $_SESSION['cart'][$key];

    $price = $product['fldproductprice'];
    $quantity = $product['fldproductquantity'];
    
    $total = $total + ($price * $quantity);
  }

  $_SESSION['total'] = $total;
}
?>