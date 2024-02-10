<?php
$user = $_GET['user6'];
$name = $_GET['name'];

include 'connection.php';

$result = mysqli_query($sql_con, "SELECT * FROM `register` where RegistrationId='$user'");
while($row = mysqli_fetch_array($result))
{
    $landmark = $row['CompanyLocation'];
    $city = $row['CompanyCity'];
    $pincode = $row['CompanyPincode'];
    $state = $row['State'];
    $country = $row['Country'];
    $email = $row['EmailId'];
    $mobile = $row['MobileNo'];
}

$social = mysqli_query($sql_con, "SELECT * FROM social where RegistrationId='$user'");
while($soc = mysqli_fetch_array($social))
{
    $facebook = $soc['Facebook'];
    $twitter = $soc['Twitter'];
    $linkedin = $soc['LinkedIn'];
    $instagram = $soc['Instagram'];
    $youtube = $soc["YouTube"];
}

$icon = mysqli_query($sql_con, "SELECT * FROM introduction where RegistrationId='$user'");
while($ico = mysqli_fetch_array($icon))
{
    $logo = $ico['Logo'];
}

$abo = mysqli_query($sql_con, "SELECT * FROM about_firm where RegistrationId='$user'");
while($abou = mysqli_fetch_array($abo))
   {
      $about = $abou['Description'];
    }
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $name; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">
  
<style>
    /* Use a media query to add a breakpoint at 800px: */
@media screen and (max-width: 800px) {
  .display {
    display: none; /* The width is 100%, when the viewport is 800px or smaller */
  }
}
</style>

<style>
              .lead {
    font-size: 16px !important;
    overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 4; /* number of lines to show */
   -webkit-box-orient: vertical;
}
          </style>
   
   <style>
.sticky-container{
    padding:0px;
    margin:0px;
    position:fixed;
    right:-130px;
    top:230px;
    width:210px;
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

<style>
     .navbar{
     background: #fff;
     padding-top: 0;
     padding-bottom: 0;
     margin-bottom: 0px;
     box-shadow: 1px 3px 4px 0 #adadad33;
}
 .navbar-light .navbar-brand {
     color: #002147;;
}
 .navbar-light .navbar-nav .nav-link {
     color: #002147;;
}
 .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
     color: #002147;;
}
 .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
     color: #fff;
}
 .navbar-light .navbar-nav .nav-link{
     transition: 0.3s;
     padding-left: 24px;
     padding-right: 24px;
         font-size: 14px;
     font-weight: bolder;
}
 .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover{
     background: #002147;
     transition: 0.3s;
}
.dropdown-item:focus, .dropdown-item:hover {
    color: #fff;
    text-decoration: none;
    background-color: #002147 !important;
}
.sm-menu{
    border-radius: 0px;
    border: 0px;
    top: 97%;
    box-shadow: rgba(173, 173, 173, 0.2) 1px 3px 4px 0px;
}
.dropdown-item {
    color: #3c3c3c;
        font-size: 14px;
}
.dropdown-item.active, .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #2196F3;
}
.navbar-toggler{
    outline: none !important;
}
.navbar-tog{
    color: #1ebdc2;
}
.megamenu-li {
	position: static;
}

