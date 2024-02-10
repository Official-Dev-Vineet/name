<?php
session_start();

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>AppanageFlix</title>
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
  <body style="background-color: black;">
    <header>

        <nav class="navbar navbar-expand-md" style="background-color: black;">
            <a href="#" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
            <span class="navbar-text" style="color: white;"><a href="appanageflix.php" style="color: white;">AppanageFlix</a></span>

            <ul class="navbar-nav">
              <?php
              if (isset($_SESSION['id'])) {
                if (empty($_SESSION['id'])) {
                  echo "<li class='nav-item'> <a href='admin.php' class='nav-link'>Add movie</a> </li>";
                }
              }
              echo"<li class='nav-item'> <a href='user-login.php' class='nav-link'>Sign In</a> </li>

                  <li class='nav-item'> <a href='test.php' class='nav-link'>Sign Up</a> </li>
                  </ul>
                  </nav>
                  <div class='container-fluid'>
                  <br><br><br>";

              echo"<h1 style='color:white;position:sticky;'>WELCOME </h1><b style = 'color: white;font-size: 25px'><i>  !</i></b>
                  </div>
                  </header>
                  <section style='color: blue;'>

                <div class='jumbotron' style=' background-color: black; padding-top: 10px; padding-bottom: 0px;'>
                <div class='row'>
                  <div class='col'>
                    <form action='movie.php' method='POST'>
                    <h4 style='color:white;font-size:30px;'>Recent :
                    <input type='submit' name='submit' class='btn btn-danger' style='display:inline;width:200px;margin-left:20px;margin-right:20px;' value=''/></h4>
                    </form>
                  </div>
                  <div class='col'>
                    <form action='search.php' method='POST'>
                      <select  name='option' style='padding:5px; border: 3px solid black;  border-radius: 4px;'>
                        <option selected>Search By</option>
                        <option value='name'>Name</option>
                        <option value='genre'>Genre</option>
                        <option value='rdate'>Release year</option>
                      </select>
                      <input type='text' placeholder='Enter..' style='margin-left:10px;margin-top:10px;padding:5px; border: 3px solid black;  border-radius: 4px;' name='textoption'>

                      <input type='submit' name='submit' class='btn btn-danger' style='display:inline;width:100px;margin-left:20px;margin-right:20px;margin-top:5px;' value='Search'/></h4>
                    </form>
                  </div>
                </div>
                </div>";
                  ?>
      <div class="jumbotron" style="background-color: black; padding-top: 0px; padding-bottom: 0px;">
        <h2 style='margin-top:0px;padding-top:0px; color: white;'>Latest updated</h2>
          <div class="row">
            <?php
              include 'latest-fetcher.php';
             ?>
          </div>
      </div>
      <div class="jumbotron" style="background-color: black; padding-top: 0px; padding-bottom: 0px;">
        <h2 style="color: white;">  All Firms</h2>
          <?php
            include 'fetcher.php';
            ?>


      </div>

  </section>
  <footer class="page-footer font-small blue" style="background-color: #737373;">

    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="" style="color: darkblue;">AppanageFlix</a>
    </div>

  </footer>
  </body>
</html>
