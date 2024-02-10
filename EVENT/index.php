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
    $youtube = $row['Youtube'];
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
    <link rel="stylesheet" href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/skins/skin-demo-4.css">
    <link rel="stylesheet" href="assets/css/demos/demo-4.css">
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
.fa-spin-fast {
    -webkit-animation: fa-spin-fast .2s infinite linear;
    animation: fa-spin-fast .2s infinite linear;
}

@-webkit-keyframes fa-spin-fast {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(359deg);
        transform: rotate(359deg);
    }
}

@keyframes fa-spin-fast {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(359deg);
        transform: rotate(359deg);
    }
}

.opacity(@opacity) {
    opacity: @opacity;
    @opacity-ie: (@opacity * 100);
    filter: ~"alpha(opacity=@{opacity-ie})";
}

.mc-transtition (@duration: .3s) {
    -webkit-transition: all @duration;
    -moz-transition: all @duration;
    -ms-transition: all @duration;
    -o-transition: all @duration;
    transition: all @duration;
}

.materializr(@colorVar; @accent: '500'; @type: background-color) {
    @colorCalc: %('gm-%s-%s', replace(@colorVar, ' ', '-'), replace(@accent, ' ', '-'));
    @{type}: @@colorCalc;
}


.material-card {
    position: relative;
    height: 0;
    padding-bottom: calc(~'100% - 16px');
    margin-bottom: 6.6em;
    h2 {
        position: absolute;
        top: calc(~'100% - 16px');
        left: 0;
        width: 100%;
        padding: 10px 16px;
        color: #fff;
        font-size: 1.4em;
        line-height: 1.6em;
        margin: 0;
        z-index: 10;
        .mc-transtition();
        span {
            display: block;
        }
        strong {
            font-weight: 400;
            display: block;
            font-size: .8em;
        }
        &:before,
        &:after {
            content: ' ';
            position: absolute;
            left: 0;
            top: -16px;
            width: 0;
            border: 8px solid;
            .mc-transtition();
        }
        &:after {
            top: auto;
            bottom: 0;
        }
    }
    &.mc-active {
        @media screen and (max-width: 767px) {
            padding-bottom: 0;
            height: auto;
        }
        h2 {
            top: 0;
            padding: 10px 16px 10px 90px;
            &:before {
                top: 0;
            }
            &:after {
                bottom: -16px;
            }
        }
    }
    .mc-content {
        position: absolute;
        right: 0;
        top: 0;
        bottom: 16px;
        left: 16px;
        .mc-transtition();
    }
    .mc-btn-action {
        position: absolute;
        right: 16px;
        top: 15px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        border: 5px solid;
        width: 54px;
        height: 54px;
        line-height: 44px;
        text-align: center;
        color: #fff;
        cursor: pointer;
        z-index: 20;
        .mc-transtition();
    }
    &.mc-active .mc-btn-action {
        top: 62px;
    }
    .mc-description {
        position: absolute;
        top: 100%;
        right: 30px;
        left: 30px;
        bottom: 54px;
        overflow: hidden;
        .opacity(0);
        .mc-transtition(1.2s);
    }
    .mc-footer {
        height: 0;
        overflow: hidden;
        .mc-transtition();
        h4 {
            position: absolute;
            top: 200px;
            left: 30px;
            padding: 0;
            margin: 0;
            font-size: 16px;
            font-weight: 700;
            .mc-transtition(1.4s);
        }
        a {
            display: block;
            float: left;
            position: relative;
            width: 52px;
            height: 52px;
            margin-left: 5px;
            margin-bottom: 15px;
            font-size: 28px;
            color: #fff;
            line-height: 52px;
            text-decoration: none;
            top: 200px;
            &:nth-child(1) {
                .mc-transtition (.5s)
            }
            &:nth-child(2) {
                .mc-transtition (.6s)
            }
            &:nth-child(3) {
                .mc-transtition (.7s)
            }
            &:nth-child(4) {
                .mc-transtition (.8s)
            }
            &:nth-child(5) {
                .mc-transtition (.9s)
            }
        }
    }
    .img-container {
        overflow: hidden;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 3;
        .mc-transtition();
    }
    &.mc-active {
        .img-container {
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            left: 0;
            top: 12px;
            width: 60px;
            height: 60px;
            z-index: 20;
        }
        .mc-content {
            padding-top: 5.6em;
            @media screen and (max-width: 767px) {
                position: relative;
                margin-right: 16px;
            }
        }
        .mc-description {
            top: 50px;
            padding-top: 5.6em;
            .opacity(1);
            @media screen and (max-width: 767px) {
                position: relative;
                top: auto;
                right: auto;
                left: auto;
                padding: 50px 30px 70px 30px;
                bottom: 0;
            }
        }
        .mc-footer {
            overflow: visible;
            position: absolute;
            top: calc(~'100% - 16px');
            left: 16px;
            right: 0;
            height: 82px;
            padding-top: 15px;
            padding-left: 25px;
            a {
                top: 0;
            }
            h4 {
                top: -32px;
            }
        }
    }
}