.megamenu {
	position: absolute;
	width: 100%;
	left: 0;
	right: 0;
	padding: 15px;
}
.megamenu h6{
    margin-left: 21px;
}
.megamenu i{
    width: 20px;
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

<style>
    .testimonial{
    border: 10px solid #662a66;
    padding: 40px 0 25px 0;
    margin: 50px;
    text-align: center;
    position: relative;
}
.testimonial:before{
    content: "\f10d";
    font-family: "Font Awesome 5 Free";
    width: 100px;
    height: 100px;
    line-height: 100px;
    background: #fff;
    margin: 0 auto;
    font-size: 70px;
    font-weight: 900;
    color: #f1971f;
    position: absolute;
    top: -60px;
    left: 0;
    right: 0;
}
.testimonial .title{
    padding: 7px 0;
    margin: 0 -30px 20px;
    border: 7px solid #fff;
    background: #e8326f;
    font-size: 22px;
    font-weight: 700;
    color: #fff;
    letter-spacing: 1px;
    text-transform: uppercase;
    position: relative;
}
.testimonial .title:before{
    content: "";
    border-top: 15px solid #662a66;
    border-left: 15px solid transparent;
    border-bottom: 15px solid transparent;
    position: absolute;
    bottom: -37px;
    left: 0;
}
.testimonial .title:after{
    content: "";
    border-top: 15px solid #662a66;
    border-right: 15px solid transparent;
    border-bottom: 15px solid transparent;
    position: absolute;
    bottom: -37px;
    right: 0;
}
.testimonial .post{
    display: inline-block;
    font-size: 14px;
    font-weight: 700;
    color: #fff;
    text-transform: capitalize;
}
.testimonial .description{
    padding: 0 20px;
    margin: 0;
    font-size: 15px;
    color: #6f6f6f;
    letter-spacing: 1px;
    line-height: 30px;
}
.owl-theme .owl-controls{ margin-top: 0; }
.owl-theme .owl-controls .owl-buttons div{
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 35px;
    background: #f1971f;
    color: #fff;
    border-radius: 0;
    margin-right: 5px;
    opacity: 1;
}
.owl-prev:before,
.owl-next:before{
    content: "\f060";
    font-family: "Font Awesome 5 Free";
    font-size: 20px;
    font-weight: 900;
}
.owl-next:before{ content: "\f061"; }
@media only screen and (max-width: 990px){
    .testimonial{ margin: 30px; }
}
</style>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
 <div class="sticky-container">
    <ul class="sticky">
        
        <li style="background-color: #3B5998; color: white;  padding: 12px;">
          <a href="<?php echo $facebook; ?>" target="_blank" style="background-color: #3B5998; color: white;">
            <i class="icon-facebook-f" style="font-size: 20px; text-align: center; "></i>
          </a>
        </li>
        <li style="background-color: #55ACEE; color: white;  padding: 12px;">
            <a href="<?php echo $Twitter; ?>" target="_blank" style="background-color: #55ACEE; color: white;"> 
            <i class="icon-twitter" style="font-size: 20px; text-align: center; "></i>
            </a>
        </li>
        <li style="background-color: #bb0000; color: white;  padding: 12px;">
            <a href="<?php echo $youtube; ?>" target="_blank" style="background-color: #bb0000; color: white;"> 
            <i class="icon-youtube" style="font-size: 20px; text-align: center;"></i>
            </a>
        </li>
        <li style="background-color: #125688; color: white;  padding: 12px;">
             <a href="<?php echo $Instagram; ?>" target="_blank" style="background-color: #125688; color: white;"> <i class="icon-instagram" style="font-size: 20px; text-align: center; "></i>
             </a>
        </li>
        <li style="background-color: #007bb5; color: white;  padding: 12px;">
            <a href="<?php echo $LinkedIn; ?>" target="_blank" style="background-color: #007bb5; color: white;"> 
          <i class="icon-linkedin" style="font-size: 20px; text-align: center;"> </i>
            </a>
        </li>
        <li style="background-color: green; color: white;  padding: 12px;">
             <a href="https://api.whatsapp.com/send?phone=<?php echo "+91".$MobileNo;?>" target="_blank" style="background-color: green; color: white;"> 
             <i class="icon-whatsapp" style="font-size: 20px; text-align: center;"></i>
             </a>
        </li>
    </ul>
</div>
 
 <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3" style="background-color: #003153; color: white;">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <div style="background-color: #003153; margin-top: 0px; margin-bottom: 0px; padding-top: 0px; padding-bottom: 0px;">
      <div class="container" style="margin-top: 0px; margin-bottom: 0px;">
        <div class="row align-items-center" style="margin-top: 0px; margin-bottom: 0px;">
          <div class="col-lg-9 d-lg-block" style="margin-top: 0px; margin-bottom: 0px;">
            
            <a href="#" style="font-size: 14px; font-weight: bold; color: white;" class="small mr-3"><span class="icon-phone2"></span> <?php echo $mobile; ?></a> 
            <a href="#" style="font-size: 14px; font-weight: bold; color: white;" class="small mr-3"><span class="icon-envelope-o"></span> <?php echo $email; ?></a> 
          </div>
          <div class="col-lg-3 text-right social-wrap display" style="margin-top: 0px; margin-bottom: 0px;">
           
          </div>
        </div>
      </div>
    </div>
    
   <nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="padding: 0px;"><img src="../image/<?php echo $logo; ?>" style="width: 200px; height: 50%;" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile_nav" aria-controls="mobile_nav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span> 
        </button>
        <div class="collapse navbar-collapse" id="mobile_nav">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 float-md-right">
        </ul>
        <ul class="navbar-nav navbar-light">
            <li class="nav-item"><a class="nav-link" href="index.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="about.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="achivements.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Achivements</a></li>
<li class="nav-item"><a class="nav-link" href="gallery.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Gallery</a></li>
<li class="nav-item"><a class="nav-link" href="teachers.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Our Teachers</a></li>

<li class="nav-item"><a class="nav-link" href="topper.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Our Topper</a></li>
<li class="nav-item"><a class="nav-link" href="admissions.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Admissions</a></li>
<li class="nav-item"><a class="nav-link" href="contact.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Contact Us</a></li>
        </ul>
        </div>
    </div>
</nav>

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg');">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-12">
              <h1 style="color: white; text-align: center; margin-bottom: 5px; font-family: Amasis MT Pro; font-weight: bolder; text-transform: uppercase;">About Us</h1>
            
            </div>
          </div>
        </div>
      </div> 
    
<?php
          $abo = mysqli_query($sql_con, "SELECT * FROM about_firm where RegistrationId='$user'");
          while($abou = mysqli_fetch_array($abo))
          {
              $about = $abou['Description'];
              $bussines = $abou['Bussines'];
              $Employee = $abou['Employee'];
              $Establishment = $abou['Establishment'];
              $mission = $abou['Mission'];
              $vission = $abou['Vission'];
              $image = $abou['Image'];
          }
          ?>
    <div class="container-fluid pt-5" style="background: #f2f3f4; padding-bottom: 20px;">
            <div class="row">
              <div class="col-lg-4">
                <h2 style="color: black; text-align: center; margin-bottom: 5px; font-size: 28px; font-family: Amasis MT Pro; font-weight: bold;">About <?php echo $name; ?></h2>
              <hr style="height:2px; background-color: black; width: 50%; margin-top: 0px; margin-bottom: 10px;">
                <img src="../image/<?php echo $image; ?>" style="width: 100%;" class="img-thumbnail img-fluid">
              </div>
              <div class="col-lg-8">
        <p style="color: black; font-size: 18px; font-family: Amasis MT Pro;"><b>Bussines Type:</b> <?php echo $bussines; ?> </p>
           <p style="color: black; font-size: 18px; font-family: Amasis MT Pro;"><b>No of Employee:</b> <?php echo $Employee; ?></p>
       <p style="color: black; font-size: 18px; font-family: Amasis MT Pro;"><b>Year Of Establishment:</b> <?php echo $Establishment; ?></p>
         <p style="color: black; text-align: justify;"><?php echo $about; ?></p>
           
              </div>
             
            </div>
          </div>

    <div class="site-section" style="padding-top: 30px; padding-bottom: 20px; background: #003153;">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div style="box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; padding: 10px; background: white;">
                    <h2 class="section-title-underline" style="color: black; text-align: center; margin-bottom: 5px; font-size: 28px; font-family: Amasis MT Pro; font-weight: bold;">
                        Our Mission
                    </h2>
                    <hr style="height:2px; background-color: black; width: 50%; margin-top: 0px; margin-bottom: 10px;">
                   <p style="color: black; text-align: justify;"><?php echo $mission; ?></p>
                </div>
                </div>
                <div class="col-lg-6 ml-auto align-self-center">
                    <div style="box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; padding: 10px; background: white;">
                    <h2 class="section-title-underline" style="color: black; text-align: center; margin-bottom: 5px; font-size: 28px; font-family: Amasis MT Pro; font-weight: bold;">
                    Our Vission
                    </h2>
                    <hr style="height:2px; background-color: black; width: 50%; margin-top: 0px; margin-bottom: 10px;">
                    <p style="color: black;"><?php echo $vission; ?></p>
                </div>
            </div>
</div>
        </div>
    </div>


    <div class="section style-1" style="background-color: #f4f0ec; padding-bottom: 20px;">
      <div class="container">
        <div class="row">
            <?php
          $prin = mysqli_query($sql_con, "SELECT * FROM management where RegistrationId='$user'");
          while($pri = mysqli_fetch_array($prin))
          {
              $pri_name = $pri['Name'];
              $pri_desi = $pri['Designation'];
              $pri_desc = $pri['Description'];
              $pri_imag = $pri['Image'];
        
          ?>
          <div class="col-lg-8">
              <h2 style="color: black; margin-top: 20px;"><?php echo $pri_desi; ?> Message</h2>
              <hr style="height:2px; background-color: black;">
              <h4 style="color: black; font-weight: bold; margin-top: 10px;"><?php echo $pri_name; ?></h4>
        <p style="color: black;"><?php echo $pri_desc; ?> </p>
          </div>
          <div class="col-lg-4">
              <img src="../image/<?php echo $pri_imag; ?>" class="img-fluid img-thumbnail" style="width: 100%; margin-top: 20px;">
          </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
 
 <style>
    .team {
    text-align: center
}

.section {
    padding: 60px 0
}

.section-title {
    text-align: center;
    font-size: 40px;
    position: relative;
    margin-bottom: 40px;
    margin-top: 0
}

.team .team-item {
    text-align: left;
    margin-bottom: 30px;
    overflow: hidden
}

.team .team-item figure {
    position: relative;
    overflow: hidden
}

img {
    width: 100%
}
.team .team-item figure figcaption {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    background: rgba(9, 9, 9, .6);
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    transition: all .5s ease
}

.team .team-item figure figcaption .info {
    position: absolute;
    color: #fff;
    float: left;
    bottom: 10px;
    left: 20px;
    margin-left: -80px;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    transition: all .5s ease
}

.team .team-item figure:hover figcaption {
    opacity: 1
}

.team .team-item figure:hover figcaption .info {
    margin-left: 0;
}
.team .team-item figure figcaption .info h3 {
    font-size: 20px
}

.team .team-item figure figcaption .info p {
    color: #fff
}

.team .team-item figure:hover figcaption .social {
    margin-bottom: 0
}

.team .team-item figure figcaption .social {
    position: absolute;
    float: right;
    bottom: 28px;
    margin-bottom: -80px;
    right: 20px;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    transition: all .5s ease
}

.team .team-item figure figcaption .social a {
    color: #fff;
    font-size: 15px;
    width: 36px;
    height: 36px;
    background: #3f51b5;
    display: inline-block;
    text-align: center;
    line-height: 36px;
    border-radius: 2px
}
</style>

 <section class="team section" style="padding: 0px; background: #003153; padding-top: 10px;">
     <h2 class="section-title-underline" style="color: white; text-align: center; margin-bottom: 5px; font-size: 28px; font-family: Amasis MT Pro; font-weight: bold;">
              Our Teachers
            </h2>
            <hr style="height:2px; background-color: white; width: 50%; margin-top: 0px; margin-bottom: 0px;">
    <div class="container" style="margin-top: 10px;">
       
        <div class="row">
            <?php
            $team = mysqli_query($sql_con, "SELECT * FROM team where RegistrationId='$user'");
            while($tea = mysqli_fetch_array($team))
            {
                $name = $tea['Name'];
                $desc = $tea['Designation'];
                $image = $tea['Image'];
            ?>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="team-item" style="box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; background: white;">
                    <figure> <img src="../image/<?php echo $image; ?>" alt="" style="height: 220px; margin: 5px; width: 95%;" class="img-thumbnail img-responsive">
                        <figcaption>
                            <div class="info">
                                <h3 style="color: white;"><?php echo $name; ?></h3>
                                <p style="color: white;"><?php echo $desc; ?></p>
                            </div>
                            
                        </figcaption>
                    </figure>
                    <h5 style="text-align: center; color: black; font-weight: bold;"><?php echo $name; ?></h5>
                    <h6 style="text-align: center; color: black; font-weight: bold;"><?php echo $desc; ?></h6>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
    
 <div class="site-section" style="backgrouns-color: white; padding-top: 20px; padding-bottom: 20px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <h2 style="color: black; text-align: center; margin-bottom: 5px; font-size: 28px; font-family: Amasis MT Pro; font-weight: bold;">Our Student's Say</h2>
              <hr style="height:2px; background-color: black; width: 50%; margin-top: 0px; margin-bottom: 0px;">
           
          </div>
        </div>

<div class="row">
        <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">
                <?php
$test = mysqli_query($sql_con, "SELECT * FROM testimonial where RegistrationId='$user'");
while($rowe = mysqli_fetch_array($test))
{
    $name = $rowe['Name'];
    $desc = $rowe['Designation'];
    $image = $rowe['Image'];
?>
                <div class="testimonial">
                    <h3 class="title"><?php echo $name; ?>
                    </h3>
                    <p class="description">
                        <?php echo $desc; ?>
                    </p>
                </div>
  <?php
}
?>
            </div>
        </div>
    </div>
        
      </div>
    </div>
    
  <div class="site-section ftco-subscribe-1" style="background-image: url('images/bg_1.jpg'); padding: 20px;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <h2>Subscribe to us!</h2>
           
          </div>
          <div class="col-lg-5">
            <form action="" class="d-flex">
              <input type="text" class="rounded form-control mr-2 py-3" placeholder="Enter your email">
              <button class="btn btn-primary rounded py-3 px-4" type="submit">Send</button>
            </form>
          </div>
        </div>
      </div>
    </div> 


    <div class="footer" style="background-color: #003153;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <p class="mb-4" align="center"><img src="../image/<?php echo $logo; ?>" alt="Image" class="img-fluid img-thumbnail" style="width: 200px; height: 50%;"></p>
            <p class="lead"><?php echo $about; ?></p>  
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-3">
            <h3 class="footer-heading" style="font-size: 25px; font-weight: bold; text-decoration: none;"><span style="text-decoration: none;">Useful Links</span></h3>
            <ul class="list-unstyled">
                <li><a href="index.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" style="color: white;">Home</a></li>
                <li><a href="about.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" style="color: white;">About Us</a></li>
                <li><a href="achivements.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" style="color: white;">Achivements</a></li>
                <li><a href="team.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" style="color: white;">Our Teacher</a></li>
                <li><a href="gallery.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" style="color: white;">Gallery</a></li>
                <li><a href="conatct.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" style="color: white;">Conatct Us</a></li>
            </ul>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-3">
              <h3 class="footer-heading" style="font-size: 25px; font-weight: bold; text-decoration: none;"><span>Contact Us</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#" style="color: white; font-size: 16px;"><?php echo $landmark; ?>, <?php echo $pincode; ?>,<?php echo $city; ?>, <?php echo $state; ?>, <?php echo $country; ?></a></li>
                  <li><a href="#" style="color: white; font-size: 16px;"><?php echo $email; ?></a></li>
                  <li><a href="#" style="color: white; font-size: 16px;"><?php echo $mobile; ?></a></li>
                 
              </ul>
          </div>
        </div>

       
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <script src="js/main.js"></script>

<script>
    $(document).ready(function () {
$('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });
}); 
 
    $(document).ready(function() {
	$(".megamenu").on("click", function(e) {
		e.stopPropagation();
	});
});
</script>  

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
 
 <script>
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:2,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,1],
        pagination:false,
        navigation:true,
        navigationText:["",""],
        autoPlay:true
    });
});
</script>

</body>

</html>