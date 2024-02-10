<?php
$number = $_GET['search'];
$name = $_GET['name'];
include 'conne.php';

$regi = mysqli_query($sql_con, "SELECT * FROM register where RegistrationId='$number'");
while($red = mysqli_fetch_array($regi))
{
    $categories = $red['CompanyCategory'];
}

?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Chamb - Responsive E-commerce HTML5 Template</title>
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
       <header id="header" class="top-head">
         <!-- Static navbar -->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-12 left-rs">
                     <div class="navbar-header">
                        <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        </button>
                      <a href="index.php" class="navbar-brand" style="padding: 0px; padding-top: 5px;"><img src="images/Logo VCS.png"></a>
                     </div>
                     <form class="example" method="post">
                       
                         <input type="text" name="search" placeholder="Search For Product......">

                         <button type="submit" name="button" ><a href="product.php?search=<?php echo $weig; ?>|search=<?php echo $ra; ?>|search=<?php echo $Compan; ?>|search=<?php echo $comp; ?>" style="color: white;"><i class="fa fa-search"></i></a></button>
                        <?php 
                        $search=isset($_POST['search'])?$_POST['search']:null;
                        if (isset($_POST['button']))
                        {
                           $prod = mysqli_query($sql_con,"SELECT * FROM `product` where ProductName='$search' ");
                  while($Ro = mysqli_fetch_array($prod))
                  {
                     $weig = $Ro['ProductWeight'];
                     $ra = $Ro['ProductRate'];
                     $Compan = $Ro['ProductCategory'];
                     $comp = $Ro['ProductName'];
                  }   
                        }
                  ?> 
                     </form>
                  </div>
                  <div class="col-md-8 col-sm-4" style="margin: 0px; padding: 0px;">
                     <div class="right-nav" style="margin: 0px; padding: 0px;">
                        <div class="login-sr" style="margin: 0px; padding: 0px;">
                           <div class="login-signup">
                              <ul style="margin: 0px; padding: 0px;">
                                 <li><a class="btn btn-danger" target="blank" href="./OnlineMovieStreaming-master/login.php" style="background-color: #e32636; color:white;">Join AppanageFlix</a></li>
                                 <li><a class="custom-b" href="./login.php" style="background-color: #e32636; color:white;">Login</a></li>
                                 <li><a class="custom-b" href="./customer-registration.php" style="background-color: #e32636; color:white;">Sign up</a></li>
                              </ul>
                           </div>
                        </div>
                       
                        <div class="nav-b hidden-xs">
                           <div class="nav-box">
                              <ul>
                                 <li><a href="howitworks.php">How it works</a></li>
                                 <li><a href="enquiry.php">Appanage for Business</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--/.container-fluid --> 
         </nav>
      </header>
      <!-- Modal -->
      <div class="modal fade lug" id="myModal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Change</h4>
               </div>
               <div class="modal-body">
                  <ul>
                     <li><a href="#"><img src="images/flag-up-1.png" alt="" /> United States</a></li>
                     <li><a href="#"><img src="images/flag-up-2.png" alt="" /> France </a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div id="sidebar" class="top-nav">
         <ul id="sidebar-nav" class="sidebar-nav">
            <li><a href="https://api.whatsapp.com/send?phone=9871650191; ?>">Help</a></li>
            <li><a href="howitworks.php">How it works</a></li>
            <li><a href="enquiry.php">Appanage for Business</a></li>
         </ul>
      </div>
      <?php
