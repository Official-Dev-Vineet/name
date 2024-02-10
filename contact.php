<?php
include 'conne.php';

$result = mysqli_query($sql_con, "SELECT * FROM `social`");
while ($row = mysqli_fetch_array($result)) {
   $Facebook = $row['Facebook'];
   $twitter = $row['Twitter'];
   $Instagram = $row['Instagram'];
   $linkedin = $row['LinkedIn'];
}

if (isset($_POST['submit'])) {
   $contactPerson = isset($_POST['name']) ? $_POST['name'] : null;
   $Email = isset($_POST['email']) ? $_POST['email'] : null;
   $PhoneNo = isset($_POST['phone']) ? $_POST['phone'] : null;
   $message = isset($_POST['message']) ? $_POST['message'] : null;

   $result = mysqli_query($sql_con, "INSERT INTO `contactus`(`Name`,`Email`,`Phone`,`Message`) VALUES ('$contactPerson','$Email','$PhoneNo','$message')");
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
   <div class="container-fluid" style="background-color:var(--brandColor);">
      <div class="row" style="margin-top:5rem;">
         <div class="col-md-6">
            <div class="well well-sm" style="background-color:white;">
               <form class="form-horizontal" method="post">
                  <fieldset>
                     <legend class="text-center"><strong>Contact Us</strong></legend>
                     <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                           <input id="fname" name="name" type="text" placeholder=" Person Name" class="form-control">
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                           <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                           <input id="phone" name="phone" type="text" placeholder="Phone No" class="form-control">
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                           <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you as soon as possible." rows="7"></textarea>
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="col-md-12 text-center">
                           <button type="submit" class="btn btn-primary btn-lg" style="background-color: var(--brandColor);" name="submit">Submit</button>
                        </div>
                     </div>
                  </fieldset>
               </form>
            </div>
         </div>
         <div class="col-md-6">
            <div>
               <div class="panel panel-default">
                  <div class="text-center h3">Our Office</div>
                  <div class="panel-body text-center">
                     <h4>Address</h4>
                     <div>
                        Shop-8, 3<sup>rd</sup> Floor, Agrasen Plaza, Radha Nagar, Ballabhgarh, Faridabad, Haryana 121004
                        <h4>Email</h4>
                        <a href="mailto:info@kiyanchsolutions.com">info@kiyanchsolutions.com</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br><br>
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