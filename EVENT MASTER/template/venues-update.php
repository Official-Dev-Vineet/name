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
    $Country = isset($_POST['Country'])?$_POST['Country']:null;
    $Email_Id =  isset($_POST['Email_Id'])?$_POST['Email_Id']:null;
    $Phone = $_FILES['Phone_No']['name'];
    $tempimgname1= $_FILES['Phone_No']['tmp_name'];
    move_uploaded_file($tempimgname1,"../image/$Phone");
    
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

if(empty($Phone))
{
 $result = mysqli_query($sql_con, "UPDATE `venues` SET `Venues_Type`='$Register',`Venues_Name`='$Location',`Venues_Address`='$state',`Venues_Veg`='$Country',`Venues_Non`='$Email_Id',`Venues_Picture`='$picture1',`Venues_Pic`='$picture2',`Venues_Pictu`='$picture3',`Venues_Img`='$picture4' WHERE Sno='$sno'");  
 }
 elseif(empty($picture1))
 {
   $result = mysqli_query($sql_con, "UPDATE `venues` SET `Venues_Type`='$Register',`Venues_Name`='$Location',`Venues_Address`='$state',`Venues_Veg`='$Country',`Venues_Non`='$Email_Id',`Venues_Image`='$Phone',`Venues_Pic`='$picture2',`Venues_Pictu`='$picture3',`Venues_Img`='$picture4' WHERE Sno='$sno'");    
 }
 elseif(empty($picture2))
 {
     $result = mysqli_query($sql_con, "UPDATE `venues` SET `Venues_Type`='$Register',`Venues_Name`='$Location',`Venues_Address`='$state',`Venues_Veg`='$Country',`Venues_Non`='$Email_Id',`Venues_Image`='$Phone',`Venues_Picture`='$picture1',`Venues_Pictu`='$picture3',`Venues_Img`='$picture4' WHERE Sno='$sno'");  
 }
 elseif(empty($picture3))
 {
    $result = mysqli_query($sql_con, "UPDATE `venues` SET `Venues_Type`='$Register',`Venues_Name`='$Location',`Venues_Address`='$state',`Venues_Veg`='$Country',`Venues_Non`='$Email_Id',`Venues_Image`='$Phone',`Venues_Picture`='$picture1',`Venues_Pic`='$picture2',`Venues_Img`='$picture4' WHERE Sno='$sno'");   
 }
 elseif(empty($picture4))
 {
     $result = mysqli_query($sql_con, "UPDATE `venues` SET `Venues_Type`='$Register',`Venues_Name`='$Location',`Venues_Address`='$state',`Venues_Veg`='$Country',`Venues_Non`='$Email_Id',`Venues_Image`='$Phone',`Venues_Picture`='$picture1',`Venues_Pic`='$picture2',`Venues_Pictu`='$picture3' WHERE Sno='$sno'");  
 }
 else
 {
   $result = mysqli_query($sql_con, "UPDATE `venues` SET `Venues_Type`='$Register',`Venues_Name`='$Location',`Venues_Address`='$state',`Venues_Veg`='$Country',`Venues_Non`='$Email_Id',`Venues_Image`='$Phone',`Venues_Picture`='$picture1',`Venues_Pic`='$picture2',`Venues_Pictu`='$picture3',`Venues_Img`='$picture4' WHERE Sno='$sno'");  
 }
  }
  
 if(isset($_POST['delete']))
{
 $sno = isset($_POST['sno'])?$_POST['sno']:null;
$result1 = mysqli_query($sql_con,"DELETE FROM `venues` WHERE Sno='$sno'");

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
           
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Venues Information</h4>
              <table class="table table-bordered table-responsive" style="overflow: auto;display: block;">
    <thead>
      <tr>
          <th>#</th>
        <th>Venues Type</th>
        <th>Venues Name</th>
        <th>Venues Address</th>
        <th>Venues Veg Amount</th>
        <th>Venues Non Veg Amount</th>
        <th>Picture</th>
        <th>Picture</th>
        <th>Picture</th>
        <th>Picture</th>
        <th>Picture</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     
        <?php
$result = mysqli_query($sql_con,"SELECT * FROM `venues` where RegistrationId='$id'");
$count = 0;
while($row = mysqli_fetch_array($result))
{
    $sno = $row['Sno'];
  $Inquiryid = $row["Venues_Type"];
  $InquiryName = $row["Venues_Name"];
  $State = $row["Venues_Address"];
  $Country = $row["Venues_Veg"];
  $InquiryEmail = $row["Venues_Non"];
   $InquiryCourse = $row["Venues_Image"];
   $Venues_Picture = $row["Venues_Picture"];
   $Venues_Pic = $row["Venues_Pic"];
   $Venues_Pictu = $row["Venues_Pictu"];
   $Venues_Img = $row["Venues_Img"];
  ?>
   <tr>
    <td><?php echo ++$count; ?></td>
    <td><?php echo $Inquiryid;?></td>
    <td><?php echo $InquiryName;?></td>
    <td><?php echo $State;?></td>
    <td><?php echo $Country;?></td>
    <td><?php echo $InquiryEmail;?></td>
    <td><?php echo $InquiryCourse; ?></td>
    <td><?php echo $Venues_Picture; ?></td>
    <td><?php echo $Venues_Pic; ?></td>
    <td><?php echo $Venues_Pictu; ?></td>
    <td><?php echo $Venues_Img; ?></td>
       
     <td><button type="button" class="btn btn-info" data-toggle="modal" onclick="document.getElementById('sno').value = '<?php echo $sno; ?>';document.getElementById('Register').value = '<?php echo $Inquiryid; ?>';document.getElementById('Location').value = '<?php echo $InquiryName; ?>';document.getElementById('State').value = '<?php echo $State; ?>';document.getElementById('Country').value = '<?php echo $Country; ?>';document.getElementById('Email_Id').value = '<?php echo $InquiryEmail; ?>';document.getElementById('Phone').value = '<?php echo $InquiryCourse; ?>';document.getElementById('Venues_Picture').value = '<?php echo $Venues_Picture; ?>';document.getElementById('Venues_Pic').value = '<?php echo $Venues_Pic; ?>';document.getElementById('Venues_Pictu').value = '<?php echo $Venues_Pictu; ?>';document.getElementById('Venues_Img').value = '<?php echo $Venues_Img; ?>';" data-target="#myMod">Details</button></td>
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
          <h4 class="modal-title">Venues Information</h4>
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
    <label for="day1">Venues Type</label>
    <input type="text" class="form-control" id="Register" placeholder="Registeration Id" name="Register">
  </div>  
  <div class="form-group has-error">
    <label for="time1">Venues Name</label>
    <input type="text" class="form-control" id="Location" placeholder="" name="Location">
  </div>
   <div class="form-group has-error">
    <label for="time1">Venues Address</label>
    <input type="text" class="form-control" id="State" placeholder="State" name="State">
  </div>
   <div class="form-group has-error">
    <label for="time1">Venues Veg Amount</label>
    <textarea type="time" class="form-control" id="Country" placeholder="" name="Country"></textarea>
  </div>
   <div class="form-group has-error">
    <label for="time1">Venues Non Veg Amount</label>
    <textarea type="text" class="form-control" id="Email_Id" placeholder="" name="Email_Id"></textarea>
  </div>
   <div class="form-group">
    <label for="Inputselect">Upload Venues Picture</label>
     <input type="file" class="form-control" id="Phone" placeholder="Phone No" name="Phone_No">
  </div> 
  <div class="form-group">
    <label for="Inputselect">Upload Venues Picture</label>
     <input type="file" class="form-control" id="Venues_Picture" placeholder="Phone No" name="picture1">
  </div> 
  <div class="form-group">
    <label for="Inputselect">Upload Venues Picture</label>
     <input type="file" class="form-control" id="Venues_Pic" placeholder="Phone No" name="picture2">
  </div> 
  <div class="form-group">
    <label for="Inputselect">Upload Venues Picture</label>
     <input type="file" class="form-control" id="Venues_Pictu" placeholder="Phone No" name="picture3">
  </div> 
  <div class="form-group">
    <label for="Inputselect">Upload Venues Picture</label>
     <input type="file" class="form-control" id="Venues_Img" placeholder="Phone No" name="picture4">
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