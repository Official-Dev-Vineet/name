<?php
$id = $_GET['user1'];
$categ = $_GET['category'];
include 'connection.php';

 if(isset($_POST['btn_save5']))
  {
    $twitter = isset($_POST['Twitter'])?$_POST['Twitter']:null;
    $Facebook = isset($_POST['Facebook'])?$_POST['Facebook']:null;
    $Instagram = isset($_POST['Instagram'])?$_POST['Instagram']:null;
    $linkedin = isset($_POST['LinkedIn'])?$_POST['LinkedIn']:null;

  $result = mysqli_query($sql_con, "INSERT INTO `socialmedia` (`RegistrationId`, `Twitter`, `Facebook`, `Instagram`, `LinkedIn`) VALUES ('$id','$twitter', '$Facebook', '$Instagram', '$linkedin')");
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
            <a class="nav-link" href="achivement.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Achivement Master</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="speek.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Managment Speek Master</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="class.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Class Topper Master</span>
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
            <a href="social-update.php?user1=<?php echo $id; ?>" class="btn btn-info" style="margin-bottom: 10px;">Update</a>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Social Media Master</h4>
                  
                  <form method="post" enctype="multipart/form-data">
 
  <div class="form-group has-error">
    <label for="time1">Twitter</label>
    <input type="text" class="form-control" id="Twitter" placeholder="Twitter" name="Twitter">
  </div>
  <div class="form-group has-error">
    <label for="time1">Facebook</label>
    <input type="text" class="form-control" id="Facebook" placeholder="Facebook" name="Facebook">
  </div>
   <div class="form-group has-error">
    <label for="time1">Instagram</label>
    <input type="text" class="form-control" id="Instagram" placeholder="Instagram" name="Instagram">
  </div>
   <div class="form-group">
    <label for="Inputselect">LinkedIn</label>
     <input type="text" class="form-control" id="LinkedIn" placeholder="LinkedIn" name="LinkedIn">
  </div>

  <button type="submit" class="btn btn-info" name="btn_save5">Submit</button>
  
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
