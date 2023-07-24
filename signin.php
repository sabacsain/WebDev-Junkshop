<?php
session_start();
include("connection.php");  


//VALIDATION
$usernameError = "";
$passwordError = "";


if(isset($_POST['submit'])){  
  if (empty($_POST['username'])) {
    $usernameError = "<p style='color: red;'>Please enter your username!</p>";
  }
  if (empty($_POST['password'])) {
    $passwordError  = "<p style='color: red;'>Please enter your password!</p>";
  }

  if(empty($passwordError) && empty($usernameError)){
    $username = $_POST['username'];
    $password = $_POST['password'];

      $query = "select * from user where username = '$username' limit 1";     
      $result = mysqli_query($con, $query);

      if($result){

          if($result && mysqli_num_rows($result)>0){
            $user_data = mysqli_fetch_assoc($result);
            
            if(password_verify($password,$user_data['password'])){
              
              $_SESSION['user_id'] = $user_data['user_id'];
              header("Location: index.php");
              die;
            }
            else{
              $passwordError  = "<p style='color: red;'>Wrong username or password.</p>";
            }

          }

      }
  }

}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JunKonnect</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" href="images/home/#" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  
<!-- BODY -->
<body>

   <!-- NAVIGATION BAR -->
   <nav>
    <!-- NAVBAR TOP -->
    <section class="nav-top">

      <div class="logo-box">
        <div class="img-bg" onclick="location.href='index.html';"><img src="images/home/nav-junkonnect.png" alt="Online Junkshop Logo"></div>
      </div>

      <div class="web-elem">

        <div class="socmed-button">
          <i href="#" class="fa fa-facebook"></i>
          <i href="#" class="fa fa-instagram"></i>
          <i href="#" class="fa fa-twitter"></i>
        </div>

        <div class="login-signup">
          <button class="nav-button" onclick="location.href='signin.html'">Log In</button>
          <button class="nav-button" onclick="location.href='signup.html'">Sign Up</button>
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
          <img src="images/home/nav-sell.png" alt="Sell Logo">
          <a href="sell.html">Sell a Product</a>
        </li>
        <li>
          <img src="images/home/nav-news.png" alt="News Logo">
          <a href="news.html">News</a>
        </li>
        <li>
          <img src="images/home/nav-info.png" alt="Information Logo">
          <a href="faq.html">FAQ</a>
        </li>
        <li>
          <img src="images/home/nav-about.png" alt="About Logo">
          <a href="about.html">About Us</a>
        </li>
        <li>
          <img src="images/home/nav-contact.png" alt="Contact Logo">
          <a href="contact.html">Contact</a>
        </li>
      </ul>
    </section>

    <section class="mobile-nav" id="mobile-nav">

      <ul class="top">
        <li>
          <a href="signin.html">Log In</a>
        </li>
        <li>
          <a href="signup.html">Sign Up</a>
        </li>
      </ul>

      <ul class="bot">
        <li>
          <img src="images/home/nav-sell.png" alt="News Logo">
          <a href="sell.html">Sell a Product</a>
        </li>
        <li>
          <img src="images/home/nav-news.png" alt="News Logo">
          <a href="news.html">News</a>
        </li>
        <li>
          <img src="images/home/nav-info.png" alt="Information Logo">
          <a href="faq.html">FAQ</a>
        </li>
        <li>
          <img src="images/home/nav-about.png" alt="About Logo">
          <a href="about.html">About Us</a>
        </li>
        <li>
          <img src="images/home/nav-contact.png" alt="Contact Logo">
          <a href="contact.html">Contact</a>
        </li>
      </ul>
    </section>

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
  </nav>

  <!-- SIGN IN PAGE -->
  <div class="signin-page">   

    <!-- SIGN IN SECTION -->
    <section class="sign-in-section">

        <div class="sign-in-left">
          <div class="sign-in-box">
            <div class="sign-in-heading">
                <h1>JunKonnect</h1>
                <h3>Turn your Trash into Cash</h3>
            </div>
          </div>
        </div>

        <div class="sign-in-right">

          <div class="sign-in-card">

            <h2>Welcome Back!</h2>

            <div class="sign-in-content">

            <form id="sign-in-form" method="post">
              <label for="username" id="username-label">USERNAME
                <input
                  id="username"
                  name="username"
                  type="text"
                  placeholder="Enter your username"
                  >
                  <?php echo $usernameError;?>
              </label>

              <label for="password" id="password-label">PASSWORD
                <input
                  id="password"
                  name="password"
                  type="password"
                  placeholder="*******"
                  >
                  <?php echo $passwordError;?>
              </label>
            

            <div class="sign-in-button-container">
              <button class="sign-in-button" type="submit" name="submit">Sign In</button>
            </div>
            </form>
            <div class="sign-up">
              <h5>New to JunKonnect?  <a href="signup.php">Sign Up</a></h5>
            </div>
            </div>
            
          </div>

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
                <a href="index.html#story-section"><li>Our Story</li></a>
                <a href="about.html"><li>About Us</li></a>
                <a href="contact.html"><li>Contact Us</li></a>
              </ul>
            </div>
          </div>

          <div class="footer-follow">
            <h3>FOLLOW US</h3>
            <i href="#" class="fa fa-facebook"></i>
            <i href="#" class="fa fa-instagram"></i>
            <i href="#" class="fa fa-twitter"></i>
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
