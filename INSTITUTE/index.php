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


<?php
$banner = mysqli_query($sql_con, "SELECT * FROM banner where RegistrationId='$user'");
while($ban = mysqli_fetch_array($banner))
{
    $banner1 = $ban['Banner_One'];
    $banner2 = $ban['Banner_two'];
    $banner3 = $ban['Banner_three'];
?>
    
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="margin-top: 0px;">
  <div class="carousel-inner" style="margin-top: 0px;">
    <div class="carousel-item active" >
      <img class="d-block w-100" src="../image/<?php echo $banner1; ?>" >
    </div>
    <div class="carousel-item" >
      <img class="d-block w-100" src="../image/<?php echo $banner2; ?>" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../image/<?php echo $banner3; ?>" >
    </div>
  </div>
</div>
    
    <?php
}
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

<style>
 .text {
    font-size: 14px !important;
    overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 4; /* number of lines to show */
   -webkit-box-orient: vertical;
}
</style>

<div class="site-section" id="university" style="padding: 0px; background: #f4f0ec;">
      <div class="container">


        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-6">
            <h2 class="section-title-underline mb-3" style="font-family: Amasis MT Pro; margin-bottom: 0px; font-size: 28px; font-weight: bold; padding-top: 20px;">
              University Courses
            </h2>
             <hr style="height:2px;border-width: 50%;color:gray;background-color: black; margin-bottom: 10px; margin-top: 10px; width: 50%; font-size: 26px;">
          </div>
        </div>

<div class="blog-section paddingTB60 ">
<div class="container">

	<div class="row text-center">
	    <?php
                  $course = mysqli_query($sql_con, "SELECT * FROM university where RegistrationId='$user' limit 3");
                  while($cou = mysqli_fetch_array($course))
                  {
                      $course_category = $cou['DegreeName'];
                      $course_short = $cou['DeggreCourse'];
                      $course_image = $cou['Image'];
                      $sno = $cou['Sno'];
                  ?>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item" style="background: white;">
                        <figure class="thumnail" style="margin: 0px;">
                        <a href="admissions.php?id=<?php echo $sno; ?>&user6=<?php echo $user; ?>&name=<?php echo $name; ?>"><img src="../image/<?php echo $course_image; ?>" alt="Image" class="img-fluid" style="width: 100%;"></a>
                        <div class="category"><h3><?php echo $course_category; ?></h3></div>  
                        </figure>
                        <div class="course-1-content pb-4" style="padding: 20px;">
                        <p class="desc mb-4 text-sm"><?php echo $course_short; ?></p>
                        <p><a href="admissions.php?id=<?php echo $sno; ?>&user6=<?php echo $user; ?>&name=<?php echo $name; ?>" class="btn btn-primary rounded-0 px-4" style="color: white;">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>
<?php
}
?>
	
    </div>
    	<p align="center"> <a href="university-courses.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" class="btn btn-success" style="margin: 10px; color: white;">View All University Course</a></p>
</div>
</div>

      </div>
    </div>
    
    <div class="site-section" style="padding: 0px; background: #f4f0ec;">
      <div class="container">


        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-6">
            <h2 class="section-title-underline mb-3" style="font-family: Amasis MT Pro; margin-bottom: 0px; font-size: 28px; font-weight: bold; padding-top: 20px;">
              Popular Courses
            </h2>
             <hr style="height:2px;border-width: 50%;color:gray;background-color: black; margin-bottom: 10px; margin-top: 10px; width: 50%; font-size: 26px;">
          </div>
        </div>

<div class="blog-section paddingTB60 ">
<div class="container">

	<div class="row text-center">
	    
	    <?php
                  $course = mysqli_query($sql_con, "SELECT * FROM course where RegistrationId='$user'");
                  while($cou = mysqli_fetch_array($course))
                  {
                      $course_name = $cou['Course_Name'];
                      $course_category = $cou['Course_Category'];
                      $course_duration = $cou['Course_Duration'];
                      $course_rate = $cou['Course_Rate'];
                      $course_short = $cou['Course_Short'];
                      $course_long = $cou['Course_Long'];
                      $course_image = $cou['Course_Image'];
                      $sno = $cou['Sno'];
                  ?>
                  <style>
                      .blog-box:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
                  </style>
	       <div class="col-sm-6 col-md-4">
							<div class="blog-box" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; background: white;">
								<div class="blog-box-image">
									<img src="../image/<?php echo $course_image; ?>" alt="" style="width: 100%;">
								</div>
								<div class="blog-box-content">
									<h4 style="font-weight: bold;"><a href="course_single.php?id=<?php echo $sno; ?>&user6=<?php echo $user; ?>&name=<?php echo $name; ?>"><?php echo $course_name; ?></a></h4>
									<p class="text-sm" style="text-align: justify; color: black;"><?php echo $course_short; ?></p>
									<a href="course_single.php?id=<?php echo $sno; ?>&user6=<?php echo $user; ?>&name=<?php echo $name; ?>" style="color: black; font-size: 15px; margin-top: 5px;">Reading Continue <i class="fa fa-arrow-circle-right"></i></a>
								
								</div>
							</div>
						</div> <!-- End Col -->		
						<?php
                  }
                  ?>
		
    </div>
