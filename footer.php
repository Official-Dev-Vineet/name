<?php
include 'conne.php';
$result = mysqli_query($sql_con, "SELECT * FROM `social`");
while ($row = mysqli_fetch_array($result)) {
    $Facebook = $row['Facebook'];
    $twitter = $row['Twitter'];
    $Instagram = $row['Instagram'];
    $linkedin = $row['LinkedIn'];
}
?>
<footer>
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="footer-link-box clearfix">
                    <div class="col-md-10 col-sm-6">
                        <div class="left-f-box" style="margin-top:-5%;">
                            <div class="col-sm-3" style="margin-bottom: 1rem;">
                                <h2>Ads on appanage</h2>
                                <ul>
                                    <li class="joinUs"><span><i class="fa fa-chevron-circle-right" style="color: white;"></i></span><b style="color: white; padding-left:10px;">Create account</b></li>
                                    <li><span><i class="fa fa-chevron-circle-right" style="color: white;"></i></span><a href="howitworks.php" style="color: white; padding-left:10px;">How it works</a></li>
                                    <li><span><i class="fa fa-chevron-circle-right" style="color: white;"></i></span><a href="pricing.php" style="color: white; padding-left:10px;">Pricing</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4" style="margin-bottom: 1rem;">
                                <h2>partnership with Appanage</h2>
                                <ul>
                                    <li class="joinUs"><span><i class="fa fa-chevron-circle-right" style="color: white;"></i></span><b style="color: white; padding-left:10px;">Create account</b></li>
                                    <li><span><i class="fa fa-chevron-circle-right" style="color: white;"></i></span><a href="howitworks.php" style="color: white; padding-left:10px;">How it works</a></li>
                                    <li><span><i class="fa fa-chevron-circle-right" style="color: white;"></i></span><a href="index.php" style="color: white; padding-left:10px;">Categories</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3" style="margin-bottom: 1rem;">
                                <h2>COMPANY</h2>
                                <ul>
                                    <li><span><i class="fa fa-chevron-circle-right" style="color: white;"></i></span><a href="about-us.php" style="color: white; padding-left:10px;">About Appanage Mart</a></li>
                                    <li><span><i class="fa fa-chevron-circle-right" style="color: white;"></i></span><a href="contact.php" style="color: white; padding-left:10px;">Contact us</a></li>
                                    <li><span><i class="fa fa-chevron-circle-right" style="color: white;"></i></span><a href="cms.php" style="color: white; padding-left:10px;">Terms of use</a></li>
                                    <li><span><i class="fa fa-chevron-circle-right" style="color: white;"></i></span><a href="./admin_login.php" style="color: white; padding-left:10px;">Admin Login</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-2" style="margin-bottom: 1rem;">
                                <h2>COUNTRY</h2>
                                <ul>
                                    <li><span><i class="fa fa-chevron-circle-right" style="color: white;"></i></span><a href="" style="color: white; padding-left:10px;">INDIA</a></li>
                                    <li><span><i class="fa fa-chevron-circle-right" style="color: white;"></i></span><a href="" style="color: white; padding-left:10px;">USA</a></li>
                                    <li><span><i class="fa fa-chevron-circle-right" style="color: white;"></i></span><a href="" style="color: white; padding-left:10px;">UAE</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6" style="margin-top:-4%;">
                        <div class="right-f-box">
                            <h2>Business Type</h2>
                            <ul class="col-sm-4">
                                <?php
                                $prod = mysqli_query($sql_con, "SELECT * FROM `product_category` limit 5");
                                while ($Ro = mysqli_fetch_array($prod)) {
                                    $nu = $Ro['ProductCategory'];
                                ?>
                                    <li>
                                        <a href="productpage.php?search=<?php echo $nu; ?>" style="color: white;">
                                            <?php echo $nu; ?>
                                        </a>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="footer-top clearfix">
                    <div class="col-md-2 col-sm-6">
                        <h2 class="joinUs">Start a free
                            account today
                        </h2>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-box">
                            <input type="text" placeholder="Enter your e-mail" />
                            <button>Continue</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="help-box-f">
                            <h4>Query? Call us on <span style="font-family:rasa regular ; font-style: italic;">9821724252 , 9717831913</span> for help</h4>
                            <p>Easy setup - max. payment fees - up to unlimited products for free</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p style="color:var(--brandColor); font-weight: bold;"><img width="90" style="margin-top: -5px; margin-left: -100px; " /> © Copyright Appanage Mart. All Rights Reserved</p>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline socials">
                        <li>
                            <a href="<?php echo $Facebook; ?>">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $twitter; ?>">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $Instagram; ?>">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $linkedin; ?>">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=919821724252">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
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