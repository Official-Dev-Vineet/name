<?php
$id = $_GET['user1'];
$categ = $_GET['category'];
include 'connection.php';

if(isset($_POST['btn_save']))
  {
    $FirmName = isset($_POST['Firm_Name'])?$_POST['Firm_Name']:null;
    $FirmTitle =  isset($_POST['Firm_Title'])?$_POST['Firm_Title']:null;
    $img = $_FILES['logo']['name'];
    $tempimgname1= $_FILES['logo']['tmp_name'];
    move_uploaded_file($tempimgname1,"../../image/$img");
    
  $result = mysqli_query($sql_con, "INSERT INTO `introduction`(`RegistrationId`, `FirmName`, `FirmTitle`, `Logo`) VALUES ('$id','$FirmName','$FirmTitle','$img')");

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
            <a href="intro-update.php?user1=<?php echo $id; ?>" class="btn btn-info" style="margin-bottom: 10px;">Update</a>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Intro Master</h4>
                  
                  <form method="POST" enctype="multipart/form-data">
  <div class="form-group has-warning">
    <label for="landmark">Firm Logo</label>
    <input type="file" class="form-control" name="logo">
  </div> 
  <div class="form-group has-warning">
    <label for="landmark">Firm Name</label>
    <input type="landmark" class="form-control" id="Firm_Name" placeholder="Firm Name" name="Firm_Name">
  </div>  
  <div class="form-group has-error">
    <label for="country">Firm Title</label>
     <input type="country" class="form-control" id="Firm_Title" placeholder="Firm Title" name="Firm_Title">
  </div>  
  
  <button type="submit" class="btn btn-info" name="btn_save">Save</button>
  
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

    <script>
  var y = document.getElementById("catego").value;
  if (y === "Law") {
   document.getElementById("intro").style.display = "block";
   document.getElementById("about").style.display = "block";
   document.getElementById("contact").style.display = "block";
   document.getElementById("gallery").style.display = "block";
   document.getElementById("blog").style.display = "block";
   document.getElementById("social").style.display = "block";
   document.getElementById("banner").style.display = "block";
   document.getElementById("team").style.display = "block";
   document.getElementById("testimonial").style.display = "block";
   document.getElementById("practice").style.display = "block";
   document.getElementById("case").style.display = "block";
   document.getElementById("faq").style.display = "block";
  } 
  else {
 document.getElementById("product").style.display = "none";
   document.getElementById("deal").style.display = "none";
   document.getElementById("course").style.display = "none";
   document.getElementById("client").style.display = "none";
   document.getElementById("achivement").style.display = "none";
   document.getElementById("speek").style.display = "none";
   document.getElementById("class").style.display = "none";
   document.getElementById("venues").style.display = "none";
   document.getElementById("vendors").style.display = "none";
   document.getElementById("top").style.display = "none";
   document.getElementById("new").style.display = "none";
   document.getElementById("invites").style.display = "none";
  }
 
  </script>
  
 <script>
 var yz = document.getElementById("catego").value;
  if (yz === "EVENT") {
   document.getElementById("intro").style.display = "block";
   document.getElementById("about").style.display = "block";
   document.getElementById("contact").style.display = "block";
   document.getElementById("gallery").style.display = "block";
   document.getElementById("blog").style.display = "block";
   document.getElementById("social").style.display = "block";
   document.getElementById("banner").style.display = "block";
   document.getElementById("team").style.display = "block";
   document.getElementById("venues").style.display = "block";
   document.getElementById("vendors").style.display = "block";
   document.getElementById("testimonial").style.display = "block";
   document.getElementById("invites").style.display = "block";
  } 
  else {
   document.getElementById("product").style.display = "none";
   document.getElementById("deal").style.display = "none";
   document.getElementById("course").style.display = "none";
   document.getElementById("client").style.display = "none";
   document.getElementById("achivement").style.display = "none";
   document.getElementById("speek").style.display = "none";
   document.getElementById("class").style.display = "none";
   document.getElementById("practice").style.display = "none";
   document.getElementById("case").style.display = "none";
   document.getElementById("top").style.display = "none";
   document.getElementById("new").style.display = "none";
   document.getElementById("faq").style.display = "none";
  } 
  </script>

 <script>
 var yz = document.getElementById("catego").value;
  if (yz === "RESTURANT") {
   document.getElementById("intro").style.display = "block";
   document.getElementById("about").style.display = "block";
   document.getElementById("contact").style.display = "block";
   document.getElementById("gallery").style.display = "block";
   document.getElementById("blog").style.display = "block";
   document.getElementById("social").style.display = "block";
   document.getElementById("banner").style.display = "block";
   document.getElementById("team").style.display = "block";
   document.getElementById("deal").style.display = "block";
   document.getElementById("client").style.display = "block";
   document.getElementById("testimonial").style.display = "block";
  } 
  else {
   document.getElementById("product").style.display = "none";
   document.getElementById("vendors").style.display = "none";
   document.getElementById("course").style.display = "none";
   document.getElementById("venues").style.display = "none";
   document.getElementById("achivement").style.display = "none";
   document.getElementById("speek").style.display = "none";
   document.getElementById("class").style.display = "none";
   document.getElementById("practice").style.display = "none";
   document.getElementById("case").style.display = "none";
   document.getElementById("top").style.display = "none";
   document.getElementById("new").style.display = "none";
   document.getElementById("faq").style.display = "none";
    document.getElementById("invites").style.display = "block";
  } 
  </script>
  
  <script>
 var yz = document.getElementById("catego").value;
  if (yz === "MEDICINE") {
   document.getElementById("intro").style.display = "block";
   document.getElementById("about").style.display = "block";
   document.getElementById("contact").style.display = "block";
   document.getElementById("gallery").style.display = "block";
   document.getElementById("blog").style.display = "block";
   document.getElementById("social").style.display = "block";
   document.getElementById("banner").style.display = "block";
   document.getElementById("team").style.display = "block";
   document.getElementById("deal").style.display = "block";
   document.getElementById("client").style.display = "block";
   document.getElementById("testimonial").style.display = "block";
  } 
  else {
   document.getElementById("product").style.display = "none";
   document.getElementById("vendors").style.display = "none";
   document.getElementById("course").style.display = "none";
   document.getElementById("venues").style.display = "none";
   document.getElementById("achivement").style.display = "none";
   document.getElementById("speek").style.display = "none";
   document.getElementById("class").style.display = "none";
   document.getElementById("practice").style.display = "none";
   document.getElementById("case").style.display = "none";
   document.getElementById("top").style.display = "none";
   document.getElementById("new").style.display = "none";
   document.getElementById("faq").style.display = "none";
    document.getElementById("invites").style.display = "block";
  } 
  </script>
  
  <script>
 var yz = document.getElementById("catego").value;
  if (yz === "REAL ESTATE") {
   document.getElementById("intro").style.display = "block";
   document.getElementById("about").style.display = "block";
   document.getElementById("contact").style.display = "block";
   document.getElementById("gallery").style.display = "block";
   document.getElementById("blog").style.display = "block";
   document.getElementById("social").style.display = "block";
   document.getElementById("banner").style.display = "block";
   document.getElementById("team").style.display = "block";
   document.getElementById("top").style.display = "block";
   document.getElementById("client").style.display = "block";
   document.getElementById("testimonial").style.display = "block";
   document.getElementById("new").style.display = "block";
  } 
  else {
   document.getElementById("product").style.display = "none";
   document.getElementById("vendors").style.display = "none";
   document.getElementById("course").style.display = "none";
   document.getElementById("venues").style.display = "none";
   document.getElementById("achivement").style.display = "none";
   document.getElementById("speek").style.display = "none";
   document.getElementById("class").style.display = "none";
   document.getElementById("practice").style.display = "none";
   document.getElementById("case").style.display = "none";
   document.getElementById("deal").style.display = "none";
   document.getElementById("faq").style.display = "none";
    document.getElementById("invites").style.display = "block";
  } 
  </script>
  
  <script>
 var yz = document.getElementById("catego").value;
  if (yz === "INSTITUTE") {
   document.getElementById("intro").style.display = "block";
   document.getElementById("about").style.display = "block";
   document.getElementById("contact").style.display = "block";
   document.getElementById("gallery").style.display = "block";
   document.getElementById("blog").style.display = "block";
   document.getElementById("social").style.display = "block";
   document.getElementById("banner").style.display = "block";
   document.getElementById("team").style.display = "block";
   document.getElementById("course").style.display = "block";
   document.getElementById("testimonial").style.display = "block";
  } 
  else {
   document.getElementById("product").style.display = "none";
   document.getElementById("vendors").style.display = "none";
   document.getElementById("client").style.display = "block";
   document.getElementById("venues").style.display = "none";
   document.getElementById("achivement").style.display = "none";
   document.getElementById("speek").style.display = "none";
   document.getElementById("class").style.display = "none";
   document.getElementById("practice").style.display = "none";
   document.getElementById("case").style.display = "none";
   document.getElementById("top").style.display = "none";
   document.getElementById("new").style.display = "none";
   document.getElementById("faq").style.display = "none";
    document.getElementById("invites").style.display = "block";
  } 
  </script>
  
    <script>
 var yz = document.getElementById("catego").value;
  if (yz === "SCHOOL") {
   document.getElementById("intro").style.display = "block";
   document.getElementById("about").style.display = "block";
   document.getElementById("contact").style.display = "block";
   document.getElementById("gallery").style.display = "block";
   document.getElementById("blog").style.display = "block";
   document.getElementById("social").style.display = "block";
   document.getElementById("banner").style.display = "block";
   document.getElementById("team").style.display = "block";
   document.getElementById("achive,ent").style.display = "block";
   document.getElementById("testimonial").style.display = "block";
   document.getElementById("speek").style.display = "block";
   document.getElementById("class").style.display = "block";
  } 
  else {
   document.getElementById("product").style.display = "none";
   document.getElementById("vendors").style.display = "none";
   document.getElementById("client").style.display = "block";
   document.getElementById("venues").style.display = "none";
   document.getElementById("course").style.display = "none";
   document.getElementById("practice").style.display = "none";
   document.getElementById("case").style.display = "none";
   document.getElementById("top").style.display = "none";
   document.getElementById("new").style.display = "none";
   document.getElementById("faq").style.display = "none";
    document.getElementById("invites").style.display = "block";
  } 
  </script>
  
</body>

</html>
