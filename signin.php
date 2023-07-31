<?php
session_start();
require 'connection.php';
$conn = Connect();

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
      $stmt = $conn->prepare($query);
      $stmt->execute();
      $stmt -> setFetchMode(PDO::FETCH_OBJ);
      $result = $stmt ->fetchAll();
      

          if($result){

            foreach($result as $row){
              $resultPass = $row -> password;
              $resultID = $row -> user_id;
              $resultUsername = $row -> username;
              $resultType = $row -> user_type;
            }
              
            if(password_verify($password,$resultPass)){
              $_SESSION['user_id'] = $resultID;
              $_SESSION['username'] = $resultUsername;

              if($resultType == 0){
                header("Location: index.php");
                die;
              }
              else{
                header("Location: admin-message.php");
                die;
              }
             
            }
            else{
              $passwordError  = "<p style='color: red;'>Wrong username or password.</p>";
            }

          }
          else{
            $passwordError  = "<p style='color: red;'>Wrong username or password.1</p>";
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
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
  </head>
  
<!-- BODY -->
<body>

<?php include("nav.php"); ?>

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
