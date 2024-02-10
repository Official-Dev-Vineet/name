<?php
$user = $_GET['user6'];
$name = $_GET['name'];
include 'connection.php';

$result = mysqli_query($sql_con, "SELECT  * FROM register where RegistrationId='$user'");
while($row = mysqli_fetch_array($result))
{
    $email = $row['EmailId'];
    $mobile = $row["MobileNo"];
    $location = $row["CompanyLocation"];
    $city = $row["CompanyCity"];
    $pincode = $row["CompanyPincode"];
    $state = $row["State"];
    $country = $row["Country"];
    $logo = $row["CompanyLogo"];
    $desc = $row["CompanyDescription"];
}

$social = mysqli_query($sql_con, "SELECT  * FROM socialmedia where RegistrationId='$user'");
while($rowe = mysqli_fetch_array($social))
{
    $twitter = $rowe["Twitter"];
    $facebook = $rowe["Facebook"];
    $instagram = $rowe["Instagram"];
    $linkedin = $rowe["LinkedIn"];
    $youtube = $rowe["YouTube"];
}

$icon = mysqli_query($sql_con, "SELECT * FROM introduction where RegistrationId='$user'");
while($ico = mysqli_fetch_array($icon))
{
    $logo = $ico['Logo'];
}

?>

<!doctype html>
<html lang="en">

