<?php 
$number = $_GET['search'];
$nam = $_GET['name'];
include 'conne.php';

 $result=mysqli_query($sql_con,"SELECT * FROM `social`");
while($row= mysqli_fetch_array($result))
{
    $Facebook = $row['Facebook'];
    $twitter = $row['Twitter'];
    $Instagram = $row['Instagram'];
    $linkedin = $row['LinkedIn'];
}
 $limit = 2;
if (isset($_GET['page'])) 
   {
      $page = $_GET['page'];
   }
else
{
   $page = 1;
}
$offset = ($page - 1)* $limit;

$regi = mysqli_query($sql_con, "SELECT * FROM register where RegistrationId='$number'");
while($red = mysqli_fetch_array($regi))
{
    $categories = $red['CompanyCategory'];
}

$intro = mysqli_query($sql_con, "SELECT * FROM introduction where RegistrationId='$number'");
    while($ivo = mysqli_fetch_array($intro))
    {
        $logo = $ivo['Logo'];
    }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Appanage Mart</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!--bootstrap css-->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!--animate css-->
      <link rel="stylesheet" href="css/animate-wow.css">
      <!--main css-->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/bootstrap-select.min.css">
      <link rel="stylesheet" href="css/slick.min.css">
      <link rel="stylesheet" href="css/select2.min.css">
      <!--responsive css-->
      <link rel="stylesheet" href="css/responsive.css">

  <style type="text/css">
     * {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 10px;
  border: 1px solid grey;
  float: left;
  width: 50%;
  margin-top: 15px;
  margin-left: 40px;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 10%;
  padding: 10px;
  background: #e32636;
  color: white;
  font-size: 10px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
  margin-top: 15px;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}
  </style>  

   </head>
   <body>
      <!-- Modal -->
      <div class="modal fade lug" id="myModal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"></h4>
               </div>
               <div class="modal-body">
                  <ul>
                     <li><a href="#"><img src="images/" alt="" /> United States</a></li>
                     <li><a href="#"><img src="images/flag-up-2.png" alt="" /> France </a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="product-page-main" style="background-color: #e5e4e2;">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="prod-page-title">
                     <h2 style="color: #e32636; font-weight: bolder;"> Firm/Company Details</h2>
                  </div>
               </div>
            </div>

            <div class="row">
                
            <?php
              
               $Company = mysqli_query($sql_con,"SELECT * FROM `register` where RegistrationId='$number' and CompanyName='$nam'");
    while($rowes = mysqli_fetch_array($Company))
{
   
    $emailId = $rowes['EmailId'];
    $mobile = $rowes['MobileNo'];
    $Companycategory = $rowes['CompanyCategory'];
    $companyName = $rowes['CompanyName'];
    $image = $rowes['Logo'];
    $CompanyDescription = $rowes['CompanyDescription'];
    $regn = $rowes['RegistrationId'];
}
$about = mysqli_query($sql_con,"SELECT * FROM `about_firm` where RegistrationId='$number'");
   while($firm = mysqli_fetch_array($about))
   {
    $bussines = $firm['Bussines'];
    $Establishment = $firm['Establishment'];
  
   }

   if(!empty($bussines))
   {
$bussines1 = $bussines;
   }
   else
   {
$bussines1 = "";
   }

