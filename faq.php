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

  <!-- INFO PAGE -->
  <div class="faq-page">   

    <!-- FIRST SECTION -->
    <section class="faq-section">

    </section>

    <!-- INFO SECTION -->
    <section class="info-section">
        
      
        <h2>FAQ</h2>

      

      <!-- JUNK WE ACCEPT -->
      <div class="info-box" id="info-accept">
        <h3>What Are The Junks That We Accept?</h3>
        <hr>

        <!-- ROW 1 -->
        <div class="info-container">
          
          <div class="info-card">
            
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="20" height="20" fill="#198B72"/>
                <path d="M15.5837 6C15.2503 5.66667 14.7503 5.66667 14.417 6L8.16699 12.25L5.58366 9.66667C5.25033 9.33333 4.75033 9.33333 4.41699 9.66667C4.08366 10 4.08366 10.5 4.41699 10.8333L7.58366 14C7.75033 14.1667 7.91699 14.25 8.16699 14.25C8.41699 14.25 8.58366 14.1667 8.75033 14L15.5837 7.16667C15.917 6.83333 15.917 6.33333 15.5837 6Z" fill="white"/>
                </svg>

                
            <div class="info-title">
                <h4>Paper</h4>
            <p id="paragraph-info">
              mostly made from thin sheets of wood or fibrous substances that are commonly used in books, 
              newspapers, etc. Common types of papers sold in junkshops are white paper, newspaper (diaryo),
              and cardboard (Karton).
            </p>
            </div>
          </div>

          <div class="info-card">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="20" height="20" fill="#198B72"/>
                <path d="M15.5837 6C15.2503 5.66667 14.7503 5.66667 14.417 6L8.16699 12.25L5.58366 9.66667C5.25033 9.33333 4.75033 9.33333 4.41699 9.66667C4.08366 10 4.08366 10.5 4.41699 10.8333L7.58366 14C7.75033 14.1667 7.91699 14.25 8.16699 14.25C8.41699 14.25 8.58366 14.1667 8.75033 14L15.5837 7.16667C15.917 6.83333 15.917 6.33333 15.5837 6Z" fill="white"/>
                </svg>
            <div class="info-title"> 
                <h4>Plastic</h4>
            

            <p id="paragraph-info">
              is material made from polymers and are commonly molded into bottles, household things, 
              containers, etc. Common types of plastic materials are PE (polyethylene), PP (polypropylene), 
              HD (high-density polyethylene) and MONO (one type of plastic that can be PP or PE).
            </p>
            </div>
          </div>
          
          <div class="info-card">
            
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="20" height="20" fill="#198B72"/>
              <path d="M15.5837 6C15.2503 5.66667 14.7503 5.66667 14.417 6L8.16699 12.25L5.58366 9.66667C5.25033 9.33333 4.75033 9.33333 4.41699 9.66667C4.08366 10 4.08366 10.5 4.41699 10.8333L7.58366 14C7.75033 14.1667 7.91699 14.25 8.16699 14.25C8.41699 14.25 8.58366 14.1667 8.75033 14L15.5837 7.16667C15.917 6.83333 15.917 6.33333 15.5837 6Z" fill="white"/>
            </svg>
            <div class="info-title">
            <h4>Metal</h4>

            <p id="paragraph-info">
              a solid material that is hard, shiny, and malleable, and is also commonly used in appliances
              houses, wires, etc. Common types of metals are roof sheets, brass, bronze, aluminum, 
              stainless, and steel.
            </p>
            </div>
          </div>

          <div class="info-card">

                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="20" height="20" fill="#198B72"/>
                <path d="M15.5837 6C15.2503 5.66667 14.7503 5.66667 14.417 6L8.16699 12.25L5.58366 9.66667C5.25033 9.33333 4.75033 9.33333 4.41699 9.66667C4.08366 10 4.08366 10.5 4.41699 10.8333L7.58366 14C7.75033 14.1667 7.91699 14.25 8.16699 14.25C8.41699 14.25 8.58366 14.1667 8.75033 14L15.5837 7.16667C15.917 6.83333 15.917 6.33333 15.5837 6Z" fill="white"/>
                </svg>
            <div class="info-title">
                <h4>Electronic Waste (E-waste)</h4>
            
            <p id="paragraph-info">
              is material made from polymers and are commonly molded into bottles, household things, containers, 
              etc. Common types of plastic materials are PE (polyethylene), PP (polypropylene), HD 
              (high-density polyethylene) and MONO (one type of plastic that can be PP or PE).
            </p>
            </div>
              
          </div>
          
          <div class="info-card">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="20" height="20" fill="#198B72"/>
                <path d="M15.5837 6C15.2503 5.66667 14.7503 5.66667 14.417 6L8.16699 12.25L5.58366 9.66667C5.25033 9.33333 4.75033 9.33333 4.41699 9.66667C4.08366 10 4.08366 10.5 4.41699 10.8333L7.58366 14C7.75033 14.1667 7.91699 14.25 8.16699 14.25C8.41699 14.25 8.58366 14.1667 8.75033 14L15.5837 7.16667C15.917 6.83333 15.917 6.33333 15.5837 6Z" fill="white"/>
                </svg>
            <div class="info-title">
                <h4>Glass</h4>
            <p id="paragraph-info">
              brittle, a transparent substance that is typically made out of sand with soda, which is 
              commonly used for bottles of carbonated drinks, glasses, vases, etc. Common types of glass 
              being sold in junkshops are broken glass and bottles of carbonated drinks.
            </p>
          </div>

        </div>
      </div>

      <!-- JUNK WE DONT ACCEPT -->
      <div class="info-box" id="info-dont">
        <h3>What Are The Junks That We Do Not Accept?</h3>
        <hr>

        <div class="info-container">
          
          <div class="info-card">

            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="20" height="20" fill="#F28660"/>
              <path d="M5.83316 14.9999C5.66836 14.9999 5.50728 14.951 5.37027 14.8594C5.23327 14.7679 5.12648 14.6377 5.06342 14.4855C5.00037 14.3332 4.98386 14.1657 5.016 14.0041C5.04814 13.8425 5.12748 13.694 5.24399 13.5774L13.5773 5.24411C13.7341 5.09018 13.9452 5.00438 14.1649 5.00538C14.3846 5.00637 14.595 5.09408 14.7503 5.24942C14.9057 5.40476 14.9934 5.61516 14.9944 5.83484C14.9954 6.05452 14.9096 6.2657 14.7557 6.42244L6.42232 14.7558C6.34505 14.8333 6.25322 14.8948 6.15211 14.9367C6.051 14.9786 5.9426 15.0001 5.83316 14.9999Z" fill="white"/>
              <path d="M14.1671 14.9999C14.0577 15.0001 13.9493 14.9786 13.8481 14.9367C13.747 14.8948 13.6552 14.8333 13.5779 14.7558L5.2446 6.42244C5.09067 6.2657 5.00487 6.05452 5.00587 5.83484C5.00686 5.61516 5.09457 5.40476 5.24991 5.24942C5.40525 5.09408 5.61565 5.00637 5.83533 5.00538C6.05501 5.00438 6.26619 5.09018 6.42293 5.24411L14.7563 13.5774C14.8728 13.694 14.9521 13.8425 14.9843 14.0041C15.0164 14.1657 14.9999 14.3332 14.9368 14.4855C14.8738 14.6377 14.767 14.7679 14.63 14.8594C14.493 14.951 14.3319 14.9999 14.1671 14.9999Z" fill="white"/>
              </svg>
            <div class="info-title">
                <h4>Compost/Green Waste</h4>

            <p id="paragraph-info">
              This waste is organic and is mostly composed of food, landscaping, and human and animal 
              excrement waste. It is also usually recycled to be used again as fertilizers by farmers 
              and households for plants. Examples: Grass, feces, weed, tree limbs and branches, and 
              vegetables. 
            </p>
            </div>
          </div>

          <div class="info-card">
            
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="20" height="20" fill="#F28660"/>
              <path d="M5.83316 14.9999C5.66836 14.9999 5.50728 14.951 5.37027 14.8594C5.23327 14.7679 5.12648 14.6377 5.06342 14.4855C5.00037 14.3332 4.98386 14.1657 5.016 14.0041C5.04814 13.8425 5.12748 13.694 5.24399 13.5774L13.5773 5.24411C13.7341 5.09018 13.9452 5.00438 14.1649 5.00538C14.3846 5.00637 14.595 5.09408 14.7503 5.24942C14.9057 5.40476 14.9934 5.61516 14.9944 5.83484C14.9954 6.05452 14.9096 6.2657 14.7557 6.42244L6.42232 14.7558C6.34505 14.8333 6.25322 14.8948 6.15211 14.9367C6.051 14.9786 5.9426 15.0001 5.83316 14.9999Z" fill="white"/>
              <path d="M14.1671 14.9999C14.0577 15.0001 13.9493 14.9786 13.8481 14.9367C13.747 14.8948 13.6552 14.8333 13.5779 14.7558L5.2446 6.42244C5.09067 6.2657 5.00487 6.05452 5.00587 5.83484C5.00686 5.61516 5.09457 5.40476 5.24991 5.24942C5.40525 5.09408 5.61565 5.00637 5.83533 5.00538C6.05501 5.00438 6.26619 5.09018 6.42293 5.24411L14.7563 13.5774C14.8728 13.694 14.9521 13.8425 14.9843 14.0041C15.0164 14.1657 14.9999 14.3332 14.9368 14.4855C14.8738 14.6377 14.767 14.7679 14.63 14.8594C14.493 14.951 14.3319 14.9999 14.1671 14.9999Z" fill="white"/>
              </svg>
            <div class="info-title">
                <h4>Liquid/Solid Waste/Junk</h4>

            <p id="paragraph-info">
              This waste is also known as ‘municipal waste’ or ‘black bag waste’. It is usually just 
              household waste that we commonly have that is solid or liquid and is non-biodegradable 
              and can’t be recycled.
            </p>
              </div>
          </div>
          
          <div class="info-card">
            
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="20" height="20" fill="#F28660"/>
              <path d="M5.83316 14.9999C5.66836 14.9999 5.50728 14.951 5.37027 14.8594C5.23327 14.7679 5.12648 14.6377 5.06342 14.4855C5.00037 14.3332 4.98386 14.1657 5.016 14.0041C5.04814 13.8425 5.12748 13.694 5.24399 13.5774L13.5773 5.24411C13.7341 5.09018 13.9452 5.00438 14.1649 5.00538C14.3846 5.00637 14.595 5.09408 14.7503 5.24942C14.9057 5.40476 14.9934 5.61516 14.9944 5.83484C14.9954 6.05452 14.9096 6.2657 14.7557 6.42244L6.42232 14.7558C6.34505 14.8333 6.25322 14.8948 6.15211 14.9367C6.051 14.9786 5.9426 15.0001 5.83316 14.9999Z" fill="white"/>
              <path d="M14.1671 14.9999C14.0577 15.0001 13.9493 14.9786 13.8481 14.9367C13.747 14.8948 13.6552 14.8333 13.5779 14.7558L5.2446 6.42244C5.09067 6.2657 5.00487 6.05452 5.00587 5.83484C5.00686 5.61516 5.09457 5.40476 5.24991 5.24942C5.40525 5.09408 5.61565 5.00637 5.83533 5.00538C6.05501 5.00438 6.26619 5.09018 6.42293 5.24411L14.7563 13.5774C14.8728 13.694 14.9521 13.8425 14.9843 14.0041C15.0164 14.1657 14.9999 14.3332 14.9368 14.4855C14.8738 14.6377 14.767 14.7679 14.63 14.8594C14.493 14.951 14.3319 14.9999 14.1671 14.9999Z" fill="white"/>
              </svg>
            <div class="info-title">
                <h4>Medical and Hazardous Waste</h4>
                

                <p id="paragraph-info">
                  This waste is a mixture between flammable, toxic, corrosive reactive that is commonly used 
                  by factories and households and wastes by health care centers, clinics, hospitals, and 
                  vets that could spread diseases and be hazardous. Examples: mercury, aerosol cans, 
                  gasoline, fuel, needles, bandages, gloves, gowns, masks, packaging, and samples.
                </p>
            </div>
            </div>
        </div>

      </div>

      <!-- PRICE -->
      <div class="info-box" id="info-price">
        <h3>What Are The Prices For Different Junks?</h3>
        <hr>

        <table> 
          <thead>
            <tr>
              <th>Junk</th>
              <th>Price per Kilo</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Cardboard (Karton)</td>
              <td>15</td>
            </tr>
            <tr>
              <td>News Paper</td>
              <td>5</td>
            </tr>
            <tr>
              <td>White Paper</td>
              <td>6</td>
            </tr>
            <tr>
              <td>Plastic w/ Crack</td>
              <td>16</td>
            </tr>
            <tr>
              <td>Monoblock Plastic</td>
              <td>12</td>
            </tr>

            <tr>
              <td>Pet Bottles (Dirty)</td>
              <td>13</td>
            </tr>
            <tr>
              <td>Pet Bottles (Clean)</td>
              <td>16</td>
            </tr>
            <tr>
              <td>Metal</td>
              <td>16</td>
            </tr>
            <tr>
              <td>Can</td>
              <td>10</td>
            </tr>
            <tr>
              <td>Roof (Yero)</td>
              <td>11</td>
            </tr>

            <tr>
              <td>Roofing Sheet (Brittle)</td>
              <td>6</td>
            </tr>
            <tr>
              <td>Aluminum, Bronze, Brass (Tanso)</td>
              <td>65</td>
            </tr>
            <tr>
              <td>Jalousie</td>
              <td>75</td>
            </tr>
            <tr>
              <td>Lead (Tingga)</td>
              <td>70</td>
            </tr>
            <tr>
              <td>PE Plastic</td>
              <td>15</td>
            </tr>

            <tr>
              <td>Plastic (Crampled)</td>
              <td>8</td>
            </tr>
            <tr>
              <td>Colored Plastic</td>
              <td>7</td>
            </tr>
            <tr>
              <td>Brass or Bronze (Tanso) (Class A)</td>
              <td>410</td>
            </tr>
            <tr>
              <td>Brass or Bronze (Tanso) (Class B)</td>
              <td>390</td>
            </tr>
            <tr>
              <td>Brass or Bronze (Tanso) (Class C)</td>
              <td>380</td>
            </tr>

            <tr>
              <td>PVC (Polyvinyl Chloride or a Thermoplastics Material)</td>
              <td>3/piece</td>
            </tr>
            <tr>
              <td>Stainless - 304</td>
              <td>60</td>
            </tr>
            <tr>
              <td>Stainless - 201</td>
              <td>20</td>
            </tr>
            <tr>
              <td>Battery - 1sm</td>
              <td>400</td>
            </tr>
            <tr>
              <td>Battery - 2sm</td>
              <td>500</td>
            </tr>

            <tr>
              <td>Battery - 3sm</td>
              <td>600</td>
            </tr>
            <tr>
              <td>Battery - 6sm</td>
              <td>780</td>
            </tr>
            <tr>
              <td>Battery - 2d</td>
              <td>1000</td>
            </tr>
            <tr>
              <td>Battery - 4d</td>
              <td>1100</td>
            </tr>
            <tr>
              <td>Battery - 8d</td>
              <td>1600</td>
            </tr>

            <tr>
              <td>Assorted </td>
              <td>17</td>
            </tr>
          </tbody>
        
        </table>

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
