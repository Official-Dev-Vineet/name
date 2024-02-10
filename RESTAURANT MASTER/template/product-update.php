<?php
$id = $_GET['user1'];
$categ = $_GET['category'];
include 'connection.php';

//product
  if(isset($_POST['update3']))
  {
    $Regis = isset($_POST['Regis'])?$_POST['Regis']:null;
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
    $sno = isset($_POST['sno'])?$_POST['sno']:null;

  $result = mysqli_query($sql_con, "UPDATE `product` SET `RegistrationId`='$Regis', `ProductCategory`='$Product_Category', `ProductName`='$Product_Name',`ProductDescription`='$Product_Description',`ProductRate`='$Product_Rate',`ProductWeight`='$Product_Weight',`ProductBrand`='$Product_Brand',`Product`='$Product',`Image1`='$Product1',`Image2`='$Product2',`Image3`='$Product3', `Specifications`='$Specifications' WHERE id='$sno'");
}
if(isset($_POST['delete3']))
{
 $sno = isset($_POST['sno'])?$_POST['sno']:null;
$result1 = mysqli_query($sql_con,"DELETE FROM `product` WHERE id='$sno'");

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
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
<script>
        var CRLF   = 10;
        var BULLET = String.fromCharCode(10004);

        function Init() {
            if (txt.addEventListener) txt.addEventListener("input", OnInput, false);
        }

        function OnInput(event) {
            char = event.target.value.substr(-1).charCodeAt(0);
            nowLen = txt.value.length;

            if (nowLen > prevLen.value) {
                if (char == CRLF) txt.value = txt.value + BULLET + " ";
                if (nowLen == 1) txt.value = BULLET + " " + txt.value;
            }
            prevLen.value = nowLen;
        }
    </script>
    
</head>
<body onload="Init ();">
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
            <a href="intro-update.php?user1=<?php echo $id; ?>" class="btn btn-info" style="margin-bottom: 10px;">Update</a>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Product Information</h4>
              <table class="table table-bordered table-responsive" style="overflow: auto;display: block;">
    <thead>
      <tr>
        <th>#</th>
        <th>Registration ID</th>
        <th>Product Category</th>
        <th>Product Name</th>
        <th>Product Description</th>
        <th>Product Rate</th>
        <th>Product Weight</th>
        <th>Product Brand</th>
        <th>Product Image 1</th>
        <th>Product Image 2</th>
        <th>Product Image 3</th>
        <th>Product Image 4</th>
        <th>Product / Service Specifications</th>
      </tr>
    </thead>
    <tbody>
     
        <?php
$result = mysqli_query($sql_con,"SELECT * FROM `product` where RegistrationId='$id'");
$count = 0;
while($row = mysqli_fetch_array($result))
{
  $id = $row["RegistrationId"];
  $name1 = $row["ProductCategory"];
  $descr = $row["ProductName"];
  $biography = $row["ProductDescription"];
  $img = $row["ProductRate"];
  $weight = $row["ProductWeight"];
  $brand = $row["ProductBrand"];
  $product = $row["Product"];
  $product1 = $row["Image1"];
  $product2 = $row["Image2"];
  $product3 = $row["Image3"];
  $specifications = $row["Specifications"];
  $sn = $row["id"];
  ?>
   <tr>
       <td><?php echo ++$count; ?></td>
    <td><?php echo $id;?></td>
<td><?php echo $name1;?></td>
        <td><?php echo $descr;?></td>
        <td><?php echo $biography;?></td>
        <td><?php echo $img;?></td>
        <td><?php echo $weight;?></td>
        <td><?php echo $brand;?></td>
        <td><?php echo $product;?></td>
        <td><?php echo $product1;?></td>
        <td><?php echo $product2;?></td>
        <td><?php echo $product3;?></td>
        <td><?php echo $specifications; ?></td>
    <td><button type="button" class="btn btn-primary" data-toggle="modal" onclick="document.getElementById('specifications').value = '<?php echo $specifications; ?>';" data-target="#myModal9">Details</button></td></tr>
  <?php
}
       ?>
        
      
      
    </tbody>
  </table>
  <div class="container">
  

  <!-- The Modal -->
  <div class="modal fade" id="myModal9">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Product Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">

        <form method="post" enctype="multipart/form-data">
            <div class="form-group has-warning">
    <label for="day1">Id</label>
    <input type="text" class="form-control" id="sno" name="sno" readonly>
  </div>  
  <div class="form-group has-warning">
    <label for="day1">Registration Id</label>
    <input type="text" class="form-control" id="Regis" value="<?php echo $id; ?>" placeholder="Registeration Id" name="Regis" readonly>
  </div>  
  <div class="form-group has-error">
    <label for="time1">Product Category</label>
    <input type="text" class="form-control" id="ProductCategory" placeholder="Product Category" name="Product_Category">
  </div>
    <div class="form-group">
    <label for="Inputselect">Product Name</label>
    <input type="text" class="form-control" id="ProductName" placeholder="Product Name" name="Product_Name">
  </div>
   <div class="form-group">
    <label for="Inputselect">Product Description</label>
    <input type="text" class="form-control" id="ProductDescription" placeholder="Product Description" name="Product_Description">
  </div>
   <div class="form-group">
    <label for="Inputselect">Product Rate</label>
    <input type="text" class="form-control" id="ProductRate" placeholder="Product Rate" name="Product_Rate">
  </div>
  <div class="form-group">
    <label for="Inputselect">Product Weight</label>
    <input type="text" class="form-control" id="ProductWeight" placeholder="Product Weight" name="Product_Weight">
  </div>
  <div class="form-group">
    <label for="Inputselect">Product Brand</label>
    <input type="text" class="form-control" id="ProductBrand" placeholder="Product Brand" name="Product_Image">
  </div>
  <div class="form-group has-error">
    <label for="time1">Product / Service Specifications: </label>
     <textarea id="specifications" class="form-control" rows="10" cols="40" name="specifications" style="white-space: pre-wrap; text-indent: 50px;"></textarea><br>
    <input type="hidden"  id="prevLen" value="0"/>
  </div>
   <div class="form-group has-error">
    <label for="time1">Image: </label>
     <input type="file" name="product" class="form-control"  id="product" />
  </div> 
  <div class="form-group has-error">
    <label for="time1">Product Image: </label>
     <input type="file" name="product1" class="form-control"  id="product1" />
  </div>
  <div class="form-group has-error">
    <label for="time1">Product Image: </label>
     <input type="file" name="product2" class="form-control"  id="product2" />
  </div>
  <div class="form-group has-error">
    <label for="time1">Product Image: </label>
     <input type="file" name="product3" class="form-control"  id="product3" />
  </div> 

  <button type="submit" name="update3" class="btn btn-info">Update</button>
  <button type="submit" name="delete3" class="btn btn-info">Delete</button>
  <button type="button" class="btn btn-danger" style="color: white;" data-dismiss="modal">Close</button>
</form>

</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          
        </div>
        
      </div>
    </div>
  </div>
  
</div>
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
