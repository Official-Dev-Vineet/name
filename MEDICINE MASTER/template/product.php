<?php
$id = $_GET['user1'];
$categ = $_GET['category'];
include 'connection.php';

 if(isset($_POST['btn_save2']))
  {
    $Product_Category = isset($_POST['Product_Category'])?$_POST['Product_Category']:null;
    $Product_Name =  isset($_POST['Product_Name'])?$_POST['Product_Name']:null;
    $Product_Description = isset($_POST['Product_Description'])?$_POST['Product_Description']:null;
    $Product_Rate = isset($_POST['Product_Rate'])?$_POST['Product_Rate']:null;
    $Product_Weight = isset($_POST['Product_Weight'])?$_POST['Product_Weight']:null;
    $Product_Brand = isset($_POST['Product_Image'])?$_POST['Product_Image']:null;
    $Product = $_FILES['product']['name'];
    $tempimgname1= $_FILES['product']['tmp_name'];
    move_uploaded_file($tempimgname1,"../../image/$Product");
    $Product1 = $_FILES['product1']['name'];
    $tempimgname2= $_FILES['product1']['tmp_name'];
    move_uploaded_file($tempimgname2,"../../image/$Product1");
    $Product2 = $_FILES['product2']['name'];
    $tempimgname3= $_FILES['product2']['tmp_name'];
    move_uploaded_file($tempimgname3,"../../image/$Product2");
    $Product3 = $_FILES['product3']['name'];
    $tempimgname4= $_FILES['product3']['tmp_name'];
    move_uploaded_file($tempimgname4,"../../image/$Product3");
    $Specifications = isset($_POST['Specifications'])?$_POST['Specifications']:null;
   

  $result = mysqli_query($sql_con, "INSERT INTO `product`(`RegistrationId`, `ProductCategory`, `ProductName`, `ProductDescription`, `ProductRate`,`ProductWeight`,`ProductBrand`,`Product`,`Image1`,`Image2`,`Image3`,`Specifications`) VALUES ('$id','$Product_Category','$Product_Name','$Product_Description','$Product_Rate','$Product_Weight','$Product_Brand','$Product','$Product1','$Product2','$Product3','$Specifications')");

  }
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    
     <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="#">Master</a>
          <a class="navbar-brand brand-logo-mini" href="#">Master</a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
       
        
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
     <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Intro Master</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">About Firm Master</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="product.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Product Master</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="address.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Contact Master</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Gallery Master</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="blog.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Blog Master</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="social_media.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Social Media Master</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="banner.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Banner Master</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="deal.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Deal of The Day Master</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="team.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Team Master</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="testimonial.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Testimonial Master</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="client.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Client Master</span>
            </a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="../../index.php">
              <span class="menu-title">Logout</span>
            </a>
        </li>
        </ul>
      </nav>
    
    <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
            <a href="product-update.php?user1=<?php echo $id; ?>" class="btn btn-info" style="margin-bottom: 10px;">Update</a>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Product Master</h4>
                  
                  <form method="post" enctype="multipart/form-data">
  <div class="form-group has-warning">
    <input type="text" class="form-control" id="Regis" style="display: none;" value="<?php echo $id; ?>" name="Regis">
  </div>  
  <div class="form-group has-error">
    <label for="time1">Product Category</label>
    <select name="Product_Category" class="form-control" id="ProductCategory" >
                <option selected>Select Product Category</option>  
                 <?php 
                         $product = mysqli_query($sql_con,"SELECT * FROM `product_category`");
                         while($category= mysqli_fetch_array($product))
                         {
                           $PRODUCT = $category['ProductCategory']; 
                           ?> 
                               <option><?php echo $PRODUCT; ?></option>
                           <?php 

                         }
                        ?>
                    </select>
  </div>
    <div class="form-group">
    <label for="Inputselect">Product Name</label>
    <input type="text" class="form-control" id="ProductName" placeholder="Product Name" name="Product_Name">
  </div>
   <div class="form-group">
    <label for="Inputselect">Product Description</label>
     <textarea  type="text" class="form-control" id="ProductDescription" placeholder="Product Description" name="Product_Description"></textarea> 
  </div>
   <div class="form-group">
    <label for="Inputselect">Product Rate</label>
    <input type="text" class="form-control" id="ProductRate" placeholder="Product Rate" name="Product_Rate">
  </div>
  <div class="form-group">
    <label for="Inputselect">Product Quantity</label>
    <input type="text" class="form-control" id="ProductWeight" placeholder="Product Quantity" name="Product_Weight">
  </div>
  <div class="form-group">
    <label for="Inputselect">Product Brand</label>
    <input type="text" class="form-control" id="ProductBrand" placeholder="Product Brand" name="Product_Image">
  </div>
  <div class="form-group has-error">
    <label for="time1">Product Image: </label>
     <input type="file" name="product"  id="product" class="form-control" />
  </div>
  <div class="form-group has-error">
    <label for="time1">Product Image: </label>
     <input type="file" name="product1"  id="product1" class="form-control" />
  </div>
  <div class="form-group has-error">
    <label for="time1">Product Image: </label>
     <input type="file" name="product2"  id="product2" class="form-control" />
  </div>
  <div class="form-group has-error">
    <label for="time1">Product Image: </label>
     <input type="file" name="product3"  id="product3" class="form-control" />
  </div> 
  <div class="form-group has-error">
    <label for="time1">Product / Service Specifications: </label>
     <textarea id="txt" class="form-control" rows="10" cols="40" name="Specifications" style="white-space: pre-wrap; text-indent: 50px;"></textarea><br>
    <input type="hidden"  id="prevLen" value="0"/>
  </div>
  
  <button type="submit" class="btn btn-info" name="btn_save2">Submit Product</button>
  </form>
  
                </div>
              </div>
            </div>
            
  
          </div>
        </div>
        <!-- content-wrapper ends -->
        
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
