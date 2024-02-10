<?php 
$user = $_GET['user6'];
$nam = $_GET['name'];
$sno = $_GET['id'];
include 'connection.php';

$result = mysqli_query($sql_con, "SELECT * FROM property where RegistrationId='$user' and Sno='$sno'");
while($row = mysqli_fetch_array($result))
{
    $productname = $row['Property_Name'];
    $productrate = $row['Amount'];
    $type = $row['Property_Type'];
    $productdescription = $row['Property_Overview'];
    $productquantity = $row['Property_Address'];
    $image1 = $row['Property_Image'];
    $image2 = $row['Property_Image1'];
    $image3 = $row['Property_Image2'];
    $image4 = $row['Property_Image3'];
    $specification = $row['Exclusive_Amenities'];
    $brochure = $row['Brochure'];
    $Approved_by = $row['Approved_by'];
    $Open_Space = $row['Open_Space'];
    $Launch_Year = $row['Launch_Year'];
    $Project_Area = $row['Project_Area'];
    $Furnishing = $row['Furnishing'];
    $Floors = $row['Floors'];
    $Towers = $row['Towers'];
    $Available_Units = $row['Available_Units'];
}

$icon = mysqli_query($sql_con, "SELECT * FROM introduction where RegistrationId='$user'");
while($ico = mysqli_fetch_array($icon))
{
    $logo = $ico['Logo'];
}

?>

<?php
$contact = mysqli_query($sql_con, "SELECT * FROM register where RegistrationId='$user'");
while($con = mysqli_fetch_array($contact))
{
    $MobileNo = $con['MobileNo'];
    $EmailId = $con['EmailId'];
    $location = $con['CompanyLocation'];
    $city = $con['CompanyCity'];
    $pincode = $con['CompanyPincode'];
    $State = $con['State'];
    $country = $con['Country'];
}

$link = mysqli_query($sql_con, "SELECT * FROM socialmedia");
while($row = mysqli_fetch_array($link))
{
    $facebook = $row['Facebook'];
    $Twitter = $row['Twitter'];
    $Instagram = $row['Instagram'];
    $LinkedIn = $row['LinkedIn'];
    $youtube = $row['YouTube'];
}
?>

<!DOCTYPE html>
<html lang="en">


<!-- molla/product.html  22 Nov 2019 09:54:50 GMT -->
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $nam; ?></title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <style>
        .sticky-container{
    padding:0px;
    margin:0px;
    position:fixed;
    right:-130px;
    top:200px;
    width: 170px;
    z-index: 1100;
}
.sticky li{
    list-style-type:none;
    background-color:#fff;
    color:#efefef;
    height: 40px;
    padding:0px;
    -webkit-transition:all 0.25s ease-in-out;
    -moz-transition:all 0.25s ease-in-out;
    -o-transition:all 0.25s ease-in-out;
    transition:all 0.25s ease-in-out;
    cursor:pointer;
}

.sticky li img{
    float:left;
    margin:5px 4px;
    margin-right:5px;
}
.sticky li p{
    padding-top:5px;
    margin:0px;
    line-height:16px;
    font-size:11px;
}
.sticky li p a{
    text-decoration:none;
    color:#2C3539;
}
.sticky li p a:hover{
    text-decoration:underline;
}
    </style>
    
    <style>
        body{
            overflow-x: hidden;
        }
    </style>
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<style>
.sticky-container{
    padding:0px;
    margin:0px;
    position:fixed;
    right:-130px;
    top:200px;
    width: 170px;
    z-index: 1100;
}
.sticky li{
    list-style-type:none;
    background-color:#fff;
    color:#efefef;
    height: 40px;
    padding:0px;
    -webkit-transition:all 0.25s ease-in-out;
    -moz-transition:all 0.25s ease-in-out;
    -o-transition:all 0.25s ease-in-out;
    transition:all 0.25s ease-in-out;
    cursor:pointer;
}

.sticky li img{
    float:left;
    margin:5px 4px;
    margin-right:5px;
}
.sticky li p{
    padding-top:5px;
    margin:0px;
    line-height:16px;
    font-size:11px;
}
.sticky li p a{
    text-decoration:none;
    color:#2C3539;
}
.sticky li p a:hover{
    text-decoration:underline;
}
    </style>
    
    <style>
        body{
            overflow-x: hidden;
        }
    </style>
    
