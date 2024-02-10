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
              $bussines = $abou['Bussines'];
              $Employee = $abou['Employee'];
              $Establishment = $abou['Establishment'];
          }
          
if(isset($_POST['send']))
{
    $namees = isset($_POST['name'])?$_POST['name']:null;
    $email = isset($_POST['email'])?$_POST['email']:null;
    $phone = isset($_POST['phone'])?$_POST['phone']:null;
    $course = isset($_POST['course'])?$_POST['course']:null;
    $gender = isset($_POST['gender'])?$_POST['gender']:null;
    $father = isset($_POST['father'])?$_POST['father']:null;
    $occupation = isset($_POST['occupation'])?$_POST['occupation']:null;
    $address = isset($_POST['address'])?$_POST['address']:null;
    
    $sql = mysqli_query($sql_con, "INSERT INTO admission_inquiry(`RegistrationId`,`InstituteName`,`Name`,`Email`,`Phone`,`Course`,`Gender`,`FatherName`,`Occupation`,`Address`) VALUE('$user','$name','$namees','$email','$phone','$course','$gender','$father','$occupation','$address')");
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
    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans');
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans:300');
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans:600');
*{
    margin: 0
}
body{
    background-size: cover;
}
input:active, input:focus {
  outline: none;
}
input{
    border: 1px solid #5EB4CB;
    box-sizing: border-box;
    border-radius: 20px;
    font-weight: 300;
    font-size: 18px;
    color: #9C9C9C;
    font-family: inherit;
    padding:13px 25px;
    background: transparent;
    margin-bottom: 20px;  
    width:350px;
    max-width: 100%;    
}

ul{
    list-style: none;
    padding: 0
}


.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

@media (min-width: 576px){
.container {
    max-width: 540px;
}
}

@media (min-width: 768px){
.container {
    max-width: 720px;
}
}

@media (min-width: 992px){
.container {
    max-width: 960px;
}
}

@media (min-width: 1200px){
.container {
    max-width: 1140px;
}
}




.wrapper{
    margin: 50px 0;

}

.form{
    display: flex;
    text-align: center;
    justify-content: center; 
}

.left-col{
    width: 40%;
    padding: 135px 30px 0 30px;
    background: linear-gradient(to bottom, #69B9C4, #91C8EB);

}



.left-col h2{
    color:#fff;
    font-size:32px;
 
}

.left-col img.img1{
    margin-bottom: 10px;
}

.left-col .bull p{
    font-size: 20px;
    color: #fff;
}

.left-col .bull img.img2{
    margin:25px 0;
}

.left-col .soc{
    margin: 100px 0 0;
}
.left-col .soc a img{
    transition: 0.5s;   
}
.left-col .soc a img:hover{
    transition: 0.5s;
    transform: scale(1.3)
}

.left-col .soc p{
    color: #fff;
    font-size: 18px;
    font-weight: 300;
}

.left-col .soc ul{
    padding:20px 0 50px;
}


.right-col{
    width: 60%;
    padding: 20px;
    background: rgba(255, 255, 255, 0.7);
  
}

.right-col h2{
    margin-bottom: 70px;
    font-size: 30px;
    color: #585858;
    font-weight: 600;    
}

.right-col button{
    background: linear-gradient(299.5deg, #6DBAC8 35.53%, #8FC7E9 109.8%);
    border-radius: 18px;
    font-weight: 600;
    font-size: 20px;
    color: #FFFFFF;
    padding: 10px 20px;
    margin-top: 20px;
    border:none;
    cursor: pointer;
}
.right-col button:hover{
    background: linear-gradient(299.5deg, #8FC7E9 35.53%, #6DBAC8 109.8%);
}
@media screen and (max-width: 992px) {
    .form{
        display: block;
    }
    .left-col img.img1{
        display: none
    }

    .right-col, .left-col{
        width:100%;
        padding: 40px 0;
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
     color: #002147;
}
 .navbar-light .navbar-nav .nav-link {
     color: #002147;
}
 .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
     color: #002147;
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
            
            <a href="#" style="font-size: 14px; font-weight: bold; color: white;" class="small mr-3"><span class="icon-phone2"></span> <?php echo $mobile; ?></a> 
            <a href="#" style="font-size: 14px; font-weight: bold; color: white;" class="small mr-3"><span class="icon-envelope-o"></span> <?php echo $email; ?></a> 
          </div>
          <div class="col-lg-3 text-right social-wrap display">
          
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

    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-12">
              <h2 class="mb-0" style="color: white; text-align: center; margin-bottom: 5px; font-family: Amasis MT Pro; font-weight: bolder; text-transform: uppercase;">Apply For the Admission</h2>
            
            </div>
          </div>
        </div>
      </div> 
    
<div class="container">
	<div class="wrapper" style="box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; background: #002147;">
		<div class="form">
			<div class="left-col" style="background: #002147;">
			
				<h2>For Any Query of Admission you can Contact Us</h2>
				<div class="bull">
					<p><?php echo $landmark; ?>, <?php echo $pincode; ?>,<?php echo $city; ?>, <?php echo $state; ?>, <?php echo $country; ?></p>
					<p><?php echo $email; ?></p>
					<p><?php echo $mobile; ?></p>
				</div>
			
			</div>
			<div class="right-col">
			
			<form method="post">
								<div class="result"></div>
				<div class="form-group" style="margin: 7px;">
					<input id="name" type="text" placeholder="Enter your name" class="form-control" name="name" required>
				</div>
				
				<div class="form-group" style="margin: 7px;">
					<input id="email" type="email" placeholder="Enter your email" class="form-control" name="email" required>
				</div>
				
				<div class="form-group" style="margin: 7px;">
					<input id="message" type="text" placeholder="Enter your phone number" class="form-control" name="phone" required>
				</div>
				<div class="form-group" style="margin: 7px;">
					<input id="email" type="text" placeholder="Enter your Course" class="form-control" name="course" required>
				</div>
				<div class="form-group" style="margin: 7px;">
					<select class="form-control" name="gender">
					    <option>Select Gender</option>
					     <option>Male</option>
					      <option>Female</option>
					</select>
				</div>
				<div class="form-group" style="margin: 7px;">
					<input id="email" type="text" placeholder="Enter your Father Name" class="form-control" name="father" required>
				</div>
				<div class="form-group" style="margin: 7px;">
					<input id="email" type="text" placeholder="Enter your Father Occupation" class="form-control" name="occupation" required>
				</div>
				<div class="form-group" style="margin: 7px;">
					<textarea id="email" type="text" placeholder="Enter your Address" class="form-control" name="address"></textarea>
				</div>
				<button id="submit" type="submit" name="send" style="background: #002147;">Submit Application Form</button>
			</form>
			</div>
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
              <button class="btn btn-primary rounded py-3 px-4" style="height: 40px;" type="submit">Send</button>
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
    let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
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