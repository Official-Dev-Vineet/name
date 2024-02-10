<?php 
 $num = $_GET['user3'];
   include 'conne.php';
?>
<?php
include 'conne.php';
if(isset($_POST['update1']))
  {
    $RegistrationId = isset($_POST['Registeration'])?$_POST['Registeration']:null;
    $FirmName = isset($_POST['Firm_Name'])?$_POST['Firm_Name']:null;
    $FirmTitle =  isset($_POST['Firm_Title'])?$_POST['Firm_Title']:null;
    
  $result = mysqli_query($sql_con, "UPDATE `introduction` SET `RegistrationId`='$RegistrationId', `FirmName`='$FirmName', `FirmTitle`='$FirmTitle' WHERE RegistrationId ='$RegistrationId'");
  }
  if(isset($_POST['delete1']))
{
 $RegistrationId = isset($_POST['Registeration'])?$_POST['Registeration']:null;
$result1 = mysqli_query($sql_con,"DELETE FROM `introduction` WHERE RegistrationId='$RegistrationId'");
}
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
    move_uploaded_file($tempimgname1,"image/$Image");

  $result = mysqli_query($sql_con, "UPDATE `about_firm` SET `RegistrationId`='$Registration', `TitleHeading`='$Title', `Description`='$Description',`Bussines`='$Bussiness',`Employee`='$Employee',`Establishment`='$Establishment',`Image`='$Image' WHERE RegistrationId='$Registration'");
  }
  if(isset($_POST['delete2']))
{
 $Registration = isset($_POST['RegisterationId'])?$_POST['RegisterationId']:null;
$result1 = mysqli_query($sql_con,"DELETE FROM `about_firm` WHERE RegistrationId='$Registration'");

}

  //product
  if(isset($_POST['update3']))
  {
    $Regis = isset($_POST['Regis'])?$_POST['Regis']:null;
    $Product_Category = isset($_POST['Product_Category'])?$_POST['Product_Category']:null;
    $Product_Name =  isset($_POST['Product_Name'])?$_POST['Product_Name']:null;
    $Product_Description = isset($_POST['Product_Description'])?$_POST['Product_Description']:null;
    $Product_Rate = isset($_POST['Product_Rate'])?$_POST['Product_Rate']:null;
    $Product_Weight = isset($_POST['Product_Weight'])?$_POST['Product_Weight']:null;
    $Product_Brand = isset($_POST['Product_Image'])?$_POST['Product_Image']:null;
    $Product = $_FILES['product']['name'];
    $tempimgname1= $_FILES['product']['tmp_name'];
    move_uploaded_file($tempimgname1,"image/$Product");
    $Product1 = $_FILES['product1']['name'];
    $tempimgname2= $_FILES['product1']['tmp_name'];
    move_uploaded_file($tempimgname2,"image/$Product1");
    $Product2 = $_FILES['product2']['name'];
    $tempimgname3= $_FILES['product2']['tmp_name'];
    move_uploaded_file($tempimgname3,"image/$Product2");
    $Product3 = $_FILES['product3']['name'];
    $tempimgname4= $_FILES['product3']['tmp_name'];
    move_uploaded_file($tempimgname4,"image/$Product3");
    $Specifications = isset($_POST['Specifications'])?$_POST['Specifications']:null;

  $result = mysqli_query($sql_con, "UPDATE `product` SET `RegistrationId`='$Regis', `ProductCategory`='$Product_Category', `ProductName`='$Product_Name',`ProductDescription`='$Product_Description',`ProductRate`='$Product_Rate',`ProductWeight`='$Product_Weight',`ProductBrand`='$Product_Brand',`Product`='$Product',`Image1`='$Product1',`Image2`='$Product2',`Image3`='$Product3', `Specifications`='$Specifications' WHERE RegistrationId='$Regis'");
}
if(isset($_POST['delete3']))
{
 $Regis = isset($_POST['Regis'])?$_POST['Regis']:null;
$result1 = mysqli_query($sql_con,"DELETE FROM `product` WHERE RegistrationId='$Regis'");

}

   //contact
  if(isset($_POST['update4']))
  {
    $Register = isset($_POST['Register'])?$_POST['Register']:null;
    $Location = isset($_POST['Location'])?$_POST['Location']:null;
    $state = isset($_POST['State'])?$_POST['State']:null;
    $Country = isset($_POST['Country'])?$_POST['Country']:null;
    $Email_Id =  isset($_POST['Email_Id'])?$_POST['Email_Id']:null;
    $Phone_No = isset($_POST['Phone_No'])?$_POST['Phone_No']:null;
    $Opening_From = isset($_POST['Opening_From'])?$_POST['Opening_From']:null;
    $OpeningTo = isset($_POST['OpeningTo'])?$_POST['OpeningTo']:null;
    $website = isset($_POST['website'])?$_POST['website']:null;

 $result = mysqli_query($sql_con, "UPDATE `contact` SET `RegistrationId`='$Register', `Location`='$Location',`State`='$state',`Country`='$Country',`EmailId`='$Email_Id',`PhoneNo`='$Phone_No',`OpeningFrom`='$Opening_From',`OpeningTo`='$OpeningTo' , `Website`='$website' WHERE RegistrationId='$Register'");
 }
 if(isset($_POST['delete4']))
{
 $Register = isset($_POST['Register'])?$_POST['Register']:null;
$result1 = mysqli_query($sql_con,"DELETE FROM `contact` WHERE RegistrationId='$Register'");

}

  //gallery
  if(isset($_POST['update5']))
  {
    $Registera = isset($_POST['Registera'])?$_POST['Registera']:null;
    $img = $_FILES['img']['name'];
     $tempimgname1= $_FILES['img']['tmp_name'];
    move_uploaded_file($tempimgname1,"image/$img");
  $result = mysqli_query($sql_con, "UPDATE `gallery` SET `RegistrationId`='$Registera', `Image`='$img' WHERE RegistrationId='$Registera'");
}
if(isset($_POST['delete5']))
{
 $Registera = isset($_POST['Registera'])?$_POST['Registera']:null;
$result1 = mysqli_query($sql_con,"DELETE FROM `gallery` WHERE RegistrationId='$Registera'");

}

