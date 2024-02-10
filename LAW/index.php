<?php
include 'connection.php';

$user = $_GET['user6'];
$name = $_GET['name'];

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
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $name; ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Law Firm Website Template" name="keywords">
        <meta content="Law Firm Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    
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

<body>

<div class="sticky-container">
    <ul class="sticky">
        
        <li style="background-color: #3B5998; color: white;  padding: 10px;">
          <a href="<?php echo $facebook; ?>" target="_blank" style="background-color: #3B5998; color: white;">
            <i class="fab fa-facebook" style="font-size: 24px; text-align: center; "></i>
          </a>
        </li>
        <li style="background-color: #55ACEE; color: white;  padding: 12px;">
            <a href="<?php echo $Twitter; ?>" target="_blank" style="background-color: #55ACEE; color: white;"> 
            <i class="fab fa-twitter" style="font-size: 20px; text-align: center; "></i>
            </a>
        </li>
        <li style="background-color: #bb0000; color: white;  padding: 12px;">
            <a href="<?php echo $youtube; ?>" target="_blank" style="background-color: #bb0000; color: white;"> 
            <i class="fab fa-youtube" style="font-size: 20px; text-align: center;"></i>
            </a>
        </li>
        <li style="background-color: #ac2bac; color: white;  padding: 12px;">
             <a href="<?php echo $Instagram; ?>" target="_blank" style="background-color: #ac2bac; color: white;"> <i class="fab fa-instagram" style="font-size: 20px; text-align: center; "></i>
             </a>
        </li>
        <li style="background-color: #007bb5; color: white;  padding: 12px;">
            <a href="<?php echo $LinkedIn; ?>" target="_blank" style="background-color: #007bb5; color: white;"> 
          <i class="fab fa-linkedin" style="font-size: 20px; text-align: center;"> </i>
            </a>
        </li>
        <li style="background-color: green; color: white;  padding: 12px;">
             <a href="https://api.whatsapp.com/send?phone=<?php echo "+91".$MobileNo;?>" target="_blank" style="background-color: green; color: white;"> 
             <i class="fab fa-whatsapp" style="font-size: 20px; text-align: center;"></i>
             </a>
        </li>
    </ul>
