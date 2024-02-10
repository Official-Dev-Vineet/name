<?php 
$user = $_GET['user6'];
$nam = $_GET['name'];
include 'connection.php';
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

$link = mysqli_query($sql_con, "SELECT * FROM socialmedia where RegistrationId='$user'");
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


<!-- molla/index-4.html  22 Nov 2019 09:53:08 GMT -->
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
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">
    
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

<body>
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

<div class="container-fluid" style="background-color:  #003153; text-align: center;">
            <div class="row">
                <div class="col-sm-12">
                   <p style="color: white; padding-left: 20px; margin: 5px; text-align: left"><i class="fa fa-phone"></i> &nbsp;<?php echo $MobileNo; ?>, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope"></i> &nbsp;<?php echo $EmailId; ?></p>  </center> 
                </div>
                
            </div>
                 
             
            </div>
            
    <div class="page-wrapper">
        <header class="header header-intro-clearance header-4" >
            
            <div class="header-middle" style="background: white;" >
                <div class="container">
                    <div class="header-left">
                        
                        <a href="index.php" class="logo" style="margin-top: 10px; margin-bottom: 10px;">
                            <img src="../image/<?php echo $logo; ?>" alt="Molla Logo" style="height: 80px;">
                        </a>
                        
                    </div><!-- End .header-left -->

                   <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                
                                <li class="megamenu-container active">
                                 <a href="index.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="color: black; width: 80px; font-weight: bold;">Home</a>
                                </li>
                                
                                <li class="megamenu-container">
                                 <a href="about.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="color: black; width: 80px; font-weight: bold;">About</a>
                                </li>
                            
                                <li class="megamenu-container">
                                 <a href="product.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="color: black; width: 80px; font-weight: bold;">Menu</a>
                                </li>
                                
                                <li class="megamenu-container">
                                 <a href="gallery.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="color: black; width: 90px; font-weight: bold;">Gallery</a>
                                </li>
                                
                                 <li class="megamenu-container">
                                 <a href="team.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="color: black; width: 80px; font-weight: bold;">Team</a>
                                </li>
                                
                                <li class="megamenu-container">
                                 <a href="blog.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="color: black; width: 80px; font-weight: bold;">Blog</a>
                                </li>
                               
                               <li class="megamenu-container">
                                 <a href="contact.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="color: black; width: 80px; font-weight: bold;">Contact</a>
                                </li>
                                
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-center -->
                    <div class="header-right">
                        
                        

                        <div class="wishlist">
                            <a href="wishlist.php" title="Wishlist" style="color: black; font-weight: bold;">
                                <div class="icon">
                                    <i class="icon-heart-o"></i>
                                    
                                </div>
                                <p style="color: black; font-weight: bold;">Wishlist</p>
                            </a>
                        </div><!-- End .compare-dropdown -->

                        <div class="wishlist">
                            <a href="cart.php" style="color: black; font-weight: bold;">
                                <div class="icon">
                                    <i class="icon-shopping-cart"></i>
                                    
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
        			<h1 class="page-title" style="color: white; font-weight: bold;">Our Menu</h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
           

            <div class="page-content" style="margin-top: 20px;">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-9">
                		
                            <div class="products mb-3">
                                <div class="row justify-content-center">
                                    
                                    
                                    <?php
         $Product = mysqli_query($sql_con,"SELECT * FROM `product` where RegistrationId='$user'");
   while($Cate = mysqli_fetch_array($Product))
   {
  ?>
                                    <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                        <div class="product product-7 text-center" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px; margin-bottom: 20px; background-color:  #003153;">
                                            <figure class="product-media" >
                                                
                                                <a href="product-detail.php?id=<?php echo $Cate['id']; ?>&user6=<?php echo $user; ?>&name=<?php echo $nam; ?>">
                                                    <img src="../image/<?php echo $Cate['Product']; ?>" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"></a>
                                                    
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"><span>Add +</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body" style="padding: 0px; background-color:  #003153; padding-top: 5px;">
                                            
                                    <h5 class="product-title" style="display: block;"><a href="product-detail.php?id=<?php echo $Cate['id']; ?>&user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-family: Arial; font-weight: bold;text-align: center; color: white;"><?php echo $Cate['ProductName']; ?></a></h5><!-- End .product-title -->
                                        
                                        <center> <div class="product-price" style="display: block; margin-top: 10px;">
                                      <p align="center" style="color: white; font-weight: 500px; text-align: left; padding: 5px;"><b><?php echo $Cate['Veg']; ?></b> <font style="float: right"> <b>Rs.</b> <?php echo $Cate['ProductRate']; ?>/- </font></p>
                                    </div>
                                    </center>
     <style>
.checked {
  color: orange;
}
</style>

<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>

                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
<?php
}
?>
                                </div><!-- End .row -->
                            </div><!-- End .products -->


                			
                		</div><!-- End .col-lg-9 -->
                		<aside class="col-lg-3 order-lg-first">
                			<div class="sidebar sidebar-shop">
                				
                				<div class="widget widget-collapsible" style="box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset; padding: 10px;">
    								<h3 class="widget-title">
									    <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1" style="font-family: Amasis MT Pro; margin-bottom: 0px; font-size: 22px; font-weight: bold;">
									        Category
									    </a>
									</h3><!-- End .widget-title -->

									<div class="collapse show" id="widget-1">
										<div class="widget-body">
											<div class="filter-items filter-items-count">
											    
											<?php