<!-- 02_05_gallery.html  [XR&CO'2014], Tue, 22 Oct 2019 11:55:03 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $name; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="plugin/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="plugin/bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="fonts/poppins/poppins.css">
    <link rel="stylesheet" href="plugin/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugin/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugin/process-bar/tox-progress.css">
    <link rel="stylesheet" href="plugin/owl-carouse/owl.carousel.min.css">
    <link rel="stylesheet" href="plugin/owl-carouse/owl.theme.default.min.css">
    <link rel="stylesheet" href="plugin/animsition/css/animate.css">
    <link rel="stylesheet" href="plugin/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugin/mediaelement/mediaelementplayer.css">
    <link rel="stylesheet" href="plugin/datetimepicker/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="plugin/datetimepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="plugin/lightgallery/lightgallery.css">
    <link rel="stylesheet" href="css/style.css">
<style>
.sticky-container{
    padding:0px;
    margin:0px;
    position:fixed;
    right:-130px;
    top:230px;
    width: 170px;
    z-index: 1100;
}
.sticky li{
    list-style-type:none;
    background-color:#fff;
    color:#efefef;
    height:43px;
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

</head>
<body>

<!--load page-->
<div class="load-page">
    <div class="sk-wave">
        <div class="sk-rect sk-rect1"></div>
        <div class="sk-rect sk-rect2"></div>
        <div class="sk-rect sk-rect3"></div>
        <div class="sk-rect sk-rect4"></div>
        <div class="sk-rect sk-rect5"></div>
    </div>
</div>

<div class="sticky-container">
    <ul class="sticky">
        
        <li style="background-color: #3B5998; color: white;  padding: 12px;">
          <a href="<?php echo $facebook; ?>" target="_blank" style="background-color: #3B5998; color: white;">
            <i class="fa fa-facebook" style="font-size: 20px; text-align: center; "></i>
          </a>
        </li>
        <li style="background-color: #55ACEE; color: white;  padding: 12px;">
            <a href="<?php echo $Twitter; ?>" target="_blank" style="background-color: #55ACEE; color: white;"> 
            <i class="fa fa-twitter" style="font-size: 20px; text-align: center; "></i>
            </a>
        </li>
        <li style="background-color: #bb0000; color: white;  padding: 12px;">
            <a href="<?php echo $youtube; ?>" target="_blank" style="background-color: #bb0000; color: white;"> 
            <i class="fa fa-youtube" style="font-size: 20px; text-align: center;"></i>
            </a>
        </li>
        <li style="background-color: #125688; color: white;  padding: 12px;">
             <a href="<?php echo $Instagram; ?>" target="_blank" style="background-color: #125688; color: white;"> <i class="fa fa-instagram" style="font-size: 20px; text-align: center; "></i>
             </a>
        </li>
        <li style="background-color: #007bb5; color: white;  padding: 12px;">
            <a href="<?php echo $LinkedIn; ?>" target="_blank" style="background-color: #007bb5; color: white;"> 
          <i class="fa fa-linkedin" style="font-size: 20px; text-align: center;"> </i>
            </a>
        </li>
        <li style="background-color: green; color: white;  padding: 12px;">
             <a href="https://api.whatsapp.com/send?phone=<?php echo "+91".$MobileNo;?>" target="_blank" style="background-color: green; color: white;"> 
             <i class="fa fa-whatsapp" style="font-size: 20px; text-align: center;"></i>
             </a>
        </li>
    </ul>
</div>

<!-- Mobile nav -->
<nav class="visible-sm visible-xs mobile-menu-container mobile-nav">
    <div class="menu-mobile-nav navbar-toggle">
        <span class="icon-bar"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </div>
    <div id="cssmenu" class="animated">
        <div class="uni-icons-close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <ul class="nav navbar-nav animated">
                                        <li><a href="index.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Home</a></li>
                                        <li><a href='about-us.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>'>About Us</a></li>
                                        <li><a href="department.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Departments</a></li>
                                        <li><a href="doctor.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Doctor</a></li>
                                        <li><a href="service.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Services</a></li>
                                        
                                         <li><a href="gallery.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Gallery</a></li>
                            
                                        <li class="has-sub"><a href='#'>shop</a>
                                                <ul>
                                                    <li><a href="medicine.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Medicine</a></li>
                                        <li><a href="06_03_cart.html">Cart</a></li>
                                                </ul>
                                            </li>
                                        <li><a href='blog.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>'>Blog</a></li>
                                          <li><a href="contact.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Contact</a></li>
                                           <li><a href="appointment.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" >Appointment</a></li>  
                                        </ul>
        <div class="clearfix"></div>
    </div>
</nav>
<!-- End mobile menu -->

<div class="uni-home-3">
    <div id="wrapper-container" class="site-wrapper-container">
        <header>
            <div class="uni-medicare-header sticky-menu">
                <div class="uni-header-top">
                    <div class="container">
                        <div class="uni-header-top-left">
                            <!--LOGO-->
                            <div class="wrapper-logo">
                                <a class="logo-default" href="#"><img src="../image/<?php echo $logo; ?>" alt="" class="img-responsive" style="height: 90px; width: 125px;"></a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="uni-header-top-right">
                            <ul>
                                <li>
                                    <div class="uni-header-top-icons">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                    <div class="uni-header-top-text">
                                        <span><?php echo $location; ?>, <?php echo $city; ?>,<br> <?php echo $pincode; ?>, <?php echo $state; ?></span>
                                        <h4><?php echo $country; ?></h4>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <div class="uni-header-top-icons">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                    <div class="uni-header-top-text">
                                        <span>Call us</span>
                                        <h4><?php echo $mobile; ?></h4>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <div class="uni-header-top-icons">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="uni-header-top-text">
                                        <span>Send a message</span>
                                        <h4><?php echo $email; ?></h4>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="uni-medicare-header-main-home-3">
                    <div class="container">
                        <div class="uni-medicare-header-main">
                            <!--MENU TEXT-->
                            <div class="uni-main-menu">
                                <nav class="main-navigation uni-menu-text">
                                    <div class="cssmenu">
                                        <ul>
                                        <li><a href="index.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Home</a></li>
                                        <li><a href='about-us.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>'>About Us</a></li>
                                        <li><a href="department.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Departments</a></li>
                                        <li><a href="doctor.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Doctor</a></li>
                                        <li><a href="service.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Services</a></li>
                                        
                                         <li><a href="gallery.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Gallery</a></li>
                            
                                        <li class="has-sub"><a href='#'>shop</a>
                                                <ul>
                                                    <li><a href="medicine.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Medicine</a></li>
                                        <li><a href="06_03_cart.html">Cart</a></li>
                                                </ul>
                                            </li>
                                        <li><a href='blog.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>'>Blog</a></li>
                                          <li><a href="contact.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Contact</a></li>  
                                          <li><a href="appointment.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" >Appointment</a></li>  
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="main-content" class="site-main-content">
            <section class="site-content-area">

                <div class="uni-banner-default uni-background-1">
                    <div class="container">
                        <!-- Page title -->
                        <div class="page-title">
                            <div class="page-title-inner">
                                <h1>Gallery</h1>
                            </div>
                        </div>
                        <!-- End page title -->

                    </div>
                </div>


                <div class="uni-gallery-body" style="padding: 0px;">
                    <div class="container">
                        <div class="uni-shortcode-tabs-default">
                            <div class="uni-shortcode-tab-2">
                                <div class="tabbable-panel">
                                    <div class="tabbable-line">
                                        
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_default_1">
                                                <div class="row"  id="lightgallery1">
                                <?php
                                $gall = mysqli_query($sql_con, "SELECT * FROM gallery where RegistrationId='REGN000050'");
                                while($galle = mysqli_fetch_array($gall))
                                {
                                    $image = $galle['Image'];
                                ?>
                                                    <div class="col-md-4 col-sm-6" data-src="../image/<?php echo $image; ?>">
                                                        <div class="item-img">
                                                            <img src="../image/<?php echo $image; ?>" alt="" class="img-responsive" style="height: 200px;">
                                                        </div>
                                                    </div>
                                <?php
                                }
                                ?>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>

 <style>
    .text-sm {
    font-size: 12px !important;
    overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 3; /* number of lines to show */
   -webkit-box-orient: vertical;
}
</style>
        <footer class="site-footer footer-default" style="padding-top: 0px;">
            <div class="footer-main-content" style="padding-top: 30px; padding-bottom: 30px;">
                <div class="container">
                    <div class="row">
                        <div class="footer-main-content-elements">
                            <div class="footer-main-content-element col-md-3 col-sm-6">
                                <aside class="widget">
                                    <div class="widget-title uni-uppercase" style="float: center;"><a href="#"><img src="../image/<?php echo $logo; ?>" alt="" class="img-responsive img-thumbnail" style="width: 125px; height: 100px; float: center"></a></div>
                                    <div class="widget-content">
                                        <p style="font-size: 12px;"><?php echo $desc; ?></p>
                                        <div class="uni-info-contact">
                                            <ul>
                                                <li> <?php echo $location; ?>, <?php echo $city; ?>, <?php echo $pincode; ?>, <?php echo $state; ?>, <?php echo $country; ?></li>
                                                <li> <?php echo $mobile; ?></li>
                                                <li><?php echo $email; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="footer-main-content-element col-md-3 col-sm-6">
                                <aside class="widget">
                                    <h3 class="widget-title uni-uppercase">quick links</h3>
                                    <div class="widget-content">
                                        <div class="uni-quick-link">
                                            <ul>
                                                <li><a href="index.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>"><span>+</span> Home</a></li>
                                                <li><a href="about-us.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>"><span>+</span> about</a></li>
                                                <li><a href="service.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>"><span>+</span> services</a></li>
                                                <li><a href="department.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>"><span>+</span> Department</a></li>
                                                <li><a href="doctor.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>"><span>+</span> doctor</a></li>
                                                <li><a href="contact.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>"><span>+</span> contact us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="footer-main-content-element col-md-3 col-sm-6">
                                <aside class="widget">
                                    <h3 class="widget-title uni-uppercase">Departments</h3>
                                    <div class="widget-content">
                                        <div class="uni-footer-latest-post">
                                            <ul>
                                                <?php
                                                $depar = mysqli_query($sql_con, "SELECT * FROM department where RegistrationId='$user' limit 7");
                                        while($rod = mysqli_fetch_array($depar))
                                        {
                                            $dep = $rod['DepartmentName'];
                                        ?>
                                               <li><a href="#" style="color: white;"><?php echo $dep; ?></a></li>
                                                <?php
                                        }
                                        ?>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="footer-main-content-element col-md-3 col-sm-6">
                                <aside class="widget">
                                    <h3 class="widget-title uni-uppercase">News<span>letter</span></h3>
                                    <div class="widget-content">
                                        <div class="uni-footer-newletter">
                                            <div class="input-group">
                                                <input type="email" class="form-control" placeholder="Enter your email">
                                                <button class="btn btn-sub" type="submit">subscribe</button>
                                            </div>
                                            <div class="uni-social">
                                                <h4>Follow us</h4>
                                                <ul>
                                    <li><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="copyright-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="copyright-text" style=" background: -webkit-linear-gradient(#3f97da, #3f97da);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;">Templateshub</p>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="plugin/jquery/jquery-2.0.2.min.js"></script>
<script src="plugin/jquery-ui/jquery-ui.min.js"></script>
<script src="plugin/bootstrap/js/bootstrap.js"></script>
<script src="plugin/process-bar/tox-progress.js"></script>
<script src="plugin/waypoint/jquery.waypoints.min.js"></script>
<script src="plugin/counterup/jquery.counterup.min.js"></script>
<script src="plugin/owl-carouse/owl.carousel.min.js"></script>
<script src="plugin/jquery-ui/jquery-ui.min.js"></script>
<script src="plugin/mediaelement/mediaelement-and-player.js"></script>
<script src="plugin/masonry/masonry.pkgd.min.js"></script>
<script src="plugin/datetimepicker/moment.min.js"></script>
<script src="plugin/datetimepicker/bootstrap-datepicker.min.js"></script>
<script src="plugin/datetimepicker/bootstrap-datepicker.tr.min.js"></script>
<script src="plugin/datetimepicker/bootstrap-datetimepicker.js"></script>
<script src="plugin/datetimepicker/bootstrap-datetimepicker.fr.js"></script>

<script src="plugin/lightgallery/picturefill.min.js"></script>
<script src="plugin/lightgallery/lightgallery.js"></script>
<script src="plugin/lightgallery/lg-pager.js"></script>
<script src="plugin/lightgallery/lg-autoplay.js"></script>
<script src="plugin/lightgallery/lg-fullscreen.js"></script>
<script src="plugin/lightgallery/lg-zoom.js"></script>
<script src="plugin/lightgallery/lg-hash.js"></script>
<script src="plugin/lightgallery/lg-share.js"></script>
<script src="plugin/sticky/jquery.sticky.js"></script>

<script src="js/main.js"></script>
</body>

<!-- 01_03_home_3.html  [XR&CO'2014], Tue, 22 Oct 2019 11:54:52 GMT -->
</html>