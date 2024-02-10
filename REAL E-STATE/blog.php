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


<!-- molla/blog-masonry-sidebar.html  22 Nov 2019 10:04:36 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $nam; ?></title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
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

<body style="font-family: Times New Roman, Times, serif;">
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
                          <img src="../image/<?php echo $logo; ?>" alt="Molla Logo" class="img-thumbnail" style="width: 150px;">
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
        			<h1 class="page-title" style="color: white; font-weight: bolder; font-family: Times New Roman, Times, serif;">All Blogs</h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
       
       <section style="padding-top: 40px; padding-bottom: 40px; background-color: #e5e4e2"> 
       <div class="container-fluid">
           
           <?php 
           $result = mysqli_query($sql_con, "SELECT * FROM blog where RegistrationId='$user'");
           while($row = mysqli_fetch_array($result))
           {
               $Title = $row['Title'];
               $Date = $row['Date'];
               $Time = $row['Time'];
               $Short_detail = $row['Short_detail'];
               $Image = $row['Image'];
               $id = $row['Sno'];
           ?>
           <div class="blog-item" >
    <a href="blog-detail.php?id=<?php echo $id; ?>&user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="background-color: white;">
        <div class="icon">
            <img src="../image/<?php echo $Image; ?>" alt="">
        </div>
        <div class="content">
            <div class="title"><?php echo $Title; ?>  <span class="blog-date"><?php echo $Date; ?></span> <span class="blog-date"><?php echo $Time; ?></span></div>
            <div class="rounded"></div>

<style>
    .text-sm {
    font-size: 16px !important;
    overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 2; /* number of lines to show */
   -webkit-box-orient: vertical;
}
</style>
            <p class="text-sm">
                <?php echo $Short_detail; ?>
            </p>
            
        </div>

        <div class="item-arrow">
            <i class="fa fa-arrow-right" style="font-size:36px"></i>
        </div>
    </a>
</div>
<?php
}
?>

</div>
</section>   
<style>
    img {
    width: 100%;
    vertical-align: middle;
  
}

.blog-item img {
  display: block;
}

.blog-item a {
    display: flex;
    padding: 50px;
    overflow: hidden;
    align-items: center;
    max-width: 1000px;
    margin: auto;
    color: #333;
    font-family: 'Lato', sans-serif;
    font-size: 16px;
    border-radius: 6px;
    margin-bottom: 50px;
    text-decoration: none;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}

.blog-item a:hover {
    box-shadow: 0 10px 50px 0 rgba(0, 0, 0, 0.2);
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}

.blog-item .icon {
    width: 35%;
    object-fit: cover;
    margin-right: 50px;
    border-radius: 6px;
    overflow: hidden;
    box-shadow: 0 15px 26px rgba(0, 0, 0, 0.4);
}

.blog-item .content {
    width: 65%;
}

.blog-item .content .title {
    font-size: 21px;
    text-transform: capitalize;
    color: #25aae1;
    font-weight: 600;
    font-family: 'Lato', sans-serif;
}



.blog-item .content .title .blog-date {
    font-size: 12px;
    margin-left: 20px;
    color: #333;
    font-family: 'Lato', sans-serif;
}

.blog-item .content .title .blog-date:before {
    content: '/';
    color: #2bb673;
    font-size: 25px;
    top: auto;
    position: relative;
    margin-right: 10px;
}

.blog-item .content .rounded {
    margin-left: 0;
    margin-top: 10px;
    margin-bottom: 10px;
}

.blog-item .item-arrow {
    height: 20px;
    width: 15%;
    position: relative;
    text-align: center;
    font-size: 35px;
    left: 0;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}

.blog-item a:hover > .item-arrow {
    /*padding-left: 40px;*/
    color: #25aae1;
    left: 30px;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}

.rounded {
    width: 70px;
    height: 5px;
    border-radius: 6px;
    background-image: linear-gradient(to right, #25aae1, #40e495);
    /* background: #2bb769; */
    margin-left: 0;
    margin-top: 10px;
    margin-bottom: 10px;
}

@media screen and (max-width: 768px){

    .blog-item .content {
        width: 100%;
        margin-top: 35px;
    }

    .blog-item .content .title {
        font-size: 18px;
    }

    .blog-item .item-arrow {
        margin: auto;
    }

    .blog-item .icon {
        width: 100%;
    }

    .blog-item .icon img {
        width: 100%;
        height: 150px;
        object-fit: cover;
    }

    .blog-item {
        width: 92%;
        margin: auto;
    }

    .blog-item a {
        display: block;
        padding: 30px;
    }

}
</style>
            
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
	            				<img src="../image/<?php echo $logo; ?>" class="footer-logo" alt="Footer Logo" style="width: 200px;" class="img-fluid img-thumbnail">
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