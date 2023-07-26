<?php
session_start();
require "connection.php";

$conn = Connect();


// Put here the UID from Session variable
$uid = $_SESSION["user_id"];

try{
  //select all info then place it on the text fields 
  $query = "SELECT username, first_name, last_name, phone, email, telephone, `address` FROM `user` WHERE  user_id=$uid;";  
  $stmt = $conn->prepare($query);
  $stmt->execute();
  $stmt -> setFetchMode(PDO::FETCH_OBJ);
  $result = $stmt ->fetchObject();

  if($result){
    $username = $result->username;
    $first_name = $result->first_name;
    $last_name = $result ->last_name;
    $phone = $result->phone;
    $email = $result->email;
    $telephone = $result->telephone;
    $address = $result->address;
    }

}catch(PDOException $ex){
  echo $ex->getMessage();
}


?>

<!--Updating account details-->
<?php
  if(isset($_POST['account-save-button'])){

    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $phone = $_POST['phone'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    try{
        $query = "UPDATE user SET first_name='$first_name', last_name='$last_name', phone='$phone', telephone='$telephone', email='$email', `address`='$address' WHERE user_id='$uid'";
        $stmt = $conn->prepare($query);
        $stmt -> execute();

    }catch(PDOEXception $ex){
      echo $ex->getMessage();
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Junkshop</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" href="images/home/#" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

  <!-- ACCOUNT PAGE -->
  <div class="account-page">   

    <!-- WELCOME SECTION -->
    <section class="welcome-section">

      <div class="welcome-container">
          <h1>Welcome, <?=$username?>!</h1>
      </div>

    </section>

    <section class="edit-section">

      <h2>Edit Profile</h2>

      <div class="form-container">
        <h3>Personal Information</h3>
        <hr>
        <form id="edit-form" method="POST" action="account.php">
        <div class="form-row">
          <div class="input-row">
                <label for="first-name" id="first-name-label">FIRST NAME
                  <input
                    id="first-name"
                    type="text"
                    required
                    value = "<?= isset($first_name)? $first_name: '' ?>"
                    placeholder="First Name"
                    name="first-name"
                  >
                  </input>
                </label>

                <label for="last-name" id="last-name-label">LAST NAME
                  <input
                    id="last-name"
                    type="text"
                    placeholder="Last Name"
                    required
                    value=<?= isset($last_name)? $last_name:''?>
                    name="last-name"
                    >
                  </input>
                </label>
            </div>
          </div>

          <h3>Contact Information</h3>
          <hr>

          <div class="form-row">
            <div class="contact-row">
              <div class="input-row">
                <label for="phone" id="phone-label">PHONE
                  <input
                      id="phone"
                      type="text"
                      placeholder="Phone"
                      required
                      value=<?= isset($phone)? $phone:''?>
                      name="phone"
                      >
                  </input>
                </label>

                <label for="telephone" id="telephone-label">TELEPHONE
                  <input
                      id="telephone"
                      type="number"
                      placeholder="Telephone"
                      required
                      value=<?= isset($telephone)? $telephone:''?>
                      name="telephone">
                  </input>
                </label>
              </div>

              <label for="email" id="email-label">EMAIL
                  <input
                      id="email"
                      type="text"
                      placeholder="example@gmail.com"
                      required
                      value=<?= isset($email)? $email:''?>
                      name="email">
                  </input>
              </label>
            </div>
          </div>

          <h3>Address</h3>
          <hr>
          <div class="form-row">
            <div class="input-row">
              <label for="address" id="address-label">ADDRESS
                <input
                  id="address"
                  type="address"
                  placeholder="Address"
                  required
                  value="<?= isset($address)? $address:''?>"
                  name="address">
                </input>
              </label>
            </div>
            <div class="account-button-container">
              <button type="submit" class="account-save-button" name="account-save-button">Save Changes</button>
            </div>

          </form>

      </div>
    </section>

    
    <!-- TRANSACTION SECTION -->
    <section class="transaction-section">
      <div class="transaction-container">
        
        <h2>TRANSACTIONS</h2>

        <!--GET ALL TRANSACTION DETAILS-->
        <?php
          $query = "SELECT * FROM `transaction` WHERE user_id='$uid'";
          $stmt = $conn->prepare($query);
          $stmt->execute();
          $stmt -> setFetchMode(PDO::FETCH_OBJ);
          $result = $stmt ->fetchAll();

          // $user_data = mysqli_fetch_assoc($result);
            
          if($result){
            foreach($result as $transaction){
              $transaction_id = $transaction->transaction_id;

            ?>

            <div class="transaction-title"> 
              <h4>TRANSACTION ID: 101015173</h4>
              
              <?php
                switch($transaction->status){
                  case "COMPLETED": echo '<h4>STATUS: <span id="transaction-completed">COMPLETED</span></h4>';
                  break;
                  case "PENDING": echo '<h4>STATUS: <span id="transaction-pending">PENDING</span></h4>';
                  break;
                  case "CANCELED": echo '<h4>STATUS: <span id="transaction-canceled">CANCELED</span></h4>';
                  break;
                }
              ?>
            </div>

            <hr class="thin-hr">

              
            <div class="transaction-row">
              <ul class="transaction-information">
              <li><span class="transaction-label">PRODUCT NAME: </span><?=$transaction->product_name?></li>
                <li><span class="transaction-label">TYPE OF JUNK: </span><?=$transaction->type_of_junk?></li>
                <li><span class="transaction-label">DESCRIPTION: </span><?=$transaction->description?></li>
                <li><span class="transaction-label">WEIGHT: </span><?=$transaction->estimated_weight?></li>
                <li><span class="transaction-label">PICK-UP DATE: </span><?=$transaction->date_of_pickup?></li>
              </ul>
                <div class="img-container">
                  <?php
                    $file = "images/PRODUCT_IMAGES/".$transaction->img_path;
                    // $file = "$transaction->img_path";
                    if (file_exists($file))
                    {
                        $b64image = base64_encode(file_get_contents($file));
                        echo "<img class='trash-img' alt='An image containing junks' src = 'data:image/png;base64,$b64image'>";

                    }
                  ?>
                </div>

              </div>

              <hr class="transaction-underline">
            
            <?php


            }
          }

          else{
            echo '<li style="text-align:center;"><span class="transaction-label">You have no transaction as of this moment</span></li>';

          }
          
        ?>
        
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
