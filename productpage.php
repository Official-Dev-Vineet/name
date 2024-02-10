<?php
$number = $_GET['search'];
if (empty($_GET['country'])) {
} else {
   // trim the string
   $number = trim($_GET['search']);
   $country = trim($_GET['country']);
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
$limit = 2;
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Appanage Mart || Search Page</title>
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
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
         background: var(--brandColor);
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
   <style type="text/css">
      @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

      .content {
         width: 420px;
         margin-top: 20px
      }

      .ratings {
         background-color: #fff;
         padding: 2px;
         border: 1px solid rgba(0, 0, 0, 0.1);
         box-shadow: 0px 10px 10px #E0E0E0
      }

      .product-rating {
         font-size: 50px
      }

      .stars i {
         font-size: 18px;
         color: #28a745
      }

      .rating-text {
         margin-top: 10px
      }
   </style>
   <style>
      .text-sm {
         font-size: 12px !important;
         overflow: hidden;
         text-overflow: ellipsis;
         display: -webkit-box;
         -webkit-line-clamp: 2;
         /* number of lines to show */
         -webkit-box-orient: vertical;
      }
   </style>
   <style>
      .icon-container {
         border-radius: 7px
      }

      .stars i {
         margin-right: 2px;
         color:var(--brandColor);
         font-size: 13px
      }

      .rating-number {
         font-size: 20px;
         font-weight: 700;
         margin-bottom: 2px
      }

      .number-ratings {
         font-size: 12px
      }

      .listing-title {
         margin-bottom: -7px
      }

      .progress-bar {
         background: green
      }

      .progress {
         height: 16px
      }

      .tags span {
         margin-right: 9px;
         border: 1px solid green;
         padding-right: 9px;
         padding-left: 9px;
         padding-top: 2px;
         padding-bottom: 4px;
         border-radius: 7px;
         background-color: green;
         color: #fff
      }
   </style>
</head>
<body>
   <?php include 'header.php'; ?>
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
   <div class="product-page-main" style="margin-top: 5rem;">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="prod-page-title">
                  <h2 style="color: var(--brandColor); font-family: Arial Black; font-size: 30px;">All <?php echo $number; ?></h2>
               </div>
            </div>
         </div>

         <style>
            .ratings i {
               font-size: 16px;
               color: var(--brandColor)
            }

            .strike-text {
               color:var(--brandColor);
               text-decoration: line-through;
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
               display: inline-block;
            }

            .spec-1 {
               color: #938787;
               font-size: 15px;
            }

            h5 {
               font-weight: 400px;
            }

            .para {
               font-size: 16px;
            }
         </style>
         <div class="row">
            <?php
            if (empty($country)) {
               $number = mysqli_real_escape_string($sql_con, $number);
               $query = "SELECT * FROM `register` WHERE CompanyCategory LIKE '%$number%' OR CompanyName LIKE '%$number%' OR CompanySub LIKE '%$number%' OR CompanyDescription LIKE '%$number%' OR CompanyOwner LIKE '%$number%' OR CompanyLocation LIKE '%$number%' OR `State` LIKE '%$number%' OR `GstNumber` LIKE '%$number%' OR `Country` LIKE '%$number%' LIMIT $offset, $limit";
               $Company = mysqli_query($sql_con, $query);
               while ($rowes = mysqli_fetch_array($Company)) {
                  $emailId = $rowes['EmailId'];
                  $mobile = $rowes['MobileNo'];
                  $Companycategory = $rowes['CompanyCategory'];
                  $companyName = $rowes['CompanyName'];
                  //$image = $rowes['Logo'];
                  $CompanyDescription = $rowes['CompanyDescription'];
                  $regn = $rowes['RegistrationId'];
            ?>
                  <div class="col-md-9">
                     <div class="bg-white p-3 rounded mt-2" style="background: white; margin-bottom: 20px; padding: 10px;">
                        <div class="row">
                           <div class="col-md-3">
                              <div class="d-flex flex-column justify-content-center align-items-center icon-container text-white mb-2">
                                 <?php
                                 $intro = mysqli_query($sql_con, "SELECT * FROM introduction where RegistrationId='$regn'");
                                 while ($ivo = mysqli_fetch_array($intro)) {
                                    $logo = $ivo['Logo'];
                                 }
                                 ?>
                                 <img src="image/<?php echo $logo; ?>" class="img-fluid img-responsive img-thumbnail" style="height: 100%;">
                              </div>
                           </div>
                           <div class="col-md-6 border-right">
                              <div class="listing-title">
                                 <h3 style="font-family: sans-serif; margin-top: 10px;"><?php echo $companyName; ?></h3>
                              </div>
                              <div class="d-flex flex-row align-items-center">
                                 <div class="d-flex flex-row align-items-center">
                                    <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> Votes
                                    </div>
                                 </div>
                              </div>

                              <?php
                              $product = mysqli_query($sql_con, "SELECT * FROM `register` where RegistrationId='$regn'");
                              while ($Rows = mysqli_fetch_array($product)) {
                                 $num = $Rows['CompanyLocation'];
                                 $state = $Rows['State'];
                                 $Country = $Rows['Country'];
                              }
                              ?>

                              <div class="description">
                                 <p style="color: black; margin-top: 0px; margin-bottom: 0px;"><b><i class="fa fa-map-marker" style="font-size: 14px;"></i> <?php echo $num;  ?>, <?php echo $state; ?>, <?php echo $Country; ?></b></p>
                                 <p style="color: black; margin-top: 0px; margin-bottom: 0px;"><b><i class="fa fa-mobile" style="font-size: 14px;"></i> <?php echo $mobile;  ?></b></p>
                                 <p class="text-sm" style="padding: 2px; margin-top: 0px; margin-bottom: 0px;"><?php echo $CompanyDescription; ?></p>
                                 <a href="categoryproduct.php?search=<?php echo $regn; ?>&name=<?php echo $companyName; ?>" align="right" style="color: #e32636; font-weight: bold; font-family: sans-serif;">Know more about Company</a>
                              </div>

                           </div>
                           <div class="d-flex col-md-3">
                              <div class="d-flex flex-column justify-content-start user-profile w-100">

                                 <div class="progresses">
                                    <div class="prod-btn" style="margin-top: 10px;display: grid;grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));">
                                       <a href="https://api.whatsapp.com/send?phone=<?php echo $mobile; ?>" style="color:white; background-image: linear-gradient(to bottom, var(--brandColor) 0, var(--brandColor) 100%); padding: 6px; border-radius: 5px; font-family: sans-serif;">Message Now </a>
                                       <a href="https://mail.google.com/mail/u/0/#inbox=<?php echo $emailId; ?>" style="background: var(--brandColor); color: white; padding: 6px; border-radius: 5px; font-family: sans-serif;">Mail Now </a>

                                       <a href="product.php?search=<?php echo $regn; ?>&name=<?php echo $companyName; ?> " target="blank" style="background: var(--brandColor); color: white; padding: 6px; font-family: sans-serif;">Product/Services</a>

                                       <a target="_blank" href="<?php echo $number; ?>/index.php?user6=<?php echo $regn; ?>&name=<?php echo $companyName; ?>" style="background: var(--brandColor); color: white;  padding: 6px; border-radius: 5px; font-family: sans-serif;">Website</a>

                                       <button class="" data-toggle="modal" data-target="#myModals" onclick="document.getElementById('firms_name').value = '<?php echo $regn;  ?>';" style="background: var(--brandColor); color: white;  padding: 6px; border-radius: 5px; font-family: sans-serif;">Give Reviews</button>

                                    </div>
                                 </div>

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 hidden-xs">
                     <div class="card ">
                        <div class="price-box-right d-none d-sm-block" style="background-color: white;margin-bottom: 10px; padding: 10px;">
                           <h3 style="color: black; margin-top: 0px; padding-bottom: 0px; font-family: sans-serif; font-size: 20px;">"<?php echo $companyName; ?>" Details</h3>
                           <?php
                           $product = mysqli_query($sql_con, "SELECT * FROM `register` where RegistrationId='$regn'");
                           while ($Rows = mysqli_fetch_array($product)) {
                              $num = $Rows['CompanyLocation'];
                              $state = $Rows['State'];
                              $Country = $Rows['Country'];
                              $Owner = $Rows['CompanyOwner'];
                              $type = $Rows['CompanyType'];
                              $Gst = $Rows['GstNumber'];
                              $REGISTRATION = $Rows['RegistrationId'];
                              $Date = $Rows['DateOfRegistration'];
                           ?>
                              <p style="color: black;"><b><i class="fa fa-map-marker" style="font-size: 14px;"></i> <?php echo $num;  ?>, <?php echo $state; ?>, <?php echo $Country; ?></b></p>

                              <p style="color: black; font-family: sans-serif;"><b><i class="fa fa-user" style="font-size: 14px;"></i> <?php echo $Owner; ?></b></p>
                              <p style="color: black; font-family: sans-serif;"><b>Firm Type: <?php echo $type; ?></b></p>
                              <p style="color: black;"><b>GST Number: <?php echo $Gst; ?></b></p>
                              <p style="color: black; font-family: sans-serif;"><b>Firm Registration Id: <?php echo $REGISTRATION; ?></b></p>
                              <p style="color: black; font-family: sans-serif;"><b>Date of Registration: <?php echo $Date; ?></b></p>

                           <?php
                           }
                           ?>

                        </div>
                     </div>
                  </div>
            <?php
               }
            }
            ?>
         </div>
         <!-- Modal -->
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

         <div class="modal fade" id="myModals2" role="dialog">
            <div class="modal-dialog">

               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Customer Feedback</h4>
                  </div>
                  <div class="modal-body">
                     <input type="text" id="firm_name" class="form-control" readonly>
                     <div class="row">
                        <?php
                        $rev = mysqli_query($sql_con, "SELECT * FROM feedback_data where RegistrationId='$regn'");
                        while ($rodes = mysqli_fetch_array($rev)) {
                           $customer_name = $rodes['customer_name'];
                           $feedback = $rodes['feedback'];
                        ?>
                           <div class="col-sm-6">
                              <div style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px; padding: 15px;">
                                 <h5><b><?php echo $customer_name; ?></b></h5>
                                 <p><?php echo $feedback; ?></p>
                              </div>
                           </div>
                        <?php
                        }
                        ?>
                     </div>
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
               </div>

            </div>
         </div>




         <div class="modal fade" id="myModals1" role="dialog">
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


         <div class="similar-box">



         </div>

      </div>
      <div class="container">

      </div>
   </div>
   </div>


   </div>



   </div>
  <?php include 'footer.php'; ?>
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