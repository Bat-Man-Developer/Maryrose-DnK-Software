<?php
include('adminlayouts/adminheader.php');
//if user is not logged in then take user to login page
if(!isset($_SESSION['adminlogged_in'])){
  header('location: adminlogin.php');
  exit;
}
else{
  //Check For Product Id
  if(isset($_GET['fldproductid'])){
    $productid = $_GET['fldproductid'];
  }
  else{
    header('location: dashboard.php');
  }
}
include('adminserver/getadmineditproducts.php');
?>
  <body>
    <!--------- Admin-Edit Product-Page ------------>
    <section class="dashboard">
      <div class="dashboardcontainer" id="dashboardcontainer">
        <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
          <p class="text-center" style="color: green"><?php if(isset($_GET['editmessage'])){ echo $_GET['editmessage']; }?></p>
          <p class="text-center" style="color: red"><?php if(isset($_GET['errormessage'])){ echo $_GET['errormessage']; }?></p>
          <h3>Edit Product</h3>
          <hr class="mx-auto">
          <div class="dashboardadmininfo">
            <p>Name: <span><?php if(isset($_SESSION['fldadminname'])){ echo $_SESSION['fldadminname']; }?></span> Position: <span><?php if(isset($_SESSION['fldadminposition'])){ echo $_SESSION['fldadminposition']; }?></span> Department: <span><?php if(isset($_SESSION['fldadmindepartment'])){ echo $_SESSION['fldadmindepartment']; }?></span></p>
          </div>
          <div class="dashboardinfo">
            <div class="admineditproductstablecontainer">
              <!--------- edit product form ------------>
              <div class="max-auto container">
                <div class="admineditproductstable">
                  <?php foreach($editproducts as $product){?>
                  <img src="<?php echo "../../assets/images/". $product['fldproductimage']; ?>">
                  <p><?php echo $product['fldproductname']; ?></p>
                  <p>R<?php echo $product['fldproductprice']; ?></p>
                  <p><?php echo $product['fldproductdescription']; ?></p>
                  <p><?php echo $product['fldproductspecialoffer']; ?></p>
                  <p><?php echo $product['fldproducttype']; ?></p>
                </div>
                <form id="admineditproductsform" method="POST" action="admineditproducts.php" style="text-align: center;">
                  <p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error'];} ?></p>
                  <div class="form-group">
                    <label>Product Name
                      <input type="text" class="form-control" name="fldproductname" value="<?php echo $product['fldproductname']; ?>" required/>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Product Price
                      <input type="text" class="form-control" name="fldproductprice" value="<?php echo $product['fldproductprice']; ?>" required/>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Product Description
                      <input type="text" class="form-control" name="fldproductdescription" value="<?php echo $product['fldproductdescription']; ?>" required/>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Product Offer
                      <input type="text" class="form-control" name="fldproductspecialoffer" value="<?php echo $product['fldproductspecialoffer']; ?>" required/>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Product Type
                      <input type="text" class="form-control" name="fldproducttype" value="<?php echo $product['fldproducttype']; ?>" required/>
                    </label>
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="fldproductid" value="<?php echo $product['fldproductid']; ?>"/>
                    <input class="btn" id="admineditbtn" name="admineditproductsbtn" type="submit" value="Edit" required/>
                    <a id="helpurl" href="Help.php"><br>Need Help?</a>
                  </div>
                  <?php }?>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><br><br><br><br><br><br><br><br><br>	
  </body>
</html>