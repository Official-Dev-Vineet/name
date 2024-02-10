<?php
$id = $_GET['user1'];
$categ = $_GET['category'];
include 'connection.php';

 if(isset($_POST['update']))
  {
    $REGISTER = isset($_POST['REGISTER'])?$_POST['REGISTER']:null;
    $twitter = isset($_POST['Twitter'])?$_POST['Twitter']:null;
    $Facebook = isset($_POST['Facebook'])?$_POST['Facebook']:null;
    $Instagram = isset($_POST['Instagram'])?$_POST['Instagram']:null;
    $linkedin = isset($_POST['LinkedIn'])?$_POST['LinkedIn']:null;

  $result = mysqli_query($sql_con, "UPDATE `socialmedia` SET `RegistrationId`='$REGISTER', `Twitter`='$twitter', `Facebook`='$Facebook', `Instagram`='$Instagram', `LinkedIn`='$linkedin' WHERE RegistrationId='$REGISTER'");
  }

if (isset($_POST['delete']))
{
   $REGISTER = isset($_POST['REGISTER'])?$_POST['REGISTER']:null;
   $result1 = mysqli_query($sql_con,"DELETE FROM `socialmedia` WHERE RegistrationId='$REGISTER'"); 
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

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Social Media Information</h4>
              <table class="table table-bordered table-responsive" style="overflow: auto;display: block;">
    <thead>
      <tr>
        <th>Registration Id</th>
        <th>Twitter</th>
        <th>Facebook</th>
        <th>Instagram</th>
        <th>LinkedIn</th>
      </tr>
    </thead>
    <tbody>
     
        <?php
$result = mysqli_query($sql_con,"SELECT * FROM `socialmedia` where RegistrationId='$id'");
while($row = mysqli_fetch_array($result))
{
  $REG = $row['RegistrationId'];
  $Twitter = $row["Twitter"];
  $Facebook = $row["Facebook"];
  $instagram = $row['Instagram'];
  $LinkedIn = $row['LinkedIn'];
  ?>
   <tr>
    <td><?php echo $REG;?></td>
        <td><?php echo $Twitter;?></td>
        <td><?php echo $Facebook; ?></td>
        <td><?php echo $instagram; ?></td>
        <td><?php echo $LinkedIn; ?></td>
    <td><button type="button" class="btn btn-primary" data-toggle="modal" onclick="document.getElementById('REGISTER').value = '<?php echo $REG; ?>';document.getElementById('Twitter').value = '<?php echo $Twitter; ?>';document.getElementById('Facebook').value = '<?php echo $Facebook; ?>';document.getElementById('Instagram').value = '<?php echo $instagram; ?>';document.getElementById('LinkedIn').value = '<?php echo $LinkedIn; ?>';" data-target="#myModa40">Details</button></td></tr>
  <?php
}
       ?>
      </tbody>
  </table>
  <div class="container">
  

  <!-- The Modal -->
  <div class="modal fade" id="myModa40">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Social Media Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">

   <form method="post" enctype="multipart/form-data">
  <div class="form-group has-warning">
    <input type="text" class="form-control" id="REGISTER" style="display: none;" value="<?php echo $id; ?>" name="REGISTER">
  </div>  
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
  
  <button type="submit" name="update" class="btn btn-info">Update</button>
  <button type="submit" name="delete" class="btn btn-info">Delete</button>
</form>

</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
