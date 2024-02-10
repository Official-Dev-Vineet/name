<?php
$user = $_GET['user6'];
$name = $_GET['name'];
$id = $_GET['id'];
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
    $logo = $row['CompanyLogo'];
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

$pract = mysqli_query($sql_con, "SELECT * FROM practice where RegistrationId='$user'");
    while($pra = mysqli_fetch_array($pract))
    {
        $title = $pra['Title'];
        $short = $pra['Short_detail'];
        $long = $blo['Long_Detail'];
        $bl_im = $blo['Image'];
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
                                     <img src="../image/<?php echo $logo; ?>" class="img-fluid img-thumbnail">
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
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12 section-header">
                            <h2><?php echo $title; ?></h2>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Single Page Start -->
            <div class="single">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-12">
                            <img class="img-fluid rounded" src="../image/<?php echo $bl_im; ?>" style="width: 100%;" alt="Image">
                             <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href=""><?php echo $time; ?></a>
                                <i class="fa fa-calendar-alt"></i>
                                <a><?php echo $date; ?></a>
                            </div>
                            
                            <p style="color: black;"><?php echo $short; ?></p>
                            <p style="color: black;"><?php echo $long; ?></p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Page End -->


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
    <?php
    $about = mysqli_query($sql_con, "SELECT * FROM about_firm where RegistrationId='$user'");
    while($rowa = mysqli_fetch_array($about))
    {
        $descrip = $rowa['Description'];
    }
    ?>
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