</head>

<body style="font-family: Times New Roman, Times, serif; background: #f2f3f4;">
    <div class="sticky-container">
    <ul class="sticky">
        <li style="background-color: #3B5998; color: white;">
           <a href="<?php echo $facebook; ?>" target="_blank" style="background-color: #3B5998; color: white;"><i class="icon-facebook-f" style="font-size: 20px; text-align: center; padding-left: 14px;"></i>
           </a> 
        </li>
        <li style="background-color: #55ACEE; color: white;">
           <a href="<?php echo $Twitter; ?>" target="_blank" style="background-color: #55ACEE; color: white;"> <i class="icon-twitter" style="font-size: 20px; text-align: center; padding-left: 14px;"></i></a>
        </li>
         <li style="background-color: #bb0000; color: white;">
           <a href="<?php echo $youtube; ?>" target="_blank" style="background-color: #bb0000; color: white;"> <i class="icon-youtube" style="font-size: 20px; text-align: center; padding-left: 10px;"></i></a>
        </li>
         <li style="background-color: #125688; color: white;">
           <a href="<?php echo $Instagram; ?>" target="_blank" style="background-color: #125688; color: white;"> <i class="icon-instagram" style="font-size: 20px; text-align: center; padding-left: 14px;"></i></a>
        </li>
         <li style="background-color: #007bb5; color: white;">
           <a href="<?php echo $LinkedIn; ?>" target="_blank" style="background-color: #007bb5; color: white;"> <i class="icon-linkedin" style="font-size: 20px; text-align: center; padding-left: 14px;"></i></a>
        </li>
        <li style="background-color: green; color: white;">
           <a href="https://api.whatsapp.com/send?phone=<?php echo "+91".$MobileNo;?>" target="_blank" style="background-color: green; color: white;"> <i class="icon-whatsapp" style="font-size: 20px; text-align: center; padding-left: 14px;"></i></a>
        </li>
    </ul>
</div>

