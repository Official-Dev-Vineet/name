<?php
$id = $_GET['user1'];
include 'conne.php';

if(isset($_POST['btn_save']))
{
   $Password = isset($_POST['password'])?$_POST['password']:null;
   $RePassword = isset($_POST['ReEntered'])?$_POST['ReEntered']:null;
   
   $result = mysqli_query($sql_con,"UPDATE `inquiry` SET `Password`='$Password',`ReEnteredPassword`='$RePassword' WHERE Email='$id'");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid" style="background-color: red;">
<div class="tab-content">
  
  <div class="tab-pane active" id="profile">
    <br><br><br><br><br>
<div class="container">
<h1 style="color:white;">Forget Password</h1>
<form method="POST" enctype="multipart/form-data" style="color:white;">
  <div class="form-group has-warning">
    <label for="landmark">Current Password</label>
    <input type="text" class="form-control" id="bank_Name" placeholder="Current Password....." name="Bank_Name">
  </div>  
  
  <div class="form-group has-warning">
    <label for="landmark">New Password</label>
    <input type="text" class="form-control" id="Password" placeholder="New Password....." name="password">
  </div>  

  <div class="form-group has-warning">
    <label for="landmark">Re-Entered New Password</label>
    <input type="text" class="form-control" id="ReEntered" placeholder="Re-Entered New Password....." name="ReEntered">
  </div>  

  <button type="submit" class="btn btn-info" name="btn_save">Submit</button>
</form>
<br><br><br><br>
</div>
  </div>
</div>
</div>
  <script>
  $('#myTab a').click(function(e) {
  e.preventDefault();
  $(this).tab('show');
});

// store the currently selected tab in the hash value
$("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
  var id = $(e.target).attr("href").substr(1);
  window.location.hash = id;
});

// on load of the page: switch to the currently selected tab
var hash = window.location.hash;
$('#myTab a[href="' + hash + '"]').tab('show');
  </script>
</body>
</html>
