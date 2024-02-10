<?php
$id = $_GET['user1'];
$categ = $_GET['category'];
include 'connection.php';


if(isset($_POST['save']))
{
    
    $course_cats_main=isset($_POST['main'])?$_POST['main']:null; 
    $course_cats_second=isset($_POST['second'])?$_POST['second']:null;
    $amount = isset($_POST['amount'])?$_POST['amount']:null;
    $address = isset($_POST['address'])?$_POST['address']:null;
    $non_veg = isset($_POST['non_veg'])?$_POST['non_veg']:null;
    $picture = $_FILES['picture']['name'];
    $tempimgname1= $_FILES['picture']['tmp_name'];
    move_uploaded_file($tempimgname1,"../image/$picture");
    $picture1 = $_FILES['picture1']['name'];
    $tempimgname5 = $_FILES['picture1']['tmp_name'];
    move_uploaded_file($tempimgname5,"../image/$picture1");
    $picture2 = $_FILES['picture2']['name'];
    $tempimgname1= $_FILES['picture2']['tmp_name'];
    move_uploaded_file($tempimgname1,"../image/$picture2");
   $picture3 = $_FILES['picture3']['name'];
    $tempimgname1= $_FILES['picture3']['tmp_name'];
    move_uploaded_file($tempimgname1,"../image/$picture3");
    $picture4 = $_FILES['picture4']['name'];
    $tempimgname1= $_FILES['picture4']['tmp_name'];
    move_uploaded_file($tempimgname1,"../image/$picture4");
    
//move_uploaded_file($event_temp1,"images/$event_img1");

    $query6=mysqli_query($sql_con,"INSERT INTO `venues`(`RegistrationId`,`Venues_Type`, `Venues_Name`,`Venues_Address`,`Venues_Veg`,`Venues_Non`,`Venues_Image`,`Venues_Picture`,`Venues_Pic`,`Venues_Pictu`,`Venues_Img`) VALUES ('$id','$course_cats_main','$course_cats_second','$address','$amount','$non_veg','$picture','$picture1','$picture2','$picture3','$picture4')");

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
            <a class="nav-link" href="venues.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Venues</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="vendors.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Vendors</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="e_invites.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">E-Invites</span>
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
             <a href="venues-update.php?user1=<?php echo $id; ?>" class="btn btn-info" style="margin-bottom: 10px;">Update</a>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Venues Master</h4>
                  
                  <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Venues Type</label>
                      <input type="text" name="main" class="form-control" placeholder="Venues Type" id="someID" required />
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Venues Name</label>
                      <input type="text" name="second" class="form-control" placeholder="Venues Name" id="someID" required />
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Venues Address</label>
                      <textarea type="text" name="address" class="form-control" placeholder="Venues Address" id="someID" required ></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Venues Veg Amount</label>
                      <input type="text" name="amount" class="form-control" placeholder="Venues Veg Amount" id="someID2" required />
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Venues Non Veg Amount</label>
                      <input type="text" name="non_veg" class="form-control" placeholder="Venues Non Veg Amount" id="someID2" required />
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Upload Venues Picture</label>
                      <input type="file" name="picture" class="form-control" placeholder="" id="someID2" required />
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Upload Venues Picture</label>
                      <input type="file" name="picture1" class="form-control" placeholder="" id="someID2" required />
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Upload Venues Picture</label>
                      <input type="file" name="picture2" class="form-control" placeholder="" id="someID2" required />
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Upload Venues Picture</label>
                      <input type="file" name="picture3" class="form-control" placeholder="" id="someID2" required />
                    </div>
                   
                    <div class="form-group">
                      <label for="exampleInputEmail1">Upload Venues Picture</label>
                      <input type="file" name="picture4" class="form-control" placeholder="" id="someID2" required />
                    </div>
                    
                    <input type="submit" class="comment_button trans_200 btn btn-primary" value="Save" name="save" style="color: white;" />
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