<div class="container-fluid" style="background-color: rgb(11, 127, 171); text-align: center;">
            <div class="row">
                <div class="col-sm-12">
                   <p style="color: white; padding-left: 0px; margin: 0px; text-align: left"><i class="fa fa-phone" style="font-size: 10px;"></i> <?php echo $MobileNo; ?>, &nbsp;&nbsp;<i class="fa fa-envelope" style="font-size: 10px;"></i> <?php echo $EmailId; ?></p>  </center> 
                </div>
                
            </div>
                 
             
            </div>
 <div class="page-wrapper">
     <header class="header header-intro-clearance header-4">

            <div class="header-middle" style="background-color: white; border-top: 1px solid white;">
                <div class="container">
                    <div class="header-left">
                        
                        <a href="index.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?> " class="logo" style="margin-top: 10px; margin-bottom: 10px;">
                          <img src="../image/<?php echo $logo; ?>" alt="Molla Logo" width="150" height="25" class="img-thumbnail">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center" style="padding:0px; margin: 0px; ">
                        <nav class="main-nav" style="padding:0px; margin: 0px;">
                            <ul class="menu sf-arrows" style="padding:0px; margin: 0px;">
                                
                                <li class="megamenu-container active">
                                 <a href="index.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="padding: 10px; margin: 0px; color: black; font-weight: bold;">Home</a>
                                </li>
                                
                                <li class="megamenu-container" style="padding:0px; margin: 0px;">
                                 <a href="about.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="padding: 10px; margin: 0px; color: black; font-weight: bold;">About us</a>
                                </li>
                            
                                <li class="megamenu-container">
                                 <a href="property.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="padding: 10px; margin: 0px; color: black; font-weight: bold;">Property</a>
                                </li>
                                
                                <li class="megamenu-container">
                                 <a href="gallery.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="padding: 10px; margin: 0px; color: black; font-weight: bold;">Gallery</a>
                                </li>
                                
                                 <li class="megamenu-container">
                                 <a href="team.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="padding: 10px; margin: 0px; color: black; font-weight: bold;">Team</a>
                                </li>
                                
                                <li class="megamenu-container">
                                 <a href="blog.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="padding: 10px; margin: 0px; color: black; font-weight: bold;">Blog</a>
                                </li>
                               
                               <li class="megamenu-container">
                                 <a href="contact.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="padding: 10px; margin: 0px; color: black; font-weight: bold;">Contact </a>
                                </li>
                                
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div>

                    <div class="header-right">
                       
                      <div class="wishlist">
                            <a href="wishlist.php" title="Wishlist" style="color: black; font-weight: bold;">
                                <div class="icon">
                                    <i class="icon-heart-o" style="color: black; font-weight: bold; font-size: 26px;"></i>
                                    
                                </div>
                                <p style="color: black; font-weight: bold;">Wishlist</p>
                            </a>
                        </div><!-- End .compare-dropdown -->

                        <div class="wishlist">
                            <a href="cart.php" style="color: black; font-weight: bold;">
                                <div class="icon">
                                    <i class="icon-shopping-cart" style="color: black; font-weight: bold; font-size: 26px;"></i>
                                    
                                </div>
                                <p style="color: black; font-weight: bold;">Cart</p>
                            </a>
                        </div><!-- End .cart-dropdown -->
                        
                        <button class="mobile-menu-toggler" style="background: black;">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars" style="color: white;"></i>
                        </button>
                       
                       
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

        </header><!-- End .header -->
        
        <main class="main">
           <div class="page-header text-center" style="background-image: url('assets/images/our product.jpg')">
        		<div class="container">
        			<h1 class="page-title" style="color: white; font-weight: bolder; font-family: Times New Roman, Times, serif;"><?php echo $productname; ?></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->

            <div class="page-content" style="margin-top: 40px;">
                <div class="container">
               
                    <div class="product-details-top">
                        <div class="row">
                            <div class="col-md-6">
                                <div style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px; background-color: rgb(11, 127, 171); padding: 20px; margin-bottom: 10px;">
                                <div class="product-details">
                                    <h1 class="product-title" style="color: white; font-size: 40px;"><?php echo $productname; ?></h1><!-- End .product-title -->
                                    <h5 class="product-title" style="color: white;"><?php echo $type; ?></h5>
                                    
                                    <p style="color: white; font-size: 14px;"><?php echo $productquantity; ?></p>
                                    
                                    <div class="product-price">
                                      <p style="color: white; font-size: 16px; font-weight: bold;"> Rs. <?php echo $productrate; ?>/- </p>
                                    </div><!-- End .product-price -->
                                    </div><!-- End .details-filter-row -->
                                    <div class="product-details-action">
                                        <a href="#" class="btn btn-danger"><span>Buy</span></a>

                                        <div class="details-action-wrapper">
                                           
                                            <a href="../image/<?php echo $brochure; ?>" target="_blank" class="btn btn-danger"><span>Download Brochure</span></a>
                                            
                                        </div><!-- End .details-action-wrapper -->
                                    </div><!-- End .product-details-action -->

<div class="product-details-action">
                                        

                                       
                                    </div><!-- End .product-details-action -->
                                    
                               
                                </div>
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                
                                <div style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px; background-color: rgb(11, 127, 171);; padding: 20px;">
                                   <center><h3 style="color: white;"><b>Quick Enquiry</b></h3></center>
                               <form>
  <div class="form-group">
    <input type="email" class="form-control" placeholder="Enter Your Name">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" placeholder="Enter Your Phone No.">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" placeholder="Enter Your Email Id">
  </div>
<div class="form-group">
    <input type="email" class="form-control" placeholder="Enter Your Message">
  </div>  
