<?php
include 'dbh.php';


  $im = "SELECT * FROM movies ORDER BY name ASC" ;
  $records = mysqli_query($conn,$im);

  start:
  $i=0;

  echo"<div class='row'>";
    while($result = mysqli_fetch_assoc($records)){
      echo"<form action='movie.php' method='POST'>";
      echo"<div class='col'>";
      echo"<div style='border: 2px solid #e32636; margin-bottom: 20px;'>";
      echo "<img src='uploads/".$result['imgpath']."' class='img-thumbnail img-fluid' height='250' width='200' />";
        echo"<div class='noob'>";
          echo "<input type='submit' name='submit' style='display:block;width:200px; background: #e32636; padding-bottom:15px; color: white;' value='".ucwords($result['name'])."'/>";
        echo"</div>";
      echo"</div>";
      echo"</div>";
      echo"</form>";

      if ($i==4) {

        echo"</div>";

        goto start;
      }
      $i++;
    }
    echo"</div>";
    ?>