if(!empty($Establishment))
   {
$Establishment1 = $Establishment;
   }
   else
   {
$Establishment1 = "";
   }
    ?>
               <div class="col-md-9" style="margin-bottom: 20px;">
            <div class="row p-2 bg-white border rounded" style="background-color: white; border-radius: 10px;">
                <div class="col-md-2 mt-1"><img class="img-fluid img-responsive rounded product-image" src="image/<?php echo $logo; ?>" style="margin-top: 10px; margin-bottom: 10px;"></div>
                <div class="col-md-6 mt-1">
                    <h3 style="font-weight: bold; margin-top: 10px; margin-bottom: 10px; color: #e32636;"><?php echo $companyName; ?></h3>
                    <div class="d-flex flex-row" style="margin-top: 10px; margin-bottom: 10px;">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    </div>
                    
                    
                    <p class="text-justify text-truncate para mb-0" style="margin-top: 20px; color: black;"><?php echo $CompanyDescription; ?><br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center" style="margin-top: 20px; ">
                        <div class="prod-btn" style="padding: 6px 6px; margin-right: 0px;">
                                 <a href="https://api.whatsapp.com/send?phone=<?php echo $mobile; ?>" style="color:white; background-color: #e32636; margin-bottom: 10px;">WhatsApp : <?php echo $mobile; ?> </a>
                                 <a href="https://mail.google.com/mail/u/0/#inbox=<?php echo $emailId; ?>" style="background-color: #e32636; color: white; margin-bottom: 10px;">Email Id: <?php echo $emailId; ?> </a>
                                 
                                  <a href="product.php?search=<?php echo $regn; ?>&name=<?php echo $companyName; ?> " target="blank" style="background-color: #e32636; color: white; margin-bottom: 10px;">Product/Services</a>
                                  
                                  <a target="_blank" href="<?php echo $categories; ?>/index.php?user6=<?php echo $regn; ?>&name=<?php echo $companyName; ?>"  style="background-color: #e32636; color: white; margin-bottom: 10px;">View Website</a>
                                 <a href="#" style="background-color: #e32636; color: white; margin-bottom: 10px; padding: 6px;">Business Type : <?php echo $bussines1; ?></a>
                                 <a href="#" style="background-color: #e32636; color: white; margin-bottom: 10px;">Year of Establishment: <?php echo $Establishment1; ?></a>
                                  
                              </div>
                    </div>
                    

                </div>
            </div>
        
       
        </div>
        
        <div class="col-md-3">
           <div class="card">
             <div class="price-box-right" style="background-color: white; margin-bottom: 10px;">
                     <h3 style="color: #e32636;">"<?php echo $companyName; ?>" Details</h3>
                     
                  <?php 
                  $product = mysqli_query($sql_con,"SELECT * FROM `register` where RegistrationId='$regn'");
                  while($Rows = mysqli_fetch_array($product))
                  {
                     $Firm = $Rows['CompanyName'];
                     $PhoneNo = $Rows['MobileNo'];
                     $Email = $Rows['EmailId'];
                     $num = $Rows['CompanyLocation'];
                     $state = $Rows['State'];
                     $Country = $Rows['Country'];
                     $Owner = $Rows['CompanyOwner'];
                     $type = $Rows['CompanyType'];
                     $Gst = $Rows['GstNumber'];
                     $REGISTRATION = $Rows['RegistrationId'];
                     $Date = $Rows['DateOfRegistration'];
                  ?>
                     
                       <p style="color: black;"><b>Contact Number: <?php echo $PhoneNo; ?></b></p>
                        <p style="color: black;"><b>Email Id: <?php echo $Email; ?></b></p>
                     <p style="color: black;"><b>Location: <?php echo $num;  ?></b></p>
                     <p style="color: black;"><b><?php echo $state; ?></b></p>
                     <p style="color: black;"><b><?php echo $Country; ?></b></p>
                     <p style="color: black;"><b>Company Owner: <?php echo $Owner; ?></b></p>
                     <p style="color: black;"><b>Firm Type: <?php echo $type; ?></b></p>
                     <p style="color: black;"><b>GST Number: <?php echo $Gst; ?></b></p> 
                     <p style="color: black;"><b>Firm Registration Id: <?php echo $REGISTRATION; ?></b></p>
                      <p style="color: black;"><b>Date of Registration: <?php echo $Date; ?></b></p>      
                                 <?php 
                              }
                              ?>
                  
                  </div>  
           </div>
       </div>
     
               </div>
            <div class="row">
               <div class="col-md-12">
                   <h3 style="color: #e32636; font-weight: bolder; text-align: center;"> Company Product</h3>
               </div>
               
               <?php 
                  $Company = mysqli_query($sql_con,"SELECT * FROM `product` where RegistrationId='$number'");
    while($rowes = mysqli_fetch_array($Company))
    {
      $result = $rowes['ProductCategory'];
      $productname = $rowes['ProductName'];
      $productdescription= $rowes['ProductDescription'];
      $productbrand = $rowes['ProductBrand'];
      $productimage = $rowes['Product'];
               ?>
              <div class="col-md-12" style="margin-bottom: 10px; margin-top: 20px;">
            <div class="row p-2 bg-white border rounded" style="background-color: white; border-radius: 10px; float: center;">
                <div class="col-md-2 mt-1"><img class="img-fluid img-responsive rounded product-image" src="image/<?php echo $productimage; ?>" style="margin-top: 10px; margin-bottom: 10px;"></div>
                <div class="col-md-6 mt-1">
                    <h4 style="font-weight: bold; margin-top: 10px; margin-bottom: 10px; color: black;">Product Category: <?php echo $result; ?></h4>
                     <h4 style="font-weight: bold; margin-top: 10px; margin-bottom: 10px; color: black;">Product Category: <?php echo $productname; ?></h4>
                    
                    
                    <h6 class="text-justify text-truncate para mb-0" style="margin-top: 20px; color: black;"><?php echo $productdescription; ?><br><br></h6>
                    
                     
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center" style="margin-top: 20px;">
                        <div class="prod-btn">
                                 <a href="#" style="color:white; background-color: #e32636; margin-bottom: 10px;">Product Brand : <?php echo $productbrand; ?> </a>
                                
                                  
                              </div>
                    </div>
                    

                </div>
            </div>
        
       
        </div>
        
       <?php
}
?> 
               </div>
      </div>
   </div>
</div>
<?php include 'footer.php'; ?>
      <!--main js--> 
      <script src="js/jquery-1.12.4.min.js"></script> 
      <!--bootstrap js--> 
      <script src="js/bootstrap.min.js"></script> 
      <script src="js/bootstrap-select.min.js"></script>
      <script src="js/slick.min.js"></script> 
      <script src="js/select2.full.min.js"></script> 
      <script src="js/wow.min.js"></script> 
      <!--custom js--> 
      <script src="js/custom.js"></script>
   </body>
</html>