.material-card-color (@color-palette) {
    .material-card.@{color-palette} {
        h2 {
            .materializr(@color-palette, '500');
            &:after {
                .materializr(@color-palette, '500', border-top-color);
                .materializr(@color-palette, '500', border-right-color);
                border-bottom-color: transparent;
                border-left-color: transparent;
            }
            &:before {
                border-top-color: transparent;
                .materializr(@color-palette, '900', border-right-color);
                .materializr(@color-palette, '900', border-bottom-color);
                border-left-color: transparent;
            }
        }
        &.mc-active {
            h2 {
                &:before {
                    border-top-color: transparent;
                    .materializr(@color-palette, '500', border-right-color);
                    .materializr(@color-palette, '500', border-bottom-color);
                    border-left-color: transparent;
                }
                &:after {
                    .materializr(@color-palette, '900', border-top-color);
                    .materializr(@color-palette, '900', border-right-color);
                    border-bottom-color: transparent;
                    border-left-color: transparent;
                }
            }
        }
        .mc-btn-action {
            .materializr(@color-palette, '500');
            &:hover {
                .materializr(@color-palette, '900');
            }
        }
        .mc-footer {
            h4 {
                .materializr(@color-palette, '900', color);
            }
            a {
                .materializr(@color-palette, '900');
            }
        }
        &.mc-active {
            .mc-content {
                .materializr(@color-palette, '50');
            }
            .mc-footer {
                .materializr(@color-palette, '100');
            }
            .mc-btn-action {
                .materializr(@color-palette, '50', border-color);
            }
        }
    }
}


.material-card-color(~"Red");
.material-card-color(~"Blue-Grey");
.material-card-color(~"Pink");
.material-card-color(~"Purple");
.material-card-color(~"Deep-Purple");
.material-card-color(~"Indigo");
.material-card-color(~"Blue");
.material-card-color(~"Light-Blue");
.material-card-color(~"Cyan");
.material-card-color(~"Teal");
.material-card-color(~"Green");
.material-card-color(~"Light-Green");
.material-card-color(~"Lime");
.material-card-color(~"Yellow");
.material-card-color(~"Amber");
.material-card-color(~"Orange");
.material-card-color(~"Deep-Orange");
.material-card-color(~"Brown");
.material-card-color(~"Grey");
.material-card-color(~"Blue-Grey");


@import (css) "https://fonts.googleapis.com/css?family=Raleway:400,300,200,500,600,700";
body {
  background-color: #ECEFF1;
  color: #37474F;
  font-family: 'Raleway', sans-serif;
  font-weight: 300;
  font-size: 16px;
}

h1, h2, h3 {
  font-weight: 200;
}


    </style>
    
    <style>
        .wrap {
    display: flex;
    background: #db7093;
    padding: 1rem 1rem 1rem 1rem;
    border-radius: 0.5rem;
    box-shadow: 7px 7px 30px -5px rgba(0,0,0,0.1);
    margin-bottom: 2rem;
    color: white;
}

.wrap:hover {
    background: #e63e62;
    color: white;
}

