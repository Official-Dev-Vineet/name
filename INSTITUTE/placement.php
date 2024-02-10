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

$icon = mysqli_query($sql_con, "SELECT * FROM introduction where RegistrationId='$user'");
while($ico = mysqli_fetch_array($icon))
{
    $logo = $ico['Logo'];
}

$abo = mysqli_query($sql_con, "SELECT * FROM about_firm where RegistrationId='$user'");
          while($abou = mysqli_fetch_array($abo))
          {
              $about = $abou['Description'];
              $bussines = $abou['Bussines'];
              $Employee = $abou['Employee'];
              $Establishment = $abou['Establishment'];
          }
          
$social = mysqli_query($sql_con, "SELECT * FROM social where RegistrationId='$user'");
while($soc = mysqli_fetch_array($social))
{
    $facebook = $soc['Facebook'];
    $twitter = $soc['Twitter'];
    $linkedin = $soc['LinkedIn'];
    $youtube = $soc["YouTube"];
    $instagram = $soc['Instagram'];
}
?>

<?php
$uni = mysqli_query($sql_con, "SELECT * FROM university where RegistrationId='$user'");
while($unive = mysqli_fetch_array($uni))
{
    $ises = $unive['RegistrationId'];
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    /* Use a media query to add a breakpoint at 800px: */
@media screen and (max-width: 800px) {
  .display {
    display: none; /* The width is 100%, when the viewport is 800px or smaller */
  }
}
</style>

<style>
#slider-text{
  padding-top: 40px;
  display: block;
}
#slider-text .col-md-6{
  overflow: hidden;
}

#slider-text h2 {
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 400;
  font-size: 30px;
  letter-spacing: 3px;
  margin: 30px auto;
  padding-left: 40px;
}
#slider-text h2::after{
  border-top: 2px solid #c7c7c7;
  content: "";
  position: absolute;
  bottom: 35px;
  width: 100%;
  }

#itemslider h4{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 400;
  font-size: 12px;
  margin: 10px auto 3px;
}
#itemslider h5{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: bold;
  font-size: 12px;
  margin: 3px auto 2px;
}
#itemslider h6{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 300;;
  font-size: 10px;
  margin: 2px auto 5px;
}
.badge {
  background: #b20c0c;
  position: absolute;
  height: 40px;
  width: 40px;
  border-radius: 50%;
  line-height: 31px;
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 300;
  font-size: 14px;
  border: 2px solid #FFF;
  box-shadow: 0 0 0 1px #b20c0c;
  top: 5px;
  right: 25%;
}
#slider-control img{
  padding-top: 60%;
  margin: 0 auto;
}
@media screen and (max-width: 992px){
#slider-control img {
  padding-top: 70px;
  margin: 0 auto;
}
}