<center> <input type="submit" class="btn btn-danger" name="submit" value="Submit">
</center>
</form>
                                </div>
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .product-details-top -->
                    
                    
                    <div class="product-details-top">
                        <div class="row">
                            <div class="col-md-12">
                                <div style="box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px; background: white; padding: 20px;">
                                <div class="product-gallery product-gallery-vertical">
                                    <div class="row">
                                        <figure class="product-main-image">
                                            <img id="product-zoom" src="../image/<?php echo $image1; ?>" data-zoom-image="../image/<?php echo $image1; ?>" alt="product image">

                                            <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                <i class="icon-arrows"></i>
                                            </a>
                                        </figure><!-- End .product-main-image -->

                                        <div id="product-zoom-gallery" class="product-image-gallery">
                                            <a class="product-gallery-item active" href="#" data-image="../image/<?php echo $image1; ?>" data-zoom-image="../image/<?php echo $image1; ?>">
                                                <img src="../image/<?php echo $image1; ?>" alt="product side">
                                            </a>

                                            <a class="product-gallery-item" href="#" data-image="../image/<?php echo $image2; ?>" data-zoom-image="../image/<?php echo $image2; ?>">
                                                <img src="../image/<?php echo $image2; ?>" alt="product cross">
                                            </a>

                                            <a class="product-gallery-item" href="#" data-image="../image/<?php echo $image3; ?>" data-zoom-image="../image/<?php echo $image3; ?>">
                                                <img src="../image/<?php echo $image3; ?>" alt="product with model">
                                            </a>

                                            <a class="product-gallery-item" href="#" data-image="../image/<?php echo $image4; ?>" data-zoom-image="../image/<?php echo $image4; ?>">
                                                <img src="../image/<?php echo $image4; ?>" alt="product back">
                                            </a>
                                        </div><!-- End .product-image-gallery -->
                                    </div><!-- End .row -->
                                </div><!-- End .product-gallery -->
                                </div>
                            </div><!-- End .col-md-6 -->

                        </div><!-- End .row -->
                    </div><!-- End .product-details-top -->
<div class="product-details-tab" style="margin-top: 30px;">
                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true"  style="font-family: Amasis MT Pro; margin-bottom: 0px; font-size: 28px; font-weight: bold; color: black; text-align: center;">About <?php echo $productname; ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false"  style="font-family: Amasis MT Pro; margin-bottom: 0px; font-size: 28px; font-weight: bold; color: black; text-align: center;">Exclusive Amenities</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content container" style="box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset; background: white;">
                            <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                                <div class="product-desc-content">
                                    <h3><?php echo $productname; ?> Information</h3>
                                    <p style="color: black;"><?php echo $productdescription; ?></p>
                                    
                                     <div class="row" style="margin-top: 20px;">
    <div class="col-sm-3">
        <div style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px; margin: 10px; padding: 20px; text-align: center; background-color: rgb(11, 127, 171);">
            <h5 style="font-weight: bold; color: white; font-family: Amasis MT Pro;">Available Units</h5>
            <p style="color: white; font-family: Amasis MT Pro;"><?php echo $Available_Units; ?></p>
        </div>
    </div>
    <div class="col-sm-3">
        <div style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px; margin: 10px; padding: 20px; text-align: center; background-color: rgb(11, 127, 171);">
            <h5 style="font-weight: bold; color: white; font-family: Amasis MT Pro;">Total No. of Towers</h5>
            <p style="color: white; font-family: Amasis MT Pro;"><?php echo $Towers; ?></p>
        </div>
    </div>
    <div class="col-sm-3">
        <div style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px; margin: 10px; padding: 20px; text-align: center; background-color: rgb(11, 127, 171);">
            <h5 style="font-weight: bold; color: white; font-family: Amasis MT Pro;">Total No. of Floors</h5>
            <p style="color: white; font-family: Amasis MT Pro;"><?php echo $Floors; ?></p>
        </div>
    </div>
    <div class="col-sm-3">
        <div style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px; margin: 10px; padding: 20px; text-align: center; background-color: rgb(11, 127, 171);">
            <h5 style="font-weight: bold; color: white; font-family: Amasis MT Pro;">Furnishing</h5>
            <p style="color: white; font-family: Amasis MT Pro;"><?php echo $Furnishing; ?></p>
        </div>
    </div>
    <div class="col-sm-3">
        <div style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px; margin: 10px; padding: 20px; text-align: center; background-color: rgb(11, 127, 171);">
            <h5 style="font-weight: bold; color: white; font-family: Amasis MT Pro;">Project Area</h5>
            <p style="color: white; font-family: Amasis MT Pro;"><?php echo $Project_Area; ?></p>
        </div>
    </div>
    <div class="col-sm-3">
        <div style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px; margin: 10px; padding: 20px; text-align: center; background-color: rgb(11, 127, 171);">
            <h5 style="font-weight: bold; color: white; font-family: Amasis MT Pro;">Launch Year</h5>
            <p style="color: white; font-family: Amasis MT Pro;"><?php echo $Launch_Year; ?></p>
        </div>
    </div>
    <div class="col-sm-3">
        <div style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px; margin: 10px; padding: 20px; text-align: center; background-color: rgb(11, 127, 171);">
            <h5 style="font-weight: bold; color: white; font-family: Amasis MT Pro;"> Open Space</h5>
            <p style="color: white; font-family: Amasis MT Pro;"><?php echo $Open_Space; ?></p>
        </div>
    </div>
    <div class="col-sm-3">
        <div style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px; margin: 10px; padding: 20px; text-align: center; background-color: rgb(11, 127, 171);">
            <h5 style="color: white; font-family: Amasis MT Pro; font-weight: bold;">Approved by</h5>
            <p style="color: white; font-family: Amasis MT Pro;"><?php echo $Approved_by; ?></p>
        </div>
    </div>
   
  </div>
                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                                <div class="product-desc-content">
                                    
                                    <ul style="-webkit-column-count: 3; -moz-column-count: 3; column-count: 3; list-style-type: none;">
                                        
                                        <li style="list-style-type: none;"><?php echo nl2br($specification,"/n"); ?></li> </ul>
                                        
                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->
                            
                            
                        </div><!-- End .tab-content -->
                    </div><!-- End .product-details-tab -->

                  <?php
