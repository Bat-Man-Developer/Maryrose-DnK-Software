<?php
include('adminlayouts/adminheader.php');
//if user is not logged in then take user to login page
if(!isset($_SESSION['adminlogged_in'])){
  header('location: adminlogin.php');
  exit;
}
include('adminserver/getadminaddproducts.php');
?>
  <body>
    <!--------- Admin-Add-Products-Page ------------>
    <section class="dashboard">
      <div class="dashboardcontainer" id="dashboardcontainer">
        <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
          <p class="text-center" style="color: green"><?php if(isset($_GET['editmessage'])){ echo $_GET['editmessage']; }?></p>
          <p class="text-center" style="color: red"><?php if(isset($_GET['errormessage'])){ echo $_GET['errormessage']; }?></p>
          <h3>Add Products</h3>
          <hr class="mx-auto">
          <div class="dashboardadmininfo">
            <p>Name: <span><?php if(isset($_SESSION['fldadminname'])){ echo $_SESSION['fldadminname']; }?></span> Position: <span><?php if(isset($_SESSION['fldadminposition'])){ echo $_SESSION['fldadminposition']; }?></span> Department: <span><?php if(isset($_SESSION['fldadmindepartment'])){ echo $_SESSION['fldadmindepartment']; }?></span></p>
          </div>
          <div class="dashboardinfo">
            <div class="adminaddproductstablecontainer">
              <!--------- add product form ------------>
              <div class="adminaddproductstable">
                <form id="adminaddproductsform" enctype="multipart/form-data" method="POST" action="adminaddproducts.php" style="text-align: center;">
                  <p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error'];} ?></p>
                  <div class="form-group">
                    <label>Product Name
                      <input type="text" class="form-control" name="fldproductname" placeholder="Product Name" required/>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Product Type
                      <select class="form-select" required name="fldproducttype">
                        <option value="Pinot Noir">Pinot Noir</option>
                        <option value="Pinotage" >Pinotage</option>
                        <option value="Chardonnay" >Chardonnay</option>
                        <option value="Merlot" >Merlot</option>
                      </select>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>:Product Description
                      <input type="text" class="form-control" name="fldproductdescription" placeholder="Product Description" required/>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Product Image
                      <input type="file" class="form-control" name="fldproductimage" required/>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Product Image 1
                      <input type="file" class="form-control" name="fldproductimage1"/>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Product Image 2
                      <input type="file" class="form-control" name="fldproductimage2"/>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Product Image 3
                      <input type="file" class="form-control" name="fldproductimage3"/>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Product Image 4
                      <input type="file" class="form-control" name="fldproductimage4"/>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Product Image 5
                      <input type="file" class="form-control" name="fldproductimage5"/>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Product Image 6
                      <input type="file" class="form-control" name="fldproductimage6"/>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Product Price
                      <input type="text" class="form-control" name="fldproductprice" placeholder="Product Price" required/>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Product Special Offer
                      <input type="text" class="form-control" name="fldproductspecialoffer" placeholder="Product Special Offer" required/>
                    </label>
                  </div>
                  <div class="form-group">
                    <input class="btn" id="admineditbtn" name="adminaddproductsbtn" type="submit" value="Edit" style="width: 270px;" required/>
                    <a id="helpurl" href="Help.php"><br>Need Help?</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><br><br><br><br><br><br><br><br><br>	
  </body>
</html>