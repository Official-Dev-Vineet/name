<?php
session_start();
if (isset($_POST['submit'])) {

  $title = $_POST['submit'];

  include 'dbh.php';
  $im = "SELECT * FROM movies WHERE name = '$title'" ;

  $records = mysqli_query($conn,$im);

  echo"<!DOCTYPE html>";
  echo"<html lang='en' dir='ltr'>";
    echo"<head>";
      echo"<meta charset='utf-8'>";
      echo"<title>".$title."</title>";
      echo"<link rel='stylesheet' href='movie.css'>";
      echo"<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";
      echo"<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>";
    echo"</head>";
    echo"<body style='background: #2d2f33;'>";

        echo"<div class='jumbotron-fluid' style='margin-left: 0px; margin-right: 0px;'>";
        echo"<div class='container-fluid'>";
        while($result = mysqli_fetch_assoc($records)){
            $mname = $result['name'];
           
            $movieid = $result['mid'];
            $current = $result['viewers'];
            $newcount = $current + 1;
            $newsql = "UPDATE movies SET viewers = '$newcount' WHERE name='$mname' ";
            $nsql = "UPDATE user1 SET mid = '$movieid' ";
            $updatecount = mysqli_query($conn,$newsql);
            $updatecount = mysqli_query($conn,$nsql);

            echo"<br>";
            echo"<a href='appanageflix.php' style='font-size: 20px;color:orange;border:1px solid orange;border-radius:5px;padding:10px;text-decoration:none;'>Back to Home </a>";
          echo "<br><br><h2 style='display: inline; color: #e32636;'>".ucwords($result['name'])."</h2>";
          echo"<br><h6 style='display: inline; color: white;'>".$result['runtime']." mins . ".$result['rdate']." . ".ucwords($result['genre'])." </h6>";
           echo"<br><h6 style='display: inline; color: white;' ><i class='fa fa-eye'></i> </h6><h6 style='display: inline;'>".$result['viewers']."</h6>";
          echo"<br><p style='display: inline; margin-top: 20px;'>".ucfirst($result['decription'])."</p>";

          echo"<br>";
          echo"<div class='embed-responsive embed-responsive-16by9' style='background: white; display: block'>";
          echo"<iframe class='embed-responsive-item' src='video-uploads/".$result['videopath']."' poster='uploads/".$result['imgpath']."' frameborder='0' style='background: white;' allowfullscreen></iframe>";
          echo"</video>";
          echo"</div>";

        }
        echo"</div>";
        echo"</div>";

    echo"</body>";


  echo"</html>";


}
?>