$Company = mysqli_query($sql_con,"SELECT * FROM `product` where RegistrationId='$number' and ProductName='$name'");
    while($rowes = mysqli_fetch_array($Company))
    {
      $weight = $rowes['ProductWeight'];
    $rate = $rowes['ProductRate'];
    $Companycategory = $rowes['ProductCategory'];
    $companyName = $rowes['ProductName'];
    $brand = $rowes['ProductBrand'];
    $picture = $rowes['Product'];
    $picture1 = $rowes['Image1'];
    $picture2 = $rowes['Image2'];
    $picture3 = $rowes['Image3'];
    $CompanyDescription = $rowes['ProductDescription'];
    $regn = $rowes['RegistrationId'];
    $specifications = $rowes['Specifications'];
    }
      $product = mysqli_query($sql_con,"SELECT * FROM `register` where RegistrationId='$number'");
      while($Rows = mysqli_fetch_array($product))
      {
         $Firm = $Rows['CompanyName'];
         $owner = $Rows['CompanyOwner'];
         $PhoneNo = $Rows['MobileNo'];
         $Email_Id = $Rows['EmailId'];
      }
   ?>
      <div class="terms-conditions product-page" style="background-color:#e5e4e2;">
         <div class="terms-title">
            <div class="container">
               <div class="row">
                  <ol class="breadcrumb">
                     <li class="active" style="color: #e32636;"><?php echo $Firm; ?></li>
                     <li class="active" style="color: #e32636;"><?php echo $Companycategory; ?></li>
                     <li class="active" style="color: #e32636;"><?php echo $companyName; ?></li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="product-page-main" style="background-color: #e5e4e2;">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="prod-page-title">
                     <h2 style="color: #e32636;"><?php echo $Firm; ?></h2>
                     <p style="color: #e32636;">By <?php echo $owner; ?></p>
                  </div>
               </div>
            </div>
        <?php
                 $intro = mysqli_query($sql_con, "SELECT * FROM introduction where RegistrationId='$regn'");
    while($ivo = mysqli_fetch_array($intro))
    {
        $logo = $ivo['Logo'];
    }
                ?>
                
            <div class="row">
               <div class="col-md-2 col-sm-4">
                  <div class="left-profile-box-m prod-page">
                     <div class="pro-img">
                        <img src="image/<?php echo $logo; ?>" alt="#" />
                     </div>
                     <div class="pof-text">
                        <h3 style="color:black; font-weight: bold;"><?php echo $Firm; ?></h3>
                        <div class="check-box"></div>
                     </div>
                     <a href="product.php?search=<?php echo $regn; ?>&name=<?php echo $Firm; ?>" style="border:4px solid pink; background-color: #e32636; color: white;">Visit store</a>
                     <a target="_blank" href="<?php echo $categories; ?>/index.php?user6=<?php echo $regn; ?>&name=<?php echo $companyName; ?>"  style="border:4px solid pink; background-color: #e32636; color: white;">View Website</a>
                  </div>
               </div>
               <div class="col-md-7 col-sm-8">
                  <div class="md-prod-page">
                     <div class="md-prod-page-in" style="background: white;">
                        <div class="page-preview">
                           <div class="preview">
                              <div class="preview-pic tab-content">
                                 <div class="tab-pane active" id="pic-1"><img src="./image/<?php echo $picture; ?>" style="height: 300px;" alt="#" /></div>
                                 <div class="tab-pane" id="pic-2"><img src="./image/<?php echo $picture1; ?>" style="height: 300px;" alt="#" /></div>
                                 <div class="tab-pane" id="pic-3"><img src="./image/<?php echo $picture2; ?>" style="height: 300px;" alt="#" /></div>
                                 <div class="tab-pane" id="pic-4"><img src="./image/<?php echo $picture3; ?>" style="height: 300px;" alt="#" /></div>
                              </div>
                              <ul class="preview-thumbnail nav nav-tabs">
                                 <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="./image/<?php echo $picture; ?>" style="height: 100px; width: 100%;" alt="#" /></a></li>
                                 <li><a data-target="#pic-2" data-toggle="tab"><img src="./image/<?php echo $picture1; ?>" style="height: 100px; width: 100%;" alt="#" /></a></li>
                                 <li><a data-target="#pic-3" data-toggle="tab"><img src="./image/<?php echo $picture2; ?>" style="height: 100px; width: 100%;" alt="#" /></a></li>
                                 <li><a data-target="#pic-4" data-toggle="tab"><img src="./image/<?php echo $picture3; ?>" style="height: 100px; width: 100%;" alt="#" /></a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="btn-dit-list clearfix">
                           <div class="left-dit-p">
                              <div class="prod-btn">
                                <a class="wis" href="https://api.whatsapp.com/send?phone=<?php echo $PhoneNo; ?>" style="color: white; background-color: #e32636;">WhatsApp Number:<?php echo $PhoneNo; ?> </a>
                              <a class="thi" href="https://mail.google.com/mail/u/0/#inbox=<?php echo $Email_Id; ?>"  style="color: White; background-color: #e32636;"> Email Id:<?php echo $Email_Id; ?></a>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                     <div class="description-box" style="background: white">
                        <div class="dex-a">
                           <h3 style="color: black; font-weight: bolder;">Description</h3><br>
                           <p style="color: black;"><?php echo $CompanyDescription; ?>
                           </p>
                           <br>
                           <h3 style="color: #e32636;"><font style="font-weight: bolder;">Brand:</font> <?php echo $brand; ?></h3>
                        </div>
                        <div class="spe-a">
                           <h3 style="color: black; font-weight: bolder;">Product / Service Specification</h3><br>
                           <ul>
                              <li class="clearfix">
                                 <div class="col-md-12" style="color: black;">
                                   <?php echo nl2br($specifications,"/n"); ?><br><br>
                                 </div>
                                 
                              </li>
                              
                           </ul>
                        </div>
                     </div>
                  </div>
                  <br><br><br>
               </div>
               <div class="col-md-3 col-sm-12" >
                  <div class="price-box-right" style="background: white;">
                     <h4>Price</h4>
                     <h3>Rs. <?php echo $rate; ?></h3>
                     <h4>Quantity : <?php echo $weight; ?></h4>
                     <a  href="https://api.whatsapp.com/send?phone=<?php echo $PhoneNo; ?>" style="color: white; background: #e32636;">Contact company </a>
                     
                     <h5><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>1 hours</strong> max. responsive time</h5>
                  </div>
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