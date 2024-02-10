<?php
include 'conne.php';

//country
if(isset($_POST['update1']))
{
  $Sno = isset($_POST['Sno'])?$_POST['Sno']:null;
  $country = isset($_POST['Country_Name'])?$_POST['Country_Name']:null;
  $result1 = mysqli_query($sql_con,"UPDATE `country` SET `Sno`='$Sno',`Country_Name`='$country' WHERE Sno='$Sno'");
} 

if(isset($_POST['delete1']))
{
  $Sno = isset($_POST['Sno'])?$_POST['Sno']:null;
  $result1 = mysqli_query($sql_con,"DELETE FROM `country` WHERE Sno='$Sno'");
} 

//product
if(isset($_POST['update2']))
{ 
  $Product = isset($_POST['product'])?$_POST['product']:null;
  $Product_Category = isset($_POST['Product_Category'])?$_POST['Product_Category']:null;
  $Image = $_FILES['ProductImage']['name'];
  $tempimgname1= $_FILES['ProductImage']['tmp_name'];
  move_uploaded_file($tempimgname1,"image/$Image");
  $result2 = mysqli_query($sql_con,"UPDATE `product_category` SET `Image`='$Image',`ProductCategory`='$Product_Category',`Image`='$Image' WHERE Sno='$Product'"); 
}

if(isset($_POST['delete2']))
{
  $Product = isset($_POST['product'])?$_POST['product']:null;
  $result2 = mysqli_query($sql_con,"DELETE FROM `product_category` WHERE Sno='$Product'");
} 

//enquiry/contact
if(isset($_POST['delete3']))
{
  $sno = isset($_POST['sno'])?$_POST['sno']:null;
  $result2 = mysqli_query($sql_con,"DELETE FROM `inquiry` WHERE Sno='$sno'");
} 

//bank
if(isset($_POST['delete4']))
{
  $bank = isset($_POST['bank'])?$_POST['bank']:null;
  $result2 = mysqli_query($sql_con,"DELETE FROM `bank` WHERE Sno='$bank'");
} 

//product
if(isset($_POST['update5']))
{ 
  $social = isset($_POST['social'])?$_POST['social']:null;
  $facebook = isset($_POST['Facebook'])?$_POST['Facebook']:null;
  $twitter = isset($_POST['twitter'])?$_POST['twitter']:null;
  $linkedin = isset($_POST['linkedin'])?$_POST['linkedin']:null;
  $instagram = isset($_POST['Instagram'])?$_POST['Instagram']:null;
  $result2 = mysqli_query($sql_con,"UPDATE `social` SET `sno`='$social',`Facebook`='$facebook',`Twitter`='$twitter',`LinkedIn`='$linkedin',`Instagram`='$instagram' WHERE sno='$social'"); 
}

if(isset($_POST['delete5']))
{
  $social = isset($_POST['social'])?$_POST['social']:null;
  $result2 = mysqli_query($sql_con,"DELETE FROM `social` WHERE sno='$social'");
} 

//revenu
if(isset($_POST['update33']))
{ 
  $registration = isset($_POST['Registration'])?$_POST['Registration']:null;
  $Revenu = isset($_POST['AmountRevenu'])?$_POST['AmountRevenu']:null;
  $revenuStatus = isset($_POST['Revenustatus'])?$_POST['Revenustatus']:null;
  $result2 = mysqli_query($sql_con,"UPDATE `register` SET `RegistrationId`='$registration',`RevenuAmount`='$Revenu',`RevenuStatus`='$revenuStatus' WHERE RegistrationId='$registration'"); 
}

//product
if(isset($_POST['update30']))
{ 
  $Registration = isset($_POST['R/I'])?$_POST['R/I']:null;
  $status = isset($_POST['status'])?$_POST['status']:null;
  $result2 = mysqli_query($sql_con,"UPDATE `register` SET `RegistrationId`='$Registration',`Status`='$status' WHERE RegistrationId='$Registration'"); 
}

?>

