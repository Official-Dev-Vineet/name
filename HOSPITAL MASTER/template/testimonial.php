<?php
$id = $_GET['user1'];
$categ = $_GET['category'];
include 'connection.php';

if(isset($_POST['btn_testimonial']))
  {
    $testimonial_image = $_FILES['testimonial_image']['name'];
    $tempimgname1= $_FILES['testimonial_image']['tmp_name'];
    move_uploaded_file($tempimgname1,"../image/$testimonial_image");
    $testimonial_name = isset($_POST['testimonial_name'])?$_POST['testimonial_name']:null;
    $testimonial_description = isset($_POST['testimonial_description'])?$_POST['testimonial_description']:null;

  $result = mysqli_query($sql_con, "INSERT INTO `testimonial` (`RegistrationId`, `Name`,`Designation`,`Image`) VALUES ('$id','$testimonial_name','$testimonial_description','$testimonial_image')");
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
         
          <li class="nav-item" id="intro">
            <a class="nav-link" href="index.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Intro Master</span>
            </a>
          </li>
          <li class="nav-item" id="about">
            <a class="nav-link" href="about.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">About Firm Master</span>
            </a>
          </li>
          
          <li class="nav-item" id="product">
            <a class="nav-link" href="product.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Medicine Master</span>
            </a>
          </li>
          <li class="nav-item" id="contact">
            <a class="nav-link" href="address.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Contact Master</span>
            </a>
          </li>
          <li class="nav-item" id="gallery">
            <a class="nav-link" href="gallery.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Gallery Master</span>
            </a>
          </li>
         
          <li class="nav-item" id="blog">
            <a class="nav-link" href="blog.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Blog Master</span>
            </a>
          </li>
          <li class="nav-item" id="social">
            <a class="nav-link" href="social_media.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Social Media Master</span>
            </a>
          </li>
          <li class="nav-item" id="banner">
            <a class="nav-link" href="banner.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Banner Master</span>
            </a>
          </li>
          <li class="nav-item" id="team">
            <a class="nav-link" href="doctor.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Doctor Master</span>
            </a>
          </li>
          <li class="nav-item" id="testimonial">
            <a class="nav-link" href="testimonial.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Testimonial Master</span>
            </a>
          </li>
          <li class="nav-item" id="course">
            <a class="nav-link" href="service.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Service Master</span>
            </a>
          </li>
          <li class="nav-item" id="client">
            <a class="nav-link" href="department.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Department Master</span>
            </a>
          </li>
          
        </ul>
      </nav>
      
    <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
            <a href="teastimonial-update.php?user1=<?php echo $id; ?>" class="btn btn-info" style="margin-bottom: 10px;">Update</a>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Testimonial Master</h4>
                  
                  <form method="post" enctype="multipart/form-data">
  <div class="form-group has-warning">
    <input type="text" class="form-control" style="display: none;" id="Registera" value="<?php echo $id; ?>" name="Registera">
  </div>  
   <div class="form-group">
    <label for="Inputselect">Name</label>
    
    <input type="text" name="testimonial_name" class="form-control"  />
  </div> 
  <div class="form-group">
    <label for="Inputselect">Description </label>
    
    <textarea class="form-control" name="testimonial_description"></textarea>
  </div> 
  <div class="form-group">
    <label for="Inputselect">Upload Image : </label>
    
    <input type="file" name="testimonial_image" class="form-control" />
  </div> 
  

  <button type="submit" class="btn btn-info" name="btn_testimonial">Submit </button>
  
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