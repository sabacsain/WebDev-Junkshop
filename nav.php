<?php

if(isset($_SESSION['user_id'])){
    
echo '  <!-- NAVIGATION BAR -->
<nav>
 <!-- NAVBAR TOP -->
 <section class="nav-top">

   <div class="logo-box">
     <a href="index.php"><div class="img-bg" ><img src="images/home/nav-junkonnect.png" alt="Online Junkshop Logo"></div></a>
   </div>

   <div class="web-elem">

     <div class="socmed-button">
       <i href="#" class="fa fa-facebook"></i>
       <i href="#" class="fa fa-instagram"></i>
       <i href="#" class="fa fa-twitter"></i>
     </div>

     <div class="login-signup">
       <a class="nav-button" href="account.php"><i class="fa fa-user icon">&nbsp;</i>Username</a>
       <a class="nav-button" href="logout.php"><i class="fa fa-sign-out icon">&nbsp;</i>Logout</a>
     </div>

   </div>

   <div class="hamburger" id="hamburger-nav" onclick="openMobileNav()">
     <hr> <hr> <hr>
   </div>

 </section>


 <!-- NAVBAR BOTTOM -->
 <section class="nav-bot">
   <ul>
     <li>
       <img src="images/home/nav-sell.png" alt="News Logo">
       <a href="sell.php">Sell a Product</a>
     </li>
     <li>
       <img src="images/home/nav-news.png" alt="News Logo">
       <a href="news.php">News</a>
     </li>
     <li>
       <img src="images/home/nav-info.png" alt="Information Logo">
       <a href="faq.php">FAQ</a>
     </li>
     <li>
       <img src="images/home/nav-about.png" alt="About Logo">
       <a href="about.php">About Us</a>
     </li>
     <li>
       <img src="images/home/nav-contact.png" alt="Contact Logo">
       <a href="contact.php">Contact</a>
     </li>
   </ul>
 </section>

 <section class="mobile-nav" id="mobile-nav">

   <ul class="top">
     <li>
         <a href="account.php"><i class="fa-solid fa-user"></i>Username</a>
     </li>
     <li>
        <a href="logout.php">Logout</a>
     </li>
   </ul>

   <ul class="bot">
     <li>
       <img src="images/home/nav-sell.png" alt="News Logo">
       <a href="sell.php">Sell a Product</a>
     </li>
     <li>
       <img src="images/home/nav-news.png" alt="News Logo">
       <a href="news.php">News</a>
     </li>
     <li>
       <img src="images/home/nav-info.png" alt="Information Logo">
       <a href="faq.php">FAQ</a>
     </li>
     <li>
       <img src="images/home/nav-about.png" alt="About Logo">
       <a href="about.php">About Us</a>
     </li>
     <li>
       <img src="images/home/nav-contact.png" alt="Contact Logo">
       <a href="contact.php">Contact</a>
     </li>
   </ul>
 </section>

</nav>';

}
else{
echo '  <!-- NAVIGATION BAR -->
   <nav>
    <!-- NAVBAR TOP -->
    <section class="nav-top">

      <div class="logo-box">
        <a href="index.php"><div class="img-bg" ><img src="images/home/nav-junkonnect.png" alt="Online Junkshop Logo"></div></a>
      </div>

      <div class="web-elem">

        <div class="socmed-button">
          <i href="#" class="fa fa-facebook"></i>
          <i href="#" class="fa fa-instagram"></i>
          <i href="#" class="fa fa-twitter"></i>
        </div>

        <div class="login-signup">
          <a class="nav-button" href="signin.php">Sign In</a>
          <a class="nav-button" href="signup.php">Sign Up</a>
        </div>

      </div>

      <div class="hamburger" id="hamburger-nav" onclick="openMobileNav()">
        <hr> <hr> <hr>
      </div>

    </section>


    <!-- NAVBAR BOTTOM -->
    <section class="nav-bot">
      <ul>
        <li>
          <img src="images/home/nav-sell.png" alt="News Logo">
          <a href="sell.php">Sell a Product</a>
        </li>
        <li>
          <img src="images/home/nav-news.png" alt="News Logo">
          <a href="news.php">News</a>
        </li>
        <li>
          <img src="images/home/nav-info.png" alt="Information Logo">
          <a href="faq.php">FAQ</a>
        </li>
        <li>
          <img src="images/home/nav-about.png" alt="About Logo">
          <a href="about.php">About Us</a>
        </li>
        <li>
          <img src="images/home/nav-contact.png" alt="Contact Logo">
          <a href="contact.php">Contact</a>
        </li>
      </ul>
    </section>

    <section class="mobile-nav" id="mobile-nav">

      <ul class="top">
        <li>
          <a href="signin.php">Sign In</a>
        </li>
        <li>
          <a href="signup.php">Sign Up</a>
        </li>
      </ul>

      <ul class="bot">
        <li>
          <img src="images/home/nav-sell.png" alt="News Logo">
          <a href="sell.php">Sell a Product</a>
        </li>
        <li>
          <img src="images/home/nav-news.png" alt="News Logo">
          <a href="news.php">News</a>
        </li>
        <li>
          <img src="images/home/nav-info.png" alt="Information Logo">
          <a href="faq.php">FAQ</a>
        </li>
        <li>
          <img src="images/home/nav-about.png" alt="About Logo">
          <a href="about.php">About Us</a>
        </li>
        <li>
          <img src="images/home/nav-contact.png" alt="Contact Logo">
          <a href="contact.php">Contact</a>
        </li>
      </ul>
    </section>

  </nav>';
}
