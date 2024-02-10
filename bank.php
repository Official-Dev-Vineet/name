<?php
$id = $_GET['user1'];
include 'conne.php';

//country
if(isset($_POST['btn_save']))
{
  $Registration = isset($_POST['Registration'])?$_POST['Registration']:null;
  $bank = isset($_POST['Bank_Name'])?$_POST['Bank_Name']:null;
  $Name = isset($_POST['Name'])?$_POST['Name']:null;
  $Account = isset($_POST['Account'])?$_POST['Account']:null;
  $ReEntered = isset($_POST['ReEntered'])?$_POST['ReEntered']:null;
  $Phone = isset($_POST['Phone_No'])?$_POST['Phone_No']:null;
  $result = mysqli_query($sql_con,"INSERT INTO `bank`(`RegistrationId`,`Bank_Name`,`AccountHolderName`,`Account_Number`,`Re_Entered`,`Mobile_Number`) 
    VALUES ('$Registration','$bank','$Name','$Account','$ReEntered','$Phone')");
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
<h1 style="color:white;">Bank Detail</h1>
<form method="POST" enctype="multipart/form-data" style="color:white;">
  <div class="form-group has-warning">
    <label for="landmark" style="display: none;">Registration Id</label>
    <input type="text" class="form-control" id="bank_Name" value="<?php echo $id; ?>" placeholder="Registration Id....." name="Registration" style="display: none;">
  </div>
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

  <button type="submit" class="btn btn-info" name="btn_save">Submit</button>
  <button type="submit" class="btn btn-info" name="btn_save" onclick="Redirect()">Back</button>
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