$video = mysqli_query($sql_con, "SELECT * FROM property where Sno='6'");
while($rod = mysqli_fetch_array($video))
{
    $propertyvideo = $rod['Video'];
}
?>
<div class="row">
    <div class="col-sm-12">
       <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="../image/<?php echo $propertyvideo; ?>" allowfullscreen></iframe>
</div> 
    </div>
</div>
                    

<div class="about-testimonials bg-light-2 pt-6 pb-6">
                    <div class="container">
                        <h3 class="text-center" style="font-family: Amasis MT Pro; margin-bottom: 0px; font-size: 28px; font-weight: bold; color: black; text-align: center;">What Our Customer Say About Us</h3><!-- End .title text-center -->
<hr style="height:2px;border-width:0;color:gray;background-color: black; margin-top: 0px; text-align: center; width: 50%;"> 

                        <div class="owl-carousel owl-simple owl-testimonials-photo" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "1200": {
                                        "nav": true
                                    }
                                }
                            }'>
                            <?php
                            $testimonial = mysqli_query($sql_con, "SELECT * FROM testimonial where RegistrationId='$user'");
                            while($rowte = mysqli_fetch_array($testimonial))
                            {
                                $testname = $rowte['Name'];
                                $testdescri = $rowte['Designation'];
                                $testiImage = $rowte['Image'];
                            ?>
                            <blockquote class="testimonial text-center" style="box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset; background: white; padding: 20px;">
                                <img src="../image/<?php echo $testiImage; ?>" alt="user">
                                <p style="color: black;">“ <?php echo $testdescri; ?> ”</p>
                                <cite>
                                    <?php echo $testname; ?>
                                </cite>
                            </blockquote><!-- End .testimonial -->
                            <?php
                            }
                            ?>
                            
                        </div><!-- End .testimonials-slider owl-carousel -->
                    </div><!-- End .container -->
                </div><!-- End .bg-light-2 pt-5 pb-6 -->
                
            </div><!-- End .page-content -->
        </main><!-- End .main -->
        


            </div><!-- End .page-content -->
        </main><!-- End .main -->

  <?php