<?php
     if(isset($_POST['update30']))
     {
         $to = "info@kiyanchsolutions.in";
         $subject = "Customer Registration Form";
         $Registration = isset($_POST['R/I'])?$_POST['R/I']:null;
         $e_mail = isset($_POST['E/I'])?$_POST['E/I']:null;
         $Password = isset($_POST['password'])?$_POST['password']:null;
         
         $message = $Registration;
         $message .= $Password;
         
         $header = "From: $e_mail";
         $header .= "Cc:info@kiyanchsolutions.in \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      }
      ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  
 <div class="btn-group">
    <a href="admin_master.php"><button type="button" onClick="" class="btn btn-primary">Master</button></a>&nbsp;
    <a href="index.php"><button type="button" onClick="" class="btn btn-primary">Logout</button></a>&nbsp;
  </div>
</div>
<div class="container" style="position:absolute; top:44px; left:40px; border:solid 0px black; height:auto; width:auto;">
<ul class="nav nav-tabs" id="myTab">

  
  
  <li class="nav-item"><a class="nav-link" href="#messages">Country Master</a></li>
  <li class="nav-item"><a class="nav-link"  href="#settings">Product Master</a></li>
  <li class="nav-item"><a class="nav-link"  href="#enquiry">Partner Master</a></li>
  <li class="nav-item"><a class="nav-link"  href="#bank">Partner Bank Master</a></li>
  <li class="nav-item"><a class="nav-link"  href="#social">Social Media Master</a></li>
  <li class="nav-item"><a class="nav-link"  href="#Payment">Partner Revenu Master</a></li>
   <li class="nav-item"><a class="nav-link"  href="#register">Customer Registration Master</a></li>
</ul>


<div class="tab-content">
 <div class="tab-pane fade" id="messages">
  <div class="container">
<h1>Country Master</h1>
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sno</th>
        <th>Country Name</th>
      </tr>
    </thead>
    <tbody>
     
        <?php
$result = mysqli_query($sql_con,"SELECT * FROM `country`");
while($row = mysqli_fetch_array($result))
{
  $id = $row['Sno'];
  $Country_Name = $row["Country_Name"];
  
  ?>
   <tr>
    <td><?php echo $id; ?></td>
    <td><?php echo $Country_Name;?></td>

<td><button type="button" class="btn btn-primary" data-toggle="modal" onclick="document.getElementById('Sno').value = '<?php echo $id; ?>';document.getElementById('Country_Name').value = '<?php echo $Country_Name; ?>';" data-target="#myModal1">Details
  </button></td></tr>
  <?php
}
       ?>
        
      
      
    </tbody>
  </table>
  <div class="container">
  

  <!-- The Modal -->
  <div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Country Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">

<form method="POST" enctype="multipart/form-data">
  <div class="form-group has-warning">
    <label for="landmark">Sno</label>
    <input type="landmark" class="form-control" id="Sno" placeholder="Sno" name="Sno">
  </div> 
  <div class="form-group has-warning">
    <label for="landmark">Country Name</label>
    <input type="landmark" class="form-control" id="Country_Name" placeholder="Country Name" name="Country_Name">
  </div> 
  <button type="submit" class="btn btn-info" name="update1">Update Country</button>
  <button type="submit" class="btn btn-info" name="delete1">Delete Country</button>
  
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

<br><br/>
</div>
  </div>

<div class="tab-pane fade" id="settings">
  <div class="container">
<h1>Product Master</h1>
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sno</th>
        <th>Product Category</th>
        <th>Image</th>
        
      </tr>
    </thead>
    <tbody>
     
        <?php
$result = mysqli_query($sql_con,"SELECT * FROM `product_category`");
while($row = mysqli_fetch_array($result))
{
  $product = $row["Sno"];
  $Product_Category = $row["ProductCategory"];
  $image = $row["Image"];
  
  ?>
   <tr>
    <td><?php echo $product; ?></td>
    <td><?php echo $Product_Category;?></td>
        <td><?php echo $image;?></td>
    <td><button type="button" class="btn btn-primary" data-toggle="modal" onclick="document.getElementById('Product').value = '<?php echo $product; ?>';document.getElementById('Product_Category').value = '<?php echo $Product_Category; ?>';document.getElementById('ProductImage').value = '<?php echo $image; ?>';" data-target="#myModal2">Details</button></td></tr>
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
          <h4 class="modal-title">Product Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
<form method="post" enctype="multipart/form-data">
  <div class="form-group has-warning">
    <label for="day1">Sno</label>
    <input type="text" class="form-control" id="Product" placeholder="Sno" name="product">
  </div>
  <div class="form-group has-warning">
    <label for="day1">Product Category</label>
    <input type="text" class="form-control" id="Product_Category" placeholder="Product Category" name="Product_Category">
  </div>
  <div class="form-group has-error">
    <label for="time1">Image: </label>
     <input type="file" name="ProductImage"  id="ProductImage" />
  </div>  


  <button type="submit" class="btn btn-info" name="update2">Update Product</button>
  <button type="submit" class="btn btn-info" name="delete2">Delate Product</button>
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

<br><br/>
</div>
  </div>

<div class="tab-pane fade" id="enquiry">
  <div class="container">
<h1>Partner Master</h1>
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sno</th>
        <th>Registration Id</th>
        <th>Contact Person Name</th>
        <th>Location</th>
        <th>Phone No</th>
        <th>Email</th>
        <th>Password</th>
        <th>Re-Entered Password</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
     
        <?php
$result = mysqli_query($sql_con,"SELECT * FROM `inquiry`");
while($row = mysqli_fetch_array($result))
{
  $sno = $row["Sno"];
  $REFERENCE = $row['RegistrationId'];
  $fname = $row["ContactPersonName"];
  $location = $row["Location"];
  $email = $row['Email'];
  $phone = $row['Phone'];
  $Password = $row['Password'];
  $RePassword = $row['ReEnteredPassword'];
  $message = $row['Message'];
  ?>
   <tr>
    <td><?php echo $sno; ?></td>
    <td><?php echo $REFERENCE; ?></td>
    <td><?php echo $fname; ?></td>
        <td><?php echo $location;?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $phone; ?></td>
        <td><?php echo $Password; ?></td>
        <td><?php echo $RePassword; ?></td>
        <td><?php echo $message; ?></td>
    <td><button type="button" class="btn btn-primary" data-toggle="modal" onclick="document.getElementById('sno').value = '<?php echo $sno; ?>';document.getElementById('REFERENCE').value = '<?php echo $REFERENCE; ?>';document.getElementById('fname').value = '<?php echo $fname; ?>';document.getElementById('location').value = '<?php echo $location; ?>';document.getElementById('email').value = '<?php echo $email; ?>';document.getElementById('phone').value = '<?php echo $phone; ?>';document.getElementById('password').value = '<?php echo $Password; ?>';document.getElementById('RePassword').value = '<?php echo $RePassword; ?>';document.getElementById('message').value = '<?php echo $message; ?>';" data-target="#myModa30">Details</button></td></tr>
  <?php
}
       ?>
        
      
      
    </tbody>
  </table>
  <div class="container">
  

  <!-- The Modal -->
  <div class="modal fade" id="myModa30">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Patner Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
<form method="post" enctype="multipart/form-data">
   <fieldset>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="sno" name="sno" type="text" placeholder="Sno" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="REFERENCE" name="REFERENCE" type="text" placeholder="Reference Number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="fname" name="name" type="text" placeholder="Contact Person Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                 <textarea class="form-control" id="location" name="location" placeholder="Location" rows="4"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" name="email" type="text" placeholder="Email Id" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                            </div>
                        </div>
                         
                          <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="password" name="password" type="Password" placeholder="Password" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="RePassword" name="RePassword" type="Password" placeholder="Re-Entered Password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 days." rows="7"></textarea>
                            </div>
                        </div>

  <button type="submit" class="btn btn-info" name="update3">Update enquiry</button>
  <button type="submit" class="btn btn-info" name="delete3">Delate enquiry</button>

</fieldset>
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

<br><br/>
</div>
  </div>

<div class="tab-pane fade" id="bank">
  <div class="container">
<h1>Partner Bank Master</h1>
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sno</th>
        <th>Registration Id</th>
        <th>Bank Name</th>
        <th>Account Holder Name</th>
        <th>Account Number</th>
        <th>IFSC Code</th>
        <th>Phone No</th>
      </tr>
    </thead>
    <tbody>
     
        <?php
$result = mysqli_query($sql_con,"SELECT * FROM `bank`");
while($row = mysqli_fetch_array($result))
{
  $bank = $row["Sno"];
  $number = $row['RegistrationId'];
  $BankName = $row["Bank_Name"];
  $Name = $row["AccountHolderName"];
  $Account = $row['Account_Number'];
  $ReEntered = $row['Re_Entered'];
  $Phone = $row['Mobile_Number'];
?>
   <tr>
    <td><?php echo $bank; ?></td>
    <td><?php echo $number; ?></td>
    <td><?php echo $BankName; ?></td>
        <td><?php echo $Name; ?></td>
        <td><?php echo $Account; ?></td>
        <td><?php echo $ReEntered; ?></td>
        <td><?php echo $Phone; ?></td>
    <td><button type="button" class="btn btn-primary" data-toggle="modal" onclick="document.getElementById('bank').value = '<?php echo $bank; ?>';document.getElementById('number').value = '<?php echo $number; ?>';document.getElementById('bank_Name').value = '<?php echo $BankName; ?>';document.getElementById('Name').value = '<?php echo $Name; ?>';document.getElementById('Account').value = '<?php echo $Account; ?>';document.getElementById('ReEntered').value = '<?php echo $ReEntered; ?>';document.getElementById('Mobile-Number').value = '<?php echo $Phone; ?>';" data-target="#myModa3">Details</button></td></tr>
  <?php
}
       ?>
        
      
      
    </tbody>
  </table>
  <div class="container">
  

  <!-- The Modal -->
  <div class="modal fade" id="myModa3">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Bank Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
<form method="post" enctype="multipart/form-data">
   <fieldset>
       <div class="form-group has-warning">
            <label for="landmark">Sno</label>
              <input id="bank" name="bank" type="text" placeholder="Sno" class="form-control">
          </div>
      <div class="form-group has-warning">
            <label for="landmark">Registration Id</label>
              <input id="number" name="number" type="text" placeholder="Registration Id" class="form-control">
          </div>
       
  <div class="form-group has-warning">
    <label for="landmark">Bank Name</label>
    <input type="text" class="form-control" id="bank_Name" placeholder="Bank Name....." name="Bank_Name">
  </div>  
  
  <div class="form-group has-warning">
    <label for="landmark">Account Holder Name</label>
    <input type="text" class="form-control" id="Name" placeholder="Account Holder Name....." name="Name">
  </div>  

  <div class="form-group has-warning">
    <label for="landmark">Account Number</label>
    <input type="text" class="form-control" id="Account" placeholder="Account Number....." name="Account">
  </div>  

  <div class="form-group has-warning">
    <label for="landmark">IFSC Code</label>
    <input type="text" class="form-control" id="ReEntered" placeholder="Re-Entered Account Number....." name="ReEntered">
  </div>  

  <div class="form-group has-warning">
    <label for="landmark">Phone Number</label>
    <input type="text" class="form-control" id="Mobile-Number" placeholder="Phone Number...." name="Phone_No">
  </div>  

  <button type="submit" class="btn btn-info" name="update3">Update enquiry</button>
  <button type="submit" class="btn btn-info" name="delete3">Delate enquiry</button>

</fieldset>
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

<br><br/>
</div>
  </div>

<div class="tab-pane fade" id="social">
  <div class="container">
<h1>Social Media Master</h1>
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sno</th>
        <th>Facebook</th>
        <th>Twitter</th>
        <th>Linked In</th>
        <th>Instagram</th>
      </tr>
    </thead>
    <tbody>
     
        <?php
$result = mysqli_query($sql_con,"SELECT * FROM `social`");
while($row = mysqli_fetch_array($result))
{
  $social = $row["sno"];
  $Facebook = $row["Facebook"];
  $twitter = $row['Twitter'];
  $linkedin = $row['LinkedIn'];
  $Instagram = $row['Instagram'];
  ?>
   <tr>
    <td><?php echo $sno; ?></td>
    <td><?php echo $Facebook; ?></td>
        <td><?php echo $twitter; ?></td>
        <td><?php echo $linkedin; ?></td>
        <td><?php echo $Instagram; ?></td>
    <td><button type="button" class="btn btn-primary" data-toggle="modal" onclick="document.getElementById('social').value = '<?php echo $social; ?>';document.getElementById('Facebook').value = '<?php echo $Facebook; ?>';document.getElementById('twitter').value = '<?php echo $twitter; ?>';document.getElementById('linkedin').value = '<?php echo $linkedin; ?>';document.getElementById('Instagram').value = '<?php echo $Instagram; ?>';" data-target="#myModa5">Details</button></td></tr>
  <?php
}
       ?>
        
      
      
    </tbody>
  </table>
  <div class="container">
  

  <!-- The Modal -->
  <div class="modal fade" id="myModa5">
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
    <label for="day1">Sno</label>
    <input type="text" class="form-control" id="social" placeholder="Sno" name="social">
  </div>

  <div class="form-group has-warning">
    <label for="day1">Facebook</label>
    <input type="text" class="form-control" id="Facebook" placeholder="Facebook" name="Facebook">
  </div>

  <div class="form-group has-warning">
    <label for="day1">Twitter</label>
    <input type="text" class="form-control" id="twitter" placeholder="Twitter" name="twitter">
  </div>

  <div class="form-group has-warning">
    <label for="day1">Linked In</label>
    <input type="text" class="form-control" id="linkedin" placeholder="linkedin" name="linkedin">
  </div>

  <div class="form-group has-warning">
    <label for="day1">Instagram</label>
    <input type="text" class="form-control" id="Instagram" placeholder="Instagram" name="Instagram">
  </div>
  

  <button type="submit" class="btn btn-info" name="update5">Update Social</button>
  <button type="submit" class="btn btn-info" name="delete5">Delate Social</button>

</fieldset>
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

<br><br/>
</div>
  </div>

  <div class="tab-pane fade" id="Payment">
  <div class="container">
<h1>Partner Revenu Master</h1>
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Registration Id</th>
        <th>Reference Id</th>
        <th>Firm Name</th>
        <th>Person Name</th>
        <th>Location</th>
        <th>Revenu Ammount</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
     
        <?php
$result = mysqli_query($sql_con,"SELECT * FROM `register`");
while($row = mysqli_fetch_array($result))
{
  $REGISTRATION = $row['RegistrationId'];
  $Reference = $row['ReferenceNumber'];
  $Name = $row["CompanyName"];
  $Holder = $row['FirstName'];
  $Number = $row['CompanyLocation'];
  $revenu = $row['RevenuAmount'];
  $Status = $row['RevenuStatus'];
  ?>
   <tr>
    <td><?php echo $REGISTRATION; ?></td>
    <td><?php echo $Reference; ?></td>
    <td><?php echo $Name; ?></td>
        <td><?php echo $Holder ; ?></td>
        <td><?php echo $Number; ?></td>
        <td><?php echo $revenu; ?></td>
        <td><?php echo $Status; ?></td>
    <td><button type="button" class="btn btn-primary" data-toggle="modal" onclick="document.getElementById('RegistrationID').value = '<?php echo $REGISTRATION; ?>';document.getElementById('Reference').value = '<?php echo $Reference; ?>';document.getElementById('CompanyName').value = '<?php echo $Name; ?>';document.getElementById('Customer').value = '<?php echo $Holder; ?>';document.getElementById('Location').value = '<?php echo $Number; ?>';document.getElementById('AccountRevenu').value = '<?php echo $revenu; ?>';document.getElementById('revenu').value = '<?php echo $Status; ?>';" data-target="#myModa6">Details</button></td></tr>
  <?php
}
       ?>
        
      
      
    </tbody>
  </table>
  <div class="container">
  

  <!-- The Modal -->
  <div class="modal fade" id="myModa6">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Partner Revenu Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
<form method="post" enctype="multipart/form-data">

  <div class="form-group has-warning">
    <label for="landmark">Registration Id</label>
    <input type="text" class="form-control" id="RegistrationID" placeholder="Registration Id....." name="Registration">
  </div> 

  <div class="form-group has-warning">
    <label for="landmark">Reference Id</label>
    <input type="text" class="form-control" id="Reference" placeholder="Reference Id....." name="reference">
  </div> 
  
  <div class="form-group has-warning">
    <label for="landmark">Company Name</label>
    <input type="text" class="form-control" id="CompanyName" placeholder="Company Name....." name="Bank_Name">
  </div>  
  
  <div class="form-group has-warning">
    <label for="landmark">Customer Name</label>
    <input type="text" class="form-control" id="Customer" placeholder="Customer Name....." name="Name">
  </div>  

  <div class="form-group has-warning">
    <label for="landmark">Location</label>
    <input type="text" class="form-control" id="Location" placeholder="Location....." name="Account">
  </div> 

   <div class="form-group has-warning">
    <label>Revenu Amount</label>
    <input type="text" class="form-control" id="AccountRevenu" placeholder="Revenu Amount....." name="AmountRevenu">
  </div>  

  <div class="form-group has-warning">
    <label>Status</label>
    <select  name="Revenustatus" id="revenu" style="width: 100%; height:36px;">
        <option>Select</option>
        <option >Paid</option>
        <option >Not Paid</option>
    </select>
  </div>  

  <button type="submit" class="btn btn-info" name="update33">Update Partner Revenu</button>

</fieldset>
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

<br><br/>
</div>
  </div>

  <div class="tab-pane fade" id="register">
  <div class="container">
<h1>Customer Registration Master</h1>
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Registration ID</th>
        <th>Email Id</th>
        <th>Password</th>
        <th>Phone No</th>
        <th>Account Type</th>
        <th>Account Number</th>
        <th>Account Name</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
     
        <?php
$result = mysqli_query($sql_con,"SELECT * FROM `register`");
while($row = mysqli_fetch_array($result))
{
  $Registration = $row["RegistrationId"];
  $Email = $row["EmailId"];
  $MobileNo = $row["MobileNo"];
  $Password = $row['Password'];
  $AccountTy = $row['AccountType'];
  $AccountNum = $row['AccountNumber'];
  $AccountNam = $row['AccountHolderName'];
  $status = $row['Status'];
?>
   <tr>
    <td><?php echo $Registration; ?></td>
    <td><?php echo $Email; ?></td>
    <td><?php echo $Password; ?></td>
        <td><?php echo $MobileNo; ?></td>
        <td><?php echo $AccountTy; ?></td>
        <td><?php echo $AccountNum; ?></td>
        <td><?php echo $AccountNam; ?></td>
        <td><?php echo $status; ?></td>
        
    <td><button type="button" class="btn btn-primary" data-toggle="modal" onclick="document.getElementById('R/I').value = '<?php echo $Registration; ?>';document.getElementById('E/I').value = '<?php echo $Email; ?>';document.getElementById('Password').value = '<?php echo $Password; ?>';document.getElementById('P/n').value = '<?php echo $MobileNo; ?>';document.getElementById('A/t').value = '<?php echo $AccountTy; ?>';document.getElementById('A/c').value = '<?php echo $AccountNum; ?>';document.getElementById('HolderName').value = '<?php echo $AccountNam; ?>';document.getElementById('status').value = '<?php echo $status; ?>';" data-target="#myModa303">Details</button></td></tr>
  <?php
}
       ?>
        
      
      
    </tbody>
  </table>
  <div class="container">
  

  <!-- The Modal -->
  <div class="modal fade" id="myModa303">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Customer Registration Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
<form method="post" enctype="multipart/form-data">
   <fieldset>
       <div class="form-group has-warning">
            <label for="landmark">Registration Id</label>
              <input id="R/I" name="R/I" type="text" placeholder="Registeration Id" class="form-control">
          </div>
       
  <div class="form-group has-warning">
    <label for="landmark">Email Id</label>
    <input type="text" class="form-control" id="E/I" placeholder="Bank Name....." name="E/I">
  </div> 

  <div class="form-group has-warning">
    <label for="landmark">Password</label>
    <input type="text" class="form-control" id="Password" placeholder="Password....." name="password">
  </div>  
  
  <div class="form-group has-warning">
    <label for="landmark">Phone Number</label>
    <input type="text" class="form-control" id="P/n" placeholder="Account Holder Name....." name="P/n">
  </div>  

  <div class="form-group has-warning">
    <label for="landmark">Account Type</label>
    <input type="text" class="form-control" id="A/t" placeholder="Account Number....." name="A/t">
  </div>  

  <div class="form-group has-warning">
    <label for="landmark"> Account Number</label>
    <input type="text" class="form-control" id="A/c" placeholder="Re-Entered Account Number....." name="A/c">
  </div>  

  <div class="form-group has-warning">
    <label for="landmark">Account Holder Name</label>
    <input type="text" class="form-control" id="HolderName" placeholder="Account Holder Name...." name="HolderName">
  </div> 


  <div class="form-group has-warning">
    <label for="landmark">Status</label>
    <select  name="status" id="status" style="width: 100%; height:36px;">
        <option>Select</option>
        <option >Pending</option>
        <option >Success</option>
    </select>
  </div>  

  <button type="submit" class="btn btn-info" name="update30">Update registration</button>
  <button type="submit" class="btn btn-info" name="delete30">Delate registration</button>

</fieldset>
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

<br><br/>
</div>
  </div>

     <script>
  $('#myTab a').click(function(e) {
  e.preventDefault();
  $(this).tab('show');
});

// store the currently selected tab in the hash value
$("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
  var id = $(e.target).attr("href").substr(1);
  window.location.hash = id;
});

// on load of the page: switch to the currently selected tab
var hash = window.location.hash;
$('#myTab a[href="' + hash + '"]').tab('show');
  </script>
</body>
</html>

