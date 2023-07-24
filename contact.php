<?php
session_start();
require "connection.php";
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

  <!-- CONTACT PAGE -->
  <div class="contact-page">   

    <!-- FIRST SECTION -->
    <section class="first-section">

    </section>

    <!-- CONTACT SECTION -->
    <section class="contact-section">

      <h2>CONTACT US</h2>

      <div class="contact-row">
        
        <div class="contact-card">
          <div class="card-heading">
            <h3>Meet up with us</h3>

            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M24.9997 4.16663C20.5794 4.16663 16.3402 5.92257 13.2146 9.04818C10.089 12.1738 8.33301 16.413 8.33301 20.8333C8.33301 32.0833 23.0205 44.7916 23.6455 45.3333C24.0229 45.6561 24.5031 45.8334 24.9997 45.8334C25.4962 45.8334 25.9765 45.6561 26.3538 45.3333C27.083 44.7916 41.6663 32.0833 41.6663 20.8333C41.6663 16.413 39.9104 12.1738 36.7848 9.04818C33.6592 5.92257 29.42 4.16663 24.9997 4.16663V4.16663ZM24.9997 40.9375C20.5622 36.7708 12.4997 27.7916 12.4997 20.8333C12.4997 17.5181 13.8166 14.3387 16.1608 11.9945C18.505 9.65025 21.6845 8.33329 24.9997 8.33329C28.3149 8.33329 31.4943 9.65025 33.8385 11.9945C36.1827 14.3387 37.4997 17.5181 37.4997 20.8333C37.4997 27.7916 29.4372 36.7916 24.9997 40.9375ZM24.9997 12.5C23.3515 12.5 21.7403 12.9887 20.3699 13.9044C18.9995 14.8201 17.9314 16.1215 17.3007 17.6443C16.6699 19.167 16.5049 20.8425 16.8265 22.459C17.148 24.0756 17.9417 25.5604 19.1071 26.7258C20.2726 27.8913 21.7574 28.685 23.3739 29.0065C24.9904 29.328 26.666 29.163 28.1887 28.5323C29.7114 27.9016 31.0129 26.8335 31.9286 25.463C32.8443 24.0926 33.333 22.4815 33.333 20.8333C33.333 18.6232 32.455 16.5035 30.8922 14.9407C29.3294 13.3779 27.2098 12.5 24.9997 12.5ZM24.9997 25C24.1756 25 23.37 24.7556 22.6848 24.2977C21.9996 23.8399 21.4655 23.1892 21.1502 22.4278C20.8348 21.6664 20.7523 20.8287 20.9131 20.0204C21.0738 19.2122 21.4707 18.4697 22.0534 17.887C22.6361 17.3043 23.3785 16.9075 24.1868 16.7467C24.9951 16.5859 25.8328 16.6684 26.5942 16.9838C27.3555 17.2992 28.0063 17.8332 28.4641 18.5184C28.922 19.2036 29.1663 20.0092 29.1663 20.8333C29.1663 21.9384 28.7274 22.9982 27.946 23.7796C27.1646 24.561 26.1047 25 24.9997 25Z" fill="#197C67"/>
            </svg>
              
            <p id="paragraph-contact">
              General Tinio Street, Sto. Nino Gapan Nueva Ecija
            </p>
          </div>
        </div>

        <div class="contact-card">
          <div class="card-heading">
            <h3>Talk to us</h3>
            
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M40.5001 27.0834C40.0418 27.0834 39.5626 26.9376 39.1043 26.8334C38.1761 26.6289 37.264 26.3573 36.3751 26.0209C35.4086 25.6693 34.3462 25.6875 33.3924 26.0721C32.4386 26.4568 31.6607 27.1805 31.2084 28.1042L30.7501 29.0417C28.7209 27.9129 26.8563 26.5109 25.2084 24.875C23.5725 23.2272 22.1706 21.3625 21.0418 19.3334L21.9168 18.75C22.8404 18.2978 23.5642 17.5199 23.9488 16.5661C24.3334 15.6122 24.3517 14.5499 24.0001 13.5834C23.6693 12.6926 23.3979 11.7809 23.1876 10.8542C23.0834 10.3959 23.0001 9.91672 22.9376 9.43755C22.6846 7.97009 21.916 6.64118 20.7701 5.69013C19.6243 4.73909 18.1765 4.2284 16.6876 4.25005H10.4376C9.53974 4.24162 8.65061 4.42675 7.83073 4.79282C7.01086 5.1589 6.27948 5.69733 5.6864 6.37147C5.09332 7.04561 4.65245 7.83962 4.39381 8.69945C4.13517 9.55929 4.06484 10.4648 4.18759 11.3542C5.29746 20.0821 9.28348 28.1915 15.516 34.4014C21.7486 40.6113 29.8724 44.5678 38.6043 45.6459H39.3959C40.9322 45.6481 42.4155 45.0845 43.5626 44.0625C44.2217 43.4731 44.7482 42.7504 45.1073 41.9424C45.4664 41.1343 45.65 40.2593 45.6459 39.375V33.125C45.6204 31.6779 45.0934 30.2845 44.155 29.1827C43.2165 28.0808 41.9247 27.3389 40.5001 27.0834ZM41.5418 39.5834C41.5414 39.8792 41.478 40.1715 41.3559 40.4409C41.2337 40.7103 41.0556 40.9507 40.8334 41.1459C40.6013 41.348 40.3292 41.4988 40.0348 41.5886C39.7405 41.6783 39.4305 41.705 39.1251 41.6667C31.3228 40.6663 24.0756 37.0969 18.5266 31.5215C12.9776 25.9461 9.44261 18.682 8.47925 10.8751C8.4461 10.5699 8.47516 10.2612 8.56468 9.96753C8.65419 9.67391 8.80232 9.40148 9.00009 9.16672C9.19532 8.94449 9.43563 8.76639 9.70504 8.64425C9.97445 8.52212 10.2668 8.45876 10.5626 8.45838H16.8126C17.2971 8.4476 17.7701 8.60605 18.1504 8.90645C18.5306 9.20685 18.7943 9.6304 18.8959 10.1042C18.9793 10.6737 19.0834 11.2362 19.2084 11.7917C19.4491 12.8899 19.7694 13.9692 20.1668 15.0209L17.2501 16.3751C17.0007 16.4895 16.7764 16.652 16.59 16.8534C16.4036 17.0547 16.2588 17.2909 16.164 17.5484C16.0691 17.8058 16.0261 18.0795 16.0373 18.3536C16.0485 18.6278 16.1137 18.897 16.2293 19.1459C19.2276 25.5683 24.3902 30.7309 30.8126 33.7292C31.3198 33.9376 31.8887 33.9376 32.3959 33.7292C32.6557 33.6363 32.8945 33.4927 33.0984 33.3067C33.3022 33.1207 33.4671 32.8961 33.5834 32.6459L34.8751 29.7292C35.9521 30.1144 37.0513 30.4344 38.1668 30.6875C38.7223 30.8125 39.2848 30.9167 39.8543 31.0001C40.3281 31.1017 40.7516 31.3653 41.052 31.7456C41.3524 32.1258 41.5109 32.5989 41.5001 33.0834L41.5418 39.5834Z" fill="#197C67"/>
            </svg>

            <p id="paragraph-contact">
              (044) 486-0527       
            </p>
            <p id="paragraph-contact">
              junkonnect@gmail.com
            </p>
          </div>
        </div>

        <div class="contact-card">
          <div class="card-heading">
            <h3>Follow us</h3>
            <div class="contact-socmed">
              <i href="#" class="fa fa-facebook"></i>
              <i href="#" class="fa fa-instagram"></i>
              <i href="#" class="fa fa-twitter"></i>
            </div>   
          </div>
        </div>

      </div>

    </section>


    <!-- MESSAGE SECTION -->
    <section class="message-section">
      <div class="message-heading">
        <h3>Send us a Message</h3>
        <p id="paragraph-message">
          Feel free to drop us a message if you are interested 
          in purchasing junk items or if you have any inquiries  
        </p>
        <hr>
      </div>

      <div class="message-form-container">
        <form id="message-form" method="POST">
          <label for="name" id="name-label">NAME
            <input
              id="name"
              type="text"
              placeholder="Type your name"
              required
              name="name">
            </input>
          </label>

          <label for="email" id="email-label">EMAIL
            <input
              id="email"
              type="email"
              placeholder="Type your email"
              required
              name="email">
            </input>
          </label>

          <label for="message" id="message-label">MESSAGE
            <textarea
              id="message"
              type="text"
              placeholder="Type your message here."
              required
              name="message"></textarea>
          </label>
        
          <div class="message-button-container">
            <button type="submit" class="message-button" name="message-submit">Save Changes</button>
          </div>
        
        </form>
      </div>

      <!--BACKEND FOR STORING MESSAGES IN THE DATABASE-->
      <?php
      if (isset($_POST['message-submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $date_sent = date("Y/m/d"); 

        try{
         
           $query_insert_message = "INSERT INTO `message` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
           mysqli_query($con, $query_insert_message);

           echo '<script>alert("Message Has Been Sent to the Admin");</script>';


        }catch(PDOException $ex){
          echo $ex->getMessage();
        }
      }
      
      ?>
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