$register = mysqli_query($sql_con, "SELECT * FROM `register` where RegistrationId='$user'");
while($regis = mysqli_fetch_array($register))
{
    $descrip = $regis['CompanyDescription'];
}
?>
<style>
    .text-sm {
    font-size: 16px !important;
    overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 4; /* number of lines to show */
   -webkit-box-orient: vertical;
}
</style>
   <footer class="footer" style="background-color: rgb(11, 127, 171);">
        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-6 col-lg-4">
	            			<div class="widget widget-about">
	            				<img src="../image/<?php echo $logo; ?>" class="footer-logo" alt="Footer Logo" width="200" height="80" class="img-fluid img-thumbnail">
	            				<h4 style="font-family: Amasis MT Pro; margin-bottom: 0px; font-weight: bold; color: white;"><?php echo $nam; ?></h4>
	            				<p class="text-sm" style="color: white;"><?php echo $descrip; ?></p>

	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-2">
	            			<div class="widget">
	            				<h4 class="widget-title" style="color: white; font-size: 22px;">Useful Links</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="index.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white; font-size: 16px;">Home</a></li>
	            					<li><a href="about.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white; font-size: 16px;">About Us</a></li>
	            					<li><a href="property.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white; font-size: 16px;">Property</a></li>
	            					
	            					<li><a href="team.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white; font-size: 16px;">Team</a></li>
	            					<li><a href="contact.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white; font-size: 16px;">Contact Us</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-2">
	            			<div class="widget">
	            				<h4 class="widget-title" style="color: white; font-size: 22px;">Property Type</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            				    <?php
	            				    $menupr = mysqli_query($sql_con, "SELECT any_value(Property_Type) as vendoress FROM property where RegistrationId='$user' group by Property_Type limit 6");
	            				    while($men = mysqli_fetch_array($menupr))
	            				    {
	            				        $produ = $men['vendoress'];
	            				        $ide = $men['Sno'];
	            				    ?>
	            					<li><a href="#" style="color: white; font-size: 16px;"><?php echo $produ; ?></a></li>
	            					<?php
	            				    }
	            				    ?>
	            				
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-4">
	            			<div class="widget">
	            				<h4 class="widget-title" style="color: white; font-size: 22px;">Contact Us</h4><!-- End .widget-title -->
<?php
$contact = mysqli_query($sql_con, "SELECT * FROM register where RegistrationId='$user'");
while($con = mysqli_fetch_array($contact))
{
    $MobileNo = $con['MobileNo'];
    $EmailId = $con['EmailId'];
    $location = $con['CompanyLocation'];
    $city = $con['CompanyCity'];
    $pincode = $con['CompanyPincode'];
    $State = $con['State'];
    $country = $con['Country'];
}
?>
	            				<ul class="widget-list">
	            					<li><a href="#" style="color: white; font-size: 16px;"><?php echo $location; ?>, <?php echo $city; ?>, <?php echo $State; ?>, <?php echo $pincode; ?>, <?php echo $country; ?></a></li>
	            					<li><a href="#" style="color: white; font-size: 16px;"><?php echo $MobileNo; ?></a></li>
	            					<li><a href="#" style="color: white; font-size: 16px;"><?php echo $EmailId; ?></a></li>
	            					
	            				</ul><!-- End .widget-list -->
	            			
	            				<div class="social-icons" style="margin-top: 20px;">
                                    <a href="<?php echo $facebook; ?>" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f" style="color: white;"></i></a>
                                    <a href="<?php echo $Twitter; ?>" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter" style="color: white;"></i></a>
                                    <a href="<?php echo $Instagram; ?>" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram" style="color: white;"></i></a>
                                    <a href="<?php echo $LinkedIn; ?>" class="social-icon" target="_blank" title="Pinterest"><i class="icon-linkedin" style="color: white;"></i></a>
                                </div><!-- End .soial-icons -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->

	        <div class="footer-bottom">
	        	<div class="container">
	        	
	        	</div><!-- End .container -->
	        </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
 
    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>
          
            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li>
                                <a href="index.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-weight: bold;">Home</a>
                            </li>
                           <li>
                                <a href="about.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-weight: bold;">About Us</a>
                            </li>
                            <li>
                                <a href="property.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-weight: bold;">Property</a>
                            </li>
                            <li>
                                <a href="gallery.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-weight: bold;">Gallery</a>
                            </li>
                            <li>
                                <a href="team.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-weight: bold;">Team</a>
                            </li>
                            <li>
                                <a href="blog.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-weight: bold;">Blog</a>
                            </li>
                            <li>
                                <a href="contact.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-weight: bold;">Contact Us</a>
                            </li>
                            
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                
            </div><!-- End .tab-content -->

        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->
 
   <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.elevateZoom.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>
<!-- molla/index-4.html  22 Nov 2019 09:54:18 GMT -->
</html>