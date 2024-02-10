<?php
include 'conne.php';

// $result2=mysqli_query($sql_con,"SELECT * FROM `product_category`");
//   while($row2=mysqli_fetch_array($result2))
//    {
//      $number = $row2['ProductCategory'];
//    }

$result = mysqli_query($sql_con, "SELECT * FROM `social`");
while ($row = mysqli_fetch_array($result)) {
   $Facebook = $row['Facebook'];
   $twitter = $row['Twitter'];
   $Instagram = $row['Instagram'];
   $linkedin = $row['LinkedIn'];
}
if (isset($_POST['save'])) {
   $product = isset($_POST['search_product']) ? $_POST['search_product'] : null;
   $country = isset($_POST['search_country']) ? $_POST['search_country'] : null;
   $prods = mysqli_query($sql_con, "SELECT * FROM `register` where ProductCategory='$product' and  Country='$country'");
   while ($rowss = mysqli_fetch_array($prods)) {
      $product1 = $rowss['ProductCategory'];
      $country1 = $rowss['Country'];
   }
   if (empty($product)) {
      header("Location: index.php");
   } else if ($country == "Select Country" && !empty($product)) {
      //header("Location: index.php");  
      header("Location: productpage.php?search=" . $product . "");
   } else {
      header("Location: productpage.php?search=" . $product . "&country=" . $country . "");
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Appanage Mart</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!--enable mobile device-->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--fontawesome css-->
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <!--bootstrap css-->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!--animate css-->
   <link rel="stylesheet" href="css/animate-wow.css">
   <link rel="icon" type="image/png" href="images/AppanageLogo2.png">
   <!--main css-->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/bootstrap-select.min.css">
   <link rel="stylesheet" href="css/slick.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!--responsive css-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
   <?php
   include 'header.php';
   ?>
   <div class="page-content-product" style="background-color: var(--brandColor);">
      <div class="main-product" style="background-color: var(--brandColor);background-image:url(css-image/bg.avif);background-size: cover;">
         <div class="container" style="max-width: 1000px;">
            <div class="row clearfix">
               <div class="find-box" style="padding:5rem 0">
                  <h1 style="color:white;">Find your next product or<br>business partner here.</h1>
                  <h4 style="color:white;">Inspiration does exist, but it must find you working.</h4>
                  <div class="product-sh">
                     <form method="post" action="">
                        <div class="col-sm-6">
                           <div class="form-sh">
                              <input type="text" name="search_product" placeholder="Search for the Product">
                           </div>
                        </div>

                        <div class="col-sm-3">
                           <div class="form-sh">
                              <select style="background-color: var(--brandColor);border:none; color: white; height: 50px;" name="search_country" class="form-control">
                                 <option selected>Select Country</option>
                                 <?php
                                 $result = mysqli_query($sql_con, "SELECT * FROM `country` group by Country_Name");
                                 while ($row = mysqli_fetch_array($result)) {
                                    $country = $row['Country_Name'];
                                 ?>
                                    <option style="background-color:transparent; color: white;"><?php echo $country; ?></option>
                                 <?php

                                 }
                                 ?>
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="form-sh"><input type="submit" name="save" style="background-color:white; color: var(--brandColor); font-size: 28px; font-weight: bolder;" value="Search"></div>
                        </div>
                        <p></p>
                  </div>
               </div>
               </form>
            </div>
            <style>
               #clearfix {
                  display: flex !important;
                  flex-wrap: wrap;
                  align-items: baseline;
                  justify-content: center;
                  gap: 2rem !important;
               }

               #product-category {
                  backdrop-filter: blur(5px);
                  border: 1px solid white;
                  border-radius: 10px;
                  width: 150px;
                  height: 100%;
                  position: relative;
                  cursor: pointer;
                  transition: 500ms;
                  box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
               }

               #product-category:hover {
                  scale: 1.05;
               }

               #product-category a {
                  width: 100%;
                  height: 100%;
               }

               #product-category .image-container {
                  padding: 5px;
                  width: 100px;
                  height: 100px;
                  margin: auto;
               }

               #product-category .image-container img {
                  width: 100%;
                  height: 100%;
                  object-fit: contain;
               }

               #product-category .text {
                  position: absolute;
                  top: calc(100% + 10px);
                  width: 100%;
                  text-overflow: ellipsis;
                  white-space: nowrap;
                  overflow: hidden;
                  text-align: center;
                  font-size: 12px;
                  padding: 0 5px;
                  left: 0;
                  font-weight: 600;
                  color: #f5f5f5 !important;
               }
            </style>
            <div id="clearfix">
               <?php
               $product = mysqli_query($sql_con, "SELECT * FROM `product_category` order by Sno DESC");
               while ($Rows = mysqli_fetch_array($product)) {
                  $number = $Rows['ProductCategory'];
               ?>
                  <div id="product-category" title="<?php echo $Rows['ProductCategory']; ?>">
                     <a href="productpage.php?search=<?php echo $number; ?>">
                        <div class="image-container">
                           <img src="image/<?php echo $Rows['Image']; ?>" alt="">
                        </div>
                        <div class="text">
                           <p style="text-align:center !important"><?php echo trim($Rows['ProductCategory']); ?></p>
                        </div>
                     </a>
                  </div>

               <?php
               }
               ?>

            </div>
         </div>
      </div>
   </div>
   <div class="cat-main-box">
      <div class="container" style="max-width: 1200px;">
         <div class="row panel-row">
            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.0s">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <img src="images/xpann-icon.jpg" class="icon-small" alt="">
                     <h4>“Appanage Mart” Your Business</h4>
                     <p style="color: black;">Grow easily with Appanage Mart. Create free account.
                        We help expanding your business easily.
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <img src="images/create-icon.jpg" class="icon-small" alt="">
                     <h4>Create and add</h4>
                     <p style="color: black;">Hamess the power of social media.

                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeIn hidden-sm" data-wow-delay="0.4s">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <img src="images/get-icon.jpg" class="icon-small" alt="">
                     <h4>Get inspired</h4>
                     <p style="color: black;">Join Appanage Mart for Brand Promotion,
                        The industry in 2023 for Brand Promotion.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="products_exciting_box">
      <div class="container" style="max-width: 1200px;">
         <div class="row">
            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
               <div class="exciting_box f_pd">
                  <img src="images/exciting_img-01.jpg" class="icon-small" alt="" />
                  <h4>Explore <strong>exciting</strong> and exotic products
                     tailored to you.
                  </h4>
                  <p style="color: black;">Brand Promotion is the method to market your Brand, Highilighting
                     a company's personality, value and mission.
                  </p>
               </div>
            </div>
            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
               <div class="exciting_box l_pd">
                  <img src="images/exciting_img-02.jpg" class="icon-small" alt="" />
                  <h4><strong>List your products on</strong> Appanage Mart and grow connections.</h4>
                  <p style="color: black;">Marketing the brand name and logo, popularising the mission statement
                     and focusing on bulding brand equity.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="start-free-box">
      <div class="container" style="max-width: 1200px;">
         <div class="row">
            <div class="container">
               <div class="main-start-box">
                  <div class="free-box-a clearfix">
                     <div class="col-md-6 col-sm-6">
                        <div class="left-a-f">
                           <h3>A platform built for scale & expansion. Start for free.</h3>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="right-a-f">
                           <p style="color: black;">Over the comming years, way thet business through the web
                              works will change at agreat - and Appanage Mart is the
                              gamebreaker.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="main-start-box">
               <div class="container" style="max-width: 1200px;">
                  <div class="buyer-box clearfix">
                     <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="left-buyer">
                           <img class="img-responsive" src="images/steam.png" alt="#" />
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="right-buyer">
                           <h4>Seller</h4>
                           <h2>Empower your factory<br>
                              <span>With a new lead Channel</span>
                           </h2>
                           <p style="color: black;">Never worry about sales or income from outbound
                              channels. with Appanage Mart your store is directly
                              connected to thousands of interested in your
                              products.
                           </p>
                           <a href="./customer-registration.php" style="background-color: var(--brandColor);">Create a Seller account</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="bg_img_right"><img src="images/bg_img1.png" alt="#" /></div>
            <div class="main-start-box">
               <div class="container" style="max-width: 1200px;">
                  <div class="supplier clearfix">
                     <div class="col-md-5 col-sm-6">
                        <div class="left-supplier">
                           <h4>Supplier</h4>
                           <h2>Grow your store <br><span>With a new sales channel</span></h2>
                           <p style="color: black;">Never worry about sales or income ftom outbound
                              channels. with Appanage Mart your store is directly
                              connected to thousands of interested in your
                              products.
                           </p>
                           .
                           <a href="./customer-registration.php" style="background-color: var(--brandColor);">Create a supplier account</a>
                        </div>
                     </div>
                     <div class="col-md-7 col-sm-6">
                        <div class="right-supplier">
                           <img class="img-responsive" src="images/supplier-pc-img.png" alt="#" />
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" integrity="sha512-pmAAV1X4Nh5jA9m+jcvwJXFQvCBi3T17aZ1KWkqXr7g/O2YMvO8rfaa5ETWDuBvRq6fbDjlw4jHL44jNTScaKg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <div class="products">
      <div class="main-products">
         <h2>TRENDING PRODUCTS ON APPANAGE MART</h2>
         <style>
            .slide-container {
               max-width: 1400px;
               width: 100%;
               padding: 0;
               height: 550px !important;

            }

            .slide-content {
               /* margin: 40px; */
               border-radius: 25px;
               overflow: hidden;
            }

            .card {
               border-radius: 25px;
               background-color: #FFF;
               transition: all 0.5s ease;
               box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            }

            .card:hover {
               box-shadow: 0 0 20px rgba(0, 0, 0, 0.25);
               scale: 0.9;
               transform: translateY(-5px);
            }

            .image-content,
            .card-content {
               display: flex;
               flex-direction: column;
               align-items: center;
               padding: 10px 14px;
            }

            .image-content {
               position: relative;
               row-gap: 5px;
               padding: 25px 0;
            }

            .overlay {
               position: absolute;
               left: 0;
               top: 0;
               height: 100%;
               width: 100%;
               background-color: var(--brandColor);
               border-radius: 25px 25px 0 0;
            }

            .card-image {
               position: relative;
               height: 150px;
               width: 150px;
               border-radius: 50%;
               background: #FFF;
               padding: 3px;
            }

            .card-image .card-img {
               height: 100%;
               width: 100%;
               object-fit: contain;
               border-radius: 50%;
               border: 4px solid var(--brandColor);
            }

            .name {
               font-size: 18px;
               font-weight: 500;
               color: #333;
               text-overflow: ellipsis;
               white-space: nowrap;
               overflow: hidden;
               text-align: center;
               font-weight: 600;
               color: var(--brandColor);
            }

            .description {
               font-size: 14px;
               color: #707070;
               text-align: center;
               text-overflow: ellipsis;
               white-space: nowrap;
               overflow: hidden;
               text-align: center;
            }

            .button {
               border: none;
               font-size: 16px;
               color: #FFF;
               padding: 8px 16px;
               background-color: var(--brandColor);
               border-radius: 6px;
               margin: 14px;
               cursor: pointer;
               transition: all 0.3s ease;
            }

            .button:hover {
               filter: saturate(120%);
            }

            .swiper-navBtn {
               color: var(--brandColor);
               transition: filter 0.3s ease;
               filter: saturate(50%);
            }

            .swiper-navBtn:hover {
               filter: saturate(100%);
            }

            .swiper-navBtn::before,
            .swiper-navBtn::after {
               font-size: 35px;
            }

            .swiper-button-next {
               right: 0;
            }

            .swiper-button-prev {
               left: 0;
            }

            .swiper-pagination-bullet {
               background-color: var(--brandColor);
               opacity: 1;
            }

            .swiper-pagination-bullet-active {
               background-color: var(--brandColor);
            }

            @media screen and (max-width: 768px) {
               .slide-content {
                  margin: 0 10px;
               }

               .swiper-navBtn {
                  display: none;
               }
            }
         </style>
         <div class="product-slider" style="padding:1rem">
            <div class="slide-container swiper">
               <div class="slide-content">
                  <div class="card-wrapper swiper-wrapper">
                     <?php
                     $owner = mysqli_query($sql_con, "SELECT * FROM `register`");
                     while ($image = mysqli_fetch_array($owner)) {
                        $CompanyOwner = $image['CompanyOwner'];
                        $CompanNa = $image['CompanyName'];
                        $logo = $image['CompanyLogo'];
                        $PhoneNo = $image['MobileNo'];
                        $PhoneNo = substr_replace($PhoneNo, "xxxx", 4, 4);
                        $Email_Id = $image['EmailId'];
                        // email id replace with xxxx
                        $Email_Id = substr_replace($Email_Id, "xxxx", 2, 3);
                        $category = $image['CompanyCategory'];
                     ?>

                        <div class="card swiper-slide">
                           <div class="image-content">
                              <span class="overlay"></span>
                              <div class="card-image">
                                 <img src="images/AppanageLogo1.png" alt="<?php echo $CompanNa ?>" class="card-img">
                              </div>
                           </div>
                           <div class="card-content">
                              <h2 class="name"><?php echo $category ?></h2>
                              <p class="description">
                                 <?php echo $CompanNa ?>
                              </p>
                              <p class="description">
                                 <?php echo $PhoneNo ?>
                              </p>
                              <p class="description">
                                 <?php echo $Email_Id ?>
                              </p>
                              <button class="button"><a style="color:#fff;font-weight: 500;" target="_blank" href="productpage.php?search='<?php echo $CompanNa; ?>'">View More</a></button>
                           </div>
                        </div>
                     <?php
                     }
                     ?>
                  </div>
               </div>

               <div class="swiper-button-next swiper-navBtn"></div>
               <div class="swiper-button-prev swiper-navBtn"></div>
               <div class="swiper-pagination"></div>
            </div>
         </div>
      </div>
   </div>
   <style>
      .testimonial-slider {
         background-color: var(--brandColor);
         padding: 2em;
      }

      .testimonial-slider .img-wrapper {
         width: 50%;
      }

      .testimonial-slider .img-wrapper img {
         height: 100%;
         width: 100%;
         object-fit: contain;
         border-radius: 5px;
         box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.3);
      }
      .testimonial-title {
         color: #fff;
      }
      .testimonial-title h2 {
         padding-left: 0.2em;
      }

      .card {
         margin: 0 0.5em;
         box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
         border: none;
         height: 100%;
      }

      .card-text {
         height: 150px;
         overflow: hidden;
         text-overflow: ellipsis;
         display: -webkit-box;
         text-align: justify;
      }

      .carousel-control-prev,
      .carousel-control-next {
         background-color: #fff;
         width: 3em;
         height: 3em;
         border-radius: 50%;
         top: 60%;
         transform: translateY(-50%);
      }

      @media (min-width: 576px) {
         .carousel-item {
            margin-right: 0;
            flex: 0 0 45%;
            display: block;
         }

         .carousel-inner {
            display: flex;
         }
      }

      .flex {
         padding: 1rem;
         display: flex;
         gap: 1rem;

      }

      .flex h5 {
         margin-top: 1.5rem;
         font-weight: 700;
         overflow: hidden;
         text-overflow: ellipsis;
         --webkit-line-clamp: 1;
         --webkit-box-orient: vertical;
      }

      @media (min-width: 768px) {
         .carousel-inner {
            padding: 1em;
         }

         .carousel-control-prev,
         .carousel-control-next {
            opacity: 1;
            position: absolute;
            left: 1em;
            top: 90%;
            transform: translateY(-50%);
         }

         .carousel-control-next {
            left: 5em;
         }
      }
   </style>
   <div class="testimonial-slider">
      <div id="carouselExampleControls" class="carousel carousel-dark">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-4">
                  <div class="testimonial-title">
                     <i class="bi bi-quote display-1"></i>
                     <h2 class="fw-bold display-6">What our customers say</h2>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                  </button>
               </div>
               <div class="col-md-8">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="card">
                           <div class="flex">
                              <div class="img-wrapper">
                                 <img src="images/AppanageLogo1.png" class="d-block w-100" alt="...">
                              </div>
                              <div>
                                 <h5 class="card-title">Mohit singh</h5>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                              </div>
                           </div>
                           <div class="card-body">
                              <p class="card-text">Appanage Mart stands out for its superb service and top-tier products. Their website is user-friendly, and their customer support is second to none. With fast delivery and secure payments, shopping here is a breeze. Highly recommended for a hassle-free shopping experience.</p>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="card">
                           <div class="flex">
                              <div class="img-wrapper">
                                 <img src="images/AppanageLogo1.png" class="d-block w-100" alt="...">
                              </div>
                              <div>
                                 <h5 class="card-title">Parvesh Sharma</h5>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                              </div>
                           </div>
                           <div class="card-body">

                              <p class="card-text">Exceptional service and premium products define Appanage Mart. Navigating their platform is a pleasure, and their knowledgeable support team is always ready to assist. With swift delivery and secure transactions, shopping here is a seamless and enjoyable experience.</p>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="card">
                           <div class="flex">
                              <div class="img-wrapper">
                                 <img src="images/AppanageLogo1.png" class="d-block w-100" alt="...">
                              </div>
                              <div>
                                 <h5 class="card-title">Soniya Sharma</h5>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                              </div>

                           </div>
                           <div class="card-body">

                              <p class="card-text">Appanage Mart excels in every aspect. From their easy-to-use website to their high-quality products and exceptional customer service, they consistently exceed expectations. With fast shipping and secure payments, shopping here is a stress-free delight.</p>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="card">
                           <div class="flex">
                              <div class="img-wrapper">
                                 <img src="images/AppanageLogo1.png">
                              </div>
                              <div>
                                 <h5 class="card-title">Nikhil Bhati</h5>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                              </div>
                           </div>
                           <div class="card-body">
                              <p class="card-text">Experience excellence at Appanage Mart! Their user-friendly platform makes browsing a breeze, while their top-notch products never disappoint. Customer service is impeccable, ensuring any issues are swiftly addressed. With fast delivery and secure transactions, shopping here is a joy.</p>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="card">
                           <div class="flex">
                              <div class="img-wrapper"><img src="images/AppanageLogo1.png" class="d-block w-100" alt="..."> </div>
                              <div>
                                 <h5 class="card-title">Rohit negi</h5>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                              </div>

                           </div>
                           <div class="card-body">
                              <p class="card-text">Appanage Mart sets the bar high with its intuitive interface, premium products, and outstanding customer service. Navigating their diverse range is effortless, and their prompt support resolves queries swiftly. With reliable delivery and secure transactions, shopping here is a pleasure.</p>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="card">
                           <div class="flex">
                              <div class="img-wrapper"><img src="images/AppanageLogo1.png" class="d-block w-100" alt="..."> </div>
                              <div>
                                 <h5 class="card-title">Rajiv dinkar</h5>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                                 <i class="bi bi-star-fill text-warning pe-1"></i>
                              </div>
                           </div>
                           <div class="card-body">
                              <p class="card-text">Appanage Mart delivers excellence with seamless navigation, top-tier products, and exceptional customer service. Their user-friendly interface ensures effortless browsing, while prompt support addresses any concerns. With swift delivery and secure transactions, Appanage Mart epitomizes convenience and quality, earning my unwavering recommendation for a superior shopping experience..</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php include 'footer.php'; ?>
   <script>
      var multipleCardCarousel = document.querySelector("#carouselExampleControls");

      if (window.matchMedia("(min-width: 576px)").matches) {
         var carousel = new bootstrap.Carousel(multipleCardCarousel, {
            interval: false
         });
         var carouselWidth = $(".carousel-inner")[0].scrollWidth;
         var cardWidth = $(".carousel-item").width();
         var scrollPosition = 0;
         $("#carouselExampleControls .carousel-control-next").on("click", function() {
            if (scrollPosition < carouselWidth - cardWidth * 3) {
               scrollPosition += cardWidth;
               $("#carouselExampleControls .carousel-inner").animate({
                     scrollLeft: scrollPosition
                  },
                  600
               );
            }
         });
         $("#carouselExampleControls .carousel-control-prev").on("click", function() {
            if (scrollPosition > 0) {
               scrollPosition -= cardWidth;
               $("#carouselExampleControls .carousel-inner").animate({
                     scrollLeft: scrollPosition
                  },
                  600
               );
            }
         });
      } else {
         $(multipleCardCarousel).addClass("slide");
      }
   </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script>
      var swiper = new Swiper(".slide-content", {
         slidesPerView: 5,
         spaceBetween: 30,
         loop: true,
         centerSlide: 'true',
         fade: 'true',
         grabCursor: 'true',
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
         },
         autoplay: {
            delay: 3500,
            disableOnInteraction: false,
         },
         navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
         },

         breakpoints: {
            0: {
               slidesPerView: 1,
            },
            520: {
               slidesPerView: 1,
            },
            1080: {
               slidesPerView: 3,
            },
            1400: {
               slidesPerView: 4,
            },
            1600: {
               slidesPerView: 5,
            }
         },
      });
   </script>
   <!--main js-->
   <script src="js/jquery-1.12.4.min.js"></script>
   <!--bootstrap js-->
   <script src="js/bootstrap.min.js"></script>
   <script src="js/bootstrap-select.min.js"></script>
   <script src="js/slick.min.js"></script>
   <script src="js/wow.min.js"></script>
   <!--custom js-->
   <script src="js/custom.js"></script>
</body>

</html>