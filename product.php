<?php

$number = $_GET['search'];
$name = $_GET['name'];

if (empty($_GET['country'])) {
   //echo $country;
   //echo $number;

} else {
   $number = $_GET['search'];
   $country = $_GET['country'];
   //echo $country;
   //echo $number;

}

include 'conne.php';

$result = mysqli_query($sql_con, "SELECT * FROM `social`");
while ($row = mysqli_fetch_array($result)) {
   $Facebook = $row['Facebook'];
   $twitter = $row['Twitter'];
   $Instagram = $row['Instagram'];
   $linkedin = $row['LinkedIn'];
}

$limit = 3;

if (isset($_GET['page'])) {
   $page = $_GET['page'];
} else {
   $page = 1;
}
$offset = ($page - 1) * $limit;

if (isset($_POST['submits'])) {
   $name = isset($_POST['cust_name']) ? $_POST['cust_name'] : null;
   $email = isset($_POST['cust_email_id']) ? $_POST['cust_email_id'] : null;
   $feedback = isset($_POST['cust_feedback']) ? $_POST['cust_feedback'] : null;
   $firms_name = isset($_POST['firms_name']) ? $_POST['firms_name'] : null;


   $resultss = mysqli_query($sql_con, "INSERT INTO `feedback_data`(`customer_name`, `customer_email_id`, `feedback`, `firm_name`) VALUES ('$name','$email','$feedback','$firms_name')");
}

