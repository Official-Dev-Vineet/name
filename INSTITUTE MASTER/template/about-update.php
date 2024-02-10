<?php
$id = $_GET['user1'];
$categ = $_GET['category'];
include 'connection.php';

if(isset($_POST['update2']))
  {
    $Registration = isset($_POST['RegisterationId'])?$_POST['RegisterationId']:null;
    $Title = isset($_POST['Title'])?$_POST['Title']:null;
    $Description =  isset($_POST['Description'])?$_POST['Description']:null;
    $Bussiness =  isset($_POST['Bussines'])?$_POST['Bussines']:null;
    $Employee =  isset($_POST['Employee'])?$_POST['Employee']:null;
    $Establishment =  isset($_POST['Year'])?$_POST['Year']:null;
   $Image = $_FILES['image']['name'];
    $tempimgname1= $_FILES['image']['tmp_name'];
    move_uploaded_file($tempimgname1,"../../image/$Image");

  $result = mysqli_query($sql_con, "UPDATE `about_firm` SET `RegistrationId`='$Registration', `TitleHeading`='$Title', `Description`='$Description',`Bussines`='$Bussiness',`Employee`='$Employee',`Establishment`='$Establishment',`Image`='$Image' WHERE RegistrationId='$Registration'");
  }
  if(isset($_POST['delete2']))
{
 $Registration = isset($_POST['RegisterationId'])?$_POST['RegisterationId']:null;
$result1 = mysqli_query($sql_con,"DELETE FROM `about_firm` WHERE RegistrationId='$Registration'");

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
            <a class="nav-link" href="course.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Course Master</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="university-course.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">University Course Master</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="placement.php?user1=<?php echo $id; ?>&category=<?php echo $categ; ?>">
              <span class="menu-title">Placement Master</span>
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
                  <h4 class="card-title">About Firm Information</h4>
              <table class="table table-bordered table-responsive" style="overflow: auto;display: block;">
    <thead>
      <tr>
        <th>Registration Id</th>
        <th>Title Heading</th>
        <th>Description</th>
        <th>Bussines</th>
        <th>Employee</th>
        <th>Establishment</th>
        <th>Mission</th>
        <th>Vission</th>
        <th>Image</th>
        
      </tr>
    </thead>
    <tbody>
     
        <?php
$result = mysqli_query($sql_con,"SELECT * FROM `about_firm` where RegistrationId='$id'");
while($row = mysqli_fetch_array($result))
{
  $id = $row["RegistrationId"];
  $name2 = $row["TitleHeading"];
  $description = $row["Description"];
  $Bussines = $row['Bussines'];
  $Employee = $row['Employee'];
  $Establishment = $row['Establishment'];
  $image = $row["Image"];
  $vission = $row["Vission"];
  $mission = $row["Mission"];
  ?>
   <tr>
    <td><?php echo $id;?></td>
<td><?php echo $name2;?></td>
        <td><?php echo $description;?></td>
        <td><?php echo $Bussines;?></td>
        <td><?php echo $Employee;?></td>
        <td><?php echo $Establishment;?></td>
         <td><?php echo $mission;?></td>
          <td><?php echo $vission;?></td>
          <td><?php echo $Establishment;?></td>
        <td><?php echo $image;?></td>
    <td><button type="button" class="btn btn-info" data-toggle="modal" onclick="document.getElementById('RegisterationId').value = '<?php echo $id; ?>';document.getElementById('Title').value = '<?php echo $name2; ?>';document.getElementById('Description').value = '<?php echo $description; ?>';document.getElementById('Bussines').value = '<?php echo $Bussines; ?>';document.getElementById('Employee').value = '<?php echo $Employee; ?>';document.getElementById('Establishment').value = '<?php echo $Establishment; ?>';document.getElementById('mission').value = '<?php echo $mission; ?>';document.getElementById('vission').value = '<?php echo $vission; ?>';document.getElementById('image').value = '<?php echo $image; ?>';" data-target="#myModal2">Details</button></td></tr>
  <?php
}
       ?>
        
      
      
    </tbody>
  </table>
  <div class="container">
  

  <!-- The Modal -->
  <div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">About Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
<form method="post" enctype="multipart/form-data">
  <div class="form-group has-success">
    <label for="day2">Registration Id </label>
    <input type="text" class="form-control" id="RegisterationId" value="<?php echo $id; ?>" placeholder="Registeration Id" name="RegisterationId" readonly>
  </div>
  <div class="form-group has-warning">
    <label for="day1">Title Heading</label>
    <input type="text" class="form-control" id="Title" placeholder="Title Heading" name="Title">
  </div>  
  <div class="form-group has-error">
    <label for="time1">Description </label>
    <input type="text" class="form-control" id="Description" placeholder="Description" name="Description">
  </div>
  <div class="form-group has-warning">
    <label for="day1">Bussines Type :</label>
    <select name="Bussines" id="Bussines" class="form-control">
      <option selected>Bussines Type</option>
      <option>Trade</option>
      <option>Manufacture</option>
      <option>Service Provider</option>
      <option>Other</option>
    </select> 
  </div>
  <div class="form-group has-warning">
    <label for="day1">No of Employee</label>
    <input type="text" class="form-control" id="Employee" placeholder="No of Employee" name="Employee">
  </div>  
  <div class="form-group has-warning">
    <label for="day1">Year of Establishment</label>
    <input type="text" class="form-control" id="Establishment" placeholder="Year of Establishment" name="Year">
  </div>  
  <div class="form-group has-error">
    <label for="time1">Mission </label>
    <input type="text" class="form-control" id="mission" placeholder="Description" name="mission">
  </div>
  <div class="form-group has-error">
    <label for="time1">Vission</label>
    <input type="text" class="form-control" id="vission" placeholder="Description" name="vission">
  </div>
  <div class="form-group has-error">
    <label for="time1">Image: </label>
     <input type="file" name="image"  id="image" class="form-control" />
  </div>  

  <button type="submit" class="btn btn-info" name="update2">Update</button>
  <button type="submit" class="btn btn-info" name="delete2">Delate</button>
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