//social Media
if(isset($_POST['btn_save40']))
  {
    $REGISTER = isset($_POST['REGISTER'])?$_POST['REGISTER']:null;
    $twitter = isset($_POST['Twitter'])?$_POST['Twitter']:null;
    $Facebook = isset($_POST['Facebook'])?$_POST['Facebook']:null;
    $Instagram = isset($_POST['Instagram'])?$_POST['Instagram']:null;
    $linkedin = isset($_POST['LinkedIn'])?$_POST['LinkedIn']:null;

  $result = mysqli_query($sql_con, "UPDATE `socialmedia` SET `RegistrationId`='$REGISTER', `Twitter`='$twitter', `Facebook`='$Facebook', `Instagram`='$Instagram', `LinkedIn`='$linkedin' WHERE RegistrationId='$REGISTER'");
  }

if (isset($_POST['btn_save40']))
{
   $REGISTER = isset($_POST['REGISTER'])?$_POST['REGISTER']:null;
   $result1 = mysqli_query($sql_con,"DELETE FROM `socialmedia` WHERE RegistrationId='$REGISTER'"); 
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
    <a href="Master.php?user1=<?php echo $num; ?>"><button type="button" onClick="" class="btn btn-primary">Master</button></a>&nbsp;
     <a href="./index.php"><button type="button" onClick="" class="btn btn-primary">Logout</button></a>&nbsp;
  </div>
</div>
<div class="container" style="position:absolute; top:44px; left:40px; border:solid 0px black; height:auto; width:auto;">
<ul class="nav nav-tabs" id="myTab">

  
  
  <li class="nav-item"><a class="nav-link" href="#messages">Intro Master</a></li>
  <li class="nav-item"><a class="nav-link"  href="#settings">About Master</a></li>
  <li class="nav-item"><a class="nav-link"  href="#Investigation">Product Master</a></li>
  <li class="nav-item"><a class="nav-link"  href="#Contact">Contact Master</a></li>
  <li class="nav-item"><a class="nav-link"  href="#Gallery">Gallery Master</a></li>
  <li class="nav-item"><a class="nav-link"  href="#Enquiry">Enquiry Master</a></li>
  <li class="nav-item"><a class="nav-link"  href="#send">Contact Master</a></li>
  <li class="nav-item"><a class="nav-link"  href="#Social">Social Media Master</a></li>

</ul>


<div class="tab-content">
 <div class="tab-pane fade" id="messages">
  <div class="container">
<h1>Intro Master</h1>
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Registration Id</th>
        <th>Firm Name</th>
        <th>Firm Title</th>
      </tr>
    </thead>
    <tbody>
     
        <?php
$result = mysqli_query($sql_con,"SELECT * FROM `introduction` where RegistrationId='$num'");
while($row = mysqli_fetch_array($result))
{
  $id = $row["RegistrationId"];
  $facebook = $row["FirmName"];
  $intagram = $row["FirmTitle"];
  
  ?>
   <tr>
    <td><?php echo $id;?></td>
<td><?php echo $facebook;?></td>
        <td><?php echo $intagram;?></td>

<td><button type="button" class="btn btn-primary" data-toggle="modal" onclick="document.getElementById('Registeration').value = '<?php echo $id; ?>';document.getElementById('Firm_Name').value = '<?php echo $facebook; ?>';document.getElementById('Firm_Title').value = '<?php echo $intagram; ?>';" data-target="#myModal1">Details
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
          <h4 class="modal-title">Intro Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">

<form method="POST" enctype="multipart/form-data">
  <div class="form-group has-success">
    <label for="Name">Registeration No </label>
    <input type="name" class="form-control" id="Registeration" value="<?php echo $id; ?>" placeholder="Registeration Id" name="Registeration" >
  </div>
  <div class="form-group has-warning">
    <label for="landmark">Firm Name</label>
    <input type="landmark" class="form-control" id="Firm_Name" placeholder="Firm Name" name="Firm_Name">
  </div>  
  <div class="form-group has-error">
    <label for="country">Firm Title</label>
     <input type="country" class="form-control" id="Firm_Title" placeholder="Firm Title" name="Firm_Title">
  </div>  
  
  <button type="submit" class="btn btn-info" name="update1">Update Info</button>
  <button type="submit" class="btn btn-info" name="delete1">Delete Info</button>
  
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
<h1>About Master</h1>
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Registration Id</th>
        <th>Title Heading</th>
        <th>Description</th>
        <th>Bussines</th>
        <th>Employee</th>
        <th>Establishment</th>
        <th>Image</th>
        
      </tr>
    </thead>
    <tbody>
     
        <?php
$result = mysqli_query($sql_con,"SELECT * FROM `about_firm` where RegistrationId='$num'");
while($row = mysqli_fetch_array($result))
{
  $id = $row["RegistrationId"];
  $name2 = $row["TitleHeading"];
  $description = $row["Description"];
  $Bussines = $row['Bussines'];
  $Employee = $row['Employee'];
  $Establishment = $row['Establishment'];
  $image = $row["Image"];
  
  ?>
   <tr>
    <td><?php echo $id;?></td>
<td><?php echo $name2;?></td>
        <td><?php echo $description;?></td>
        <td><?php echo $Bussines;?></td>
        <td><?php echo $Employee;?></td>
        <td><?php echo $Establishment;?></td>
        <td><?php echo $image;?></td>
    <td><button type="button" class="btn btn-primary" data-toggle="modal" onclick="document.getElementById('RegisterationId').value = '<?php echo $id; ?>';document.getElementById('Title').value = '<?php echo $name2; ?>';document.getElementById('Description').value = '<?php echo $description; ?>';document.getElementById('Bussines').value = '<?php echo $Bussines; ?>';document.getElementById('Employee').value = '<?php echo $Employee; ?>';document.getElementById('Establishment').value = '<?php echo $Establishment; ?>';document.getElementById('image').value = '<?php echo $image; ?>';" data-target="#myModal2">Details</button></td></tr>
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
    <input type="text" class="form-control" id="RegisterationId" value="<?php echo $id; ?>" placeholder="Registeration Id" name="RegisterationId">
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
    <select name="Bussines" id="Bussines">
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
    <label for="time1">Image: </label>
     <input type="file" name="image"  id="image" />
  </div>  

  <button type="submit" class="btn btn-info" name="update2">Update About</button>
  <button type="submit" class="btn btn-info" name="delete2">Delate About</button>
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

<div class="tab-pane fade" id="Investigation">
  <div class="container">
<h1>Product Master</h1>
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Registration ID</th>
        <th>Product Category</th>
        <th>Product Name</th>
        <th>Product Description</th>
        <th>Product Rate</th>
        <th>Product Weight</th>
        <th>Product Brand</th>
        <th>Product Image 1</th>
        <th>Product Image 2</th>
        <th>Product Image 3</th>
        <th>Product Image 4</th>
        <th>Product / Service Specifications</th>
      </tr>
    </thead>
    <tbody>
     
        <?php
$result = mysqli_query($sql_con,"SELECT * FROM `Product` where RegistrationId='$num'");
while($row = mysqli_fetch_array($result))
{
  $id = $row["RegistrationId"];
  $name1 = $row["ProductCategory"];
  $descr = $row["ProductName"];
  $biography = $row["ProductDescription"];
  $img = $row["ProductRate"];
  $weight = $row["ProductWeight"];
  $brand = $row["ProductBrand"];
  $product = $row["Product"];
  $product1 = $row["Image1"];
  $product2 = $row["Image2"];
  $product3 = $row["Image3"];
  $specifications = $row["Specifications"];
  ?>
   <tr>
    <td><?php echo $id;?></td>
<td><?php echo $name1;?></td>
        <td><?php echo $descr;?></td>
        <td><?php echo $biography;?></td>
        <td><?php echo $img;?></td>
        <td><?php echo $weight;?></td>
        <td><?php echo $brand;?></td>
        <td><?php echo $product;?></td>
        <td><?php echo $product1;?></td>
        <td><?php echo $product2;?></td>
        <td><?php echo $product3;?></td>
        <td><?php echo $specifications; ?></td>
    <td><button type="button" class="btn btn-primary" data-toggle="modal" onclick="document.getElementById('Regis').value = '<?php echo $id; ?>';document.getElementById('ProductCategory').value = '<?php echo $name1; ?>';document.getElementById('ProductName').value = '<?php echo $descr; ?>';document.getElementById('ProductDescription').value = '<?php echo $biography; ?>';document.getElementById('ProductRate').value = '<?php echo $img; ?>';document.getElementById('ProductWeight').value = '<?php echo $weight; ?>';document.getElementById('ProductBrand').value = '<?php echo $brand; ?>';document.getElementById('Product').value = '<?php echo $product; ?>';document.getElementById('Product1').value = '<?php echo $product1; ?>';document.getElementById('Product2').value = '<?php echo $product2; ?>';document.getElementById('Product3').value = '<?php echo $product3; ?>';document.getElementById('Specifications').value = '<?php echo $specifications; ?>';" data-target="#myModal9">Details</button></td></tr>
  <?php
}
       ?>
        
      
      
    </tbody>
  </table>
  <div class="container">
  

  <!-- The Modal -->
  <div class="modal fade" id="myModal9">
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
    <label for="day1">Registration Id</label>
    <input type="text" class="form-control" id="Regis" value="<?php echo $id; ?>" placeholder="Registeration Id" name="Regis">
  </div>  
  <div class="form-group has-error">
    <label for="time1">Product Category</label>
    <input type="text" class="form-control" id="ProductCategory" placeholder="Product Category" name="Product_Category">
  </div>
    <div class="form-group">
    <label for="Inputselect">Product Name</label>
    <input type="text" class="form-control" id="ProductName" placeholder="Product Name" name="Product_Name">
  </div>
   <div class="form-group">
    <label for="Inputselect">Product Description</label>
    <input type="text" class="form-control" id="ProductDescription" placeholder="Product Description" name="Product_Description">
  </div>
   <div class="form-group">
    <label for="Inputselect">Product Rate</label>
    <input type="text" class="form-control" id="ProductRate" placeholder="Product Rate" name="Product_Rate">
  </div>
  <div class="form-group">
    <label for="Inputselect">Product Weight</label>
    <input type="text" class="form-control" id="ProductWeight" placeholder="Product Weight" name="Product_Weight">
  </div>
  <div class="form-group">
    <label for="Inputselect">Product Brand</label>
    <input type="text" class="form-control" id="ProductBrand" placeholder="Product Brand" name="Product_Image">
  </div>
   <div class="form-group has-error">
    <label for="time1">Image: </label>
     <input type="file" name="product"  id="product" />
  </div> 
  <div class="form-group has-error">
    <label for="time1">Product Image: </label>
     <input type="file" name="product1"  id="product1" />
  </div>
  <div class="form-group has-error">
    <label for="time1">Product Image: </label>
     <input type="file" name="product2"  id="product2" />
  </div>
  <div class="form-group has-error">
    <label for="time1">Product Image: </label>
     <input type="file" name="product3"  id="product3" />
  </div> 
  <div class="form-group has-error">
    <label for="time1">Product / Service Specifications: </label>
     <textarea id="Specifications" class="form-control" rows="10" cols="40" name="specifications" style="white-space: pre-wrap; text-indent: 50px;"></textarea><br>
    <input type="hidden"  id="prevLen" value="0"/>
  </div>

  <button type="submit" name="update3" class="btn btn-info">Update Product</button>
  <button type="submit" name="delete3" class="btn btn-info">Delete Product</button>
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

<div class="tab-pane fade" id="Contact">
  <div class="container">
<h1>Contact Master</h1>
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Registration Id</th>
        <th>Location</th>
        <th>State</th>
        <th>Country</th>
        <th>Email</th>
        <th>Phone No</th>
        <th>Opening From</th>
        <th>Opening To</th>
        <th>Website</th>
      </tr>
    </thead>
    <tbody>
     
        <?php
$result = mysqli_query($sql_con,"SELECT * FROM `contact` where RegistrationId='$num'");
while($row = mysqli_fetch_array($result))
{
  $Inquiryid = $row["RegistrationId"];
  $InquiryName = $row["Location"];
  $State = $row["State"];
  $Country = $row["Country"];
  $InquiryEmail = $row["EmailId"];
   $InquiryCourse = $row["PhoneNo"];
  $InquiryMessage = $row["OpeningFrom"];
  $Opening = $row['OpeningTo'];
  $Website = $row['Website'];
  ?>
   <tr>
    <td><?php echo $Inquiryid;?></td>
    <td><?php echo $InquiryName;?></td>
    <td><?php echo $State;?></td>
    <td><?php echo $Country;?></td>
        <td><?php echo $InquiryEmail;?></td>
        <td><?php echo $InquiryCourse;?></td>
        <td><?php echo $InquiryMessage;?></td>
         <td><?php echo $Opening; ?></td>
        <td><?php echo $Website; ?></td>
     <td><button type="button" class="btn btn-primary" data-toggle="modal" onclick="document.getElementById('Register').value = '<?php echo $Inquiryid; ?>';document.getElementById('Location').value = '<?php echo $InquiryName; ?>';document.getElementById('State').value = '<?php echo $State; ?>';document.getElementById('Country').value = '<?php echo $Country; ?>';document.getElementById('Email_Id').value = '<?php echo $InquiryEmail; ?>';document.getElementById('Phone').value = '<?php echo $InquiryCourse; ?>';document.getElementById('OpeningFrom').value = '<?php echo $InquiryMessage; ?>';document.getElementById('OpeningTo').value = '<?php echo $Opening; ?>';document.getElementById('Website').value = '<?php echo $Website; ?>';" data-target="#myMod">Details</button></td>
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
          <h4 class="modal-title">Contact Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">

<form method="post" enctype="multipart/form-data">
  <div class="form-group has-warning">
    <label for="day1">Registration Id</label>
    <input type="text" class="form-control" id="Register" value="<?php echo $id; ?>" placeholder="Registeration Id" name="Register">
  </div>  
  <div class="form-group has-error">
    <label for="time1">Location</label>
    <input type="text" class="form-control" id="Location" placeholder="Location" name="Location">
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
     <input type="text" class="form-control" id="Website" placeholder="Firm Website" name="website">
  </div> 

  <button type="submit" name="update4" class="btn btn-info">Update Contact</button>
  <button type="submit" name="delete4" class="btn btn-info">Delete Contact</button>
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

      <div class="tab-pane fade" id="send">
  <div class="container">
<h1>Contact Us Master</h1>
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Registration Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
     
        <?php
$result = mysqli_query($sql_con,"SELECT * FROM `contact_us` where RegistrationId='$num'");
while($row = mysqli_fetch_array($result))
{
  $ID = $row['RegistrationId'];
  $ContactName = $row["Name"];
  $ContactEmail = $row["Email"];
  $ContactSubject = $row['Subject'];
  $ContactMessage = $row['Message'];
  
  
  ?>
   <tr>
     <td><?php echo $ID;?></td>
        <td><?php echo $ContactName;?></td>
        <td><?php echo $ContactEmail; ?></td>
        <td><?php echo $ContactSubject; ?></td>
        <td><?php echo $ContactMessage; ?></td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" onclick="document.getElementById('ID').value = '<?php echo $ID; ?>';document.getElementById('Contactname').value = '<?php echo $ContactName; ?>';document.getElementById('Contactemail').value = '<?php echo $ContactEmail; ?>';document.getElementById('Contactsubject').value = '<?php echo $ContactSubject; ?>';document.getElementById('Contactmessage').value = '<?php echo $ContactMessage; ?>'; " data-target="#myModa30">Details</button></td>
    </tr>
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
          <h4 class="modal-title">Contact Us Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">

         <form  method="post" role="form" >
              <div class="row">
                <div class="col-md-6 form-group">
    <input type="text" class="form-control" id="ID" style="display: none;" value="<?php echo $num; ?>" name="Regis">
  </div> 
                <div class="col-md-6 form-group">
                  <input type="text" name="Contactname" class="form-control" id="Contactname" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="Contactemail" id="Contactemail" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="Contactsubject" id="Contactsubject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="Contactmessage" id="Contactmessage" rows="8" placeholder="Message" required></textarea>
              </div>
  <button type="submit" name="update7" class="btn btn-info">Update Information</button>
  <button type="submit" name="delete7" class="btn btn-info">Delete Information</button>
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

  <div class="tab-pane fade" id="Gallery">
  <div class="container">
<h1>Gallery Master</h1>
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Registration Id</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
     
        <?php
$result = mysqli_query($sql_con,"SELECT * FROM `gallery` where RegistrationId='$num'");
while($row = mysqli_fetch_array($result))
{
  $id = $row["RegistrationId"];
  $imag = $row["Image"];
  
  
  ?>
   <tr>
    <td><?php echo $id;?></td>
        <td><?php echo $imag;?></td>
    <td><button type="button" class="btn btn-primary" data-toggle="modal" onclick="document.getElementById('Registera').value = '<?php echo $id; ?>';document.getElementById('image').value = '<?php echo $img; ?>'; " data-target="#myModal8">Details</button></td></tr>
  <?php
}
       ?>
      </tbody>
  </table>
  <div class="container">
  

  <!-- The Modal -->
  <div class="modal fade" id="myModal8">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Gallery Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">

          <form method="post" enctype="multipart/form-data">
  <div class="form-group has-warning">
    <label for="day1"> Registration Id</label>
    <input type="text" class="form-control" id="Registera" value="<?php echo $id; ?>" placeholder="Registeration Id" name="Registera">
  </div>  
   <div class="form-group">
    <label for="Inputselect">Select image : </label>
    
    <input type="file" name="img"  id="image" />
  </div> 
  <button type="submit" name="update5" class="btn btn-info">Update Information</button>
  <button type="submit" name="delete5" class="btn btn-info">Delete Information</button>
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
<div class="tab-pane fade" id="Social">
  <div class="container">
<h1>Social Media Master</h1>
  <table class="table table-bordered">
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
$result = mysqli_query($sql_con,"SELECT * FROM `socialmedia` where RegistrationId='$num'");
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
  
  <button type="submit" name="btn_save40" class="btn btn-info">Update Information</button>
  <button type="submit" name="btn_save40" class="btn btn-info">Delete Information</button>
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

  <div class="tab-pane fade" id="Enquiry">
  <div class="container">
<h1>Enquiry Master</h1>
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Registration Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Date</th>
        <th>Time</th>
        <th>People</th>
        <th>Message</th>
        <th>Subject</th>
      </tr>
    </thead>
    <tbody>
     
        <?php
$result = mysqli_query($sql_con,"SELECT * FROM `enquiry` where RegistrationId='$num'");
while($row = mysqli_fetch_array($result))
{
  $Reg = $row['RegistrationId'];
  $name5 = $row["Name"];
  $Email = $row["Email"];
  $Phone = $row['Phone'];
  $Date = $row['Date'];
  $Time = $row['Time'];
  $People = $row['People'];
  $Message = $row['Message'];
  ?>
   <tr>
    <td><?php echo $Reg;?></td>
        <td><?php echo $name5;?></td>
        <td><?php echo $Email; ?></td>
        <td><?php echo $Phone; ?></td>
        <td><?php echo $Date; ?></td>
        <td><?php echo $Time; ?></td>
        <td><?php echo $People; ?></td>
        <td><?php echo $Message; ?></td>
    <td><button type="button" class="btn btn-primary" data-toggle="modal" onclick="document.getElementById('Reg').value = '<?php echo $Reg; ?>';document.getElementById('name').value = '<?php echo $name5; ?>';document.getElementById('email').value = '<?php echo $Email; ?>';document.getElementById('phone').value = '<?php echo $Phone; ?>';document.getElementById('date').value = '<?php echo $Date; ?>';document.getElementById('time').value = '<?php echo $Time; ?>';document.getElementById('people').value = '<?php echo $Phone; ?>';document.getElementById('Message').value = '<?php echo $Message; ?>'; " data-target="#myModa34">Details</button></td></tr>
  <?php
}
       ?>
      </tbody>
  </table>
  <div class="container">
  

  <!-- The Modal -->
  <div class="modal fade" id="myModa34">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Enquiry Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">

   <form  method="post" role="form"  data-aos="fade-up" data-aos-delay="100">
          <div class="row">
             <div class="col-lg-4 col-md-6 form-group">
    <input type="text" class="form-control" id="Reg" style="display: none;" value="<?php echo $num; ?>" name="Reg">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
  
  <button type="submit" name="update6" class="btn btn-info">Update Information</button>
  <button type="submit" name="delete6" class="btn btn-info">Delete Information</button>
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
