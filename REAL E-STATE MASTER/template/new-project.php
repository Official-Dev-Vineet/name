<?php
$id = $_GET['user1'];
$categ = $_GET['category'];
include 'connection.php';

 if(isset($_POST['btn_save2']))
  {
    $name = isset($_POST['name'])?$_POST['name']:null;
    $type =  isset($_POST['type'])?$_POST['type']:null;
    $address = isset($_POST['address'])?$_POST['address']:null;
    $overview = isset($_POST['overview'])?$_POST['overview']:null;
    $unit = isset($_POST['unit'])?$_POST['unit']:null;
    $towers = isset($_POST['towers'])?$_POST['towers']:null;
    $furnishing = isset($_POST['furnishing'])?$_POST['furnishing']:null;
    $area = isset($_POST['area'])?$_POST['area']:null;
    $year = isset($_POST['year'])?$_POST['year']:null;
    $space = isset($_POST['space'])?$_POST['space']:null;
    $approved = isset($_POST['approved'])?$_POST['approved']:null;
    $amenities = isset($_POST['amenities'])?$_POST['amenities']:null;
    $property = isset($_POST['property'])?$_POST['property']:null;
    
    $video = $_FILES['video']['name'];
    $tempimgname6= $_FILES['video']['tmp_name'];
    move_uploaded_file($tempimgname6,"../../image/$video");
    
    $brochure = $_FILES['brochure']['name'];
    $tempimgname5= $_FILES['brochure']['tmp_name'];
    move_uploaded_file($tempimgname5,"../../image/$brochure");
    
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
   

  $result = mysqli_query($sql_con, "INSERT INTO `new_property`(`RegistrationId`, `Property_Name`, `Property_Type`, `Property_Address`, `Property_Overview`,`Available_Units`,`Towers`,`Floors`,`Furnishing`,`Project_Area`,`Launch_Year`,`Open_Space`,`Approved_by`,
`Exclusive_Amenities`, `Brochure`, `Video`,`Property_Image`,`Property_Image1`,`Property_Image2`,`Property_Image3`,`Amount`) VALUES ('$id','$name','$type','$address','$overview','$unit','$towers','$floors','$furnishing','$area','$year','$space','$approved','$amenities','$brochure','$video','$Product','$Product1','$Product2','$Product3','$amount')");

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
            <a class="nav-link" href="top-properties.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Top Properties</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="new-properties.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">New Properties</span>
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
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">New Project Master</h4>
                  
                  <form method="post" enctype="multipart/form-data">

  <div class="form-group has-error">
    <label for="time1">Property Name</label>
    <input type="text" class="form-control" placeholder="Property Name" name="name">
  </div>
    <div class="form-group">
    <label for="Inputselect">Property Type</label>
    <input type="text" class="form-control" id="ProductName" placeholder="Property Type" name="type">
  </div>
   <div class="form-group">
    <label for="Inputselect">Property Address</label>
     <textarea  type="text" class="form-control" id="ProductDescription" placeholder="Property Address" name="address"></textarea> 
  </div>
   <div class="form-group">
    <label for="Inputselect">Property Amount</label>
    <input type="text" class="form-control" id="ProductName" placeholder="Property Amount" name="amount">
  </div>
   <div class="form-group">
    <label for="Inputselect">Property Overview</label>
    <textarea class="form-control" name="overview" placeholder="Property Overview"></textarea>
  </div>
  <div class="form-group">
    <label for="Inputselect">Available Units</label>
    <input type="text" class="form-control" id="ProductWeight" placeholder="Available Units" name="unit">
  </div>
  <div class="form-group">
    <label for="Inputselect">Total No. of Towers</label>
    <input type="text" class="form-control" id="ProductBrand" placeholder="Total No. of Towers" name="towers">
  </div>
  <div class="form-group">
    <label for="Inputselect">Total No. of Floors</label>
    <input type="text" class="form-control" id="ProductBrand" placeholder="Total No. of Floors" name="floors">
  </div>
  <div class="form-group">
    <label for="Inputselect">Furnishing</label>
    <input type="text" class="form-control" id="ProductBrand" placeholder="Furnishing" name="furnishing">
  </div>
  <div class="form-group">
    <label for="Inputselect">Project Area</label>
    <input type="text" class="form-control" id="ProductBrand" placeholder="Project Area" name="area">
  </div>
  <div class="form-group">
    <label for="Inputselect">Launch Year</label>
    <input type="text" class="form-control" id="ProductBrand" placeholder="Launch Year" name="year">
  </div>
  <div class="form-group">
    <label for="Inputselect">Open Space</label>
    <input type="text" class="form-control" id="ProductBrand" placeholder="Open Space" name="space">
  </div>
  <div class="form-group">
    <label for="Inputselect">Approved by</label>
    <input type="text" class="form-control" id="ProductBrand" placeholder="Approved by" name="approved">
  </div>
  <div class="form-group has-error">
    <label for="time1">Exclusive Amenities </label>
     <textarea id="txt" class="form-control" rows="10" cols="40" name="amenities" style="white-space: pre-wrap; text-indent: 50px;"></textarea><br>
    <input type="hidden"  id="prevLen" value="0"/>
  </div>
  <div class="form-group">
    <label for="Inputselect">Upload Brochure</label>
    <input type="file" class="form-control" id="ProductBrand" placeholder="Launch Year" name="brochure">
  </div>
  <div class="form-group">
    <label for="Inputselect">Upload Video</label>
    <input type="file" class="form-control" id="ProductBrand" placeholder="Launch Year" name="video">
  </div>
  <div class="form-group has-error">
    <label for="time1">Property Image: </label>
     <input type="file" name="product"  id="product" class="form-control" />
  </div>
  <div class="form-group has-error">
    <label for="time1">Property Image: </label>
     <input type="file" name="product1"  id="product1" class="form-control" />
  </div>
  <div class="form-group has-error">
    <label for="time1">Property Image: </label>
     <input type="file" name="product2"  id="product2" class="form-control" />
  </div>
  <div class="form-group has-error">
    <label for="time1">Property Image: </label>
     <input type="file" name="product3"  id="product3" class="form-control" />
  </div> 
   
  <button type="submit" class="btn btn-info" name="btn_save2">Submit</button>
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