$regi = mysqli_query($sql_con, "SELECT * FROM register where RegistrationId='$number'");
while ($red = mysqli_fetch_array($regi)) {
   $categories = $red['CompanyCategory'];
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
   <!--main css-->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/bootstrap-select.min.css">
   <link rel="stylesheet" href="css/slick.min.css">
   <link rel="stylesheet" href="css/select2.min.css">
   <!--responsive css-->
   <link rel="stylesheet" href="css/responsive.css">

   <style type="text/css">
      * {
         box-sizing: border-box;
      }

      /* Style the search field */
      form.example input[type=text] {
         padding: 10px;
         font-size: 10px;
         border: 1px solid grey;
         float: left;
         width: 50%;
         margin-top: 15px;
         margin-left: 40px;
      }

      /* Style the submit button */
      form.example button {
         float: left;
         width: 10%;
         padding: 10px;
         background: #e32636;
         color: white;
         font-size: 10px;
         border: 1px solid grey;
         border-left: none;
         /* Prevent double borders */
         cursor: pointer;
         margin-top: 15px;
      }

      form.example button:hover {
         background: #0b7dda;
      }

      /* Clear floats */
      form.example::after {
         content: "";
         clear: both;
         display: table;
      }
   </style>

</head>

<body>
   <header id="header" class="top-head">
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-4 col-sm-12 left-rs">
                  <div class="navbar-header">
                     <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                     </button>
                     <a href="index.php" class="navbar-brand" style="padding: 0px; padding-top: 5px;"><img src="images/AppanageLogo1.png"></a>
                  </div>
                  <form class="example" method="post">

                     <input type="text" name="search" placeholder="Search For Product......">

                     <button type="submit" name="button"><a href="product.php?search=<?php echo $weig; ?>|search=<?php echo $ra; ?>|search=<?php echo $Compan; ?>|search=<?php echo $comp; ?>" style="color: white;"><i class="fa fa-search"></i></a></button>
                     <?php
                     $search = isset($_POST['search']) ? $_POST['search'] : null;
                     if (isset($_POST['button'])) {
                        $prod = mysqli_query($sql_con, "SELECT * FROM `product` where ProductName='$search' ");
                        while ($Ro = mysqli_fetch_array($prod)) {
                           $weig = $Ro['ProductWeight'];
                           $ra = $Ro['ProductRate'];
                           $Compan = $Ro['ProductCategory'];
                           $comp = $Ro['ProductName'];
                        }
                     }
                     ?>
                  </form>
               </div>
               <div class="col-md-8 col-sm-4" style="margin: 0px; padding: 0px;">
                  <div class="right-nav" style="margin: 0px; padding: 0px;">
                     <div class="login-sr" style="margin: 0px; padding: 0px;">
                        <div class="login-signup">
                           <ul style="margin: 0px; padding: 0px;">
                              <li><a class="btn btn-danger" target="blank" href="./OnlineMovieStreaming-master/login.php" style="background-color: #e32636; color:white;">Join AppanageFlix</a></li>
                              <li><a class="custom-b" href="./login.php" style="background-color: #e32636; color:white;">Login</a></li>
                              <li><a class="custom-b" href="./customer-registration.php" style="background-color: #e32636; color:white;">Sign up</a></li>
                           </ul>
                        </div>
                     </div>

                     <div class="nav-b hidden-xs">
                        <div class="nav-box">
                           <ul>
                              <li><a href="howitworks.php">How it works</a></li>
                              <li><a href="enquiry.php">Appanage for Business</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--/.container-fluid -->
      </nav>
   </header>
   <!-- Modal -->
   <div class="modal fade lug" id="myModal" role="dialog">
      <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Change</h4>
            </div>
            <div class="modal-body">
               <ul>
                  <li><a href="#"><img src="images/flag-up-1.png" alt="" /> United States</a></li>
                  <li><a href="#"><img src="images/flag-up-2.png" alt="" /> France </a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div id="sidebar" class="top-nav">
      <ul id="sidebar-nav" class="sidebar-nav">
         <li><a href="https://api.whatsapp.com/send?phone=9871650191; ?>">Help</a></li>
         <li><a href="howitworks.php">How it works</a></li>
         <li><a href="enquiry.php">Appanage for Business</a></li>
      </ul>
   </div>
   <div class="product-page-main" style="background-color: #e5e4e2;">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="nav-b ">
                  <div class="nav-box">

                  </div>
               </div>
               <div class="prod-page-title">
                  <h2 style="color: #e32636;">All Product</h2>

               </div>
            </div>
         </div>

         <div class="row">

            <div class="container-fluid mt-5 mb-5">
               <div class="d-flex justify-content-center row">

                  <style>
                     .text-sm {
                        font-size: 12px !important;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        display: -webkit-box;
                        -webkit-line-clamp: 3;
                        /* number of lines to show */
                        -webkit-box-orient: vertical;
                     }
                  </style>


                  <?php
                  $product = mysqli_query($sql_con, "SELECT * FROM `product` where RegistrationId='$number'");
                  while ($rowes = mysqli_fetch_array($product)) {
                     $weight = $rowes['ProductWeight'];
                     $rate = $rowes['ProductRate'];
                     $Companycategory = $rowes['ProductCategory'];
                     $companyName = $rowes['ProductName'];

                     $picture = $rowes['Product'];
                     $CompanyDescription = $rowes['ProductDescription'];
                     $regn = $rowes['RegistrationId'];
                  ?>
                     <div class="col-md-11" style="margin: 20px;">
                        <div class="row p-2 bg-white border rounded" style="background-color: white; border-radius: 10px;">
                           <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image img-thumbnail" src="./image/<?php echo $picture; ?>" style="margin-top: 10px; margin-bottom: 10px;"></div>
                           <div class="col-md-6 mt-1">
                              <h3 style="font-weight: bold; margin-top: 10px; margin-bottom: 10px; color: #e32636;"><?php echo $companyName; ?></h3><br>
                              <a href="" style="color:white; background-color: #e32636; margin-top: 30px; padding: 10px;">Price: <?php echo $rate; ?></a>
                              <a href="" style="color:white; background-color: #e32636; margin-bottom: 10px; margin-top: 20px; padding: 10px; margin-left: 20px;">Quantity:<?php echo $weight; ?> </a>

                              <p class="text-justify text-truncate para mb-0" style="margin-top: 20px; color: black;"><?php echo $CompanyDescription; ?></p>

                              <a href="productdetail.php?search=<?php echo $number; ?>&name=<?php echo $companyName; ?>" style="color: #e32636; font-weight: bolder;">Know more about product</a>

                           </div>
                           <div class="align-items-center align-content-center col-md-3 border-left mt-1" style="margin-top: 20px; ">
                              <div class="prod-btn" style="padding: 6px 6px; margin-right: 0px;">
                                 <a href="productpage.php?search=<?php echo $name; ?>" target="blank" style="background-color: #e32636; color: white; margin-bottom: 10px;">View Company</a>

                                 <a target="_blank" href="<?php echo $categories; ?>/index.php?user6=<?php echo $regn; ?>&name=<?php echo $companyName; ?>" style="background-color: #e32636; color: white; margin-bottom: 10px;">View Website</a>

                                 <div style="width: 300px;"><button class="btn" style="background-color: #e32636; color: white; margin-bottom: 10px;">(<?php echo $idss; ?>) All Reviews</button>&nbsp;&nbsp;<button class="btn" style="background-color: #e32636; color: white; margin-bottom: 10px;" data-toggle="modal" data-target="#myModals" onclick="document.getElementById('firms_name').value = '<?php echo $regn;  ?>';">Give Reviews</button><br>
                                    <div class="stars"> <i class="fa fa-star" style="color: yellow;"></i> <i class="fa fa-star" style="color: yellow;"></i> <i class="fa fa-star" style="color: yellow;"></i> <i class="fa fa-star" style="color: yellow;"></i> </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php
                  }
                  ?>

               </div>
            </div>

            <style>
               .ratings i {
                  font-size: 16px;
                  color: red
               }

               .strike-text {
                  color: red;
                  text-decoration: line-through
               }

               .product-image {
                  width: 100%
               }

               .dot {
                  height: 7px;
                  width: 7px;
                  margin-left: 6px;
                  margin-right: 6px;
                  margin-top: 3px;
                  background-color: blue;
                  border-radius: 50%;
                  display: inline-block
               }

               .spec-1 {
                  color: #938787;
                  font-size: 15px
               }

               h5 {
                  font-weight: 400
               }

               .para {
                  font-size: 16px
               }
            </style>

         </div>

         <?php
         $ress = mysqli_query($sql_con, "SELECT count(id) as ids FROM feedback_data where firm_name='$regn'");
         while ($rowss = mysqli_fetch_array($ress)) {
            $idss = $rowss['ids'];
         }
         ?>


         <div class="modal fade" id="myModals" role="dialog">
            <div class="modal-dialog">

               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Customer Feedback</h4>
                     <h4 class="modal-title">Your Feedback is important to us !!</h4>
                  </div>
                  <div class="modal-body">
                     <form method="post">
                        Firm Name : <input type="text" id="firms_name" class="form-control" name="firms_name" readonly><br>
                        Customer Name : <input type="text" class="form-control" name="cust_name" required><br>
                        Email ID : <input type="text" class="form-control" name="cust_email_id" required><br>
                        Reviews : <textarea class="form-control" rows="10" name="cust_feedback" required></textarea><br>

                  </div>
                  <div class="modal-footer">
                     <button type="submit" class="btn btn-success" name="submits">Submit</button>
                     </form>
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
               </div>

            </div>
         </div>

      </div>


   </div>

   </div>

   </div>
   </div>
   <?php include 'footer.php';  ?>
   <!--main js-->
   <script src="js/jquery-1.12.4.min.js"></script>
   <!--bootstrap js-->
   <script src="js/bootstrap.min.js"></script>
   <script src="js/bootstrap-select.min.js"></script>
   <script src="js/slick.min.js"></script>
   <script src="js/select2.full.min.js"></script>
   <script src="js/wow.min.js"></script>
   <!--custom js-->
   <script src="js/custom.js"></script>
</body>

</html>