.ico-wrap {
    margin: auto;
}

.mbr-iconfont {
    font-size: 4.5rem !important;
    color: #313131;
    margin: 1rem;
    padding-right: 1rem;
}
.vcenter {
    margin: auto;
}

.mbr-section-title3 {
    text-align: left;
}
h2 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}
.display-5 {
    font-family: 'Source Sans Pro',sans-serif;
    font-size: 1.4rem;
}
.mbr-bold {
    font-weight: 700;
}

 p {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    line-height: 25px;
}
.display-6 {
    font-family: 'Source Sans Pro',sans-serif;
    font-size: 1re}
    </style>
    
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

<div class="container-fluid" style="background-color: #db7093; text-align: center;">
            <div class="row">
                <div class="col-sm-12">
                   <p style="color: white; padding-left: 20px; margin: 5px; text-align: left"><i class="fa fa-phone"></i> &nbsp;<?php echo $MobileNo; ?>, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope"></i> &nbsp;<?php echo $EmailId; ?></p>  </center> 
                </div>
                
            </div>
                 
             
            </div>
            
   <div class="page-wrapper">
        <header class="header header-intro-clearance header-4">
           
            <div class="header-middle" style="background: white;" >
                <div class="container">
                    <div class="header-left">
                        
                        <a href="index.php" class="logo" style="margin-top: 10px; margin-bottom: 10px;">
                            <img src="../image/<?php echo $logo; ?>" alt="Molla Logo" style="height: 80px;">
                        </a>
                    </div><!-- End .header-left -->

                   <div class="header-center">
                        <nav class="main-nav">
                           <ul class="menu sf-arrows" style="padding:0px; margin: 0px;">
                                
                                <li class="megamenu-container active">
                                 <a href="index.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="padding: 10px; margin: 0px; color: black; font-weight: bolder;">Home</a>
                                </li>
                                
                                <li class="megamenu-container" style="padding:0px; margin: 0px; width: 90px;">
                                 <a href="about.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="padding: 10px; margin: 0px; color: black; font-weight: bolder;">About us</a>
                                </li>
                            
                                <li class="megamenu-container">
                                 <a href="venues.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="padding: 10px; margin: 0px; color: black; font-weight: bolder;">Venues</a>
                                </li>
                                
                                 <li class="megamenu-container">
                                 <a href="vendors.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="padding: 10px; margin: 0px; color: black; font-weight: bolder;">Services</a>
                                </li>
                                
                                 <li class="megamenu-container">
                                 <a href="e-invites.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="padding: 10px; margin: 0px; color: black; width: 90px; font-weight: bolder;">E-Invites</a>
                                </li>
                                
                                <li class="megamenu-container">
                                 <a href="gallery.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="padding: 10px; margin: 0px; color: black; font-weight: bolder;">Gallery</a>
                                </li>
                                
                                 <li class="megamenu-container">
                                 <a href="team.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="padding: 10px; margin: 0px; color: black; font-weight: bolder;">Team</a>
                                </li>
                                
                                <li class="megamenu-container">
                                 <a href="blog.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="padding: 10px; margin: 0px; color: black; font-weight: bolder;">Blog</a>
                                </li>
                               
                               <li class="megamenu-container">
                                 <a href="contact.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="padding: 10px; margin: 0px; color: black; font-weight: bolder;">Contact </a>
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
            <div class="intro-slider-container mb-5">
                <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" 
                    data-owl-options='{
                        "dots": true,
                        "nav": false, 
                        "responsive": {
                            "1200": {
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
                    <?php
                    $event = mysqli_query($sql_con, "SELECT * FROM banner where RegistrationId='$user'");
                    while($eve = mysqli_fetch_array($event))
                    {
                        $banner1 = $eve['Banner_One'];
                        $banner2 = $eve['Banner_two'];
                        $banner3 = $eve['Banner_three'];
                    }
                    ?>
                    <div class="intro-slide" style="background-image: url('../image/<?php echo $banner1; ?>');">
                        <div class="container intro-content">
                            <div class="row justify-content-end">
                                <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                                 
                                </div><!-- End .col-lg-11 offset-lg-1 -->
                            </div><!-- End .row -->
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url('../image/<?php echo $banner2; ?>');">
                        <div class="container intro-content">
                            <div class="row justify-content-end">
                                <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                                    
                                </div><!-- End .col-md-6 offset-md-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                    
                    <div class="intro-slide" style="background-image: url('../image/<?php echo $banner3; ?>');">
                        <div class="container intro-content">
                            <div class="row justify-content-end">
                                <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                                    
                                </div><!-- End .col-md-6 offset-md-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .intro-slider owl-carousel owl-simple -->

                <span class="slider-loader"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="container-fluid">
                <h2 class=" text-center" style="font-family: Amasis MT Pro; margin-bottom: 0px; font-size: 28px; font-weight: bold;">Popular Venue Search</h2>
                <!-- End .title text-center -->
               <hr style="height:2px;border-width: 50%;color:gray;background-color: black; margin-bottom: 10px; margin-top: 10px; width: 50%; font-size: 26px;">
                
                <div class="tab-content tab-content-carousel just-action-icons-sm">
                    <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                        <?php 
                        $result = mysqli_query($sql_con, "SELECT any_value(Venues_Type) as ProductCategorys, any_value(Venues_Image) as Productes FROM venues where RegistrationId='$user' group by Venues_Type");
                        while($row = mysqli_fetch_array($result))
                        {
                            $category = $row['ProductCategorys'];
                            $images = $row['Productes'];
                        ?>
                            <div class="product product-2" style="background-color: #db7093;">
                                <figure class="product-media">
                                   
                                    <a href="category.php?id=<?php echo $category; ?>&user6=<?php echo $user; ?>&name=<?php echo $nam; ?>">
                                        <img src="../image/<?php echo $images; ?>" alt="Product image" class="product-image">
                                    </a>

                                   <!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body" style="background-color: #db7093;">
                                  
                                    <h3 class="product-title" style="display: block; text-align: center;"><a href="category.php?id=<?php echo $category; ?>&user6=<?php echo $user; ?>&name=<?php echo $nam; ?>" style="font-family: Arial; font-weight: bolder; font-size: 16px; color: white;"><?php echo $category; ?></a></h3><!-- End .product-title -->
                                    <!-- End .product-price -->
                                   
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
<?php
}
?>
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                   </div> 
            </div><!-- End .container -->

            <div class="mb-4"></div><!-- End .mb-4 -->

   <section style="background-color: #f4f0ec; padding-top: 0px; padding-bottom: 40px;">
<div class="container">
 <h2 class=" text-center" style="font-family: Amasis MT Pro; margin-bottom: 0px; font-size: 28px; font-weight: bold; padding-top: 40px;">Wedding Category</h2><!-- End .title text-center -->
                <hr style="height:2px;border-width: 50%;color:gray;background-color: black; margin-bottom: 10px; margin-top: 10px; width: 50%; font-size: 26px;">
                
		<div class="row mbr-justify-content-center">
<?php
$venu = mysqli_query($sql_con, "SELECT any_value(Venues_Type) as Venues_Types, any_value(Venues_Image) as Venues_Images FROM `venues` where RegistrationId='$user'");
while($rowd = mysqli_fetch_array($venu))
{
    $venue = $rowd['Venues_Types'];
    $ven_img = $rowd['Venues_Images'];
}
?>
            <div class="col-lg-6 mbr-col-md-10">
              <a href="venues.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>">  <div class="wrap">
                    <div class="ico-wrap">
                       <img src="../image/<?php echo $ven_img; ?>" class="img-fluid img-thumbnail" style="height: 100px;">
                    </div>
                    <div class="text-wrap vcenter">
                        <h1 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5" style="color: white; font-size: 30px;">Venues</h1>
                        
                    </div>
                </div> </a>
            </div>
            <?php
$vendors = mysqli_query($sql_con, "SELECT any_value(Vendors_Type) as Vendors_Types, any_value(Vendors_Image) as Vendors_Images FROM `vendors` where RegistrationId='$user'");
while($rowd = mysqli_fetch_array($vendors))
{
    $vendors = $rowd['Vendors_Types'];
    $vendor_img = $rowd['Vendors_Images'];
?>
           <div class="col-lg-6 mbr-col-md-10">
             <a href="vendors-category.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>&category=<?php echo $vendors; ?>">   <div class="wrap">
                    <div class="ico-wrap">
                       <img src="../image/<?php echo $vendor_img; ?>" class="img-fluid img-thumbnail" style="height: 100px;">
                    </div>
                    <div class="text-wrap vcenter">
                        <h1 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5" style="color: white; font-size: 30px;"><?php echo $vendors; ?></h1>
                        
                    </div>
                </div>
                </a>
            </div>
            <?php
}
?>
        </div>

</div>

</section>         
            <div class="container new-arrivals">

                    <div class="heading-center" align="center;">
                        <h2 class=" text-center" style="font-family: Amasis MT Pro; font-size: 28px; font-weight: bold; padding-top: 40px;">Popular Vendors </h2><!-- End .title text-center -->
                <hr style="height:2px;border-width: 50%;color:gray;background-color: black; margin-bottom: 10px; margin-top: 10px; width: 50%; font-size: 26px;">
                   
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel just-action-icons-sm">
                    <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                        <?php 
                        $result = mysqli_query($sql_con, "SELECT any_value(Vendors_Type) as ProductCategorys, any_value(Vendors_Image) as Productes FROM vendors where RegistrationId='$user' group by Vendors_Type");
                        while($row = mysqli_fetch_array($result))
                        {
                            $category = $row['ProductCategorys'];
                            $images = $row['Productes'];
                        ?>
                         <a href="vendors-category.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>&category=<?php echo $category; ?>">
                            <div class="product product-2" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px; background-color: #db7093;">
                                <figure class="product-media">
                                   
                                    <a href="vendors-category.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>&category=<?php echo $category; ?>">
                                        <img src="../image/<?php echo $images; ?>" alt="Product image" class="product-image">
                                    </a>

                                   <!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body" style="background-color: #db7093;">
                                    <div class="product-cat">
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title" style="text-align: center; display: block;"><a href="vendors-category.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>&category=<?php echo $category; ?>" style=" font-weight: bold; color: white;"><?php echo $category; ?></a></h3><!-- End .product-title -->
                                    <!-- End .product-price -->
                                   
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                            </a>
<?php
}
?>
                           
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    
                </div><!-- End .tab-content -->
            </div><!-- End .container -->

            <div class="container-fluid"  style="background-color: #f4f0ec;  padding-bottom: 40px; margin-top: 40px;">
                <h2 class=" text-center" style="font-family: Amasis MT Pro; font-size: 28px; font-weight: bold; padding-top: 40px;">Deals of the day</h2><!-- End .title text-center -->
               <hr style="height:2px;border-width: 50%;color:gray;background-color: black; margin-bottom: 10px; margin-top: 10px; width: 50%; font-size: 26px;">

                <div class="row">
                    
                    <?php
                    $deals = mysqli_query($sql_con, "SELECT * FROM deal where RegistrationId='$user' limit 2");
                    while($rowed = mysqli_fetch_array($deals))
                    {
                        $imagesdeal = $rowed["Image"];
                    ?>
                    <div class="col-lg-6 deal-col">
                        <div class="deal" >
                            <div class="deal-top">
                                <img src="../image/<?php echo $imagesdeal; ?>" style="width: 100%;">
                            </div><!-- End .deal-top -->

                        </div><!-- End .deal -->
                    </div><!-- End .col-lg-6 -->
                    <?php
                    }
                    ?>
                    
                </div><!-- End .row -->

            </div><!-- End .container -->

            <div class="container">
              
                <h2 style="font-family: Amasis MT Pro; font-size: 28px; font-weight: bold; padding-top: 40px; text-align: center;">Our Client</h2>
                
                <hr style="height:2px;border-width: 50%;color:gray;background-color: black; margin-bottom: 10px; margin-top: 10px; width: 50%; font-size: 26px;">
                
                <div class="owl-carousel mt-5 mb-5 owl-simple" data-toggle="owl" 
                    data-owl-options='{
                        "nav": false, 
                        "dots": false,
                        "margin": 30,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "420": {
                                "items":3
                            },
                            "600": {
                                "items":4
                            },
                            "900": {
                                "items":5
                            },
                            "1024": {
                                "items":6
                            }
                        }
                    }'>
                    <?php
                    $client = mysqli_query($sql_con, "SELECT * FROM client where RegistrationId='$user'");
                    while($rowese = mysqli_fetch_array($client))
                    {
                        $clientimage = $rowese['Image'];
                    ?>
                    <a href="../image/<?php echo $clientimage; ?>" target="_blank" class="brand">
                        <img src="../image/<?php echo $clientimage; ?>" alt="Brand Name" class="img-fluid img-thumbnail">
                    </a>
                    <?php
                    }
                    ?>

                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->

            <div class="mb-5"></div><!-- End .mb-5 -->

