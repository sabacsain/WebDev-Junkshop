<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JunKonnect</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" href="images/home/#" type="image/png">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
  </head>
  
<!-- BODY -->
<body>

<?php session_start(); include("nav.php"); ?>

<script>

  function openMobileNav(){
    var hamburger = document.getElementById("hamburger-nav");
    var mobileNav = document.getElementById("mobile-nav");
    
    if(window.getComputedStyle(mobileNav).visibility === "hidden"){
      mobileNav.style.visibility = 'visible';
      mobileNav.style.width = '50%';
      mobileNav.style.height = '100vh'
    }
    else{
      mobileNav.style.visibility = 'hidden';
      mobileNav.style.width = '0';
      mobileNav.style.height = '0'
    }

  }

</script>

  <!-- ABOUT PAGE -->
  <div class="about-page">   

    <!-- FIRST SECTION -->
    <section class="first-section">

    </section>

    <section class="about-section">
      

     <h2>ABOUT US</h2>

      <div class="about-content">
        <p id="paragraph-about">
          The project aims to help people who are not aware and do not have the time to go to junk shops 
          but are willing to sell their secondhand items and craps to junk shops.
        </p>

        <img src="images/about/about-img1.png" alt="An image containing a clock and a woman.">

        <p id="paragraph-about">
          Additionally, junk shop owners want to expand their popularity and income by reaching more audiences. 
          The project modernizes the way how junk shops function by creating a middleman system in which the 
          Online Junk Shop will act as a middleman and contact between the junk shop and the people who are 
          interested in selling secondhand items and scraps in the community while also helping them in 
          cooperating with people who are willing to sell their secondhand items and scraps.
        </p>

        <img src="images/about/about-img2.png" alt="An image representing dropshipping process.">

        <p id="paragraph-about">
          Empowering the 3Rs (Reuse, Reduce, and Recycle) is also part of the goal of the project as the 
          project continues to provide service it will increase the likelihood of people selling stuff to
           be reused and recycled while also increasing the amount of profit junk shops earn.
        </p>

        <img src="images/about/about-img3.png" alt="Reduce, Reuse, Recycle">

        <p id="paragraph-about">
          Through this project, the community would be more connected and inclined to work together in 
          reducing waste while also benefiting themselves through selling and making a profit.
        </p>

        <img src="images/about/about-img4.png" alt="An image containing a globe with multiple people.">
      </div>

    </section>

      

   <!-- FOOTER -->
   <footer>

  <div class="footer-container">

    <div class="footer-left">
        <div class="img-container">
          <img src="images/home/nav-junkonnect.png" alt="Online Junkshop Logo">
        </div>
        <h5>Turn your Trash into Cash</h5>
    </div>

    <div class="footer-vertical-line"></div>

    <div class="footer-right">

      <div class="footer-contact">
        <h3>CONTACT</h3>
        <div class="footer-contact-container">
          <div class="contact-details">
            <img src="images/home/location-logo.png" alt="Location Logo"> 
            <p id="paragraph-footer">
              General Tinio Street, Sto.<br>Nino Gapan Nueva Ecija
            </p>
          </div>

          <div class="contact-details">
            <img src="images/home/phone-logo.png" alt="Phone Logo"> 
            <p id="paragraph-footer">
              (044) 486-0527
            </p>
          </div>
        </div>

        <div class="contact-details">
          <img src="images/home/email-logo.png" alt="Email Logo"> 
          <p id="paragraph-footer">
            junkonnect@gmail.com
          </p>
        </div>
      </div>

      <div class="footer-about">
        <h3>ABOUT</h3>

        <div class="footer-about-container">
          <ul>
            <a href="index.php#story-section"><li>Our Story</li></a>
            <a href="about.php"><li>About Us</li></a>
            <a href="contact.php"><li>Contact Us</li></a>
          </ul>
        </div>
      </div>

      <div class="footer-follow">
        <h3>FOLLOW US</h3>
        <i href="#" class="fa-brands fa-facebook-f"></i>
        <i href="#" class="fa-brands fa-instagram"></i>
        <i href="#" class="fa-brands fa-twitter"></i>
      </div>

    </div>

  </div>

  <div class="footer-disclaimer">
    <h5>Copyright © 2023 JunKonnect. All rights reserved</h5>
  </div>

  </footer>



  </div>
</body>
</html>
