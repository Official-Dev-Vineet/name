<?php
include 'dbh.php';


  $im = "SELECT * FROM movies" ;
  $records = mysqli_query($conn,$im);
  $count = mysqli_num_rows($records);


  $i=$count;
  $j=$count-3;
  $newim = "SELECT * FROM movies WHERE mid BETWEEN '$j' AND '$i'" ;
  $newrecords = mysqli_query($conn,$newim);
    while($fetchr = mysqli_fetch_assoc($newrecords)){

      echo"<form action='movie.php' method='POST'>";
      echo"<div class='col'>";
      echo"<div style='border: 2px solid #e32636; margin-bottom: 20px;'>";
      echo "<img src='uploads/".$fetchr['imgpath']."' class='img-thumbnail img-fluid' height='200' width='200' />";
        echo"<div class='noob'>";
          echo "<input type='submit' name='submit' style='width:200px;  color: white; background: #e32636;' value='".ucwords($fetchr['name'])."'/>";
        echo"</div>";
      echo"</div>";
      echo"</div>";
      echo"</form>";


    }

    ?>
