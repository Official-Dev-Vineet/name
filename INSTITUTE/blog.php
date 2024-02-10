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
    $instagram = $soc['Instagram'];
    $youtube = $soc["YouTube"];
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
  
<style>
.home-blog {
    padding-top: 80px;
    padding-bottom: 80px;
}
@media (min-width: 992px) {
    .home-blog {
        padding-top: 100px;
        padding-bottom: 100px;
    }
}
.home-blog .section-title {
    padding-bottom: 15px;
}
.home-blog .media {
    margin-top: 50px;
}
@media (min-width: 768px) {
    .home-blog .media {
        margin-top: 30px;
    }
}
.bg-sand {
    background-color: #f5f5f6;
}
.media.blog-media {
    margin-top: 30px;
    position: relative;
    display: block;
}
@media (min-width: 992px) {
    .media.blog-media {
        display: table;
    }
}
.media.blog-media .circle {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background-color: rgba(0, 0, 0, 0.5);
    white-space: nowrap;
    position: absolute;
    padding: 0;
    top: 20px;
    left: 20px;
    text-align: center;
    box-shadow: none;
    transform: translateX(0);
    color: #fff;
    transition: background-color 0.3s ease;
}
.media.blog-media .circle .day {
    color: #fff;
    transition: color 0.25s ease;
    font-weight: 500;
    font-size: 28px;
    line-height: 1;
    margin-top: 12px;
}
.media.blog-media .circle .month {
    text-transform: uppercase;
    font-size: 14px;
}
.media.blog-media > a {
    position: relative;
    display: block;
}
@media (min-width: 992px) {
    .media.blog-media > a {
        display: table-cell;
        vertical-align: top;
        min-width: 200px;
    }
}
@media (min-width: 1200px) {
    .media.blog-media > a {
        min-width: 230px;
    }
}
.media.blog-media > a:before {
    position: absolute;
    content: "";
    top: 15px;
    left: 15px;
    right: 15px;
    bottom: 15px;
    opacity: 0;
    transform: scale(0);
    transition: transform 0.3s ease, opacity 0.3s;
    background: rgba(12, 198, 82, 0.7);
}
.media.blog-media > a img {
    width: 100%;
}
.media.blog-media:hover > a:before {
    opacity: 1;
    transform: scale(1);
}
.media.blog-media:hover .circle {
    background-color: rgba(255, 255, 255, 0.9);
}
.media.blog-media:hover .circle .day,
.media.blog-media:hover .circle .month {
    color: #222;
}
.media.blog-media:hover .media-body h5 {
    color: #0cc652;
}
.media.blog-media:hover .media-body a.post-link {
    color: #0cc652;
    text-decoration: underline;
}
.media.blog-media .media-body {
    border: 1px solid #efeff3;
    padding: 30px 30px 10px;
    font-size: 14px;
    background: #fff;
    border-top: none;
}
@media (min-width: 992px) {
    .media.blog-media .media-body {
        padding: 15px 20px 10px;
        border-top: 1px solid #efeff3;
        border-left: none;
        display: table-cell;
        vertical-align: top;
    }
}
@media (min-width: 1200px) {
    .media.blog-media .media-body {
        padding: 30px 20px 10px;
    }
}
.media.blog-media .media-body h5 {
    transition: color 0.3s ease;
    margin-bottom: 15px;
}
@media (min-width: 992px) {
    .media.blog-media .media-body h5 {
        font-size: 15px;
    }
}
@media (min-width: 1200px) {
    .media.blog-media .media-body h5 {
        margin-bottom: 15px;
        font-size: 18px;
    }
}
.media.blog-media .media-body a.post-link {
    display: block;
    color: #222;
    font-size: 11px;
    padding: 23px 0;
    text-transform: uppercase;
    font-weight: 400;
}
@media (min-width: 992px) {
    .media.blog-media .media-body a.post-link {
        padding: 7px 0;
    }
}
@media (min-width: 1200px) {
    .media.blog-media .media-body a.post-link {
        padding: 23px 0;
    }
}
.media.blog-media .media-body ul {
    position: relative;
    padding: 10px 0 0;
}
.media.blog-media .media-body ul li {
    display: inline-block;
    width: 49%;
    position: relative;
}
.media.blog-media .media-body ul li:before {
    position: absolute;
    content: "";
    top: 5px;
    left: 0;
    width: 1px;
    height: 14px;
    background: #eeeef2;
}
.media.blog-media .media-body ul li:first-child:before {
    visibility: hidden;
}
.media.blog-media .media-body ul:before {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    width: 100%;
    height: 1px;
    background: #eeeef2;
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
        <a class="navbar-brand" href="#"><img src="../image/<?php echo $logo; ?>" style="width: 200px; height: 50%;" /></a>
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
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Our Blog</h2>
             
            </div>
          </div>
        </div>
      </div> 
    
<section class="home-blog bg-sand">
    <div class="container">
		<!-- section title -->
	
		<div class="row ">
		    <?php
                $blog = mysqli_query($sql_con, "SELECT * FROM blog where RegistrationId='$user'");
                while($blo = mysqli_fetch_array($blog))
                {
                    $blog_name = $blo['Title'];
                    $blog_date = $blo['Date'];
                    $blog_time = $blo['Time'];
                    $blog_short = $blo['Short_detail'];
                    $blog_image = $blo['Image'];
                    $blog_sno = $blo['Sno'];
                ?>
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
			<div class="col-md-6">
				<div class="media blog-media" style="box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;">
				  <a href="blog-detail.php?id=<?php echo $blog_sno; ?>&user6=<?php echo $user; ?>&name=<?php echo $name; ?>"><img class="d-flex" src="../image/<?php echo $blog_image; ?>" alt="Generic placeholder image" style="height: 255px;"></a>
				 
				  <div class="media-body">
				    <a href="blog-detail.php?id=<?php echo $blog_sno; ?>&user6=<?php echo $user; ?>&name=<?php echo $name; ?>"><h5 class="mt-0"><?php echo $blog_name; ?></h5></a>
				    <p class="text-sm" style="color: black;"><?php echo $blog_short; ?></p>
				    <a href="blog-detail.php?id=<?php echo $blog_sno; ?>&user6=<?php echo $user; ?>&name=<?php echo $name; ?>" class="post-link">Reading Continue</a>
				    <ul>
				    	<li><?php echo $blog_date; ?></li>
				    	<li class="text-right"><a href="blog-detail.php?id=<?php echo $blog_sno; ?>&user6=<?php echo $user; ?>&name=<?php echo $name; ?>"><?php echo $blog_time; ?></a></li>
				    </ul>
				  </div>
				</div>
			</div>
			<?php
                }
                ?>
		</div>
	</div>
</section>

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