$Product = mysqli_query($sql_con,"SELECT any_value(ProductCategory) as ProductCategorys FROM `product` WHERE RegistrationId='$user' GROUP BY ProductCategory");
   while($Cate = mysqli_fetch_array($Product))
   {
											?>
												<div class="filter-item">
													<div class="custom-control">
														
													<a href="category.php?id=<?php echo $Cate['ProductCategorys']; ?>&user6=<?php echo $user; ?>&name=<?php echo $nam; ?>">	<label class="custom-control-label" for="cat-1"><?php echo $Cate['ProductCategorys']; ?></label></a>
													</div><!-- End .custom-checkbox -->
												
												</div><!-- End .filter-item -->
<?php
}
?>
											</div><!-- End .filter-items -->
										</div><!-- End .widget-body -->
									</div><!-- End .collapse -->
        						</div><!-- End .widget -->

        					
        						
                			</div><!-- End .sidebar sidebar-shop -->
                		</aside><!-- End .col-lg-3 -->
                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

 <?php
$de = mysqli_query($sql_con, "SELECT * FROM about_firm where RegistrationId='$user'");
while($des = mysqli_fetch_array($de))
{
    $desc = $des['Description'];
}
?>

<style>
.text-sm {
    font-size: 14px !important;
    overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 4; /* number of lines to show */
   -webkit-box-orient: vertical;
   text-align: justify;
}
</style>
        <footer class="footer" style="background: #003153;">
        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-6 col-lg-4">
	            			<div class="widget widget-about">
	            			
	            			<img src="../image/<?php echo $logo; ?>" class="footer-logo img-thumbnail" alt="Footer Logo" style="height: 100px;">
	            		<h5 style="color: white; font-weight: bolder; font-family: Amasis MT Pro; "><?php echo $nam; ?></h5>
	            	
	            				<p style="color: white" class="text-sm"><?php echo $desc; ?></p>
	            				
	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-2">
	            			<div class="widget">
	            				<h4 class="widget-title" style="color: white; font-size: 22px;">Useful Links</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="index.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white;">Home</a></li>
	            					<li><a href="about.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white;">About Us</a></li>
	            					<li><a href="product.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white;">Menu</a></li>
	            					<li><a href="team.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white;">Team</a></li>
	            					<li><a href="contact.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white;">Contact Us</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title" style="color: white; font-size: 22px;">Our Menu</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            				    <?php
	            				    $menupr = mysqli_query($sql_con, "SELECT * FROM product where RegistrationId='$user' limit 6");
	            				    while($men = mysqli_fetch_array($menupr))
	            				    {
	            				        $produ = $men['ProductName'];
	            				        $ide = $men['id'];
	            				    ?>
	            					<li><a href="product-detail.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="color: white;"><?php echo $produ; ?></a></li>
	            					<?php
	            				    }
	            				    ?>
	            				
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title" style="color: white; font-size: 22px;">Contact Us</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#" style="color: white;"><?php echo $location; ?>, <?php echo $city; ?>, <?php echo $State; ?>, <?php echo $pincode; ?>, <?php echo $country; ?></a></li>
	            					<li><a href="#" style="color: white;"><?php echo $MobileNo; ?></a></li>
	            					<li><a href="#" style="color: white;"><?php echo $EmailId; ?></a></li>
	            					
	            				</ul><!-- End .widget-list -->
	            				<div class="social-icons" style="margin-top: 20px;">
                                    <a href="<?php echo $facebook; ?>" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f" style="color: white;"></i></a>
                                    <a href="<?php echo $Twitter; ?>" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter" style="color: white;"></i></a>
                                    <a href="<?php echo $Instagram; ?>" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram" style="color: white;"></i></a>
                                    <a href="<?php echo $LinkedIn; ?>" class="social-icon" target="_blank" title="Pinterest"><i class="icon-linkedin" style="color: white;"></i></a>
                                    <a href="<?php echo $youtube; ?>" class="social-icon" target="_blank" title="Pinterest"><i class="icon-youtube" style="color: white;"></i></a>
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
                            <li class="active">
                               <a href="index.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-weight: bold;">Home</a>
                            </li>
                          <li>
                               <a href="about.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-weight: bold;">About Us</a>
                            </li>
                            <li>
                               <a href="product.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-weight: bold;">Menu</a>
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
                               <a href="contact.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-weight: bold;">Contact</a>
                            </li>
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                
            </div><!-- End .tab-content -->

        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                   
                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email" name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password" name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

 
    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.plugin.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-4.js"></script>
    
    <script>
        $(function() {
        $('.material-card > .mc-btn-action').click(function () {
            var card = $(this).parent('.material-card');
            var icon = $(this).children('i');
            icon.addClass('fa-spin-fast');

            if (card.hasClass('mc-active')) {
                card.removeClass('mc-active');

                window.setTimeout(function() {
                    icon
                        .removeClass('fa-arrow-left')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-bars');

                }, 800);
            } else {
                card.addClass('mc-active');

                window.setTimeout(function() {
                    icon
                        .removeClass('fa-bars')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-arrow-left');

                }, 800);
            }
        });
    });
    </script>
</body>
<!-- molla/index-4.html  22 Nov 2019 09:54:18 GMT -->
</html>