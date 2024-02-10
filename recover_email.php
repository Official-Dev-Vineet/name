
<?php
     if(isset($_POST['submit']))
     {
        $Email = isset($_POST['email'])?$_POST['email']:null;
   
        $emailquery = "SELECT * FROM `inquiry` where Email='$Email'";
        $query = mysqli_query($emailquery);

         $to = "info@kiyanchsolutions.in";
         $subject = "Customer Registration Form";
         
         $Password = isset($_POST['password'])?$_POST['password']:null;
         
         $message = $Email;
         $message .= $Password;
         
         $header = "From: $e_mail";
         $header .= "Cc:info@kiyanchsolutions.in \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      }
      ?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Chamb - Responsive E-commerce HTML5 Template</title>
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
  background: red;
  color: white;
  font-size: 10px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
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

      <div class="container-fluid" style="background-color:red;">
      	<br><br><br>
    <div class="row">
        <div class="col-md-8 col-xs-12 col-sm-12 login_form">
            <div class="well well-sm" align="center" style="background-color:white;">
                <form class="form-horizontal" method="post" >
                    <fieldset >
                        <legend class="text-center header"><strong>Recover Your Password</strong></legend>
                       <p>Please fill email id properly</p>
                         <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" name="email" type="text" placeholder="Email Id" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg" style="background-color: red;" name="submit"><a href="log.php" style="color:white;">Send Mail</a></button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>


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