</div>
</div>

      </div>
    </div>

    <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="section-title-underline style-2" style="font-family: Amasis MT Pro; margin-bottom: 0px; font-size: 28px; font-weight: bold; padding-top: 20px;">
              <span>About <?php echo $name; ?></span>
            </h2>
          </div>
          <?php
          $abo = mysqli_query($sql_con, "SELECT * FROM about_firm where RegistrationId='$user'");
          while($abou = mysqli_fetch_array($abo))
          {
              $about = $abou['Description'];
              $bussines = $abou['Bussines'];
              $Employee = $abou['Employee'];
              $Establishment = $abou['Establishment'];
          }
          ?>
          <style>
              .lead {
    font-size: 16px !important;
    overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 6; /* number of lines to show */
   -webkit-box-orient: vertical;
}
          </style>
          <div class="col-lg-8">
           
            <p class="lead" style="color: white;"><?php echo $about; ?></p>
            <p><a href="about.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" style="color: white;">Read more</a></p>
          </div>
        </div>
      </div>
    </div>


<section class="our-blog">
        <div class="container">
            <div class="text-center" >
                <h2 style="font-family: Amasis MT Pro; margin-bottom: 0px; font-size: 28px; font-weight: bold; padding-top: 20px; color: black;">Our Blog</h2>
               <hr style="height:2px;border-width: 50%;color:gray;background-color: black; margin-bottom: 10px; margin-top: 10px; width: 50%; font-size: 26px;">
            </div>
            <div class="row mt-5">
                <?php
                $blog = mysqli_query($sql_con, "SELECT * FROM blog where RegistrationId='$user' limit 3");
                while($blo = mysqli_fetch_array($blog))
                {
                    $blog_name = $blo['Title'];
                    $blog_date = $blo['Date'];
                    $blog_time = $blo['Time'];
                    $blog_short = $blo['Short_detail'];
                    $blog_image = $blo['Image'];
                    $blog_sno = $blo['Sno'];
                ?>
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="../image/<?php echo $blog_image; ?>" style="width: 100%; height: 250px;" class="img-fluid img-thumbnail" alt="">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="#"><?php echo $blog_name; ?></a>
                                </h5>
                                <p class="date-author">
                                    <i class="fas fa-calendar"></i> <?php echo $blog_date; ?> <span class="author"><i class="fas fa-clock-o"></i>/ <?php echo $blog_time; ?></span>
                                </p>
                                <p class="card-text text-sm">
                                    <?php echo $blog_short; ?>
                                </p>
                                <a href="blog-detail.php?id=<?php echo $blog_sno; ?>&user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Reading Continue</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    
                </div>
                
               <p align="center"> <a href="blog.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" class="btn btn-success" style="margin: 10px; color: white;">View All Blog</a></p>
            </div>
            </div>
            
    <!-- // 05 - Block -->
  <div class="site-section" style="backgrouns-color: white; padding: 0px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="section-title-underline" style="font-family: Amasis MT Pro; margin-bottom: 0px; font-size: 28px; font-weight: bold; text-align: center;">
             Testimonials
            </h2>
             <hr style="height:2px;border-width: 50%;color:gray;background-color: black; margin-bottom: 10px; margin-top: 10px; width: 50%; font-size: 26px;">
          </div>
        </div>


        <div class="owl-slide owl-carousel">
<?php
$test = mysqli_query($sql_con, "SELECT * FROM testimonial where RegistrationId='$user'");
while($rowe = mysqli_fetch_array($test))
{
    $name = $rowe['Name'];
    $desc = $rowe['Designation'];
    $image = $rowe['Image'];
?>
<div class="ftco-testimonial-1">
              <div style="box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset; padding: 20px; background: #002147;">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4" >
              <img src="../image/<?php echo $image; ?>" alt="Image" class="img-fluid mr-3">
              <div>
                <h3 style="color: white;"><?php echo $name; ?></h3>
              </div>
            </div>
            <div>
              <p style="color: white;"><?php echo $desc; ?></p>
            </div>
          </div>
          </div>
<?php
}
?>
        </div>
        
      </div>
    </div>

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
            <p class="text"><?php echo $about; ?></p>  
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
       document.getElementById("university").style.display = "block";
       document.getElementById("data").style.display = "block";
    }
    else
    {
      document.getElementById("university").style.display = "none";
     document.getElementById("data").style.display = "none";
    }
</script>
</body>
</html>