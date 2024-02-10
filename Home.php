<?php 
$ind = $_GET['user6'];
include 'conne.php';

$result=mysqli_query($sql_con,"SELECT * FROM `socialmedia` where RegistrationId='$ind'");
while($row= mysqli_fetch_array($result))
{
    $Facebook = $row['Facebook'];
    $twitter = $row['Twitter'];
    $Instagram = $row['Instagram'];
    $linkedin = $row['LinkedIn'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurantly Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v3.3.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

<style type="text/css">
.image img {
    transition: all 2s ease-in-out
}

.image:hover img {
    transform: scale(2, 2);
    cursor: pointer
}  
</style>

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">
<?php 
$email = mysqli_query($sql_con,"SELECT * FROM `contact` where RegistrationId='$ind'");
   while($Detail = mysqli_fetch_array($email))
   {
    //$CON = ;
    $CON = $Detail['PhoneNo'];
    $EMA = $Detail['EmailId'];
    $FROM = $Detail['OpeningFrom'];
    $TO = $Detail['OpeningTo'];
   }
   if(!empty($CON))
   {
   $CON1 = $CON;

   }
   else
   {
  $CON1 = "Not Found"; 
   }

   if(!empty($EMA))
   {
   $EMA1 = $EMA;

   }
   else
   {
  $EMA1 = "Not Found"; 
   }

   if(!empty($FROM))
   {
   $FROM1 = $FROM;

   }
   else
   {
  $FROM1 = "Not Found"; 
   }

   if(!empty($TO))
   {
   $TO1 = $TO;

   }
   else
   {
  $TO1 = "Not Found"; 
   }
?>
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+91 <?php echo $CON1; ?></span></i>
        <i class="bi bi-envelope d-flex align-items-center ms-4"><span><?php echo $EMA1; ?></span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span><?php echo $FROM1; ?> - <?php echo $TO1; ?></span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <?php 
   $introduction = mysqli_query($sql_con,"SELECT * FROM `introduction` where RegistrationId='$ind'");
   while($intro = mysqli_fetch_array($introduction))
   {
    $FirmName = $intro['FirmName'];
    $FirmTitle = $intro['FirmTitle'];
   }

   $about = mysqli_query($sql_con,"SELECT * FROM `about_firm` where RegistrationId='$ind'");
   while($firm = mysqli_fetch_array($about))
   {
    $Heading = $firm['TitleHeading'];
    $Description = $firm['Description'];
    $AboutImage = $firm['Image'];
    $bussines = $firm['Bussines'];
    $Establishment = $firm['Establishment'];
    $employee = $firm['Employee'];
  
   }
if(!empty($FirmName))
{
$FirmName1 = $FirmName;
}
else
{
$FirmName1 = "Data not Found";
}
if(!empty($Heading))
{
$Heading1 = $Heading;
}
else
{
 $Heading1 = "Data not Found"; 
}
if(!empty($Description))
{
$Description1 = $Description;
}
else
{
 $Description1 = "Data not Found"; 
}
if(!empty($bussines))
{
$bussines1 = $bussines;
}
else
{
 $bussines1 = "Data not Found"; 
}
if(!empty($Establishment))
{
$Establishment1 = $Establishment;
}
else
{
 $Establishment1 = "Data not Found"; 
}
if(!empty($employee))
{
$employee1 = $employee;
}
else
{
 $employee1 = "Data not Found"; 
}
if(!empty($FirmTitle))
{
$FirmTitle1 = $FirmTitle;
}
else
{
$FirmTitle1 = "Data not Found";
}
  ?>
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href=""><?php echo $FirmName1; ?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#menu">Product</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Enquiry</a>

    </div>
  </header><!-- End Header -->
<style type="text/css">
  #heroes{
 width: 100%;
  height: 100vh;
  background: url("image/attractive.jpg") top center;
  background-size: cover;
  position: relative;
  padding: 0;
  }
  
</style>
  <!-- ======= Hero Section ======= -->
  <section id="heroes" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span><?php echo $FirmName1; ?></span></h1>
          <h2><?php echo $FirmTitle1; ?></h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Product</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Enquiry</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="<?php echo $IntroVideo; ?>" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="image/<?php echo $AboutImage; ?>" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3><?php echo $Heading1; ?></h3>
            <p class="fst-italic">
              <?php echo $Description1; ?>
            </p>
            <p class="fst-italic">
              Bussiness : <?php echo $bussines1; ?>
            </p>
            <p class="fst-italic">
              Yesr of Establishment : <?php echo $Establishment1; ?>
            </p>
             <p class="fst-italic">
              No of Employees : <?php echo $employee1; ?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Product</h2>
          <p>Check Our Product</p>
        </div>
    
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
               <?php
         $Product = mysqli_query($sql_con,"SELECT * FROM `product` WHERE RegistrationId='$ind' GROUP BY ProductCategory");
   while($Cate = mysqli_fetch_array($Product))
   {
  ?>
              <li data-filter="*" class="filter-active"><?php echo $Cate['ProductCategory']; ; ?></li>
              <?php
            }
            ?>
          </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
         <?php
         $Product = mysqli_query($sql_con,"SELECT * FROM `product` where RegistrationId='$ind'");
   while($Cate = mysqli_fetch_array($Product))
   {
  ?>
          <div class="col-lg-6 menu-item">
            <div class="image">
            <img id="myimage" target="blank" src="image/<?php echo $Cate['Product']; ?>" alt="" class="menu-img">
            </div>
            <div class="menu-content">
              <a href="#"><?php echo $Cate['ProductName']; ?></a><span><span class="WebRupees">Rs.</span><?php echo $Cate['ProductRate']; ?>/-</span>
            </div>
            <div class="menu-ingredients">
              <?php echo $Cate['ProductDescription']; ?>
            </div>
          </div>
<?php 
}
?>
</div>
      </div>
    </section><!-- End Menu Section -->




    <!-- ======= Book A Table Section ======= -->
    <?php
    include 'conne.php';

     if(isset($_POST['Submit']))
     {
      $Reg = isset($_POST['Reg'])?$_POST['Reg']:null;
      $name = isset($_POST['name'])?$_POST['name']:null;
      $email = isset($_POST['email'])?$_POST['email']:null;
      $phone = isset($_POST['phone'])?$_POST['phone']:null;
      $date = isset($_POST['date'])?$_POST['date']:null;
      $time = isset($_POST['time'])?$_POST['time']:null;
      $people = isset($_POST['people'])?$_POST['people']:null;
      $message = isset($_POST['message'])?$_POST['message']:null;

      $result = mysqli_query($sql_con,"INSERT INTO `enquiry`(`RegistrationId`,`Name`,`Email`,`Phone`,`Date`,`Time`,`People`,`Message`) VALUES ('$Reg','$name','$email','$phone','$date','$time','$people','$message')");
     }
    ?>
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Enquiry</h2>
          <p>Enquiry</p>
        </div>

        <form method="post" role="form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            
  <div class="form-group has-success">
    <input type="name" class="form-control" style="display: none;"  id="Regis" value="<?php echo $ind; ?>" name="Reg" >
  </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <br><br>
          <div class="text-center"><button type="submit" name="Submit" class="btn btn-danger">Enquiry Now</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our <?php echo $FirmName1; ?></p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">
         <?php 
         $gallery = mysqli_query($sql_con,"SELECT * FROM `gallery` where RegistrationId='$ind'");
   while($img = mysqli_fetch_array($gallery))
   {
   ?>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="image/<?php echo $img['Image'];?>" class="gallery-lightbox" data-gall="gallery-item">
                <img src="image/<?php echo $img['Image']; ?>" alt="" class="img-fluid" style="height: 200px; width: 280px;">
              </a>
            </div>
          </div>
          <?php 
        }
        ?>
        </div>

      </div>
    </section>
    <!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <?php
       $Contact = mysqli_query($sql_con,"SELECT * FROM `contact` where RegistrationId='$ind'");
   while($our = mysqli_fetch_array($Contact))
   {
    $Location = $our['Location'];
    $State = $our['State'];
    $Country = $our['Country'];
    $Email = $our['EmailId'];
    $PhoneNo = $our['PhoneNo'];
    $OpeningFrom = $our['OpeningFrom'];
    $OpeningTo = $our['OpeningTo'];
    $website = $our['Website'];
   }
   if(!empty($Location))
   {
  $Location1 = $Location; 
   }
   else
   {
$Location1 = "Data Not Found";
   }
   if(!empty($State))
   {
  $State1 = $State; 
   }
   else
   {
$State1 = "Data Not Found";
   }
    if(!empty($Country))
   {
  $Country1 = $Country; 
   }
   else
   {
$Country1 = "Data Not Found";
   }
    if(!empty($Email))
   {
  $Email1 = $Email; 
   }
   else
   {
$Email1 = "Data Not Found";
   }
   if(!empty($PhoneNo))
   {
  $PhoneNo1 = $PhoneNo; 
   }
   else
   {
$PhoneNo1 = "Data Not Found";
   }
    if(!empty($OpeningFrom))
   {
  $OpeningFrom1 = $OpeningFrom; 
   }
   else
   {
$OpeningFrom1 = "Data Not Found";
   }
    if(!empty($OpeningTo))
   {
  $OpeningTo1 = $OpeningTo; 
   }
   else
   {
$OpeningTo1 = "Data Not Found";
   }
    if(!empty($website))
   {
  $website1 = $website; 
   }
   else
   {
$website1 = "Data Not Found";
   }
?>
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
       
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><?php echo $Location1; ?></p>
                <p><?php echo $State1; ?></p>
                <p><?php echo $Country1; ?></p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  <?php echo $OpeningFrom1;?>&nbsp;to&nbsp;<?php echo $OpeningTo1;?>
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?php echo $Email1; ?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><?php echo $PhoneNo1; ?></p>
              </div>

              <div class="phone">
                <i class="bi bi-cloud"></i>
                <h4>Website:</h4>
                <p><?php echo $website1; ?></p>
              </div>

            </div>

          </div>
        <?php
    include 'conne.php';

     if(isset($_POST['btn_submit']))
     {
      $ID = isset($_POST['ID'])?$_POST['ID']:null;
      $Contactname = isset($_POST['Contactname'])?$_POST['Contactname']:null;
      $Contactemail = isset($_POST['Contactemail'])?$_POST['Contactemail']:null;
      $Contactsubject = isset($_POST['Contactsubject'])?$_POST['Contactsubject']:null;
      $Contactmessage = isset($_POST['Contactmessage'])?$_POST['Contactmessage']:null;

      $result = mysqli_query($sql_con,"INSERT INTO `contact_us`(`RegistrationId`,`Name`,`Email`,`Subject`,`Message`) VALUES ('$ID','$Contactname','$Contactemail','$Contactsubject','$Contactmessage')");
     }
    ?>
          <div class="col-lg-8 mt-5 mt-lg-0">

            <form method="post" role="form">
              <div class="row">
  <div class="form-group has-success">
    <input type="name" class="form-control" style="display: none;"  id="Regis" value="<?php echo $ind; ?>" name="ID" >
  </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="Contactname" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="Contactemail" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="Contactsubject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="Contactmessage" rows="8" placeholder="Message" required></textarea>
              </div>
              <br>
              <div class="text-center"><button type="submit" name="btn_submit" class="btn btn-danger">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3><?php echo $FirmName1; ?></h3>
              <p>
                <?php echo $Location1; ?> <br>
                <?php echo $State1; ?><br>
                <?php echo $Country1; ?><br><br>
                <strong>Phone:</strong> <?php echo $PhoneNo1; ?><br>
                <strong>Email:</strong> <?php echo $Email1; ?><br>
              </p>
              <div class="social-links mt-3">
                <a href="<?php echo $twitter; ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="<?php echo $Facebook; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="<?php echo $Instagram; ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="<?php echo $linkedin; ?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#menu">Product</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Product Category</h4>
            <ul>
              <?php
         $Product = mysqli_query($sql_con,"SELECT * FROM `product` where RegistrationId='$ind' LIMIT 5");
   while($Cate = mysqli_fetch_array($Product))
   {
  ?>
              <li><i class="bx bx-chevron-right"></i> <a href="#menu"><?php echo $Cate['ProductCategory']; ?></a></li>
              <?php
            }
            ?>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>KIYAN CH SOLUTIONS</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      
        Managed by <a href="">KIYAN CH SOLUTIONS</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>