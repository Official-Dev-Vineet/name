<?php
$id = $_GET['user1'];
$categ = $_GET['category'];
include 'connection.php';

 if(isset($_POST['update']))
  {
    $sno = isset($_POST['sno'])?$_POST['sno']:null;
    $Register = isset($_POST['Register'])?$_POST['Register']:null;
    $Location = isset($_POST['Location'])?$_POST['Location']:null;
    $state = isset($_POST['State'])?$_POST['State']:null;
    $Country = $_FILES['Country']['name'];
    $tempimgname1= $_FILES['Country']['tmp_name'];
    move_uploaded_file($tempimgname1,"../../image/$Country");
   
   if(empty($Country))
   {
 $result = mysqli_query($sql_con, "UPDATE `team` SET `Name`='$Location',`Designation`='$state' WHERE Sno='$sno'");
 }
 else
 {
     $result = mysqli_query($sql_con, "UPDATE `team` SET `Name`='$Location',`Designation`='$state',`Image`='$Country' WHERE Sno='$sno'");
 }
  }
 if(isset($_POST['delete']))
{
 $sno = isset($_POST['sno'])?$_POST['sno']:null;
$result1 = mysqli_query($sql_con,"DELETE FROM `team` WHERE Sno='$sno'");

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
            <a class="nav-link" href="practice.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Practice Area Master</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="casestudy.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Case Study Master</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="faq.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">FAQ Master</span>
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
                  <h4 class="card-title">Team Information</h4>
              <table class="table table-bordered table-responsive" style="overflow: auto;display: block;">
    <thead>
      <tr>
          <th>#</th>
        <th>Registration Id</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     
        <?php
$result = mysqli_query($sql_con,"SELECT * FROM `team` where RegistrationId='$id'");
$count = 0;
while($row = mysqli_fetch_array($result))
{
    $sno = $row['Sno'];
  $Inquiryid = $row["RegistrationId"];
  $InquiryName = $row["Name"];
  $State = $row["Designation"];
  $Country = $row["Image"];
  ?>
   <tr>
       <td><?php echo ++$count; ?></td>
    <td><?php echo $Inquiryid;?></td>
    <td><?php echo $InquiryName;?></td>
    <td><?php echo $State;?></td>
    <td><?php echo $Country;?></td>
     <td><button type="button" class="btn btn-info" data-toggle="modal" onclick="document.getElementById('sno').value = '<?php echo $sno; ?>';document.getElementById('Register').value = '<?php echo $Inquiryid; ?>';document.getElementById('Location').value = '<?php echo $InquiryName; ?>';document.getElementById('State').value = '<?php echo $State; ?>';document.getElementById('Country').value = '<?php echo $Country; ?>';" data-target="#myMod">Details</button></td>
    </tr>
  <?php
}
       ?>
        
      
      
    </tbody>
  </table>
  <div class="container">
  

  <!-- The Modal -->
  <div class="modal fade" id="myMod">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Team Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">

<form method="post" enctype="multipart/form-data">
    <div class="form-group has-warning">
    <label for="day1">Sno</label>
    <input type="text" class="form-control" id="sno" placeholder="" name="sno" readonly>
  </div>  
  <div class="form-group has-warning">
    <label for="day1">Registration Id</label>
    <input type="text" class="form-control" id="Register" value="<?php echo $id; ?>" placeholder="Registeration Id" name="Register" readonly>
  </div>  
  <div class="form-group has-error">
    <label for="time1">Name</label>
    <input type="text" class="form-control" id="Location" placeholder="Location" name="Location">
  </div>
   <div class="form-group has-error">
    <label for="time1">Designation</label>
    <input type="text" class="form-control" id="State" placeholder="State" name="State">
  </div>
   <div class="form-group has-error">
    <label for="time1">Image</label>
    <input type="file" class="form-control" id="Country" placeholder="Country" name="Country">
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
