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
   <link rel="icon" type="image/png" href="images/AppanageLogo2.png">
   <!--main css-->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/bootstrap-select.min.css">
   <link rel="stylesheet" href="css/slick.min.css">
   <link rel="stylesheet" href="css/pricing.css">
   <!--responsive css-->
   <link rel="stylesheet" href="css/responsive.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body>
   <?php
   include 'header.php';
   ?>
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
         <li><a href="enquiry.php">Appanage Mart for Business</a></li>
      </ul>
   </div>
   <style>
      @import url("https://fonts.googleapis.com/css2?family=Noto+Sans:wght@500;600&display=swap");

      * {
         padding: 0;
         margin: 0;
         box-sizing: border-box;
      }

      body {
         background: #f5f5f5;
         font-family: "Noto Sans", sans-serif;
      }

      .icon {
         display: flex;
         align-items: flex-start;
      }

      .icon svg {
         width: 2.188rem;
         margin-left: -0.188em;
      }

      h1 {
         font-size: 2.35rem;
         text-transform: capitalize;
         padding-bottom: 2rem;
         text-align: center;
      }

      @media screen and (min-width: 42.5rem) {
         h1 {
            font-size: 3rem;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1418 125" fill="%23FFBB7B"><path d="M1412.29 72.17c-11.04-5.78-20.07-14.33-85.46-25.24-22.37-3.63-44.69-7.56-67.07-11.04-167.11-22.06-181.65-21.24-304.94-30.56C888.78 1.39 822.57 1.1 756.44 0c-46.63-.11-93.27 1.56-139.89 2.5C365.5 13.55 452.86 7.68 277.94 23.15 202.57 33.32 127.38 45.01 52.07 55.69c-11.23 2.41-22.63 4.17-33.71 7.22C6.1 66.33 5.64 66.19 3.89 67.79c-7.99 5.78-2.98 20.14 8.72 17.5 33.99-9.47 32.28-8.57 178.06-29.66 4.26 4.48 7.29 3.38 18.42 3.11 13.19-.32 26.38-.53 39.56-1.12 53.51-3.81 106.88-9.62 160.36-13.95 18.41-1.3 36.8-3.12 55.21-4.7 23.21-1.16 46.43-2.29 69.65-3.4 120.28-2.16 85.46-3.13 234.65-1.52 23.42.99 1.57-.18 125.72 6.9 96.61 8.88 200.92 27.94 295.42 46.12 40.87 7.91 116.67 23.2 156.31 36.78 3.81 1.05 8.28-.27 10.51-3.58 3.17-3.72 2.66-9.7-.78-13.13-3.25-3.12-8.14-3.44-12.18-5.08-17.89-5.85-44.19-12.09-63.67-16.56l26.16 3.28c23.02 3.13 46.28 3.92 69.34 6.75 10.8.96 25.43 1.81 34.34-4.39 2.26-1.54 4.86-2.75 6.21-5.27 2.76-4.59 1.13-11.06-3.59-13.68ZM925.4 23.77c37.64 1.4 153.99 10.85 196.64 14.94 45.95 5.51 91.89 11.03 137.76 17.19 24.25 4.77 74.13 11.21 101.72 18.14-11.87-1.15-23.77-1.97-35.65-3.06-133.46-15.9-266.8-33.02-400.47-47.21Z"></path></svg>');
            background-size: 17.5rem;
            background-repeat: no-repeat;
            background-position: 98% 3.375rem;
            padding-bottom: 3rem;
         }
      }

      section {
         display: grid;
         place-content: center;
         place-items: center;
         min-height: 100vh;
         min-height: 100dvh;
         padding: 4rem clamp(1rem, 5%, 3rem);
      }

      section>span {
         display: inline-block;
         margin-bottom: 0.938em;
         text-transform: uppercase;
         letter-spacing: 0.12rem;
         font-size: 0.8rem;
         background: #ffbb7b;
         color: #5c0404;
         font-weight: bold;
         padding: 10px 30px;
         border-radius: 50px;
      }

      .cards {
         margin-top: 3em;
         display: flex;
         gap: 3rem;
         flex-wrap: wrap;
         justify-content: center;
      }

      .card {
         width: 17.5rem;
         cursor: pointer;
      }

      .card ul {
         margin: 0;
         padding: 0;
         list-style: none;
         height: 100%;
         display: flex;
         flex-direction: column;
         justify-content: end;
         gap: 0.5rem;
      }

      .card__outer {
         background: #ebecee;
         position: relative;
         height: 23.438rem;
         border-radius: 0.625rem;
         display: flex;
         align-items: flex-end;
         padding: 1.25rem;
         transition: 0.3s ease-in-out;
      }

      .card__outer b{
         display: flex;
         align-items: center;
         text-decoration: none;
         text-transform: capitalize;
         font-weight: bold;
         color: #5c0404;
      }

      .card__outer b svg {
         margin-left: 0.375em;
         width: 1.125rem;
      }

      .card__inner {
         background: #fff;
         position: absolute;
         bottom: 3.75rem;
         right: 1.25rem;
         width: 100%;
         height: 95%;
         border-radius: 0.625rem;
         padding: 1rem 1.188rem;
         display: flex;
         flex-direction: column;
      }

      .card__inner .title {
         text-transform: capitalize;
         font-weight: bold;
         font-size: 1rem;
         display: inline-block;
         margin-top: 0.313em;
         margin-bottom: 0.938em;
      }

      .card__inner ul {
         margin-top: -1.5rem;
      }

      .card__inner ul li {
         line-height: 1.25;
         font-weight: 600;
      }

      .card__inner .price {
         position: relative;
         display: inline-flex;
         align-items: flex-start;
      }

      .card__inner .price--number {
         font-size: 2.5rem;
         font-weight: 600;
      }

      .card__inner .price--number:after {
         position: absolute;
         content: "";
         left: 0;
         bottom: -1.563rem;
         display: block;
         color: red;
         background: #f5f5f5;
         height: 0.125rem;
         width: 100%;
      }

      .card__inner .price--dolar {
         font-size: 1.1rem;
         margin-top: 0.625em;
         font-weight: 500;
      }

      .card.active .card__outer b {
         color: #fff;
      }

      .card:nth-child(1).active .card__inner svg {
         color: #6824d6;
      }

      .card:nth-child(1).active .card__outer {
         background: #6824d6;
         box-shadow: 5px 18px 13px rgba(104, 36, 214, 0.43);
      }

      .card:nth-child(2).active .card__inner svg {
         color: #fe3258;
      }

      .card:nth-child(2).active .card__outer {
         background: #fe3258;
         box-shadow: 5px 18px 13px rgba(254, 52, 89, 0.43);
      }

      .card:nth-child(3).active .card__inner svg {
         color: #4ccda7;
      }

      .card:nth-child(3).active .card__outer {
         background: #4ccda7;
         box-shadow: 5px 18px 13px rgba(76, 205, 166, 0.43);
      }

      .card--purple .card__inner svg,
      .card--purple .card__inner .title,
      .card--purple .card__outer b {
         color: #6824d6;
      }

      .card--red .card__outer {
         height: 25.313rem;
      }

      .card--red .card__inner svg,
      .card--red .card__inner .title,
      .card--red .card__outer b {
         color: #fe3258;
      }

      .card--green .card__inner svg,
      .card--green .card__inner .title,
      .card--green .card__outer b {
         color: #4ccda7;
      }
   </style>
   <div class="page-template-pricing">
      <div class="section" style="background-color:var(--brandColor);">
         <div class="container">
            <section>
               <span>choose a right pack</span>
               <h1 style="color:#fff !important">our flexible pricing plans</h1>
               <div class="cards">
                  <div class="card card--purple">
                     <div class="card__outer">
                        <div class="card__inner">
                           <span class="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                 <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm4.5 7.5a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0v-2.25a.75.75 0 0 1 .75-.75Zm3.75-1.5a.75.75 0 0 0-1.5 0v4.5a.75.75 0 0 0 1.5 0V12Zm2.25-3a.75.75 0 0 1 .75.75v6.75a.75.75 0 0 1-1.5 0V9.75A.75.75 0 0 1 13.5 9Zm3.75-1.5a.75.75 0 0 0-1.5 0v9a.75.75 0 0 0 1.5 0v-9Z" clip-rule="evenodd" />
                              </svg>
                              <strong class="title">starter pack</strong>
                           </span>
                           <p class="price"><span class="price price--number"><span class="price price--dolar">₹</span>3999</span></p>

                           <ul>
                              <li>Branding and Banner Promotion</li>
                              <li>Separate Seller Panel</li>
                              <li>Free Website Creation</li>
                              <li>Better Search</li>
                              <li>SEO Support</li>
                              <li>Unlimited Number of Products</li>
                              <li>Customer Support</li>
                           </ul>
                        </div>
                        <b class="joinUs">get started now <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                              <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                           </svg>
                        </b>
                     </div>
                  </div>
                  <div class="card card--red active">
                     <div class="card__outer">
                        <div class="card__inner">
                           <span class="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                 <path d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z" />
                              </svg>
                              <strong class="title">enterprise pack</strong>
                           </span>

                           <p class="price"><span class="price price--number"><span class="price price--dolar">₹</span>6999</span></p>

                           <ul>
                              <li>Branding and Banner Promotion</li>
                              <li>Separate Seller Panel</li>
                              <li>Free Website Creation</li>
                              <li>Better Search</li>
                              <li>SEO Support</li>
                              <li>Unlimited Number of Products</li>
                              <li>Customer Support</li>
                              <li>Brand Duration - 6 months</li>
                           </ul>
                        </div>
                        <b class="joinUs">get started now <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                              <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                           </svg>
                        </b>
                     </div>
                  </div>
                  <div class="card card--green">
                     <div class="card__outer">
                        <div class="card__inner">
                           <span class="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                 <path fill-rule="evenodd" d="M9 4.5a.75.75 0 0 1 .721.544l.813 2.846a3.75 3.75 0 0 0 2.576 2.576l2.846.813a.75.75 0 0 1 0 1.442l-2.846.813a3.75 3.75 0 0 0-2.576 2.576l-.813 2.846a.75.75 0 0 1-1.442 0l-.813-2.846a3.75 3.75 0 0 0-2.576-2.576l-2.846-.813a.75.75 0 0 1 0-1.442l2.846-.813A3.75 3.75 0 0 0 7.466 7.89l.813-2.846A.75.75 0 0 1 9 4.5ZM18 1.5a.75.75 0 0 1 .728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 0 1 0 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 0 1-1.456 0l-.258-1.036a2.625 2.625 0 0 0-1.91-1.91l-1.036-.258a.75.75 0 0 1 0-1.456l1.036-.258a2.625 2.625 0 0 0 1.91-1.91l.258-1.036A.75.75 0 0 1 18 1.5ZM16.5 15a.75.75 0 0 1 .712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 0 1 0 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 0 1-1.422 0l-.395-1.183a1.5 1.5 0 0 0-.948-.948l-1.183-.395a.75.75 0 0 1 0-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0 1 16.5 15Z" clip-rule="evenodd" />
                              </svg>
                              <strong class="title">Premium pack</strong>
                           </span>
                           <p class="price"><span class="price price--number"><span class="price price--dolar">₹</span>7999</span></p>

                           <ul>
                              <li>Branding and Banner Promotion</li>
                              <li>Separate Seller Panel</li>
                              <li>Free Website Creation</li>
                              <li>Better Search</li>
                              <li>SEO Support</li>
                              <li>Unlimited Number of Products</li>
                              <li>Customer Support</li>
                              <li>Brand Duration - 1 Year</li>
                           </ul>
                        </div>
                        <b class="joinUs">get started now <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                              <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                           </svg>
                        </b>
                     </div>
                  </div>
               </div>
            </section>


            <div class="row pricing-f">
               <div class="col-md-12">
                  <h2 style="text-align: center;"><strong>Our features explained</strong></h2>
               </div>
            </div>
            <div style="display: grid;grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));gap:2rem;">
               <div class="wow fadeIn" data-wow-delay="0.2s" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);padding:1rem;border-radius: 1rem;">
                  <div class="feature" style="margin-bottom: 0;">
                     <div class="feature_icon">
                        <img src="images/pricing_icon_1.png" alt="">
                     </div>
                     <h3>Branding & Banner Promotion</h3>
                     <p>
                        <font style="color: white;">Brand promotion is the process of informing, reminding, persuading convincingly, and influencing consumers to make purchasing decisions in favor of a particular product or service offered by a brand. While the marketing force of a company typically spearheads brand promotion efforts, wholesalers and retailers may also engage in promotional activities to support the brand's initiatives.</font>
                     </p>
                  </div>
               </div>
               <div class="wow fadeIn" data-wow-delay="0.4s" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);padding:1rem;border-radius: 1rem;">
                  <div class="feature" style="margin-bottom: 0;">
                     <div class="feature_icon">
                        <img src="images/pricing_icon_2.png" alt="">
                     </div>
                     <h3>Unlimited number of products</h3>
                     <p>
                        <font style="color: white;">A product is an item or service that is made available for sale to consumers. Products can take various forms, including physical goods, virtual items, or cyber services. Each product is created at a cost, encompassing factors such as manufacturing, development, and distribution expenses.</font>
                     </p>
                  </div>
               </div>
               <div class="wow fadeIn" data-wow-delay="0.6s" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);padding:1rem;border-radius: 1rem;">
                  <div class="feature" style="margin-bottom: 0;">
                     <div class="feature_icon">
                        <img src="images/pricing_icon_3.png" alt="">
                     </div>
                     <h3>Better Search</h3>
                     <p>
                        <font style="color: white;">Search engines utilize a variety of ranking factors to determine the relevance and quality of the content presented in the search results. Factors such as keyword relevance, website authority, user engagement metrics, and the freshness of content all contribute to the search engine's algorithmic calculations.</font>
                     </p>
                  </div>
               </div>
               <div class="wow fadeIn" data-wow-delay="0.2s" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);padding:1rem;border-radius: 1rem;">
                  <div class="feature" style="margin-bottom: 0;">
                     <div class="feature_icon">
                        <img src="images/pricing_icon_4.png" alt="">
                     </div>
                     <h3>SEO Support</h3>
                     <p>
                        <font style="color: white;">Search engine optimization (SEO) is the strategic practice of optimizing web pages to achieve higher rankings in search engine results pages (SERPs), particularly in popular search engines like Google. It blends both art and science, requiring a combination of technical expertise, content creation, and strategic planning.</font>
                     </p>
                  </div>
               </div>
               <div class="wow fadeIn" data-wow-delay="0.4s" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);padding:1rem;border-radius: 1rem;">
                  <div class="feature" style="margin-bottom: 0;">
                     <div class="feature_icon">
                        <img src="images/pricing_icon_5.png" alt="">
                     </div>
                     <h3>Google Adwords</h3>
                     <p>
                        <font style="color: white;">Google Ads, previously known as Google AdWords, is a powerful online advertising platform created by Google. It enables advertisers to bid for the placement of brief advertisements, service offerings, product listings, or videos in front of web users across various digital channels. Google Ads operates on a pay-per-click (PPC) model, where advertisers only pay when users interact with their ads, such as clicking on them or viewing them.</font>
                     </p>
                  </div>
               </div>
               <div class="wow fadeIn" data-wow-delay="0.6s" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);padding:1rem;border-radius: 1rem;">
                  <div class="feature" style="margin-bottom: 0;">
                     <div class="feature_icon">
                        <img src="images/pricing_icon_9.png" alt="">
                     </div>
                     <h3>Customer Support </h3>
                     <p>
                        <font style="color: white;">The customer support industry is indeed undergoing a renaissance, with a shift towards recognizing customer support as a specialized field that offers companies a distinct competitive edge. While customer service remains an integral component, modern customer support goes beyond traditional notions of addressing customer inquiries and complaints. </font>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script>
      const cards = document.querySelectorAll(".card");
      cards.forEach((item) => {
         item.addEventListener("mouseover", () => {
            cards.forEach((el) => el.classList.remove("active"));
            item.classList.add("active");
         });
      });
   </script>
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
                           <div class="panel-body">You can click on the that link <a href="pricing.php"> you can know your answer.</a></div>
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
                           <div class="panel-body">You can cancel you plane you can click on the that link <a href="contact.php">Click Here</a> your plan will be cancel. </div>
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
                                 What i only want to try Appanage ?
                              </a>
                           </h4>
                        </div>
                        <div id="faq-right-b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-right-2">
                           <div class="panel-body">Just go into price page in that link <a href="pricing.php">Click Here</a> you can use only use the Appanage free options in that you can provide 7 days trial after 7 days will be complete they will close automatically. </div>
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
                           <div class="panel-body">When creating an account, our 'guided tour' tutorial system will walk you through every aspect of the account generation process. From filling in your name to posting your first product or searching for your first item; nothing is left to chance </div>
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
   <script src="js/index.js"></script>
   <script src="js/wow.min.js"></script>
   <!--custom js-->
   <script src="js/custom.js"></script>
</body>

</html>