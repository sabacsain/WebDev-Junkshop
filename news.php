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
  <!-- NEWS PAGE -->
  <div class="news-page">   
    <!-- NEWS BG SECTION -->
    <section class="news-bg-section">
      <!-- bg -->
    </section>

    <!-- NEWS SECTION -->
    <section class="news-section">

      <div class="news-container">

        <h1>NEWS</h1>

        <div class="news-card-container">

          <div class="news-card">
            <img src="images/news/news-img-1.jpg" alt="An image containing junks.">
            <div class="news-info">
            <div class="news-date">
              <img src="images/home/date.png" alt="Calendar Logo.">
              <h5 id="news-heading-date">Jan 12, 2022</h5>
            </div>
            <a href="https://www.positivelyfilipino.com/magazine/cash-for-trash-bakal-bote-plastik-at-dyaryo" class="news-title" target="_blank">
              Cash For Trash: Bakal, Bote, Plastic At Dyaryo
            </a>
            <p id="paragraph-news">
              Garbage is definitely the smelliest challenge facing the planet. In one of the pioneering 
              analyses of plastics, the world’s scientists calculated that humanity has produced 
              8.3 billion metric tons of plastic, 75 percent ... 
            </p>
          </div>
          </div>

          <div class="news-card">
            <img src="images/news/news-img-2.jpg" alt="An image containing junks.">
            <div class="news-info">
            <div class="news-date">
              <img src="images/home/date.png" alt="Calendar Logo.">
              <h5 id="news-heading-date">Mar 17, 2022</h5>
            </div>
            <a href="https://sustainability.ph/solutions/intelligence/plastic-recycling-in-the-philippines" class="news-title" target="_blank">
              Plastic Recycling in the Philippines
            </a>
            <p id="paragraph-news">
              Filipinos consume a yearly average of 20kg of plastics, from which 15.43kg/cap/year becomes waste.
              The recycling rate of post-consumption plastic packaging among Filipinos is still relatively low. 
              Some of the major challenges ...
            </p>
          </div>
          </div>

          <div class="news-card">
            <img src="images/news/news-img-3.jpg" alt="An image containing junks.">
            <div class="news-info">
            <div class="news-date">
              <img src="images/home/date.png" alt="Calendar Logo.">
              <h5 id="news-heading-date">Feb 11, 2022</h5>
            </div>
            <a href="https://krishijagran.com/blog/most-profitable-recycling-business-ideas-for-huge-profits-in-2022-know-how-to-start-with-less-investment/" class="news-title" target="_blank">
              Most Profitable Recycling Business Ideas For Huge Profits In 2022; Know How To Start With Less Investment
            </a>
            <p id="paragraph-news">
              The amount of waste produced in various forms in today's modern society is increasing day 
              by day. The majority of us are aware of the negative consequences of not recycling ...
            </p>
          </div>
          </div>

          <div class="news-card">
            <img src="images/news/news-img-4.jpg" alt="An image containing junkshop.">
            <div class="news-info">
            <div class="news-date">
              <img src="images/home/date.png" alt="Calendar Logo.">
              <h5 id="news-heading-date">May 11, 2023</h5>
            </div>
            <a href="https://www.bria.com.ph/articles/a-junk-shop-and-scrap-business-at-home/" class="news-title" target="_blank">
              A Junk shop and Scrap Business at Home
            </a>
            <p id="paragraph-news">
              A junk shop and scrap business at home is pretty much a straightforward buy-and-sell 
              industry that few people give much thought to because the traded goods are dirty and 
              unpleasant. However, from a different ... 
            </p>
            </div>
          </div>

          <div class="news-card">
            <img src="images/news/news-img-5.jpg" alt="An image containing disposing garbage.">
            <div class="news-info">
            <div class="news-date">
              <img src="images/home/date.png" alt="Calendar Logo.">
              <h5 id="news-heading-date">Aug 7, 2019</h5>
            </div>
            <a href="https://www.earthday.org/the-recycling-problem-a-feel-good-story-thats-too-good-to-be-true/" class="news-title" target="_blank">
              The recycling problem: A feel-good story that’s too good to be true
            </a>
            <p id="paragraph-news">
              Recycling feels good. It seemingly gives us power to control our own habits for the 
              benefit of our planet. We can even call people out for not recycling (shame!), 
              reinforcing our own ...
            </p>
            </div>
          </div>

          <div class="news-card">
            <img src="images/news/news-img-6.png" alt="An image containing people.">
            <div class="news-info">
            <div class="news-date">
              <img src="images/home/date.png" alt="Calendar Logo.">
              <h5 id="news-heading-date">Jul 19, 2022</h5>
            </div>
            <a href="https://www.pna.gov.ph/articles/1179281" class="news-title" target="_blank">
              Trash can be cash in Manila recycling facility
            </a>
            <p id="paragraph-news">
              MANILA – The country’s capital city has partnered with the Department of Environment and 
              Natural Resources - Environmental Management Bureau - National Capital Region (DENR-EMB-NCR)
               to promote recycling and reduce environmental waste ...
            </p>
            </div>
          </div>

          <div class="news-card">
            <img src="images/news/news-img-7.jpg" alt="An image containing garbages.">
            <div class="news-info">
            <div class="news-date">
              <img src="images/home/date.png" alt="Calendar Logo.">
              <h5 id="news-heading-date">Nov 24, 2021</h5>
            </div>
            <a href="https://www.philstar.com/headlines/climate-and-environment/2021/11/24/2143560/plastic-waste-plushies-payatas-residents-survive-recycling" class="news-title" target="_blank">
              From plastic waste to plushies: Payatas residents survive by recycling
            </a>
            <p id="paragraph-news">
              MANILA, Philippines — Every day, colorful stuffed toys are hung up to dry along Doris
               Mutya's street in Payatas, Quezon City. While the Payatas dumpsite has been closed 
               down since the tragic landslide in 2000 that killed ...
            </p>
            </div>
          </div>

          <div class="news-card">
            <img src="images/news/news-img-8.png" alt="An image containing people.">
            <div class="news-info">
            <div class="news-date">
              <img src="images/home/date.png" alt="Calendar Logo.">
              <h5 id="news-heading-date">Aug 14, 2022</h5>
            </div>
            <a href="https://www.sunstar.com.ph/article/1937862/bacolod/business/waste-management-innovations-co-designed-by-talisaynon-waste-workers-launched" class="news-title" target="_blank">
              Waste management innovations co-designed by Talisaynon waste workers launched
            </a>
            <p id="paragraph-news">
              IN COLLABORATION with The Incubation Network and the City Government of Talisay in Negros 
              Occidental, the Philippine Reef and Rainforest Conservation Foundation Inc. (PRRCFI) 
              launched four waste management innovations co-designed by Talisaynon ...
            </p>
            </div>
          </div>

          <div class="news-card">
            <img src="images/news/news-img-9.png" alt="An image containing chart.">
            <div class="news-info">
            <div class="news-date">
              <img src="images/home/date.png" alt="Calendar Logo.">
              <h5 id="news-heading-date">May 17, 2023</h5>
            </div>
            <a href="https://news.abs-cbn.com/spotlight/multimedia/infographic/05/17/23/amount-of-garbage-in-the-philippines-increasing" class="news-title" target="_blank">
              Amount of garbage in the Philippines increasing
            </a>
            <p id="paragraph-news">
              MANILA - The Commission on Audit (COA) recently said it observed a "steady increase" in 
              solid waste generation in the country through the years. Instead of reducing, solid 
              waste generation steadily increased through the  ...
            </p>
            </div>
          </div>

          <div class="news-card">
            <img src="images/news/news-img-10.jpg" alt="An image containing garbages.">
            <div class="news-info">
            <div class="news-date">
              <img src="images/home/date.png" alt="Calendar Logo.">
              <h5 id="news-heading-date">May 12, 2023</h5>
            </div>
            <a href="https://www.gmanetwork.com/news/topstories/nation/869854/coa-increasing-ph-solid-waste-production-to-hit-19-million-metric-tons-by-2030/story/" class="news-title" target="_blank">
              COA: Increasing PH solid waste production to hit 19 million metric tons by 2030 
            </a>
            <p id="paragraph-news">
              Despite the passage of the Solid Waste Management Law, the Philippines' annual production 
              of solid waste has been increasing over the years due to inconsistent policies and a lack 
              of waste facilities and landfills, the  ...
            </p>
            </div>
          </div>

          <div class="news-card">
            <img src="images/news/news-img-11.jpg" alt="An image containing a boy.">
            <div class="news-info">
            <div class="news-date">
              <img src="images/home/date.png" alt="Calendar Logo.">
              <h5 id="news-heading-date">Jul 24, 2020</h5>
            </div>
            <a href="https://www.pna.gov.ph/articles/1109984" class="news-title" target="_blank">
              Junkshop boy story wins 3rd place in film fest
            </a>
            <p id="paragraph-news">
              PALO, Leyte – The story of a boy named “Nino”, who works as a garbage and scrap collector, is this year's 3rd 
              Best Film in the National AHD (adolescent health and development) Documentary Film Festival held 
              by the ...
            </p>
            </div>
          </div>

          <div class="news-card">
            <img src="images/home/news-garbage3.png" alt="An image containing garbages.">
            <div class="news-info">
            <div class="news-date">
              <img src="images/home/date.png" alt="Calendar Logo.">
              <h5 id="news-heading-date">Feb 4, 2023</h5>
            </div>
            <a href="https://www.philstar.com/business/2023/02/04/2242354/worsening-garbage-problem" class="news-title" target="_blank">
              Worsening garbage problem
            </a>
            <p id="paragraph-news">
              The World Bank last year released a report on its assessment of the solid waste management
               plans as well as the collection, recycling and disposal conditions of the 17 local
                ...
            </p>
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
