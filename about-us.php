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
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>About Appanage Mart</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!--enable mobile device-->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--fontawesome css-->
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <!--bootstrap css-->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="icon" type="image/png" href="images/AppanageLogo2.png">
   <!--animate css-->
   <link rel="stylesheet" href="css/animate-wow.css">
   <!--main css-->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/bootstrap-select.min.css">
   <link rel="stylesheet" href="css/slick.min.css">
   <!--responsive css-->
   <link rel="stylesheet" href="css/responsive.css">
</head>
<?php
include 'header.php';
?>
<div class="modal fade lug" id="myModal" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Change</h4>
         </div>
         <div class="modal-body">
            <ul>
               <li><a href="#"><img src="images/flag-up-1.png" alt="" /> United States</a></li>
               <li><a href="#"><img src="images/flag-up-2.png" alt="" /> France </a></li>
            </ul>
         </div>
      </div>
   </div>
</div>
<div class="main-template-about" style="background-color: var(--brandColor);">
   <div class="section-gradient">
      <div class="map"></div>
      <div class="container-fluid" data-aos="fade-up">
         <div class="row">
            <div style="max-width: 1200px;margin:0 auto;padding: 1rem;position: relative;">
               <div class="wow fadeIn" data-wow-delay="0.0s">
                  <h1>Expand business. Inspiring you to success.
                  </h1>
                  <p class="lead">Here at Chamb, we want you to find new connections, grow profitable relationships, and make more money than you could ever dream of making. Sound like something you'd like to do? Then what are you reading this for?
                     <br>
                     <br>
                     Go sign up and get inspired!
                  </p>
               </div>
               <div class="about-icons" style="max-width: 100%;display: flex;justify-content:space-around;flex-wrap: wrap;align-items: center;gap:1.5rem">
                  <div class="wow fadeIn" data-wow-delay="0.0s"><img src="images/about-icon-1.png" alt="" /></div>
                  <div class="wow fadeIn" data-wow-delay="0.2s"><img src="images/about-icon-2.png" alt="" /></div>
                  <div class="wow fadeIn" data-wow-delay="0.4s"><img src="images/about-icon-3.png" alt="" /></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section do">
      <div class="blue-light" style="z-index: -1;"></div>
      <div class="container" data-aos="fade-up">
         <div class="row">
            <div>
               <div class="does-box" style="border-radius: 1rem; overflow: hidden;">
                  <div class="panel-body">
                     <h2 style="font-weight: 700;">What Does Appanage Do :</h2>
                     <p>
                        We took it upon ourselves to change that. We developed a burning desire to create something to bridge the chasms between
                        businesses across country and continent. So, with a goal in mind, a skilled team at hand, Chamb sprung forth: the website
                        that helps discover and build profitable long-lasting networks amongst businesses around the world. <br />
                        Appanage, as the world's largest online marketplace, plays a pivotal role in connecting buyers and sellers across the globe. With its vast reach and diverse range of products and services, Appanage serves as a one-stop destination for individuals and businesses alike. Here's how it functions and what it offers:
                     </p>
                     <ul>
                        <li>
                           <h3>
                              Product Diversity :
                           </h3>
                           <p style="margin-left: 1rem;">
                              Appanage hosts a wide array of products spanning various categories such as electronics, fashion, home goods, beauty products, and much more. Whether customers are searching for the latest gadgets or unique handmade crafts, they can find it all on Appanage.
                           </p>
                        </li>
                        <li>
                           <h3>
                              Global Reach :
                           </h3>
                           <p style="margin-left: 1rem;">
                              Operating on a global scale, Appanage facilitates transactions between buyers and sellers from different countries and regions. This expansive reach allows sellers to access a broader customer base while providing buyers with access to products that may not be readily available in their local markets.
                           </p>
                        </li>
                        <li>
                           <h3>Convenience :</h3>
                           <p style="margin-left: 1rem;">
                              One of the key advantages of using Appanage is its convenience. Customers can browse through thousands of products from the comfort of their homes, compare prices, read reviews, and make purchases with just a few clicks. Similarly, sellers can easily list their products, manage inventory, and communicate with customers through the platform.
                           </p>
                        </li>
                        <li>
                           <h3>Secure Transactions :</h3>
                           <p style="margin-left: 1rem;"> Appanage prioritizes the security of transactions to ensure a safe shopping experience for both buyers and sellers. The platform employs encryption and secure payment gateways to protect sensitive information and mitigate the risk of fraud.</p>
                        </li>
                        <li>
                           <h3>Customer Support :</h3>
                           <p style="margin-left: 1rem;"> In addition to facilitating transactions, Appanage offers robust customer support services to address any queries or concerns that may arise. Whether it's assistance with order tracking, returns, or technical issues, customers can rely on Appanage's dedicated support team for prompt resolution.</p>
                        </li>
                        <li>
                           <h3>Opportunities for Sellers :</h3>
                           <p>For sellers, Appanage presents an opportunity to showcase their products to a vast audience and grow their businesses. The platform provides tools and resources to optimize listings, analyze sales data, and enhance visibility, enabling sellers to maximize their reach and revenue potential.</p>
                        </li>
                     </ul>
                  </div>
                  <img class="wow fadeIn" src="images/mac-about.png" alt="" />
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="seciton create">
      <div class="container">
         <div class="row">
            <div class="col-lg-12" style="color: white;">
               <h2>Why Create Appanage :</h2>
               <p>The creation of Appanage stemmed from a vision to revolutionize the way people engage in commerce and connect with each other on a global scale. Here's a breakdown of the motivations behind its inception:
               </p>
               <ul>
                  <li>
                     <h3>E-commerce Evolution :</h3>
                     <p style="margin-left: 1rem;">The rapid evolution of e-commerce presented an opportunity to create a platform that transcended geographical boundaries and traditional retail constraints. Appanage was envisioned as a space where buyers and sellers could converge, regardless of their location, offering unparalleled convenience and accessibility.</p>
                  </li>
                  <li>
                     <h3>Marketplace Gap :</h3>
                     <p style="margin-left: 1rem;">Recognizing a gap in the market for a comprehensive online marketplace that catered to diverse consumer needs, the founders of Appanage sought to fill this void by creating a platform that curated a vast array of products and services. By consolidating various categories under one virtual roof, Appanage aimed to streamline the shopping experience and provide customers with unparalleled choice and convenience.</p>
                  </li>
                  <li>
                     <h3>Global Connectivity:</h3>
                     <p style="margin-left: 1rem;">In an increasingly interconnected world, the need for a platform that facilitated global connectivity and trade became apparent. Appanage was conceived as a bridge that connected buyers and sellers from different corners of the globe, fostering cross-cultural exchanges and enabling businesses to tap into new markets.</p>
                  </li>
                  <li>
                     <h3>Empowering Sellers :</h3>
                     <p style="margin-left: 1rem;">A core tenet of Appanage's mission is to empower sellers, whether they are established brands or independent artisans, by providing them with a platform to showcase their products to a global audience. By democratizing access to the marketplace, Appanage enables sellers to reach new customers and grow their businesses exponentially.</p>
                  </li>
                  <li>
                     <h3>Customer-Centric Approach: </h3>
                     <p style="margin-left: 1rem;"> At the heart of its creation, Appanage prioritized the needs and preferences of its customers. From seamless navigation and secure transactions to personalized recommendations and responsive customer support, every aspect of the platform was designed with the aim of enhancing the overall shopping experience and fostering customer loyalty.</p>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="section account-box">
      <div style="background-color: darkvar(--brandColor);"></div>
      <div class="light-blue-grad"></div>
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
               <div class="blue-form" style="border-radius: 1rem;overflow: hidden;box-shadow:0 0 10px rgba(0,0,0,0.5);">
                  <h2>Start a free account today</h2>
                  <form class="form-inline">
                     <input type="email" placeholder="Enter your e-mail" />
                     <button type="submit" class="btn btn-primary">Continue</button>
                  </form>
                  <p>Easy setup - max. payment fees - up to unlimited products for free</p>
                  <div class="blue-form_question"><strong>Questions?</strong> Call us on 12 34 56 78 for help.</div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section-white">
      <div class="container" style="background-color: white;margin-bottom: 1rem;box-shadow:0 0 1rem rgba(0,0,0,0.5);border-radius: 1rem;">
         <div class="row">
            <div class="col-lg-12">
               <h2 style="text-align: center;border-bottom: 2px solid var(--brandColor);">When, Who and Where?</h2>
               <p>Appanage Mart, discovered in 2021, stands as a beacon of innovation and convenience for residents and visitors alike. Situated within the bustling Agrasain Plaza, adjacent to Ambedkar Chowk in Ballabhgarh, this establishment has swiftly become a cornerstone of the local community.</p>

               <p>The brainchild of visionary entrepreneurs, Appanage Mart emerged to fulfill the diverse needs of consumers with its extensive range of products and services. Since its inception, it has garnered acclaim for its commitment to quality, affordability, and customer satisfaction. </p>

               <p>Nestled in the heart of Ballabhgarh, Appanage Mart caters to a wide spectrum of preferences, offering everything from daily essentials to specialty items, thus serving as a one-stop destination for all shopping requirements. Its strategic location within Agrasain Plaza ensures easy accessibility, drawing patrons from various parts of the city and beyond.</p>
               <p>
                  As a hub of activity and convenience, Appanage Mart epitomizes the essence of modern retail, blending innovation with tradition to create a seamless shopping experience. Whether seeking household necessities, gourmet delights, or unique finds, visitors can expect to find their desires fulfilled within the inviting confines of this esteemed establishment.
               </p>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include 'footer.php'; ?>
<!--main js-->
<script src="js/jquery-1.12.4.min.js"></script>
<!--bootstrap js-->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/wow.min.js"></script>
<!--custom js-->
<script src="js/custom.js"></script>
</body>

</html>