.carousel-showmanymoveone .carousel-control {
  width: 4%;
  background-image: none;
}
.carousel-showmanymoveone .carousel-control.left {
  margin-left: 5px;
}
.carousel-showmanymoveone .carousel-control.right {
  margin-right: 5px;
}
.carousel-showmanymoveone .cloneditem-1,
.carousel-showmanymoveone .cloneditem-2,
.carousel-showmanymoveone .cloneditem-3,
.carousel-showmanymoveone .cloneditem-4,
.carousel-showmanymoveone .cloneditem-5 {
  display: none;
}
@media all and (min-width: 768px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -50%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 50%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
    display: block;
  }
}
@media all and (min-width: 768px) and (transform-3d), all and (min-width: 768px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(50%, 0, 0);
    transform: translate3d(50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-50%, 0, 0);
    transform: translate3d(-50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
@media all and (min-width: 992px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-2,
  .carousel-showmanymoveone .carousel-inner .cloneditem-3,
  .carousel-showmanymoveone .carousel-inner .cloneditem-4,
  .carousel-showmanymoveone .carousel-inner .cloneditem-5,
  .carousel-showmanymoveone .carousel-inner .cloneditem-6  {
    display: block;
  }
}
@media all and (min-width: 992px) and (transform-3d), all and (min-width: 992px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(16.666%, 0, 0);
    transform: translate3d(16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-16.666%, 0, 0);
    transform: translate3d(-16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
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


    <div class="py-2" style="background-color: #002147;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-lg-block">
            
            <a href="#" style="font-size: 14px; font-weight: bold; color: white;" class="small mr-3"><span class="icon-phone2 mr-2"></span> <?php echo $mobile; ?></a> 
            <a href="#" style="font-size: 14px; font-weight: bold; color: white;" class="small mr-3"><span class="icon-envelope-o mr-2"></span> <?php echo $email; ?></a> 
          </div>
          <div class="col-lg-3 text-right social-wrap display">
          
          </div>
        </div>
      </div>
    </div>
<p id="registration" style="display: none;"><?php echo $user; ?></p>
<p id="ides" style="display: none;"><?php echo $ises; ?></p>

 <nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="padding: 0px;"><img src="../image/<?php echo $logo; ?>" style="width: 200px; height: 100%;" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile_nav" aria-controls="mobile_nav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span> 
        </button>
        <div class="collapse navbar-collapse" id="mobile_nav">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 float-md-right">
        </ul>
        <ul class="navbar-nav navbar-light">
            <li class="nav-item"><a class="nav-link" href="index.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="about.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">About Us</a></li>
            <li class="nav-item dmenu dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Courses
                </a>
                <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="courses.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">All Courses</a>
                    <a class="dropdown-item" id="data" href="university-courses.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">university Courses</a>
                </div>
            </li>
<li class="nav-item"><a class="nav-link" href="placement.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Placement</a></li>
<li class="nav-item"><a class="nav-link" href="gallery.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Gallery</a></li>
<li class="nav-item"><a class="nav-link" href="teachers.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Our Team</a></li>
<li class="nav-item"><a class="nav-link" href="blog.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Blog</a></li>
<li class="nav-item"><a class="nav-link" href="admissions.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Admissions</a></li>
<li class="nav-item"><a class="nav-link" href="contact.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Contact Us</a></li>
        </ul>
        </div>
    </div>
</nav>
    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Placement</h2>
            
            </div>
          </div>
        </div>
      </div> 

<div class="container">
    <center><h3 style="background: #003153; color: white; padding: 10px; margin-top: 20px; width: 50%;">Placement Company</h3></center>
    <div class="row">
        <?php
        $com = mysqli_query($sql_con, "SELECT any_value(Logo) as Logos FROM `placement` where RegistrationId='$user' group by Logo");
        while($compa = mysqli_fetch_array($com))
        {
            $companies = $compa['Logos'];
        ?>
       <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <div style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px; background: #003153;">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="<?php echo $namees; ?>"
                   data-image="../image/<?php echo $image; ?>"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../image/<?php echo $companies; ?>"
                         alt="Another alt text" style="height: 120px; padding: 5px; margin: 5px; width: 96%;">
                   
                </a>
            </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<div class="container">
        <center><h3 style="background: #003153; color: white; padding: 10px; margin-top: 20px; width: 50%;">Placemed Student;s</h3></center>
	<div class="row">
	
		   <?php
		   $gallery = mysqli_query($sql_con, "SELECT * FROM `placement` where RegistrationId='$user'");
		   while($rowe = mysqli_fetch_array($gallery))
		   {
		       $namees = $rowe['Name'];
    $company = $rowe['CompanyName'];
    $image = $rowe['Image'];
		   ?>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <div style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px; background: #003153;">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="<?php echo $namees; ?>"
                   data-image="../image/<?php echo $image; ?>"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../image/<?php echo $image; ?>"
                         alt="Another alt text" style="height: 200px; padding: 5px; margin: 5px; width: 96%;">
                      <h5 style="padding-top: 20px; text-align: center; font-weight: bolder; color: white;"><?php echo $namees; ?></h5> 
                      <h6 style="padding-bottom: 20px; text-align: center; font-weight: bolder; color: white;"><?php echo $company; ?></h6> 
                </a>
            </div>
            </div>
            <?php
		   }
		   ?>
	
	</div>
</div>

<style>
    .btn:focus, .btn:active, button:focus, button:active {
  outline: none !important;
  box-shadow: none !important;
}

#image-gallery .modal-footer{
  display: block;
}

.thumb{
  margin-top: 15px;
  margin-bottom: 15px;
}
</style>
     <div class="site-section ftco-subscribe-1" style="background-image: url('images/bg_1.jpg'); padding: 20px;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <h2 style="font-weight: bold;">Subscribe to us!</h2>

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


    <div class="footer" style="background: #002147;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <p class="mb-4" align="center"><img src="../image/<?php echo $logo; ?>" alt="Image" class="img-fluid img-thumbnail" style="width: 200px; height: 50%;"></p>
            <p class="lead"><?php echo $about; ?></p>  
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-2">
            <h3 class="footer-heading" style="font-size: 20px; font-weight: bold;"><span>Useful Links</span></h3>
            <ul class="list-unstyled">
                <li><a href="index.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" style="color: white; font-size: 15px;">Home</a></li>
                <li><a href="about.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" style="color: white; font-size: 15px;">About Us</a></li>
                <li><a href="courses.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" style="color: white; font-size: 15px;">Courses</a></li>
                <li><a href="team.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" style="color: white; font-size: 15px;">Our Teacher</a></li>
                <li><a href="gallery.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" style="color: white; font-size: 15px;">Gallery</a></li>
                <li><a href="conatct.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" style="color: white; font-size: 15px;">Conatct Us</a></li>
            </ul>
          </div>
          
          <div class="col-lg-2">
              <h3 class="footer-heading" style="font-size: 20px; font-weight: bold;"><span>Our Courses</span></h3>
              <ul class="list-unstyled">
                  <?php
                  $cour = mysqli_query($sql_con, "SELECT * FROM course where RegistrationId='$user' limit 5");
                  while($roed = mysqli_fetch_array($cour))
                  {
                      $cour_nam = $roed['Course_Name'];
                      $ide = $rowed['Sno']; 
                 ?>
                  <li><a href="courses_single.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>&id=<?php echo $ide; ?>" style="color: white; font-size: 15px;"><?php echo $cour_nam; ?></a></li>
                  <?php
                  }
                  ?>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading" style="font-size: 20px; font-weight: bold;"><span>Contact Us</span></h3>
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
$(document).ready(function(){

$('#itemslider').carousel({ interval: 3000 });

$('.carousel-showmanymoveone .item').each(function(){
var itemToClone = $(this);

for (var i=1;i<6;i++) {
itemToClone = itemToClone.next();

if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}

itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
});

</script>

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

<script type="text/javascript">
    var gender = document.getElementById("registration").innerHTML;
    var single = document.getElementById("ides").innerHTML;
    if (gender == single) 
    {
       document.getElementById("data").style.display = "block";
    }
    else
    {
     document.getElementById("data").style.display = "none";
    }
</script>

</body>
</html>