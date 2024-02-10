<?php
$id = $_GET['user1'];
$categ = $_GET['category'];
include 'connection.php';

if(isset($_POST['btn_save1']))
  {
    $Title = isset($_POST['Title'])?$_POST['Title']:null;
    $Description =  isset($_POST['Description'])?$_POST['Description']:null;
    $Bussiness =  isset($_POST['Bussines'])?$_POST['Bussines']:null;
    $Employee =  isset($_POST['Employee'])?$_POST['Employee']:null;
    $Establishment =  isset($_POST['Year'])?$_POST['Year']:null;
    $mission =  isset($_POST['mission'])?$_POST['mission']:null;
    $value =  isset($_POST['value'])?$_POST['value']:null;
    $Image = $_FILES['image']['name'];
    $tempimgname1= $_FILES['image']['tmp_name'];
    move_uploaded_file($tempimgname1,"../image/$Image");
    
  $result = mysqli_query($sql_con, "INSERT INTO `about_firm` (`RegistrationId`, `TitleHeading`, `Description`,`Bussines`,`Employee`,`Establishment`, `Image`,`Mission`,`Vission`) VALUES ('$id','$Title','$Description','$Bussiness','$Employee','$Establishment','$Image','$mission','$value')");

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
            <a href="about-update.php?user1=<?php echo $id; ?>" class="btn btn-info" style="margin-bottom: 10px;">Update</a>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">About Master</h4>
                  
                  <form method="post" enctype="multipart/form-data">
 
  <div class="form-group has-warning">
    <label for="day1">Heading Title</label>
    <input type="text" class="form-control" id="Title" placeholder="Heading Title" name="Title">
  </div>  
  <div class="form-group has-error">
    <label for="time1">About Firm </label>
    <textarea  type="text" class="form-control" id="Location" placeholder="About Firm" name="Description"></textarea> 
  </div>
  <div class="form-group has-error">
    <label for="time1">Our Mission</label>
    <textarea  type="text" class="form-control" id="Location" placeholder="Our Mission" name="mission"></textarea> 
  </div>
  <div class="form-group has-error">
    <label for="time1">Our Vission</label>
    <textarea  type="text" class="form-control" id="Location" placeholder="Our Vission" name="value"></textarea> 
  </div>
  <div class="form-group has-warning">
    <label for="day1">Bussines Type :</label>
    <select name="Bussines" class="form-control">
      <option selected>Bussines Type</option>
      <option>Trade</option>
      <option>Manufacture</option>
      <option>Service Provider</option>
      <option>Other</option>
    </select> 
  </div>
  <div class="form-group has-warning">
    <label for="day1">No of Employee</label>
    <input type="text" class="form-control" id="Title" placeholder="No of Employee" name="Employee">
  </div>  
  <div class="form-group has-warning">
    <label for="day1">Year of Establishment</label>
    <input type="text" class="form-control" id="Title" placeholder="Year of Establishment" name="Year">
  </div>    
  <div class="form-group has-error">
    <label for="time1">Image: </label>
     <input type="file" name="image"  id="image" />
  </div>  

  <button type="submit" class="btn btn-info" name="btn_save1">Submit</button>
  
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
