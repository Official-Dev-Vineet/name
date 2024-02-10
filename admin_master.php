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
//country
if (isset($_POST['btn_save'])) {
  $country = isset($_POST['Country_Name']) ? $_POST['Country_Name'] : null;
  $result = mysqli_query($sql_con, "INSERT INTO `country`(`Country_Name`) VALUES ('$country')");
}

//product
if (isset($_POST['btn_save1'])) {
  $Product_Category = isset($_POST['Product_Category']) ? $_POST['Product_Category'] : null;
  $Image = $_FILES['ProductImage']['name'];
  $tempimgname1 = $_FILES['ProductImage']['tmp_name'];
  move_uploaded_file($tempimgname1, "image/$Image");
  $result = mysqli_query($sql_con, "INSERT INTO `product_category`(`ProductCategory`,`Image`) VALUES ('$Product_Category','$Image')");
}

//social
if (isset($_POST['btn_save2'])) {
  $facebook = isset($_POST['Facebook']) ? $_POST['Facebook'] : null;
  $twitter = isset($_POST['twitter']) ? $_POST['twitter'] : null;
  $linkedin = isset($_POST['linkedin']) ? $_POST['linkedin'] : null;
  $instagram = isset($_POST['Instagram']) ? $_POST['Instagram'] : null;
  $result = mysqli_query($sql_con, "INSERT INTO `social`(`Facebook`,`Twitter`,`LinkedIn`,`Instagram`) VALUES ('$facebook','$twitter','$linkedin','$instagram')");
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
  <link rel="stylesheet" href="css/style.css" />
  <style>
    header {
      background-color: rgba(0, 0, 0, 0.5);
    }

    .flex {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
    }

    .flex ul:last-child {
      margin: 20px;
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      align-items: center;
    }

    .flex ul:last-child li a {
      text-decoration: none;
    }
  </style>
</head>

<body>
  <?php include 'header.php'; ?>
  <div class="container" style="margin-top: 4rem;">
    <div class="flex">

      <ul class="nav nav-tabs" id="myTab">
        <li class="nav-item active"><a class="nav-link" href="#profile">Country Master</a></li>
        <li class="nav-item"><a class="nav-link" href="#messages">Product Master</a></li>
        <li class="nav-item"><a class="nav-link" href="#social">Social Media Master</a></li>
      </ul>
      <ul>
        <li>
          <a href="admin_update.php">Update All</a>
        </li>
        <li>
          <a href="admin_logout.php">Logout</a>
        </li>
      </ul>
    </div>
    <div class="tab-content">
      <div class="tab-pane active" id="profile">
        <p></p>
        <div class="container">
          <h1>Country Information</h1>
          <form method="POST" enctype="multipart/form-data">
            <div class="form-group has-warning">
              <label for="landmark">Country Name</label>
              <input type="landmark" class="form-control" id="Country_Name" placeholder="Country Name" name="Country_Name">
            </div>

            <button type="submit" class="btn btn-info" name="btn_save">Save Country</button>


          </form>
          <br><br />
        </div>
      </div>
      <div class="tab-pane fade" id="messages">
        <div class="container">
          <h1>Product Information</h1>
          <form method="post" enctype="multipart/form-data">
            <div class="form-group has-warning">
              <label for="day1">Product Category</label>
              <input type="text" class="form-control" id="Product_Category" placeholder="Product Category" name="Product_Category">
            </div>
            <div class="form-group has-error">
              <label for="time1">Image: </label>
              <input type="file" name="ProductImage" id="ProductImage" />
            </div>

            <button type="submit" class="btn btn-info" name="btn_save1">Submit Product</button>

          </form>

        </div>
      </div>

      <div class="tab-pane fade" id="social">
        <div class="container">
          <h1>Social Media Information</h1>
          <form method="post" enctype="multipart/form-data">
            <div class="form-group has-warning">
              <label for="day1">Facebook</label>
              <input type="text" class="form-control" id="Facebook" placeholder="Facebook" name="Facebook">
            </div>

            <div class="form-group has-warning">
              <label for="day1">Twitter</label>
              <input type="text" class="form-control" id="twitter" placeholder="Twitter" name="twitter">
            </div>

            <div class="form-group has-warning">
              <label for="day1">Linked In</label>
              <input type="text" class="form-control" id="linkedin" placeholder="linkedin" name="linkedin">
            </div>

            <div class="form-group has-warning">
              <label for="day1">Instagram</label>
              <input type="text" class="form-control" id="Instagram" placeholder="Instagram" name="Instagram">
            </div>


            <button type="submit" class="btn btn-info" name="btn_save2">Submit Social</button>

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
  <script>
    let open = null;
    const navbarMenu = document.getElementById("menu");
    const burgerMenu = document.getElementById("burger");
    const headerMenu = document.getElementById("header");

    // Open Close Navbar Menu on Click Burger
    if (burgerMenu && navbarMenu) {
      burgerMenu.addEventListener("click", () => {
        burgerMenu.classList.toggle("is-active");
        navbarMenu.classList.toggle("is-active");
      });
    }

    // Close Navbar Menu on Click Menu Links
    document.querySelectorAll(".menu-link").forEach((link) => {
      link.addEventListener("click", () => {
        burgerMenu.classList.remove("is-active");
        navbarMenu.classList.remove("is-active");
      });
    });

    // Change Header Background on Scrolling
    window.addEventListener("scroll", () => {
      if (this.scrollY >= 20) {
        headerMenu.classList.add("on-scroll");
      } else {
        headerMenu.classList.remove("on-scroll");
      }
    });

    // Fixed Navbar Menu on Window Resize
    window.addEventListener("resize", () => {
      if (window.innerWidth > 768) {
        if (navbarMenu.classList.contains("is-active")) {
          navbarMenu.classList.remove("is-active");
        }
      }
    });
    document.querySelectorAll('.joinUs').forEach(element => element.addEventListener('click', function() {
      document.querySelector('.topUpForm').style.display = 'grid';
      document.body.style.overflow = 'hidden';
    }))
    document.addEventListener('DOMContentLoaded', function() {
      setTimeout(function() {
        let openData = localStorage.getItem("open");
        if (!openData) {
          localStorage.setItem("open", "false");
        }
        if (open == null && openData == "false") {
          document.querySelector(".topUpForm").style.display = "grid";
          document.body.style.overflow = "hidden";
        }
      }, 10000);
    })
    window.addEventListener('keyup', function(e) {
      if (e.keyCode == 27) {
        closeForm();
        closeFormLogin();
      }
    })

    function openForm() {
      open = true;
      document.querySelector(".bottomUpForm").style.display = "grid";
      document.body.style.overflow = "hidden";
    }

    function closeForm() {
      document.querySelector(".topUpForm").style.display = "none";
      document.body.style.overflow = "auto";
      open = null;
      localStorage.setItem("open", "true");
    }

    function closeFormLogin() {
      document.querySelector(".bottomUpForm").style.display = "none";
      document.body.style.overflow = "auto";
    }
  </script>
</body>

</html>