<div class="about-testimonials bg-light-2" style="padding-bottom: 40px;">
                    <div class="container">
                        <h2 class="text-center " style="font-family: Amasis MT Pro; font-size: 28px; font-weight: bold; padding-top: 40px;">What Our Customer Say About Us</h2><!-- End .title text-center -->
<hr style="height:2px;border-width: 50%;color:gray;background-color: black; margin-bottom: 10px; margin-top: 10px; width: 50%; font-size: 26px;">

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
                            <blockquote class="testimonial text-center" style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px; margin-top: 20px; background: white; padding: 20px;">
                                <img src="../image/<?php echo $testiImage; ?>" alt="user">
                                <p>“ <?php echo $testdescri; ?> ”</p>
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
               <footer class="footer" style="background-color: #db7093;">
        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-6 col-lg-4">
	            			<div class="widget widget-about">
	            				<img src="../image/<?php echo $logo; ?>" class="footer-logo" alt="Footer Logo"  class="img-fluid img-thumbnail" style="height: 100px; width: 200px;">
	            				<p class="text-sm" style="color: white;"><?php echo $descrip; ?></p>
	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-2">
	            			<div class="widget">
	            				<h4 class="widget-title" style="color: white; font-size: 22px;">Useful Links</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="index.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white; font-size: 16px;">Home</a></li>
	            					<li><a href="about.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white; font-size: 16px;">About Us</a></li>
	            					<li><a href="vendors.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white; font-size: 16px;">Vendors</a></li>
	            					<li><a href="venues.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white; font-size: 16px;">Venues</a></li>
	            					<li><a href="team.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white; font-size: 16px;">Team</a></li>
	            					<li><a href="contact.php?user6=<?php echo $user; ?>$name=<?php echo $nam; ?>" style="color: white; font-size: 16px;">Contact Us</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-2">
	            			<div class="widget">
	            				<h4 class="widget-title" style="color: white; font-size: 22px;">Our Vendors</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            				    <?php
	            				    $menupr = mysqli_query($sql_con, "SELECT any_value(Vendors_Type) as vendoress FROM vendors where RegistrationId='$user' group by Vendors_Type limit 6");
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

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title" style="color: white; font-size: 22px;">Contact Us</h4><!-- End .widget-title -->

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
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

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
                                <a href="index.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>">Home</a>
                            </li>
                            <li>
                                <a href="about.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>">About us</a>
                            </li>
                            <li>
                                <a href="venues.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>">Venues</a>
                            </li>
                            <li>
                                <a href="vendors.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>">Vendors</a>
                            </li>
                            <li>
                                <a href="e-invites.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>">E-Invites</a>
                            </li>
                            <li>
                                <a href="gallery.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>">Gallery</a>
                            </li>
                            <li>
                                <a href="team.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>">Team</a>
                            </li>
                            <li>
                                <a href="blog.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>">Blog</a>
                            </li>
                            <li>
                                <a href="contact.php?user6=<?php echo $user; ?>&name=<?php echo $nam; ?>">Contact Us</a>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

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