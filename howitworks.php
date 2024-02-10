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
   <title>Appanage Mart</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!--enable mobile device-->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--fontawesome css-->
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <!--bootstrap css-->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!--animate css-->
   <link rel="stylesheet" href="css/animate-wow.css">
   <!--main css-->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/bootstrap-select.min.css">
   <link rel="icon" type="image/png" href="images/AppanageLogo2.png">
   <link rel="stylesheet" href="css/slick.min.css">
   <!--responsive css-->
   <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
   <?php include 'header.php'; ?>
   <!-- Modal -->
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
   <div id="sidebar" class="top-nav">
      <ul id="sidebar-nav" class="sidebar-nav">
         <li><a href="https://api.whatsapp.com/send?phone=9871650191; ?>">Help</a></li>
         <li><a href="howitworks.php">How it works</a></li>
         <li><a href="enquiry.php">Appanage MArt for Business</a></li>
      </ul>
   </div>
   <div class="section-how-it-works" style="margin-top: 5rem;">
      <div class="container">
         <div class="row">
            <div class="col-md-5 col-sm-6 col-xs-12">
               <div class="left-works-box wow fadeIn" data-wow-delay="0.2s">
                  <h2>How it works if <br><span>you're a buyer.</span></h2>
                  <p>We explained the buying process of Appanage Mart in
                     three simple steps. See how it works,
                     benefits and FAQ.
                  </p>
               </div>
            </div>
            <div class="col-md-7 col-sm-6 col-xs-12">
               <div class="right-works-box">
                  <div class="small-box wow fadeIn" data-wow-delay="0.2s">
                     <div class="how-text-left">01</div>
                     <div class="how-dit-right">
                        <div class="dit-img">
                           <img class="img-responsive" src="images/works-icon-01.png" alt="" />
                        </div>
                        <h3>Sign up</h3>
                        <h2><span>Personal Details</span></h2>
                        <p>It is the first step to register in the APPANAGE MART. In that field you can fill your personal details like name, mobile no, email id, registration date.
                        </p>
                        <p>If you can fill all the detail you can click on the next button and you can go to the next steps.
                        </p>
                        <div class="line"></div>
                     </div>
                  </div>
                  <div class="searching-box wow fadeIn" data-wow-delay="0.4s">
                     <div class="how-text-left">02</div>
                     <div class="how-dit-right">
                        <div class="dit-img">
                           <img class="img-responsive" src="images/works-icon-02.png" alt="" />
                        </div>
                        <h3>Firm</h3>
                        <h2><span>Firm Detail</span></h2>
                        <p>It is the second part to register in the APPANAGE MART. In that part you can fill your firm detail like firm catageory, firm location, Country name, firm owner name, GST number, firm logo, firm type.
                        </p>
                        <p>All the field are compalsary and you can fill all the detail you can click on the next button and you can go to the next steps.
                        </p>
                        <div class="line"></div>
                     </div>
                  </div>
                  <div class="sellers-box wow fadeIn" data-wow-delay="0.6s">
                     <div class="how-text-left">03</div>
                     <div class="how-dit-right">
                        <div class="dit-img">
                           <img class="img-responsive" src="images/works-icon-03.png" alt="" />
                        </div>
                        <h3>Login</h3>
                        <h2><span>Login Detail</span></h2>
                        <p>It is the third part to register in the APPANAGE MART. In that part you can Fill your login detail like user name, password, re-entered password.
                        </p>
                        <p>If you complete all the detail you can go to the terms and condition page you can except that detail you can <b>SUBMIT</b> them and you can go to the login page You can login your account with the help of Registration Id or Password.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <style>
      .row1{
         display: grid;
         grid-template-columns: repeat(2,1fr);
         gap:2rem;
         place-items: center;
      }
      @media screen and (max-width: 765px) {
         .row1{
            grid-template-columns:1fr;
         }
      }
   </style>
   <div class="works-systems">
      <div class="container">
         <div class="row1">
            <div class="sys-box-left-a wow fadeIn" data-wow-delay="0.2s">
               <h2>Streamlined<br>
                  Communication Systems.
               </h2>
               <p>Streamlined communication means you are not only giving infinite ways to interact with your staff, partners and customers, but also building an effective relationship with each of them. Here's how it works.
               </p>
               <p>A company that is driven by Streamline is a well-integrated business that also has an improved connection between its participants in different sectors of the operations within the business. Controlled, patterned, and predictable communication channels permit both parties involved to trust the message that is conveyed.
               </p>
            </div>
            <div class="sys-box-left-b wow fadeIn" data-wow-delay="0.2s">
               <img class="img-responsive" src="images/steam.png" alt="steam line " style="width: 100%;height: 100%;object-fit: contain;" />
            </div>
         </div>
         <div class="row1">
            <div class="sys-box-left-b wow fadeIn" data-wow-delay="0.2s">
               <img src="images/product1.png" alt="product1" style="height:100%;width:100%;object-fit:contain;" />
            </div>
            <div class="sys-box-right-b wow fadeIn" data-wow-delay="0.4s">
               <h2>Powerful search tools <br>
                  for finding products.
               </h2>
               <p>Search engine optimization (SEO) is the process of improving the quality and quantity of website traffic to a website or a web page from search engines.[1] SEO targets unpaid traffic (known as "natural" or "organic" results) rather than direct traffic or paid traffic. Unpaid traffic may originate from different kinds of searches, including image search, video search, academic search,[2] news search, and industry-specific vertical search engines.
               </p>
            </div>
         </div>
      </div>
   </div>
   <div class="section-safety">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h2 style="text-align: center;">Benefit with trust and safety</h2>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.2s">
               <div class="benenfit-box">
                  <div class="icon-b">
                     <img src="images/icon-b1.png" alt="" />
                  </div>
                  <h3>Verified Sellers :</h3>
                  <p>Appanage Mart rigorously verifies the identities of sellers on its platform, ensuring that only reputable individuals and businesses are able to list products for sale. This verification process helps to weed out potential scammers and fraudulent accounts, instilling trust in buyers that they are dealing with legitimate sellers.
                  </p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
               <div class="benenfit-box">
                  <div class="icon-b">
                     <img src="images/icon-b2.png" alt="" />
                  </div>
                  <h3>Secure Transactions :</h3>
                  <p>The platform employs robust encryption and security measures to safeguard transactions between buyers and sellers. Whether purchasing a product or making a payment, users can rest assured that their financial information is protected against unauthorized access or interception.
                  </p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.6s">
               <div class="benenfit-box">
                  <div class="icon-b">
                     <img src="images/icon-b3.png" alt="" />
                  </div>
                  <h3>Seller Ratings and Reviews :</h3>
                  <p>Appanage Mart allows buyers to rate and review their purchasing experience with sellers. These ratings and reviews serve as valuable indicators of a seller's reliability and integrity, empowering buyers to make informed decisions when choosing who to transact with. Likewise, sellers benefit from positive feedback, enhancing their reputation within the community.</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.2s">
               <div class="benenfit-box">
                  <div class="icon-b">
                     <img src="images/icon-b4.png" alt="" />
                  </div>
                  <h3>Dispute Resolution Mechanism:</h3>
                  <p>In the rare event of a dispute between a buyer and seller, Appanage Mart provides a fair and impartial resolution mechanism. Dedicated customer support teams are available to mediate disputes and facilitate a satisfactory outcome for all parties involved, further reinforcing the platform's commitment to trust and fairness.
                  </p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
               <div class="benenfit-box">
                  <div class="icon-b">
                     <img src="images/icon-b5.png" alt="" />
                  </div>
                  <h3>Product Authenticity Guarantee:</h3>
                  <p>Appanage Mart takes proactive steps to combat counterfeit products and ensure the authenticity of items sold on its platform. By partnering with brands and implementing stringent quality control measures, the platform gives buyers confidence that they are purchasing genuine products from authorized sellers.
                  </p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.2s">
               <div class="benenfit-box">
                  <div class="icon-b">
                     <img src="images/icon-b1.png" alt="" />
                  </div>
                  <h3>Comprehensive Policies and Guidelines:</h3>
                  <p>Appanage Mart maintains clear and comprehensive policies and guidelines that govern the conduct of users on its platform. These guidelines outline acceptable behavior, prohibited activities, and consequences for violations, fostering a culture of transparency and accountability among the community.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="faq-box wow fadeIn" data-wow-delay="0.0s">
      <div class="container">
         <div class="row">
            <div class="faq-main-box">
               <h2>Questions and answers</h2>
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-faq-1">
                           <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-a" aria-expanded="true" aria-controls="faq-a">
                                 What can I do with Appanage Free?
                              </a>
                           </h4>
                        </div>
                        <div id="faq-a" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-1">
                           <div class="panel-body">You can use the appanage free you can use the Appanage free plane. In that plan you can provide the 7 days free trial after complete that days they will automatically close.</div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-faq-2">
                           <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-b" aria-expanded="false" aria-controls="faq-b">
                                 How do I upgrade?
                              </a>
                           </h4>
                        </div>
                        <div id="faq-b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-2">
                           <div class="panel-body">you can go to the sign up page. There are three steps that you can fill your detail their and your account will be upgrade.</div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-faq-3">
                           <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-c" aria-expanded="false" aria-controls="faq-c">
                                 When will I be charged?
                              </a>
                           </h4>
                        </div>
                        <div id="faq-c" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-3">
                           <div class="panel-body">You can click on the that link <a href="pricing.php"> you can khow your answer.</a></div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-faq-4">
                           <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-d" aria-expanded="false" aria-controls="faq-d">
                                 How can i cancel my plan?
                              </a>
                           </h4>
                        </div>
                        <div id="faq-d" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-4">
                           <div class="panel-body">You can cancle you plane you can click on the that link <a href="contact.php">Click Here</a> your plan will be cancle. </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="panel-group" id="accordion-a" role="tablist" aria-multiselectable="true">
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-faq-right-1">
                           <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion-a" href="#faq-right-a" aria-expanded="true" aria-controls="faq-right-a">
                                 Can I get help to create my account?
                              </a>
                           </h4>
                        </div>
                        <div id="faq-right-a" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-right-1">
                           <div class="panel-body">You can click on <a href="howitworks.php">Click Here</a> that link your problem will be solved. </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-faq-right-2">
                           <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion-a" href="#faq-right-b" aria-expanded="false" aria-controls="faq-right-b">
                                 What i only want to try Appanage Mart ?
                              </a>
                           </h4>
                        </div>
                        <div id="faq-right-b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-right-2">
                           <div class="panel-body">Just go into price page in that link <a href="pricing.php">Click Here</a> you can use only use the Appanage Mart free options in that you can provide 7 days trial after 7 days will be complete they will close automatically. </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-faq-right-3">
                           <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion-a" href="#faq-right-c" aria-expanded="false" aria-controls="faq-right-c">
                                 What if i need a custom solution?
                              </a>
                           </h4>
                        </div>
                        <div id="faq-right-c" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-right-3">
                           <div class="panel-body">When creating an account, our ‘guided tour’ tutorial system will walk you through every aspect of the account generation process. From filling in your name to posting your first product or searching for your first item; nothing is left to chance </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-faq-right-4">
                           <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion-a" href="#faq-right-d" aria-expanded="false" aria-controls="faq-right-d">
                                 I have more questions..
                              </a>
                           </h4>
                        </div>
                        <div id="faq-right-d" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-right-4">
                           <div class="panel-body">You have the another question you can click on the that link <a href="contact,php">Click Here</a>. all doute will be clear to go the that link. </div>
                        </div>
                     </div>
                  </div>
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