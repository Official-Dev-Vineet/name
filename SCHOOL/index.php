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
    .site-heading h3{
    font-size : 40px;
    margin-bottom: 15px;
    text-transform: uppercase;
    font-weight: 600;
}
.border {
    background: #d1360e;
    height: 2px;
    width: 165px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 25px;
}
/* Blog-CSS */
.blog-box {
    padding: 0 0px;
    transition: .5s;
    border: 1px solid #e2e2e2;
    margin-bottom: 30px;
}
.blog-box-content h4 a {
    font-size: 20px;
    padding: 0px 0 0px;
    text-transform: uppercase;
    color:#2b2b2b;
     text-decoration:none;
    
}
.blog-box-content h4:hover {
    color:#000;
     text-decoration:none;
    
}

.blog-box-content {
padding: 0 20px 20px;
}
.blog-box-text h4 a {
    color: #333;
}
</style>

<style>
    .our-blog{
    background-color: #f8f9fa;
}

.container{
    margin: 0 auto;
}

.row{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.text-center{
    text-align: center;
    font-size: 18px;
}

.text-center h2{
    font-weight: 500;
    font-size: 1.6em;
}

.text-center h2 span{
    font-weight: 800;
}

.text-center p{
    max-width: 500px;
    margin: 0 auto;
    color: #6c757d;
    line-height: 1.5;
    font-size: 1em;
}

.col{
    width: 33.3333333%;
    overflow: hidden;
    padding: 15px;
}

.col .card{
    width: 100%;
    box-shadow: 0px 0px 20px rgba(0,0,0,0.2);
    transition: transform 0.3s ease;
}

.col img{
    width: 100%;
    height: auto;
    border: 0;
}

.col .card-body{
    padding: 0 15px 15px 15px;
    background-color: #fff;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
}

.card-body h5{
    font-size: 24px;
    margin: 7px 0;
}

.card:hover{
    transform: translateY(-10px);
    transition: transform 0.3s ease;
}

.card p{
    color: #6c757d;
}

.card-body .date-author span{
    color: #e74c3c;
}

.card-body h5 a{
    color: #222;
}

@media(min-width: 577px) and (max-width: 768px){
    .col{
        width: 50%;
    }
}

@media(max-width: 576px){
    .col{
        width: 100%;
    }
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
            
            <a href="#" style="font-size: 14px; font-weight: bold; color: white;" class="small mr-3"><span class="icon-phone2 "></span> <?php echo $mobile; ?></a> 
            <a href="#" style="font-size: 14px; font-weight: bold; color: white;" class="small mr-3"><span class="icon-envelope-o"></span> <?php echo $email; ?></a> 
          </div>
          
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

<?php
$banner = mysqli_query($sql_con, "SELECT * FROM banner where RegistrationId='$user'");
while($ban = mysqli_fetch_array($banner))
{
    $banner1 = $ban['Banner_One'];
    $banner2 = $ban['Banner_two'];
    $banner3 = $ban['Banner_three'];
}
?>
    
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../image/<?php echo $banner1; ?>">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../image/<?php echo $banner2; ?>">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../image/<?php echo $banner3; ?>">
    </div>
  </div>
</div>

 <style>
 .text-sm {
    font-size: 14px !important;
    overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 2; /* number of lines to show */
   -webkit-box-orient: vertical;
}
</style>

<?php
          $abo = mysqli_query($sql_con, "SELECT * FROM about_firm where RegistrationId='$user'");
          while($abou = mysqli_fetch_array($abo))
          {
              $about = $abou['Description'];
              $bussines = $abou['Bussines'];
              $Employee = $abou['Employee'];
              $Establishment = $abou['Establishment'];
              $imag = $abou['Image'];
          }
          ?>
    <div class="section style-1" style="background: #f4f0ec; padding-top: 20px; padding-bottom: 20px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
              <h2 style="color: black; text-align: center; margin-bottom: 5px; font-size: 28px; font-family: Amasis MT Pro; font-weight: bold;">About <?php echo $name; ?></h2>
              <hr style="height:2px; background-color: black; width: 50%; margin-top: 0px; margin-bottom: 0px;">
            <p class="lead" style="color: black; margin-top: 10px; text-align: justify;"><?php echo $about; ?></p>
            <p><a href="about.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" class="btn btn-success" style="background: #003153; color: white;">Reading Continue</a></p>
          </div>
          <div class="col-lg-4">
            <img src="../image/<?php echo $imag; ?>" class="img-fluid img-thumbnail" style="width: 100%; margin-top: 20px;">
          </div>
          
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
          
        </div>
      </div>
    </div>

<?php
          $prin = mysqli_query($sql_con, "SELECT * FROM management where RegistrationId='$user'");
          while($pri = mysqli_fetch_array($prin))
          {
              $pri_name = $pri['Name'];
              $pri_desi = $pri['Designation'];
              $pri_desc = $pri['Description'];
              $pri_imag = $pri['Image'];
          }
          ?>
    <div class="section style-1" style="background: white; padding-top: 20px; padding-bottom: 20px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
             <img src="../image/<?php echo $imag; ?>" class="img-fluid img-thumbnail" style="width: 100%; margin-top: 20px;">
          </div>
          <div class="col-lg-8">
              <h2 style="color: black; text-align: center; margin-bottom: 5px; font-size: 28px; font-family: Amasis MT Pro; font-weight: bold;"><?php echo $pri_desi; ?> Message</h2>
              <hr style="height:2px; background-color: black; width: 50%; margin-top: 0px; margin-bottom: 0px;">
              <h4 style="color: black; font-weight: bold; margin-top: 10px;"><?php echo $pri_name; ?></h4>
        <p style="color: black; text-align: justify;"><?php echo $pri_desc; ?> </p>
          </div>
          
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
    
        </div>
      </div>
    </div>

<div style="background-color: #003153; padding-top: 20px; padding-bottom: 20px;">
    <h2 style="color: white; text-align: center; margin-bottom: 5px; font-size: 28px; font-family: Amasis MT Pro; font-weight: bold;"><?php echo $name; ?> In Numbers</h2>
              <hr style="height:2px; background-color: white; width: 50%; margin-top: 0px; margin-bottom: 10px;">
    <div class="container">
        <div class="row">
            <?php
            $numb = mysqli_query($sql_con, "SELECT any_value(Name) as name, any_value(Value) as Valued, count(Sno) as sno FROM numbers where RegistrationId='$user' group by Name");
            while($num = mysqli_fetch_array($numb))
            {
                $numbname = $num['name'];
                $value = $num['Valued'];
                $sno = $num['sno'];
                $regi = $num['RegistrationId'];
            ?>
            <div class="col-sm-3">
             <center>   
                <div>
                    <button type="button" class="btn" data-toggle="modal" onclick="document.getElementById('registration').value = '<?php echo $numbname; ?>';" data-target="#exampleModal" style="background: white; padding: 10px; border-radius: 10px; margin-bottom: 10px; width: 100%;">
                     <center>  
                   <h3 style="color: white; padding-top: 30px; border: 4px solid white; background: #003153; border-radius: 50%; width: 100px; height: 100px; text-align: center;"><?php echo $sno; ?></h3> </center>
                    <h6 style="color: black; text-align: center;"><b><?php echo $numbname; ?></b></h6>
                     </button>
                </div>
                 <center>  
            </div>
            <?php
            }
            ?>
        </div>
        
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%;">
  <div class="modal-dialog" role="document" >
    <div class="modal-content" style="border: 6px solid #003153; width: 100%;">
      <div class="modal-header">
          <form method="post">
          <input type="text" id="registration" name="registr">
          </form>
          <?php
          $red = isset($_POST['registr'])?$_POST['registr']:null;
          echo $red;
          ?>
        <h5 class="modal-title" id="exampleModalLabel" style="color: black; font-weight: bold;"><?php echo $red; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="container">
  <div class="row">
    <div class="col-sm-4" style="border: 1px solid; background: #191970;">
        
     <p style="color: white;"> One of three columns </p>
    </div>
    <div class="col-sm-4" style="border: 1px solid; background: #191970;">
     <p style="color: white;"> One of three columns </p>
    </div>
    <div class="col-sm-4" style="border: 1px solid; background: #191970;">
     <p style="color: white;"> One of three columns</p>
    </div>
    <div class="col-sm-4" style="border: 1px solid; background: #191970;">
     <p style="color: white;"> One of three columns</p>
    </div>
    <div class="col-sm-4" style="border: 1px solid; background: #191970;">
     <p style="color: white;"> One of three columns</p>
    </div>
    <div class="col-sm-4" style="border: 1px solid; background: #191970;">
     <p style="color: white;"> One of three columns</p>
    </div>
    <div class="col-sm-4" style="border: 1px solid; background: #191970;">
     <p style="color: white;"> One of three columns</p>
    </div>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<style>
    .zoom:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
<div class="section style-1" style="background: #f4f0ec; padding-top: 20px; padding-bottom: 20px;">
      <div class="container">
          <h2 style="color: black; text-align: center; margin-bottom: 5px; font-size: 28px; font-family: Amasis MT Pro; font-weight: bold;">Our Gallery</h2>
              <hr style="height:2px; background-color: black; width: 50%; margin-top: 0px; margin-bottom: 10px;">
        <div class="row">
            <?php
            $gallery = mysqli_query($sql_con, "SELECT * FROM gallery where RegistrationId='$user' limit 12");
            while($gal = mysqli_fetch_array($gallery))
            {
                $image = $gal['Image'];
            ?>
          <div class="col-lg-3">
              <div class="zoom" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px; margin-bottom: 20px;">
                  <a href="../image/<?php echo $image; ?>" target="_blank">
                  <img src="../image/<?php echo $image; ?>" class="img-fluid img-thumbnail" style="width: 100%; height: 200px;">
                  </a>
              </div>
          </div>
          <?php
            }
            ?>
        </div>
        <p align="center" style="margin: 20px;"><a href="gallery.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" class="btn btn-success" style="background-color: #003153; color: white;">View All Gallery</a></p>
      </div>
    </div>
    <!-- // 05 - Block -->
    <div class="section style-1" style="background: white; padding-top: 20px;">
      <div class="container">
          <h2 style="color: black; text-align: center; margin-bottom: 5px; font-size: 28px; font-family: Amasis MT Pro; font-weight: bold;">Achivements</h2>
              <hr style="height:2px; background-color: black; width: 50%; margin-top: 0px; margin-bottom: 20px;">
         
        <div class="row">
            <?php
            $gallery = mysqli_query($sql_con, "SELECT * FROM achivement where RegistrationId='$user' limit 12");
            while($gal = mysqli_fetch_array($gallery))
            {
                $image = $gal['Image'];
                $ach = $gal['Name'];
            ?>
          <div class="col-lg-3">
              <div class="zoom" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px; margin-bottom: 20px; background-color: #003153;">
                <a href="../image/<?php echo $image; ?>" target="_blank">  <img src="../image/<?php echo $image; ?>" class="img-fluid img-thumbnail" style="width: 100%; height: 200px; text-decoration: none;">
                  <h4 style="font-weight: bolder; text-align: center; margin: 10px; color: white; text-decoration: none; padding-bottom: 10px;"><?php echo $ach; ?></h4> </a>
              </div>
          </div>
          <?php
            }
            ?>
        </div>
        <p align="center" style="margin: 20px;"><a href="achivement.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" class="btn btn-success" style="background-color: #003153; color: white;">View All Achivement</a></p>
      </div>
    </div>
    
    <div class="section style-1" style="background: #f4f0ec; padding-top: 20px; padding-bottom: 20px;">
      <div class="container">
          <h2 style="color: black; text-align: center; margin-bottom: 5px; font-size: 28px; font-family: Amasis MT Pro; font-weight: bold;">Our Class Topper</h2>
              <hr style="height:2px; background-color: black; width: 50%; margin-top: 0px; margin-bottom: 20px;">
         
        <div class="row">
            <?php
            $gallery = mysqli_query($sql_con, "SELECT * FROM topper where RegistrationId='$user' limit 12");
            while($gal = mysqli_fetch_array($gallery))
            {
                $image = $gal['Image'];
                $nam = $gal['Name'];
                $clas = $gal['Class'];
                $position = $gal['Position'];
                $percentage = $gal['Percentage'];
            ?>
          <div class="col-lg-3">
              <div class="zoom" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px; margin-bottom: 20px; padding-bottom: 10px; background: white; background-color: #003153;">
                  <a href="../image/<?php echo $image; ?>" target="_blank">
                  <img src="../image/<?php echo $image; ?>" class="img-fluid img-thumbnail" style="width: 96%; height: 200px; padding: 10px; margin: 5px;">
                  <h4 style="text-align: center; color: white; font-weight: bolder;"><b><?php echo $nam; ?> / <?php echo $clas; ?></b></h4>
                  <h6 style="color: white; margin-left: 10px; font-weight: bolder;"><b>Position / Percentage:</b> <?php echo $position; ?> / <?php echo $percentage; ?></h6>
                  
                  </a>
              </div>
          </div>
          <?php
            }
            ?>
        </div>
        <p align="center" style="margin: 20px;"><a href="topper.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" class="btn btn-success" style="background-color: #003153; color: white;">View All</a></p>
      </div>
    </div>
    
  <div class="site-section" style="backgrouns-color: white; padding-top: 20px; padding-bottom: 20px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
              <h2 style="color: black; text-align: center; margin-bottom: 5px; font-size: 28px; font-family: Amasis MT Pro; font-weight: bold;">Our Student's Say</h2>
              <hr style="height:2px; background-color: black; width: 100%; margin-top: 0px; margin-bottom: 0px;">
           
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
                    <p class="description" style="color: black;">
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

<div class="container">
    
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