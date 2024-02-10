<?php
include 'conne.php';

//country
if(isset($_POST['btn_save']))
{
  $bank = isset($_POST['Bank_Name'])?$_POST['Bank_Name']:null;
  $Name = isset($_POST['Name'])?$_POST['Name']:null;
  $Account = isset($_POST['Account'])?$_POST['Account']:null;
  $IFSC = isset($_POST['ReEntered'])?$_POST['ReEntered']:null;
  $Phone = isset($_POST['Phone_No'])?$_POST['Phone_No']:null;
  $patym = isset($_POST['Patym'])?$_POST['Patym']:null;
  $Google = isset($_POST['Google'])?$_POST['Google']:null;
  $result = mysqli_query($sql_con,"INSERT INTO `payment`(`Bank_Name`,`AccountHolderName`,`Account`,`IFSC_Code`,`Phone_No`,`Patym`,`Google`) VALUES ('$bank','$Name','$Account','$IFSC','$Phone','$patym','$Google')");
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

  <script type="text/javascript">
    function Redirect() 
    {
      window.location.href="account.php";
    }
  </script>
</head>
<body>
<div class="container-fluid" style="background-color: red;">
<div class="tab-content">
  
  <div class="tab-pane active" id="profile">
    <br>
<div class="container">
<h1 style="color:white;">Payment Detail</h1>
<form method="POST" enctype="multipart/form-data" style="color:white;">
  <div class="form-group has-warning">
    <label for="landmark">Bank Name</label>
    <input type="text" class="form-control" id="bank_Name" placeholder="Bank Name....." name="Bank_Name">
  </div>  
  
  <div class="form-group has-warning">
    <label for="landmark">Account Holder Name</label>
    <input type="text" class="form-control" id="Name" placeholder="Account Holder Name....." name="Name">
  </div>  

  <div class="form-group has-warning">
    <label for="landmark">Account Number</label>
    <input type="text" class="form-control" id="Account" placeholder="Account Number....." name="Account">
  </div>  

  <div class="form-group has-warning">
    <label for="landmark">IFSC Code</label>
    <input type="text" class="form-control" id="ReEntered" placeholder="IFSC Code....." name="ReEntered">
  </div>  

  <div class="form-group has-warning">
    <label for="landmark">Phone Number</label>
    <input type="text" class="form-control" id="Mobile-Number" placeholder="Phone Number...." name="Phone_No">
  </div> 

  <div class="form-group has-warning">
    <label for="landmark">Patym Number</label>
    <input type="text" class="form-control" id="Patym" placeholder="Patym Number...." name="Patym">
  </div> 

  <div class="form-group has-warning">
    <label for="landmark">Google Pay Number</label>
    <input type="text" class="form-control" id="Google" placeholder="Google Pay Number...." name="Google">
  </div>  

  <button type="submit" class="btn btn-info" name="btn_save">Submit</button>
 
</form>
<br>
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