</div>

        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.php">
                                     <img src="../image/<?php echo $logo; ?>" class="img-fluid img-thumbnail" style="width: 150px; height: 250px;">
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="top-bar-right">
                                <div class="text">
                                    <h2>10:00 - 7:00</h2>
                                    <p>Opening Hour Mon - Fri</p>
                                </div>
                                <div class="text">
                                    <h2><?php echo $mobile; ?></h2>
                                    <p>Call Us For Free Consultation</p>
                                </div>
                                <div class="social">
                                    <a href="<?php echo $twitter; ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="<?php echo $facebook; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="<?php echo $linkedin; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="<?php echo $instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="index.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="index.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" class="nav-item nav-link active">Home</a>
                                <a href="about.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" class="nav-item nav-link">About us</a>
                                <a href="practice.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" class="nav-item nav-link">Practice Area</a>
                                <a href="attorneys.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" class="nav-item nav-link">Attorneys</a>
                                <a href="casestudy.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" class="nav-item nav-link">Case Studies</a>
                                <a href="gallery.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" class="nav-item nav-link">Gallery</a>
                                <a href="blog.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" class="nav-item nav-link">Blog</a>
                                <a href="contact.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" class="nav-item nav-link">Contact Us</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="appointment.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Get Appointment</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            
            
            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <?php
                    $bann = mysqli_query($sql_con, "SELECT * FROM banner where RegistrationId='$user'");
                    while($rowes = mysqli_fetch_array($bann))
                    {
                        $ban1 = $rowes['Banner_One'];
                    }
                    ?>
                    <div class="carousel-item active">
                        <img src="../image/<?php echo $ban1; ?>" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">We fight for your justice</h1>
                            <a class="btn animated fadeInUp" href="contact.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Get free consultation</a>
                        </div>
                    </div>
                   <?php
                    $bann = mysqli_query($sql_con, "SELECT * FROM banner where RegistrationId='$user'");
                    while($rowes = mysqli_fetch_array($bann))
                    {
                        $ban2 = $rowes['Banner_two'];
                        $ban3 = $rowes['Banner_three'];
                    }
                    ?>
                    <div class="carousel-item">
                        <img src="../image/<?php echo $ban2; ?>" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">We prepared to oppose for you</h1>
                            <a class="btn animated fadeInUp" href="contact.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Get free consultation</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="../image/<?php echo $ban3; ?>" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">We fight for your privilege</h1>
                            
                            <a class="btn animated fadeInUp" href="contact.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Get free consultation</a>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->
            
            
            <!-- Top Feature Start-->
            <div class="feature-top">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="far fa-check-circle"></i>
                                <h3>Legal</h3>
                                <p>Govt Approved</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="fa fa-user-tie"></i>
                                <h3>Attorneys</h3>
                                <p>Expert Attorneys</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="far fa-thumbs-up"></i>
                                <h3>Success</h3>
                                <p>99.99% Case Won</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <i class="far fa-handshake"></i>
                                <h3>Support</h3>
                                <p>Quick Support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Feature End-->
            
    <?php
    $about = mysqli_query($sql_con, "SELECT * FROM about_firm where RegistrationId='$user'");
    while($rowa = mysqli_fetch_array($about))
    {
        $descrip = $rowa['Description'];
        $bussines = $rowa['Bussines'];
        $employee = $rowa['Employee'];
        $establishment = $rowa['Establishment'];
        $image = $rowa['Image'];
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
            <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="../image/<?php echo $image; ?>" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header">
                                <h2>Learn About Us</h2>
                            </div>
                            <div class="about-text">
                                <p style="color: black;"><b>Bussines Type:</b> <?php echo $bussines; ?></p>
                                <p style="color: black;"><b>No of Employee:</b> <?php echo $employee; ?></p>
                                <p style="color: black;"><b>Establishmen:</b> <?php echo $establishmen; ?></p>
                                <p class="text-sm" style="color: black;">
                                    <?php echo $descrip; ?>
                                </p>
                                <a class="btn" href="about.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->

<style>
        .text-small {
    font-size: 16px !important;
    overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 2; /* number of lines to show */
   -webkit-box-orient: vertical;
}
    </style>
    
            <!-- Service Start -->
            <div class="service">
                <div class="container">
                    <div class="section-header">
                        <h2>Our Practices Areas</h2>
                    </div>
                    <div class="row">
                        <?php
                        $pract = mysqli_query($sql_con, "SELECT * FROM practice where RegistrationId='$user'");
                        while($pra = mysqli_fetch_array($pract))
                        {
                            $pra_name = $pra['Title'];
                            $pra_short = $pra['Short_detail'];
                            $pra_sno = $pra['Sno'];
                        ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <div class="service-icon" style="height: 150px;">
                                    <i class="fa fa-landmark"></i>
                                </div>
                                <h3><?php echo $pra_name; ?></h3>
                                <p class="text-small" style="color: white; height: 50px;">
                                    <?php echo $pra_short; ?>
                                </p>
                                <a class="btn" href="practice-detail.php?id=<?php echo $pra_sno; ?>&user6=<?php echo $user; ?>&name=<?php echo $name; ?>">Learn More</a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Service End -->
            
            
            <!-- Feature Start -->
            <div class="feature">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="section-header">
                                <h2>Why Choose Us</h2>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <div class="feature-icon" style="height: 100px;">
                                        <i class="fa fa-gavel" style="height: 80px; font-size: 50px;"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h3>Best law practices</h3>
                                    
                                </div>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <div class="feature-icon" style="height: 100px;">
                                        <i class="fa fa-balance-scale" style="height: 80px; font-size: 50px;"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h3>Efficiency & Trust</h3>
                                </div>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <div class="feature-icon" style="height: 100px;">
                                        <i class="far fa-smile" style="height: 80px; font-size: 50px;"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h3>Results you deserve</h3>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="feature-img">
                                <img src="img/feature.jpg" alt="Feature">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End -->
            
            
            <!-- Team Start -->
            <div class="team">
                <div class="container">
                    <div class="section-header">
                        <h2>Meet Our Expert Attorneys</h2>
                    </div>
                    <div class="row">
                        <?php
                        $team = mysqli_query($sql_con, "SELECT * FROM team where RegistrationId='$user' limit 4");
                        while($tea = mysqli_fetch_array($team))
                        {
                            $team_name = $tea['Name'];
                            $team_image = $tea['Image'];
                            $team_desc = $tea['Designation'];
                        ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="../image/<?php echo $team_image; ?>" alt="Team Image" style="height: 250px;">
                                </div>
                                <div class="team-text">
                                    <h2><?php echo $team_name; ?> </h2>
                                    <p><?php echo $team_desc; ?></p>
                                    <div class="team-social">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                       
                    </div>
                </div>
            </div>
            <!-- Team End -->


            <!-- FAQs Start -->
            <div class="faqs" style="padding-bottom: 0px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="faqs-img">
                                <img src="img/faqs.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="section-header">
                                <h2>Have A Questions?</h2>
                            </div>
                            <div id="accordion">
                                <?php
                                $faq = mysqli_query($sql_con, "SELECT * FROM faq where RegistrationId='$user' limit 5");
                                $count = 0;
                                while($faqs = mysqli_fetch_array($faq))
                                {
                                    $question = $faqs['Question'];
                                    $answer = $faqs['Answer'];
                                ?>
                                <div class="card">
                                    <div class="card-header">
                                       <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                            <span><?php echo ++$count; ?></span> <?php echo $question; ?>
                                        </a>
                                    </div>
                                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <?php echo $answer; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                               
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQs End -->


            <!-- Testimonial Start -->
            <div class="testimonial">
                <div class="container">
                    <div class="section-header">
                        <h2>Review From Client</h2>
                    </div>
                    <div class="owl-carousel testimonials-carousel">
                        <?php
                        $team = mysqli_query($sql_con, "SELECT * FROM testimonial where RegistrationId='$user'");
                        while($tea = mysqli_fetch_array($team))
                        {
                            $testi_name = $tea['Name'];
                            $testi_image = $tea['Image'];
                            $testi_desc = $tea['Designation'];
                        ?>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="../image/<?php echo $testi_image; ?>" alt="">
                                </div>
                                <div class="col-9">
                                    <h2><?php echo $testi_name; ?></h2>
                                </div>
                                <div class="col-12">
                                    <p> <?php echo $testi_desc; ?> </p>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->


            <!-- Blog Start -->
            <div class="blog">
                <div class="container">
                    <div class="section-header">
                        <h2>Latest From Blog</h2>
                    </div>
                    <div class="owl-carousel blog-carousel">
                        <?php 
                        $blog = mysqli_query($sql_con, "SELECT * FROM blog where RegistrationId='$user'");
                        while($blo = mysqli_fetch_array($blog))
                        {
                            $title = $blo['Title'];
                            $date = $blo['Date'];
                            $time = $blo['Time'];
                            $short = $blo['Short_detail'];
                            $bl_im = $blo['Image']; 
                            $ided = $blo['Sno'];
                        ?>
                        <div class="blog-item" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
                            <img src="../image/<?php echo $bl_im; ?>" alt="Blog">
                            <h3 style="margin-left: 10px;"><?php echo $title; ?></h3>
                            <div class="meta" style="margin-left: 10px;">
                                <i class="fa fa-list-alt"></i>
                                <a href=""><?php echo $time; ?></a>
                                <i class="fa fa-calendar-alt"></i>
                                <p><?php echo $date; ?></p>
                            </div>
                            <p class="text-sm" style="margin: 10px;"><?php echo $short; ?></p>
                            <a class="btn" href="blog-detail.php?ided=<?php echo $ided; ?>&user=<?php echo $user; ?>&name=<?php echo $name; ?>" style="margin-left: 10px;">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        <?php
                        }
                      ?>
                    </div>
                </div>
            </div>
            <!-- Blog End -->
            
            
            <!-- Newsletter Start -->
            <div class="newsletter">
                <div class="container">
                    <div class="section-header">
                        <h2>Subscribe Our Newsletter</h2>
                    </div>
                    <div class="form">
                        <input class="form-control" placeholder="Email here">
                        <button class="btn">Submit</button>
                    </div>
                </div>
            </div>
            <!-- Newsletter End -->


            <!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-about">
                             <center>   <img src="../image/<?php echo $logo; ?>" style="height: 70px;" class="img-thumbnail img-fluid"> </center>
                                <p class="text-sm" style="margin-top: 15px; color: white;">
                                    <?php echo $descrip; ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <?php
                                $serv = mysqli_query($sql_con, "SELECT * FROM practice where RegistrationId='$user' limit 5");
                                while($rowd = mysqli_fetch_array($serv))
                                {
                                    $ser_name = $rowd['Title'];
                                ?>
                                <a href="" style="color: white;"><?php echo $ser_name; ?></a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="about.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" style="color: white;">About Us</a>
                                <a href="practice.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" style="color: white;">Practices</a>
                                <a href="attorneys?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" style="color: white;">Attorneys</a>
                                <a href="casestudy.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" style="color: white;">Case Studies</a>
                                <a href="contact.php?user6=<?php echo $user; ?>&name=<?php echo $name; ?>" style="color: white;">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p style="color: white;"><?php echo $landmark; ?>, <?php echo $city; ?>, <?php echo $pincode; ?>, <?php echo $state; ?>, <?php echo $country; ?></p>
                                <p style="color: white;"><?php echo $mobile; ?></p>
                                <p style="color: white;"><?php echo $email; ?></p>
                                <div class="footer-social">
                                   
                                    <a href="<?php echo $twitter; ?>"><i class="fab fa-twitter"></i></a>
                                    <a href="<?php echo $facebook; ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a href="<?php echo $instagram; ?>"><i class="fab fa-instagram"></i></a>
                                    <a href="<?php echo $linkedin; ?>"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
               
            </div>
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
