<?php
$id = $_GET['user1'];
$categ = $_GET['category'];
include 'connection.php';

if(isset($_POST['btn_save3']))
  {
    $Location = isset($_POST['Location'])?$_POST['Location']:null;
    $state = isset($_POST['State'])?$_POST['State']:null;
    $Country = isset($_POST['Country'])?$_POST['Country']:null;
    $Email_Id =  isset($_POST['Email_Id'])?$_POST['Email_Id']:null;
    $Phone_No = isset($_POST['Phone_No'])?$_POST['Phone_No']:null;
    $Opening_From = isset($_POST['Opening_From'])?$_POST['Opening_From']:null;
    $OpeningTo = isset($_POST['OpeningTo'])?$_POST['OpeningTo']:null;
    $website = isset($_POST['website'])?$_POST['website']:null;

  $result = mysqli_query($sql_con, "INSERT INTO `contact` (`RegistrationId`, `Location`,`State`,`Country`, `EmailId`, `PhoneNo`, `OpeningFrom`,`OpeningTo`,`Website`) VALUES ('$id','$Location','$state','$Country','$Email_Id','$Phone_No','$Opening_From','$OpeningTo')");

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
            <a href="address-update.php?user1=<?php echo $id; ?>" class="btn btn-info" style="margin-bottom: 10px;">Update</a>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Contact Master</h4>
                  
                  <form method="post" enctype="multipart/form-data">
  
  <div class="form-group has-error">
    <label for="time1">Location</label>
    <textarea  type="text" class="form-control" id="Location" placeholder="Location" name="Location"></textarea> 
  </div>
  <div class="form-group has-error">
    <label for="time1">State</label>
    <input type="text" class="form-control" id="State" placeholder="State" name="State">
  </div>
  <div class="form-group has-error">
    <label for="time1">Country</label>
    <input type="text" class="form-control" id="Country" placeholder="Country" name="Country">
  </div>
   <div class="form-group has-error">
    <label for="time1">Email Id</label>
    <input type="text" class="form-control" id="Email_Id" placeholder="Email Id" name="Email_Id">
  </div>
   <div class="form-group">
    <label for="Inputselect">Phone No</label>
     <input type="text" class="form-control" id="Phone" placeholder="Phone No" name="Phone_No">
  </div> 
   <div class="form-group">
    <label for="Inputselect">Opening from</label>
     <input type="text" class="form-control" id="OpeningFrom" placeholder="Opening From" name="Opening_From">
  </div> 
   <div class="form-group">
    <label for="Inputselect">Opening to</label>
     <input type="text" class="form-control" id="OpeningTo" placeholder="Opening To" name="OpeningTo">
  </div> 
  <div class="form-group">
    <label for="Inputselect">Firm Website</label>
     <input type="text" class="form-control" id="website" placeholder="Firm Website" name="website">
  </div> 
  

  <button type="submit" class="btn btn-info" name="btn_save3">Submit </button>
  
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
