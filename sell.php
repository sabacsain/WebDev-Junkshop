<?php
session_start();
require 'connection.php';
$connect = Connect();

$product_nameErr = $junk_typeErr = $descriptionErr = $weightErr = $image_pathErr = $loginError = "";
$user_id = $product_name = $junk_type = $description = $weight = $image_path = "";

if (!empty($_SESSION["user_id"])) {
  $user_id = $_SESSION["user_id"];

  try{
  $query = "SELECT * FROM user WHERE user_id = $user_id";
  $stmt = $connect->prepare($query);
  $stmt->execute();
  $stmt -> setFetchMode(PDO::FETCH_OBJ);
  $result = $stmt ->fetchAll();
  }catch(PDOException $ex){
    echo $ex->getMessage();
  }
  

}
if(isset($_POST["submit"])) {

  if(!empty($_SESSION["user_id"])){

  $product_name = $_POST["product_name"];
  $junk_type = $_POST["junk_type"];
  $description = $_POST["description"];
  $weight = $_POST['weight'];

  /*PUT UPLOADED FILE TO PRODUCT_IMAGES FOLDER*/
  $filename = $_FILES['image_path']['name'];
  $tempname = $_FILES['image_path']['tmp_name'];

  if(isset($filename) && !empty($filename)){
    if (!empty($filename)){
      $destination = "images/PRODUCT_IMAGES/";
      $filename_new = $result[0]->username.uniqid('',true).$filename;
      if(move_uploaded_file($tempname,$destination.$filename_new)){

        /*CREATE NEW IMAGE PATH (FILENAME) */
          $image_path = $filename_new;


          if ($user_id && $product_name && $junk_type && $description && $weight && $image_path) {
            try{
            $query = "INSERT INTO transaction (user_id,product_name,type_of_junk, description,estimated_weight, img_path,date_of_pickup)VALUES('$user_id','$product_name', '$junk_type', '$description','$weight', '$image_path', DATE_ADD(CURDATE(), INTERVAL 3 DAY))";
            $stmt = $connect->exec($query);
          
              echo
              "
            <script> alert('Data Saved Successfully'); </script>
            ";}catch(PDOException $ex){
              echo $ex->getMessage();
            }
          
          } else {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

              if (empty($_POST["product_name"])) {
                $product_nameErr = "Product name is required";
              } else {
                $product_name = $_POST["product_name"];
              }
            }

            if (empty($_POST["junk_type"])) {
              $junk_typeErr = "Type of junk is required";
            } else {
              $junk_type = $_POST["junk_type"];
            }

            if (empty($_POST["description"])) {
              $descriptionErr = "Description is required";
            } else {
              $description = $_POST["description"];
            }

            if (empty($_POST["weight"])) {
              $weightErr = "Weight is required";
            } else {
              $weight = $_POST["weight"];
            }

            if (empty($_POST["image_path"])) {
              $image_pathErr = "Image is required";
            } else {
              $image_path = $_POST["image_path"];
            }
          }
        }
      }
    }
   }
   else{
      $loginError ="Please sign in first.";
   }
  }

  

?>

<style>
  .error {
    color: red;
  }
</style>
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

  <!-- SELL PAGE -->
  <div class="sell-page">

    <!-- DON'T THROW SECTION -->
    <section class="dont-throw-section">
      <div class="dont-throw-box">

        <div class="dont-throw-text">
          <h1>DON'T THROW IT OUT</h1>
          <h3>earn from your junk with us!</h3>

        </div>
      </div>
    </section>

    <!-- CLUTTER SECTION -->
    <section class="clutter-section">

      <div class="clutter-container">
        <h1>Cash for Clutter Form</h1>

        <div class="clutter-box">


          <div class="clutter-seller">

            <div class="seller-heading">
              <h2>Seller's Information </h2>
            </div>

            <hr>

            <div class="seller-info-container">
              <ul class="seller-label">
                <li>Name:</li>
                <li>Contact No: </li>
                <li>Address: </li>
              </ul>

              <ul class="seller-detail">
              <?php 
              
              if (!empty($_SESSION["user_id"])) {
                foreach($result as $record){
                  
                  echo'
                  <li>'.$record -> first_name .' '.$record -> last_name.'</li>
                  <li>0'.$record -> phone.'</li>
                  <li>'.$record -> address.'</li>';

                }
              }
                ?>
              </ul>
            </div>

          </div>

          <div class="clutter-product">

            <h2>Product Description</h2>

            <hr>

            <div class="product-content">


              <form class="" action="" method="post" autocomplete="off" id="product-form" enctype="multipart/form-data">
                <span class="error"><?php echo $loginError; ?></span>
                <label for="" id="name-label">PRODUCT NAME
                  <input type="text" value="<?php echo $_POST['name'] ?? ''; ?>" name="product_name" placeholder="Enter your product" required>
                  </input>
                  <span class="error"><?php echo $product_nameErr; ?></span>
                </label>

                <label for="" id="type-label">TYPE OF JUNK
                  <select name="junk_type" value="<?php echo $_POST['junk_type'] ?? ''; ?>">
                    <option name="" value="" class="option-label"> --Select-- </option>
                    <option value="Paper" class="option-label">Paper</option>
                    <option value="Plastic" class="option-label">Plastic</option>
                    <option value="Metal" class="option-label">Metal</option>
                    <option value="Electronic Waste" class="option-label">Electronic Waste</option>
                    <option value="Glass" class="option-label">Glass</option>
                  </select>
                  <span class="error"><?php echo $junk_typeErr; ?></span>
                </label>

                <label for="" id="description-label">DESCRIPTION</label>
                <input type="text" value="<?php echo $_POST['description'] ?? ''; ?>" name="description" placeholder="Type Here">
                </input>
                <span class="error"><?php echo $descriptionErr; ?></span>

                <label for="" id="weight-label">ESTIMATED WEIGHT (KG)
                  <input type="number" value="<?php echo $_POST['weight'] ?? ''; ?>" name="weight" min="0" max="50" placeholder="0" required>
                  </input>
                  <span class="error"><?php echo $weightErr; ?></span>
                </label>

                <label for="" id="image-label">PRODUCT IMAGE:
                  <input type="file" name="image_path" accept="image/*"></input>
                  <span class="error"><?php echo $image_pathErr; ?></span>
                  <!-- <input type="submit" value="Submit"> -->
                </label>

                <div class="clutter-submit">
                  <button type="submit" name="submit" class="submit-button">Submit</button>
                </div>
              </form>

            </div>

          </div>

          <hr>

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
                namengwebsite@gmail.com
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
        <h5>Copyright © 2023 | JunKonnect | All rights reserved</h5>
      </div>

    </footer>



  </div>
</body>

</html>
