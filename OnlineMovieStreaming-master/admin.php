<?php
session_start();

 ?>


 <!DOCTYPE html>
 <head>
   <meta charset="utf-8">
   <title>AppanageFlix-Admin</title>
   <link rel="stylesheet" href="user.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
 <body>
   <header>
     <div class="container-fluid">
       <nav class="navbar navbar-expand-md" style="background-color: black;">
           <a href="homepage.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
           <span class="navbar-text" style="color: white;"><a href="appanageflix.php" style="color: white;">AppanageFlix</a></span>

           <ul class="navbar-nav">
             <li class="nav-item"> <a href="homepage.php" class="nav-link"> Home </a> </li>
             <li class="nav-item"> <a href="logout.php" class="nav-link"> Logout</a> </li>

           </ul>

       </nav>

       <div class="container">

         <div class="jumbotron" style="background-color: rgba(0, 0, 0, 0.5);">
           <h1 style="color:white;"> Enter the Firm details</h1>
           <p> <b></b> </p> <br>

           <form class="" action="admin-control.php" method="POST" enctype="multipart/form-data">

            <input type="text" class="form-control" placeholder="Firm Name" name="mname" value="" style=" border: 3px solid black;  border-radius: 4px;"><br>
             <input type="text" class="form-control" placeholder="Year of Release" name="release" value="" style=" border: 3px solid black;  border-radius: 4px;">
             <br>
             <input type="text" class="form-control" placeholder="Genre" name="genre" value="" style=" border: 3px solid black;  border-radius: 4px;">
             <br>
             <input type="number" class="form-control" placeholder="Runtime in minutes" name="rtime" value="" style=" border: 3px solid black;  border-radius: 4px;">
             <br>
             <input type="text" class="form-control" placeholder="Description..." name="desc" value="" style=" border: 3px solid black;  border-radius: 4px;">
             <br>
             <div class="row">
               <div class="col">
                 <table>
                   <tr>
                     <td style="color: white;"> <label for=""><b>Upload Image : </b></label> </td>
                     <td>
                          <div class="">
                              <input type="hidden" name="size" value="100000">

                              <input type="file" name="image" value="" style="color: white; border: 3px solid black;  border-radius: 4px;">
                          </div>
                     </td>
                   </tr>
                 </table>
               </div>
               <div class="col">
                 <table>
                   <tr>
                     <td style="color: white;"> <label for=""><b>Upload Video : </b></label> </td>
                     <td>
                          <div class="">
                              <input type="hidden" name="size" value="30000000">

                              <input type="file" name="video" value="" style="color: white; border: 3px solid black;  border-radius: 4px;">
                          </div>
                     </td>
                   </tr>
                 </table>

               </div>
             </div> <br><br>
             <div class="signupbutton">
               <input type="submit" class ="btn btn-danger btn-lg" name="upload" value="Submit" >
             </div>


           </form>

        </div>


         </div>

       </div>


   </div>

 </header>
 <footer class="page-footer font-small blue">

   <div class="footer-copyright text-center py-3">© 2018 Copyright:
     <a href="">AppanageFlix</a>
   </div>

 </footer>
   </body>
 </html>
