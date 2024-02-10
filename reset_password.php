<?php 
$sql_con = mysqli_connect('localhost', 'root', '', 'appanaga');

if(isset($_POST['submit']))
{
   if(isset($_GET['RegisterationId']))
   {

      $Registration = $_GET['RegisterationId'];

   $Password = isset($_POST['password'])?$_POST['password']:null;
   $RePassword = isset($_POST['RePassword'])?$_POST['RePassword']:null;

   $pass = password_hash($Password, PASSWORD_BCRYPT);
   $Cpass = password_hash($RePassword, PASSWORD_BCRYPT);

   if($Password == $RePassword)
   {

      $updatequery = "UPDATE `inquiry` SET `Password`='$Password', `ReEnteredPassword`='$RePassword' WHERE RegistrationId='$Registration'";

      $iquery = mysqli_query($sql_con,$updatequery);

      if($iquery)
      {
         $_SESSION['msg'] = "Your Password has been updated";
         header('location:log.php');
      }
      else
      {
         echo "password is not updated";
      }
   }
   else
   {
      echo "password has not matching";
   }
}
else
{
   echo "No Registration Id Match";
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
        <div class="col-md-6">
            <div class="well well-sm" style="background-color:white;">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header"><strong>Reset Password</strong></legend>
                         
                         <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="password" name="password" type="Password" placeholder="New Password" class="form-control">
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="RePassword" name="RePassword" type="Password" placeholder="Confirm Password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg" style="background-color: red;" name="submit"><a href="log.php" style="color:white;">Submit</a></button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <br><br>
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
