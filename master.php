 <?php
  session_start();
  ob_start();
  if (!isset($_SESSION['user_id'])) {
    header("Location: admin_login.php");
    exit;
  } else {
    $id = $_SESSION['user_id'];
    include 'conne.php';
  }
  if (isset($_POST['btn_save'])) {
    $RegistrationId = isset($_POST['Registeration']) ? $_POST['Registeration'] : null;
    $FirmName = isset($_POST['Firm_Name']) ? $_POST['Firm_Name'] : null;
    $FirmTitle =  isset($_POST['Firm_Title']) ? $_POST['Firm_Title'] : null;

    $result = mysqli_query($sql_con, "INSERT INTO `introduction`(`RegistrationId`, `FirmName`, `FirmTitle`) VALUES ('$RegistrationId','$FirmName','$FirmTitle')");
  }

  //About
  if (isset($_POST['btn_save1'])) {
    $Registration = isset($_POST['RegisterationId']) ? $_POST['RegisterationId'] : null;
    $Title = isset($_POST['Title']) ? $_POST['Title'] : null;
    $Description =  isset($_POST['Description']) ? $_POST['Description'] : null;
    $Bussiness =  isset($_POST['Bussines']) ? $_POST['Bussines'] : null;
    $Employee =  isset($_POST['Employee']) ? $_POST['Employee'] : null;
    $Establishment =  isset($_POST['Year']) ? $_POST['Year'] : null;
    $mission =  isset($_POST['mission']) ? $_POST['mission'] : null;
    $value =  isset($_POST['value']) ? $_POST['value'] : null;
    $Image = $_FILES['image']['name'];
    $tempimgname1 = $_FILES['image']['tmp_name'];
    move_uploaded_file($tempimgname1, "image/$Image");

    $result = mysqli_query($sql_con, "INSERT INTO `about_firm` (`RegistrationId`, `TitleHeading`, `Description`,`Bussines`,`Employee`,`Establishment`, `Image`,`Mission`,`Vission`) VALUES ('$Registration','$Title','$Description','$Bussiness','$Employee','$Establishment','$Image','$mission','$value')");
  }

  //blog
  if (isset($_POST['blog_btn'])) {
    $Registration = isset($_POST['Registera']) ? $_POST['Registera'] : null;
    $blog_title = isset($_POST['blog_title']) ? $_POST['blog_title'] : null;
    $blog_date =  isset($_POST['blog_date']) ? $_POST['blog_date'] : null;
    $blog_time =  isset($_POST['blog_time']) ? $_POST['blog_time'] : null;
    $short_detail =  isset($_POST['short_detail']) ? $_POST['short_detail'] : null;
    $long_detail =  isset($_POST['long_detail']) ? $_POST['long_detail'] : null;

    $blog_img = $_FILES['blog_img']['name'];
    $tempimgname1 = $_FILES['blog_img']['tmp_name'];
    move_uploaded_file($tempimgname1, "image/$blog_img");

    $result = mysqli_query($sql_con, "INSERT INTO `blog` (`RegistrationId`, `Title`, `Date`,`Time`,`Short_detail`,`Long_Detail`, `Image`) VALUES ('$Registration','$blog_title','$blog_date','$blog_time','$short_detail','$long_detail','$blog_img')");
  }

  //case
  if (isset($_POST['case_btn'])) {
    $Registration = isset($_POST['Registera']) ? $_POST['Registera'] : null;
    $case_title = isset($_POST['case_title']) ? $_POST['case_title'] : null;
    $case_date =  isset($_POST['case_date']) ? $_POST['case_date'] : null;
    $case_time =  isset($_POST['case_time']) ? $_POST['case_time'] : null;
    $case_detail =  isset($_POST['case_detail']) ? $_POST['case_detail'] : null;
    $case_long_detail =  isset($_POST['case_long_detail']) ? $_POST['case_long_detail'] : null;

    $case_img = $_FILES['case_img']['name'];
    $tempimgname1 = $_FILES['case_img']['tmp_name'];
    move_uploaded_file($tempimgname1, "image/$case_img");

    $result = mysqli_query($sql_con, "INSERT INTO `casestudy` (`RegistrationId`, `Title`, `Date`,`Time`,`Short_detail`,`Long_Detail`, `Image`) VALUES ('$Registration','$case_title','$case_date','$case_time','$case_detail','$case_long_detail','$case_img')");
  }
  //practice
  if (isset($_POST['prac_btn'])) {
    $Reid = isset($_POST['Reid']) ? $_POST['Reid'] : null;
    $prac_title = isset($_POST['prac_title']) ? $_POST['prac_title'] : null;
    $prac_detail =  isset($_POST['prac_detail']) ? $_POST['prac_detail'] : null;
    $prac_long_detail =  isset($_POST['prac_long_detail']) ? $_POST['prac_long_detail'] : null;

    $prac_img = $_FILES['prac_img']['name'];
    $tempimgname1 = $_FILES['prac_img']['tmp_name'];
    move_uploaded_file($tempimgname1, "image/$prac_img");

    $result = mysqli_query($sql_con, "INSERT INTO `practice` (`RegistrationId`, `Title`,`Short_detail`,`Long_Detail`, `Image`) VALUES ('$Reid','$prac_title','$prac_detail','$prac_long_detail','$prac_img')");
  }
  //product
  if (isset($_POST['btn_save2'])) {
    $Regis = isset($_POST['Regis']) ? $_POST['Regis'] : null;
    $Product_Category = isset($_POST['Product_Category']) ? $_POST['Product_Category'] : null;
    $Product_Name =  isset($_POST['Product_Name']) ? $_POST['Product_Name'] : null;
    $Product_Description = isset($_POST['Product_Description']) ? $_POST['Product_Description'] : null;
    $Product_Rate = isset($_POST['Product_Rate']) ? $_POST['Product_Rate'] : null;
    $Product_Weight = isset($_POST['Product_Weight']) ? $_POST['Product_Weight'] : null;
    $Product_Brand = isset($_POST['Product_Image']) ? $_POST['Product_Image'] : null;
    $Product = $_FILES['product']['name'];
    $tempimgname1 = $_FILES['product']['tmp_name'];
    move_uploaded_file($tempimgname1, "image/$Product");
    $Product1 = $_FILES['product1']['name'];
    $tempimgname2 = $_FILES['product1']['tmp_name'];
    move_uploaded_file($tempimgname2, "image/$Product1");
    $Product2 = $_FILES['product2']['name'];
    $tempimgname3 = $_FILES['product2']['tmp_name'];
    move_uploaded_file($tempimgname3, "image/$Product2");
    $Product3 = $_FILES['product3']['name'];
    $tempimgname4 = $_FILES['product3']['tmp_name'];
    move_uploaded_file($tempimgname4, "image/$Product3");
    $Specifications = isset($_POST['Specifications']) ? $_POST['Specifications'] : null;
    $result = mysqli_query($sql_con, "INSERT INTO `product`(`RegistrationId`, `ProductCategory`, `ProductName`, `ProductDescription`, `ProductRate`,`ProductWeight`,`ProductBrand`,`Product`,`Image1`,`Image2`,`Image3`,`Specifications`) VALUES ('$Regis','$Product_Category','$Product_Name','$Product_Description','$Product_Rate','$Product_Weight','$Product_Brand','$Product','$Product1','$Product2','$Product3','$Specifications')");
  }
  //contact
  if (isset($_POST['btn_save3'])) {
    $Register = isset($_POST['Register']) ? $_POST['Register'] : null;
    $Location = isset($_POST['Location']) ? $_POST['Location'] : null;
    $state = isset($_POST['State']) ? $_POST['State'] : null;
    $Country = isset($_POST['Country']) ? $_POST['Country'] : null;
    $Email_Id =  isset($_POST['Email_Id']) ? $_POST['Email_Id'] : null;
    $Phone_No = isset($_POST['Phone_No']) ? $_POST['Phone_No'] : null;
    $Opening_From = isset($_POST['Opening_From']) ? $_POST['Opening_From'] : null;
    $OpeningTo = isset($_POST['OpeningTo']) ? $_POST['OpeningTo'] : null;
    $website = isset($_POST['website']) ? $_POST['website'] : null;
    $result = mysqli_query($sql_con, "INSERT INTO `contact` (`RegistrationId`, `Location`,`State`,`Country`, `EmailId`, `PhoneNo`, `OpeningFrom`,`OpeningTo`,`Website`) VALUES ('$Register','$Location','$state','$Country','$Email_Id','$Phone_No','$Opening_From','$OpeningTo')");
  }
  //gallery
  if (isset($_POST['btn_save4'])) {
    $Registera = isset($_POST['Registera']) ? $_POST['Registera'] : null;
    $img = $_FILES['img']['name'];
    $tempimgname1 = $_FILES['img']['tmp_name'];
    move_uploaded_file($tempimgname1, "image/$img");
    $result = mysqli_query($sql_con, "INSERT INTO `gallery` (`RegistrationId`, `Image`) VALUES ('$Registera','$img')");
  }
  //gallery
  if (isset($_POST['btn_client'])) {
    $Registera = isset($_POST['Registera']) ? $_POST['Registera'] : null;
    $client_image = $_FILES['client_image']['name'];
    $tempimgname1 = $_FILES['client_image']['tmp_name'];
    move_uploaded_file($tempimgname1, "image/$client_image");
    $result = mysqli_query($sql_con, "INSERT INTO `client` (`RegistrationId`, `Image`) VALUES ('$Registera','$client_image')");
  }
  //faq
  if (isset($_POST['btn_faq'])) {
    $Registerati = isset($_POST['Registerati']) ? $_POST['Registerati'] : null;
    $answer = isset($_POST['answer']) ? $_POST['answer'] : null;
    $question = isset($_POST['question']) ? $_POST['question'] : null;
    $result = mysqli_query($sql_con, "INSERT INTO `faq` (`RegistrationId`, `Question`, `Answer`) VALUES ('$Registerati','$question','$answer')");
  }
  //social
  if (isset($_POST['btn_save5'])) {
    $REGISTER = isset($_POST['REGISTER']) ? $_POST['REGISTER'] : null;
    $twitter = isset($_POST['Twitter']) ? $_POST['Twitter'] : null;
    $Facebook = isset($_POST['Facebook']) ? $_POST['Facebook'] : null;
    $Instagram = isset($_POST['Instagram']) ? $_POST['Instagram'] : null;
    $linkedin = isset($_POST['LinkedIn']) ? $_POST['LinkedIn'] : null;
    $result = mysqli_query($sql_con, "INSERT INTO `socialmedia` (`RegistrationId`, `Twitter`, `Facebook`, `Instagram`, `LinkedIn`) VALUES ('$REGISTER','$twitter', '$Facebook', '$Instagram', '$linkedin')");
  }
  //banner
  if (isset($_POST['btn_banner'])) {
    $Registera = isset($_POST['Registera']) ? $_POST['Registera'] : null;
    $banner1 = $_FILES['banner1']['name'];
    $tempimgname1 = $_FILES['banner1']['tmp_name'];
    move_uploaded_file($tempimgname1, "image/$banner1");
    $banner2 = $_FILES['banner2']['name'];
    $tempimgname2 = $_FILES['banner2']['tmp_name'];
    move_uploaded_file($tempimgname2, "image/$banner2");
    $banner3 = $_FILES['banner3']['name'];
    $tempimgname3 = $_FILES['banner3']['tmp_name'];
    move_uploaded_file($tempimgname3, "image/$banner3");
    $result = mysqli_query($sql_con, "INSERT INTO `banner` (`RegistrationId`, `Banner_one`,`Banner_two`,`Banner_three`) VALUES ('$Registera','$banner1','$banner2','$banner3')");
  }
  //deal
  if (isset($_POST['btn_deal'])) {
    $Registera = isset($_POST['Registera']) ? $_POST['Registera'] : null;
    $deal = $_FILES['deal']['name'];
    $tempimgname1 = $_FILES['deal']['tmp_name'];
    move_uploaded_file($tempimgname1, "image/$deal");
    $result = mysqli_query($sql_con, "INSERT INTO `deal` (`RegistrationId`, `Image`) VALUES ('$Registera','$deal')");
  }
  //team
  if (isset($_POST['btn_team'])) {
    $Registera = isset($_POST['Registera']) ? $_POST['Registera'] : null;
    $team_image = $_FILES['team_image']['name'];
    $tempimgname1 = $_FILES['team_image']['tmp_name'];
    move_uploaded_file($tempimgname1, "image/$team_image");
    $team_name = isset($_POST['team_name']) ? $_POST['team_name'] : null;
    $team_designation = isset($_POST['team_designation']) ? $_POST['team_designation'] : null;
    $result = mysqli_query($sql_con, "INSERT INTO `team` (`RegistrationId`, `Name`,`Designation`,`Image`) VALUES ('$Registera','$team_name','$team_designation','$team_image')");
  }
  //achivement
  if (isset($_POST['btn_achivement'])) {
    $Registera = isset($_POST['Registera']) ? $_POST['Registera'] : null;
    $achivement_img = $_FILES['achivement_img']['name'];
    $tempimgname1 = $_FILES['achivement_img']['tmp_name'];
    move_uploaded_file($tempimgname1, "image/$achivement_img");
    $achivement_name = isset($_POST['achivement_name']) ? $_POST['achivement_name'] : null;
    $result = mysqli_query($sql_con, "INSERT INTO `achivement` (`RegistrationId`, `Name`,`Image`) VALUES ('$Registera','$achivement_name','$achivement_img')");
  }
  //achivement
  if (isset($_POST['btn_management'])) {
    $management = isset($_POST['management']) ? $_POST['management'] : null;
    $manag_img = $_FILES['manag_img']['name'];
    $tempimgname1 = $_FILES['manag_img']['tmp_name'];
    move_uploaded_file($tempimgname1, "image/$manag_img");
    $manag_name = isset($_POST['manag_name']) ? $_POST['manag_name'] : null;
    $manag_desc = isset($_POST['manag_desc']) ? $_POST['manag_desc'] : null;
    $manag_desig = isset($_POST['manag_desig']) ? $_POST['manag_desig'] : null;
    $result = mysqli_query($sql_con, "INSERT INTO `management` (`RegistrationId`, `Name`,`Designation`,`Description`,`Image`) VALUES ('$management','$manag_name','$manag_desig','$manag_desc','$manag_img')");
  }
  //testimonial
  if (isset($_POST['btn_testimonial'])) {
    $Registera = isset($_POST['Registera']) ? $_POST['Registera'] : null;
    $testimonial_image = $_FILES['testimonial_image']['name'];
    $tempimgname1 = $_FILES['testimonial_image']['tmp_name'];
    move_uploaded_file($tempimgname1, "image/$testimonial_image");
    $testimonial_name = isset($_POST['testimonial_name']) ? $_POST['testimonial_name'] : null;
    $testimonial_description = isset($_POST['testimonial_description']) ? $_POST['testimonial_description'] : null;
    $result = mysqli_query($sql_con, "INSERT INTO `course` (`RegistrationId`, `Course_Category`,`Course_Name`,`Course_Duration`,`Course_Rate`,`Course_Short`,`Course_Long`) VALUES ('$Registera','$testimonial_name','$testimonial_description','$testimonial_image')");
  }
  //testimonial
  if (isset($_POST['btn_topper'])) {
    $topper = isset($_POST['topper']) ? $_POST['topper'] : null;
    $topper_img = $_FILES['topper_img']['name'];
    $tempimgname1 = $_FILES['topper_img']['tmp_name'];
    move_uploaded_file($tempimgname1, "image/$topper_img");
    $topper_name = isset($_POST['topper_name']) ? $_POST['topper_name'] : null;
    $topper_class = isset($_POST['topper_class']) ? $_POST['topper_class'] : null;
    $topper_posi = isset($_POST['topper_posi']) ? $_POST['topper_posi'] : null;
    $topper_perc = isset($_POST['topper_perc']) ? $_POST['topper_perc'] : null;
    $result = mysqli_query($sql_con, "INSERT INTO `topper` (`RegistrationId`, `Name`,`Class`,`Position`,`Percentage`,`Image`) VALUES ('$topper','$topper_name','$topper_class','$topper_posi','$topper_perc','$topper_img')");
  }
  //coursse
  if (isset($_POST['btn_course'])) {
    $Registera = isset($_POST['Registera']) ? $_POST['Registera'] : null;
    $course_image = $_FILES['course_image']['name'];
    $tempimgname1 = $_FILES['course_image']['tmp_name'];
    move_uploaded_file($tempimgname1, "image/$course_image");
    $course_name = isset($_POST['course_name']) ? $_POST['course_name'] : null;
    $course_category = isset($_POST['course_category']) ? $_POST['course_category'] : null;
    $course_duration = isset($_POST['course_duration']) ? $_POST['course_duration'] : null;
    $course_rate = isset($_POST['course_rate']) ? $_POST['course_rate'] : null;
    $course_short = isset($_POST['course_short']) ? $_POST['course_short'] : null;
    $course_long = isset($_POST['course_long']) ? $_POST['course_long'] : null;
    $result = mysqli_query($sql_con, "INSERT INTO `course` (`RegistrationId`, `Course_Category`,`Course_Name`,`Course_Duration`,`Course_Rate`,`Course_Short`,`Course_Long`,`Course_Image`) VALUES ('$Registera','$course_category','$course_name','$course_duration','$course_rate','$course_short','$course_long','$course_image')");
  }
  ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <title>Admin Panel</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script>
     var CRLF = 10;
     var BULLET = String.fromCharCode(10004);

     function Init() {
       if (txt.addEventListener) txt.addEventListener("input", OnInput, false);
     }

     function OnInput(event) {
       char = event.target.value.substr(-1).charCodeAt(0);
       nowLen = txt.value.length;
       if (nowLen > prevLen.value) {
         if (char == CRLF) txt.value = txt.value + BULLET + " ";
         if (nowLen == 1) txt.value = BULLET + " " + txt.value;
       }
       prevLen.value = nowLen;
     }
   </script>
 </head>

 <body onload="Init();">
   <?php include 'header.php'; ?>
   <div class="container" style="position:absolute; top:44px; left:40px; border:solid 0px black; height:auto; width:auto;">
     <style>
       header {
         background-color: #680101;
       }

       body {
         background-color: #050500;
       }

       *::-webkit-scrollbar {
         display: none;
       }

       aside {
         background-color: #680101;
         height: calc(100vh - 4rem);
         width: 300px;
         position: fixed;
         top: 4rem;
         left: 0;
         bottom: 0;
         overflow-x: hidden;
         overflow-y: auto;
         padding: 20px 10px;
         border-right: 1px solid #ccc;
       }

       aside ol {
         display: flex !important;
         flex-direction: column;
       }

       aside ol li {
         padding: 10px;
         transition: 0.5s;
         display: block !important;
         border-radius: 0.25rem;
       }

       aside ol li:hover {
         background-color: #101 !important;
       }

       aside ol li a {
         color: #f5f5f5 !important;
         text-decoration: none !important;
       }

       aside ol li:hover {
         background-color: #680101;
         border: none;
         outline: none;
       }

       .tab-content {
         margin-left: 300px;
         width: 100%;
         padding: 20px;
         background-color: #f5f5f5;
         height: calc(100vh - 4rem);
         overflow-y: auto;
         overflow-x: hidden;
         border-radius: 0 0 0.25rem 0.25rem;
         border: 5px solid #ccc;
       }

       @media screen and (max-width:765px) {
         .tab-content {
           margin-left: 0px;
         }

         aside {
           display: none;
         }
       }
     </style>
     <div class="div">
       <form method="post" action="logout.php">
         <input type="submit" name="logout" value="Logout" />
       </form>
     </div>
     <aside>
       <ol class="nav nav-tabs" id="myTab">
         <li><a href="#profile">Intro Master</a></li>
         <li><a href="#messages">About Firm Master</a></li>
         <li><a href="#settings">Product Master</a></li>
         <li><a href="#Investigation">Contact Master</a></li>
         <li><a href="#Gallery">Gallery Master</a></li>
         <li><a href="#blog">Blog Master</a></li>
         <li><a href="#Social">Social Media Master</a></li>
         <li><a href="#banner">Banner Master</a></li>
         <li><a href="#deal">Deat of The Day Master</a></li>
         <li><a href="#team">Team Master</a></li>
         <li><a href="#testimonial">Testimonial Master</a></li>
         <li><a href="#course">Course Master</a></li>
         <li><a href="#client">Client Master</a></li>
         <li><a href="#achivement">Achivement Master</a></li>
         <li><a href="#management">Managment Speek Master</a></li>
         <li><a href="#topper">Class Topper Master</a></li>
         <li><a href="#practice">Practice Area Master</a></li>
         <li><a href="#casestudy">Case Study Master</a></li>
         <li><a href="#faq">FAQ Master</a></li>
       </ol>
     </aside>
     <?php
      $result = mysqli_query($sql_con, "SELECT * FROM register");
      while ($row = mysqli_fetch_array($result)) {
        $resu = $row['RegistrationId'];
      }
      ?>
     <div class="tab-content">
       <div class="tab-pane active" id="profile">
         <p></p>
         <div class="container">
           <h1>Intro Information</h1>
           <form method="POST" enctype="multipart/form-data">
             <div class="form-group has-success">
               <input type="name" class="form-control" style="display: none;" id="Registeration" value="<?php echo $id; ?>" name="Registeration">
             </div>
             <div class="form-group has-warning">
               <label for="landmark">Firm Name</label>
               <input type="landmark" class="form-control" id="Firm_Name" placeholder="Firm Name" name="Firm_Name">
             </div>
             <div class="form-group has-error">
               <label for="country">Firm Title</label>
               <input type="country" class="form-control" id="Firm_Title" placeholder="Firm Title" name="Firm_Title">
             </div>
             <button type="submit" class="btn btn-info" name="btn_save">Save Intro</button>
           </form>
           <br><br />
         </div>
       </div>
       <div class="tab-pane fade" id="messages">
         <div class="container">
           <h1>About Information</h1>
           <form method="post" enctype="multipart/form-data">
             <div class="form-group has-success">
               <input type="text" class="form-control" id="RegisterationId" style="display: none;" value="<?php echo $id; ?>" name="RegisterationId">
             </div>
             <div class="form-group has-warning">
               <label for="day1">Heading Title</label>
               <input type="text" class="form-control" id="Title" placeholder="Heading Title" name="Title">
             </div>
             <div class="form-group has-error">
               <label for="time1">About Firm </label>
               <textarea type="text" class="form-control" id="Location" placeholder="About Firm" name="Description"></textarea>
             </div>
             <div class="form-group has-error">
               <label for="time1">Our Mission</label>
               <textarea type="text" class="form-control" id="Location" placeholder="Our Mission" name="mission"></textarea>
             </div>
             <div class="form-group has-error">
               <label for="time1">Our Vission</label>
               <textarea type="text" class="form-control" id="Location" placeholder="Our Vission" name="value"></textarea>
             </div>
             <div class="form-group has-warning">
               <label for="day1">Bussines Type :</label>
               <select name="Bussines" class="form-control">
                 <option selected>Bussines Type</option>
                 <option>Trade</option>
                 <option>Manufacture</option>
                 <option>Service Provider</option>
                 <option>Other</option>
               </select>
             </div>
             <div class="form-group has-warning">
               <label for="day1">No of Employee</label>
               <input type="text" class="form-control" id="Title" placeholder="No of Employee" name="Employee">
             </div>
             <div class="form-group has-warning">
               <label for="day1">Year of Establishment</label>
               <input type="text" class="form-control" id="Title" placeholder="Year of Establishment" name="Year">
             </div>
             <div class="form-group has-error">
               <label for="time1">Image: </label>
               <input type="file" name="image" id="image" />
             </div>
             <button type="submit" class="btn btn-info" name="btn_save1">Submit About</button>
           </form>
         </div>
       </div>
       <div class="tab-pane fade" id="settings">
         <div class="container">
           <h1>Product Information</h1>
           <form method="post" enctype="multipart/form-data">
             <div class="form-group has-warning">
               <input type="text" class="form-control" id="Regis" style="display: none;" value="<?php echo $id; ?>" name="Regis">
             </div>
             <div class="form-group has-error">
               <label for="time1">Product Category</label>
               <select name="Product_Category" class="form-control" id="ProductCategory">
                 <option selected>Select Product Category</option>
                 <?php
                  $product = mysqli_query($sql_con, "SELECT * FROM `product_category`");
                  while ($category = mysqli_fetch_array($product)) {
                    $PRODUCT = $category['ProductCategory'];
                  ?>
                   <option><?php echo $PRODUCT; ?></option>
                 <?php
                  }
                  ?>
               </select>
             </div>
             <div class="form-group">
               <label for="Inputselect">Product Name</label>
               <input type="text" class="form-control" id="ProductName" placeholder="Product Name" name="Product_Name">
             </div>
             <div class="form-group">
               <label for="Inputselect">Product Description</label>
               <textarea type="text" class="form-control" id="ProductDescription" placeholder="Product Description" name="Product_Description"></textarea>
             </div>
             <div class="form-group">
               <label for="Inputselect">Product Rate</label>
               <input type="text" class="form-control" id="ProductRate" placeholder="Product Rate" name="Product_Rate">
             </div>
             <div class="form-group">
               <label for="Inputselect">Product Quantity</label>
               <input type="text" class="form-control" id="ProductWeight" placeholder="Product Quantity" name="Product_Weight">
             </div>
             <div class="form-group">
               <label for="Inputselect">Product Brand</label>
               <input type="text" class="form-control" id="ProductBrand" placeholder="Product Brand" name="Product_Image">
             </div>
             <div class="form-group has-error">
               <label for="time1">Product Image: </label>
               <input type="file" name="product" id="product" />
             </div>
             <div class="form-group has-error">
               <label for="time1">Product Image: </label>
               <input type="file" name="product1" id="product1" />
             </div>
             <div class="form-group has-error">
               <label for="time1">Product Image: </label>
               <input type="file" name="product2" id="product2" />
             </div>
             <div class="form-group has-error">
               <label for="time1">Product Image: </label>
               <input type="file" name="product3" id="product3" />
             </div>
             <div class="form-group has-error">
               <label for="time1">Product / Service Specifications: </label>
               <textarea id="txt" class="form-control" rows="10" cols="40" name="Specifications" style="white-space: pre-wrap; text-indent: 50px;"></textarea><br>
               <input type="hidden" id="prevLen" value="0" />
             </div>

             <button type="submit" class="btn btn-info" name="btn_save2">Submit Product</button>
           </form>
         </div>
       </div>
       <div class="tab-pane fade" id="Investigation">
         <div class="container">
           <h1>Contact Information</h1>
           <form method="post" enctype="multipart/form-data">
             <div class="form-group has-warning">
               <input type="text" class="form-control" id="Register" style="display: none;" value="<?php echo $id; ?>" name="Register">
             </div>
             <div class="form-group has-error">
               <label for="time1">Location</label>
               <textarea type="text" class="form-control" id="Location" placeholder="Location" name="Location"></textarea>
             </div>
             <div class="form-group has-error">
               <label for="time1">State</label>
               <input type="text" class="form-control" id="State" placeholder="State" name="State">
             </div>
             <div class="form-group has-error">
               <label for="time1">Country</label>
               <input type="text" class="form-control" id="Country" placeholder="Country" name="Country">
             </div>
             <div class="form-group has-error">
               <label for="time1">Email Id</label>
               <input type="text" class="form-control" id="Email_Id" placeholder="Email Id" name="Email_Id">
             </div>
             <div class="form-group">
               <label for="Inputselect">Phone No</label>
               <input type="text" class="form-control" id="Phone" placeholder="Phone No" name="Phone_No">
             </div>
             <div class="form-group">
               <label for="Inputselect">Opening from</label>
               <input type="text" class="form-control" id="OpeningFrom" placeholder="Opening From" name="Opening_From">
             </div>
             <div class="form-group">
               <label for="Inputselect">Opening to</label>
               <input type="text" class="form-control" id="OpeningTo" placeholder="Opening To" name="OpeningTo">
             </div>
             <div class="form-group">
               <label for="Inputselect">Firm Website</label>
               <input type="text" class="form-control" id="website" placeholder="Firm Website" name="website">
             </div>
             <button type="submit" class="btn btn-info" name="btn_save3">Submit Contact</button>
           </form>
         </div>
       </div>
       <div class="tab-pane fade" id="Gallery">
         <div class="container">
           <h1>Gallery</h1>
           <form method="post" enctype="multipart/form-data">
             <div class="form-group has-warning">
               <input type="text" class="form-control" style="display: none;" id="Registera" value="<?php echo $id; ?>" name="Registera">
             </div>
             <div class="form-group">
               <label for="Inputselect">Select image : </label>
               <input type="file" name="img" id="image" />
             </div>
             <button type="submit" class="btn btn-info" name="btn_save4">Submit Gallery</button>
           </form>
         </div>
       </div>
       <div class="tab-pane fade" id="achivement">
         <div class="container">
           <h1>Achivement</h1>
           <form method="post" enctype="multipart/form-data">
             <div class="form-group has-warning">
               <input type="text" class="form-control" style="display: none;" id="Registera" value="<?php echo $id; ?>" name="Registera">
             </div>
             <div class="form-group">
               <label for="Inputselect">Name</label>
               <input type="text" name="achivement_name" id="image" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Select image : </label>
               <input type="file" name="achivement_img" id="image" />
             </div>
             <button type="submit" class="btn btn-info" name="btn_achivement">Submit</button>
           </form>
         </div>
       </div>
       <div class="tab-pane fade" id="management">
         <div class="container">
           <h1>Management Speek master</h1>
           <form method="post" enctype="multipart/form-data">
             <div class="form-group has-warning">
               <input type="text" class="form-control" style="display: none;" id="Registera" value="<?php echo $id; ?>" name="management">
             </div>
             <div class="form-group">
               <label for="Inputselect">Name</label>
               <input type="text" name="manag_name" id="image" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Designation</label>
               <input type="text" name="manag_desig" id="image" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Description</label>
               <textarea class="form-control" name="manag_desc"></textarea>
             </div>
             <div class="form-group">
               <label for="Inputselect">Select image : </label>
               <input type="file" name="manag_img" id="image" />
             </div>
             <button type="submit" class="btn btn-info" name="btn_management">Submit</button>
           </form>
         </div>
       </div>
       <div class="tab-pane fade" id="topper">
         <div class="container">
           <h1>Class Topper Master</h1>
           <form method="post" enctype="multipart/form-data">
             <div class="form-group has-warning">
               <input type="text" class="form-control" style="display: none;" id="Registera" value="<?php echo $id; ?>" name="topper">
             </div>
             <div class="form-group">
               <label for="Inputselect">Name</label>
               <input type="text" name="topper_name" id="image" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Class</label>
               <input type="text" name="topper_class" id="image" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Position</label>
               <input type="text" name="topper_posi" id="image" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Percentage</label>
               <input type="text" name="topper_perc" id="image" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Select image : </label>
               <input type="file" name="topper_img" id="image" />
             </div>
             <button type="submit" class="btn btn-info" name="btn_topper">Submit</button>
           </form>
         </div>
       </div>
       <div class="tab-pane fade" id="client">
         <div class="container">
           <h1>Client</h1>
           <form method="post" enctype="multipart/form-data">
             <div class="form-group has-warning">
               <input type="text" class="form-control" style="display: none;" id="Registera" value="<?php echo $id; ?>" name="Registera">
             </div>
             <div class="form-group">
               <label for="Inputselect">Select Client Image : </label>

               <input type="file" name="client_image" />
             </div>
             <button type="submit" class="btn btn-info" name="btn_client">Submit</button>
           </form>
         </div>
       </div>
       <div class="tab-pane fade" id="blog">
         <div class="container">
           <h1>Blog Master</h1>
           <form method="post" enctype="multipart/form-data">
             <div class="form-group has-warning">
               <input type="text" class="form-control" style="display: none;" id="Registera" value="<?php echo $id; ?>" name="Registera">
             </div>
             <div class="form-group">
               <label for="Inputselect">Blog Title </label>
               <input type="text" name="blog_title" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Blog Date </label>
               <input type="text" name="blog_date" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Blog Time </label>
               <input type="text" name="blog_time" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Short Detail </label>
               <input type="text" name="short_detail" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Long Detail </label>
               <input type="text" name="long_detail" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Save Image : </label>
               <input type="file" name="blog_img" id="image" class="form-control" />
             </div>
             <button type="submit" class="btn btn-info" name="blog_btn">Submit </button>
           </form>
         </div>
       </div>
       <div class="tab-pane fade" id="casestudy">
         <div class="container">
           <h1>Case Study Master</h1>
           <form method="post" enctype="multipart/form-data">
             <div class="form-group has-warning">
               <input type="text" class="form-control" style="display: none;" id="Registera" value="<?php echo $id; ?>" name="Registera">
             </div>
             <div class="form-group">
               <label for="Inputselect"> Title </label>
               <input type="text" name="case_title" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect"> Date </label>
               <input type="text" name="case_date" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Time </label>
               <input type="text" name="case_time" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Short Detail </label>
               <input type="text" name="case_detail" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Long Detail </label>
               <input type="text" name="case_long_detail" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Save Image : </label>
               <input type="file" name="case_img" id="image" class="form-control" />
             </div>
             <button type="submit" class="btn btn-info" name="case_btn">Submit </button>
           </form>
         </div>
       </div>
       <div class="tab-pane fade" id="practice">
         <div class="container">
           <h1>Practice Area Master</h1>
           <form method="post" enctype="multipart/form-data">
             <div class="form-group has-warning">
               <input type="text" class="form-control" style="display: none;" id="Registera" value="<?php echo $id; ?>" name="Reid">
             </div>
             <div class="form-group">
               <label for="Inputselect">Title </label>
               <input type="text" name="prac_title" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Short Detail </label>
               <input type="text" name="prac_detail" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Long Detail </label>

               <input type="text" name="prac_long_detail" class="form-control" />
             </div>

             <div class="form-group">
               <label for="Inputselect">Save Image : </label>

               <input type="file" name="prac_img" id="image" class="form-control" />
             </div>


             <button type="submit" class="btn btn-info" name="prac_btn">Submit </button>

           </form>

         </div>
       </div>

       <div class="tab-pane fade" id="faq">
         <div class="container">
           <h1>FAQ Master</h1>
           <form method="post" enctype="multipart/form-data">
             <div class="form-group has-warning">
               <input type="text" class="form-control" style="display: none;" id="Registera" value="<?php echo $id; ?>" name="Registerati">
             </div>
             <div class="form-group">
               <label for="Inputselect"> Question </label>

               <input type="text" name="question" class="form-control" id="banner1" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Answer </label>
               <textarea class="form-control" name="answer"></textarea>
             </div>

             <button type="submit" class="btn btn-info" name="btn_faq">Submit </button>

           </form>

         </div>
       </div>

       <div class="tab-pane fade" id="banner">
         <div class="container">
           <h1>Banner</h1>
           <form method="post" enctype="multipart/form-data">
             <div class="form-group has-warning">
               <input type="text" class="form-control" style="display: none;" id="Registera" value="<?php echo $id; ?>" name="Registera">
             </div>
             <div class="form-group">
               <label for="Inputselect">Upload Banner 1 : </label>

               <input type="file" name="banner1" class="form-control" id="banner1" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Upload Banner 2 : </label>

               <input type="file" name="banner2" class="form-control" id="banner2" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Upload Banner 3 : </label>

               <input type="file" name="banner3" class="form-control" id="banner3" />
             </div>


             <button type="submit" class="btn btn-info" name="btn_banner">Submit </button>

           </form>

         </div>
       </div>

       <div class="tab-pane fade" id="deal">
         <div class="container">
           <h1>Deals Of the day</h1>
           <form method="post" enctype="multipart/form-data">
             <div class="form-group has-warning">
               <input type="text" class="form-control" style="display: none;" id="Registera" value="<?php echo $id; ?>" name="Registera">
             </div>
             <div class="form-group">
               <label for="Inputselect">Upload Deal Banner : </label>

               <input type="file" name="deal" class="form-control" id="banner1" />
             </div>

             <button type="submit" class="btn btn-info" name="btn_deal">Submit </button>

           </form>

         </div>
       </div>

       <div class="tab-pane fade" id="team">
         <div class="container">
           <h1>Team</h1>
           <form method="post" enctype="multipart/form-data">
             <div class="form-group has-warning">
               <input type="text" class="form-control" style="display: none;" id="Registera" value="<?php echo $id; ?>" name="Registera">
             </div>
             <div class="form-group">
               <label for="Inputselect">Name </label>

               <input type="text" name="team_name" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Designation </label>

               <input type="text" name="team_designation" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Upload Image : </label>

               <input type="file" name="team_image" class="form-control" />
             </div>


             <button type="submit" class="btn btn-info" name="btn_team">Submit </button>

           </form>

         </div>
       </div>

       <div class="tab-pane fade" id="testimonial">
         <div class="container">
           <h1>Testimonial</h1>
           <form method="post" enctype="multipart/form-data">
             <div class="form-group has-warning">
               <input type="text" class="form-control" style="display: none;" id="Registera" value="<?php echo $id; ?>" name="Registera">
             </div>
             <div class="form-group">
               <label for="Inputselect">Name</label>

               <input type="text" name="testimonial_name" class="form-control" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Description </label>

               <textarea class="form-control" name="testimonial_description"></textarea>
             </div>
             <div class="form-group">
               <label for="Inputselect">Upload Image : </label>

               <input type="file" name="testimonial_image" class="form-control" />
             </div>


             <button type="submit" class="btn btn-info" name="btn_testimonial">Submit </button>

           </form>

         </div>
       </div>

       <div class="tab-pane fade" id="course">
         <div class="container">
           <h1>Course</h1>
           <form method="post" enctype="multipart/form-data">
             <div class="form-group has-warning">
               <input type="text" class="form-control" style="display: none;" id="Registera" value="<?php echo $id; ?>" name="Registera">
             </div>
             <div class="form-group">
               <label for="Inputselect">Course Category </label>

               <input type="text" name="course_category" class="form-control" id="banner1" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Course Name </label>

               <input type="text" name="course_name" class="form-control" id="banner2" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Course Duration </label>

               <input type="text" name="course_duration" class="form-control" id="banner3" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Course Rate </label>

               <input type="text" name="course_rate" class="form-control" id="banner3" />
             </div>
             <div class="form-group">
               <label for="Inputselect">Course Short Detail </label>
               <textarea name="course_short" class="form-control"></textarea>

             </div>
             <div class="form-group">
               <label for="Inputselect">Course Long Detail </label>
               <textarea name="course_long" class="form-control"></textarea>
             </div>
             <div class="form-group">
               <label for="Inputselect">Course Image </label>

               <input type="file" name="course_image" class="form-control" />
             </div>

             <button type="submit" class="btn btn-info" name="btn_course">Submit </button>

           </form>

         </div>
       </div>
       <div class="tab-pane fade" id="Social">
         <div class="container">
           <h1>Social Media Information</h1>
           <form method="post" enctype="multipart/form-data">
             <div class="form-group has-warning">
               <input type="text" class="form-control" id="REGISTER" style="display: none;" value="<?php echo $id; ?>" name="REGISTER">
             </div>
             <div class="form-group has-error">
               <label for="time1">Twitter</label>
               <input type="text" class="form-control" id="Twitter" placeholder="Twitter" name="Twitter">
             </div>
             <div class="form-group has-error">
               <label for="time1">Facebook</label>
               <input type="text" class="form-control" id="Facebook" placeholder="Facebook" name="Facebook">
             </div>
             <div class="form-group has-error">
               <label for="time1">Instagram</label>
               <input type="text" class="form-control" id="Instagram" placeholder="Instagram" name="Instagram">
             </div>
             <div class="form-group">
               <label for="Inputselect">LinkedIn</label>
               <input type="text" class="form-control" id="LinkedIn" placeholder="LinkedIn" name="LinkedIn">
             </div>

             <button type="submit" class="btn btn-info" name="btn_save5">Submit Social Media Link</button>

           </form>

         </div>
       </div>

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