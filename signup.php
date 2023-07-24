
<?php
//VALIDATION
include("connection.php");  

$fNameError = "";
$lNameError = "";
$phoneError = "";
$telError = "";
$emailError = "";
$addressError = "";
$usernameError = "";
$passwordError = "";
$confError = "";
$takenError = "";

if(isset($_POST['submit'])){  

  if (empty($_POST['first-name'])) {
    $fNameError = "<p style='color: #FFFF8F;'>Please enter your first name!</p>";
  }
  if (empty($_POST['last-name'])) {
    $lNameError = "<p style='color: #FFFF8F;'>Please enter your last name!</p>";
  }
  if (empty($_POST['phone'])) {
    $phoneError = "<p style='color: #FFFF8F;'>Please enter your phone number!</p>";
  }
  if (empty($_POST['telephone'])) {
    $telError = "<p style='color: #FFFF8F;'>Please enter your telephone number!</p>";
  }
  if (empty($_POST['email'])) {
    $emailError = "<p style='color: #FFFF8F;'>Please enter your email!</p>";
  }
  if (empty($_POST['address'])) {
    $addressError = "<p style='color: #FFFF8F;'>Please enter your address!</p>";
  }
  if (empty($_POST['username'])) {
    $usernameError = "<p style='color: #FFFF8F;'>Please enter your username!</p>";
  }
  if (empty($_POST['password'])) {
    $passwordError  .= "<p style='color: #FFFF8F;'>Please enter your password!</p>";
  }
  if (empty($_POST['confirm-password'])) {
    $confError = "<p style='color: #FFFF8F;'>Please confirm your password!</p>";
  }
  if($_POST['password']!=$_POST['confirm-password']){
    $passwordError .= "<p style='color: #FFFF8F;'>Passwords are not the same.</p>";
  }
  if(strlen($_POST['password'])<6){
    $passwordError .= "<p style='color: #FFFF8F;'>Password is too short.</p>";
  }


  //insert new record
  if (empty($fNameError) && empty($fNameError) && empty($phoneError) && empty($addressError) && empty($telError) && empty($emailError) && empty($usernameError) && empty($passwordError) && empty($confError)) {
    
    $fname = $_POST['first-name'];
    $lname = $_POST['last-name'];
    $phone = $_POST['phone'];
    $tel = $_POST['telephone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $hashed_password = password_hash($password,PASSWORD_DEFAULT);


    $query = "SELECT * FROM user WHERE email='$email' OR username='$username'";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result)===0){

      $query = "insert into user (email,first_name,last_name,phone,address,password,telephone,username) values('$email','$fname','$lname','$phone','$address','$hashed_password','$tel','$email')";
      mysqli_query($con, $query);
  
      header("Location:signin.php");
      die;

    }
    else{
      $takenError = "<p style='color: #FFFF8F;'>Email or Username is already taken.</p>";
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

  <!-- SIGN UP PAGE -->
  <div class="signup-page">   
    <!-- JOIN US SECTION -->
    <section class="join-us-section">
      <div class="join-us-box"></div>
    </section>

    <!-- CREATE SECTION -->
    <section class="create-section">

      <div class="create-container">

        <h1>Create Your Account</h1>

        <div class="create-form">
         <?php echo $takenError?>

          <div class="create-card">
            <h3>Personal Information</h3>
            <hr>

            <form id="signup-form" id="signup-form" method="post"> 
              <label for="first-name" id="first-name-label">FIRST NAME
                <input
                  id="first-name"
                  type="text"
                  placeholder="Enter first name"
                  name="first-name"
                  >
                  <?php echo $fNameError;?>
              </label>

              <label for="last-name" id="last-name-label">LAST NAME
                <input
                  id="last-name"
                  type="text"
                  placeholder="Enter last name"
                  name="last-name"
                  >
                  <?php echo $lNameError;?>
              </label>

          </div>

          <div class="create-card">

            <h3>Contact Information</h3>
            <hr>

              <label for="phone" id="phone-label">PHONE
                <input
                  id="phone"
                  type="tel"
                  placeholder="Enter phone 09XXXXXXXXX"
                  name="phone"
                  >
                  <?php echo $phoneError;?>
              </label>

              <label for="telephone" id="telephone-label">TELEPHONE
                <input
                  id="telephone"
                  type="tel"
                  placeholder="Enter telephone XXXXXX"
                  name="telephone"
                  >
                  <?php echo $telError;?>
              </label>

              <label for="email" id="email-label">EMAIL
                <input
                  id="email"
                  type="text"
                  placeholder="Enter email"
                  name="email">
                  <?php echo $emailError;?>
              </label>

          </div>

          <div class="create-card">
            <h3>Address</h3>
            <hr>

              <label for="address" id="address-label">ADDRESS
                <input
                  id="address"
                  type="text"
                  placeholder="Enter address"
                  name="address"
                  >
                  <?php echo $addressError;?>
              </label>

          </div>

          <div class="create-card">
            <h3>Account</h3>
            <hr>

              <label for="username" id="username-label">USERNAME
                <input
                  id="username"
                  type="text"
                  placeholder="Enter username"
                  name="username"
                  >
                  <?php echo $usernameError;?>
              </label>

              <label for="password" id="password-label">PASSWORD
                <input
                  id="password"
                  type="password"
                  placeholder="Enter password"
                  name="password"
                  >
                  <?php echo $passwordError;?>
              </label>

              <label for="confirm-password" id="confirm-password-label">CONFIRM PASSWORD
                <input
                  id="confirm-password"
                  type="password"
                  placeholder="Retype password"
                  name="confirm-password"
                  >
                  <?php echo $confError;?>
              </label>
          </div>

          <div class="sign-up-footer">
            <hr>
            <button class="signup-button" type="submit" name="submit">Sign Up</button>
            <h5>Already Have an Account?   <a id="link-sign-in"href="signin.php">Sign In</a></h5>
          </div>

          </div>
          </form>

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
