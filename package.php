<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package</title>
<!-- swiper css -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<style>
  .heading{
  width: 100%;
  height: auto;
  display: block;
  object-fit: cover;
}

.heading h1{
  text-align: center;
}

/* Optional: Limit height on small devices */
@media (max-width: 788px) {
  .responsive-image {
    height: 200px;
  }
}

@media (min-width: 779px) {
  .responsive-image {
    height: 350px;
  }
}

</style>
<body>

<!-- header section start -->


<section class="header">
    <a href="home.php" class="logo">TRIP TIGER</a>

    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="package.php">Packages</a>
        <a href="about.php">About Us</a>
        <a href="contact.php">Contact</a>

    </nav>

    <div id="menu-btn" class=" fas fa-bars" onclick="toggleMenu()">

    </div>


    
</section>

<!-- header section ends -->

<div class="heading" style="background:url(img/package.bg.jpg) no-repeat" >
    <h1>Our Packages</h1>
</div>

<!-- packages section start  -->
    <section class="home-packages">
      <h1 class="heading-title ">TOP distination</h1>

      <div class="packages-container">
        <div class="card">
          <div class="package-image">
            <img src="packageImages/MumbaiPK.jpg" alt="">
          </div>
          <div class="package-content">
            <div class="package-title"   >Mumbai </div>
            <div class="package-description">Places Usually Included in Mumbai Darshan Tours: 
              Gateway of India/Siddhivinayak Temple/Marine Drive/ Bandra-Worli Sea Link 
               </div>
            <div class="package-price">₹4000-/</div>
            <a href="packagebooking.php">
              <button class="btn">Book Now</button>
            </a>
           
          </div>
        </div>
    
        <div class="card">
          <div class="package-image">
            <img src="packageImages/AlibaugPK.jpg" alt="">
          </div>
          <div class="package-content">
            <div class="package-title"  >Alibaug</div>
            <div class="package-description">Packages usually include a vehicle for transfers and local sightseeing. 
             Alibaug Beach/Kolaba Fort/Murud Janjira Fort 
            </div>
            <div class="package-price">₹12,499</div>
            <a href="packagebooking.php">
              <button class="btn">Book Now</button>
            </a>
          </div>
        </div>
    
        <div class="card">
          <div class="package-image">
            <img src="packageImages/Matheranpk2.jpg" alt="">
          </div>
          <div class="package-content">
            <div class="package-title" >Matheran</div>
            <div class="package-description"> Packages usually include a vehicle for transfers and local sightseeing/Alexander Point/Echo Point/Panorama Point</div>
            <div class="package-price">₹10,799</div>
            <a href="packagebooking.php">
              <button class="btn">Book Now</button>
            </a>
          </div>
        </div>

        <!-- hidden cards -->

        <div class="card hidden">
          <div class="package-image">
            <img src="packageImages/mahabelshwarPK.jpg" alt="">
          </div>
          <div class="package-content">
            <div class="package-title" >Mahabelshwar</div>
            <div class="package-description"> Packages usually include Pratapgarh Fort/ Elephant's Head Point/ Kaas Pathar/ Echo Point/Panchgani/ Tapol.</div>
            <div class="package-price">₹10,799</div>
            <a href="packagebooking.php">
              <button class="btn">Book Now</button>
            </a>
          </div>
        </div>

        <div class="card hidden">
          <div class="package-image">
            <img src="packageImages/MalvanPK.jpg" alt="">
          </div>
          <div class="package-content">
            <div class="package-title" >Malvan</div>
            <div class="package-description"> Packages usually include Tarkarli Beach / Sindhudurg Fort / the Malvan Marine Sanctuary / Shri Wagheshwar Temple /and the Shivsamudrasangrahalaya museum / </div>
            <div class="package-price">₹10,799</div>
            <a href="packagebooking.php">
              <button class="btn">Book Now</button>
            </a>
          </div>
        </div>

        <div class="card hidden">
          <div class="package-image">
            <img src="packageImages/kolhapurPK.jpg" alt="">
          </div>
          <div class="package-content">
            <div class="package-title" >Kolhapur</div>
            <div class="package-description"> Packages usually include a Vishalgad Fort / New Palace / Panhala Fort / Jyotiba Temple / Siddhagiri Gramjivan Museum</div>
            <div class="package-price">₹10,799</div>
            <a href="packagebooking.php">
              <button class="btn">Book Now</button>
            </a>
          </div>
        </div>

        <button id="loadMore">Load More</button>
      </div>
</section>


<!-- packages section end  -->

<!-- Spritual packages  -->

   <section class="home-packages">
      <h1 class="heading-title ">spritual destination </h1>

      <div class="packages-container">
        <div class="card">
          <div class="package-image">
            <img src="packageImages/temple3.jpg" alt="">
          </div>
          <div class="package-content">
            <div class="package-title"   >Siddhivinayak Temple</div>
            <div class="package-description">Places Usually Included in Mumbai Darshan Tours: 
              Gateway of India/Siddhivinayak Temple/Marine Drive/ Bandra-Worli Sea Link 
               </div>
            <div class="package-price">₹4000-/</div>
            <a href="packagebooking.php">
              <button class="btn">Book Now</button>
            </a>
           
          </div>
        </div>

        
        <div class="card">
          <div class="package-image">
            <img src="packageImages/temple8.jpg" alt="">
          </div>
          <div class="package-content">
            <div class="package-title"  >Shirdi sai baba Temple</div>
            <div class="package-description">Packages usually include a vehicle for transfers and local sightseeing. 
             Alibaug Beach/Kolaba Fort/Murud Janjira Fort 
            </div>
            <div class="package-price">₹12,499</div>
            <a href="packagebooking.php">
              <button class="btn">Book Now</button>
            </a>
          </div>
        </div>

         <div class="card">
          <div class="package-image">
            <img src="packageImages/temple7.jpg" alt="">
          </div>
          <div class="package-content">
            <div class="package-title"  >Vitthal Temple</div>
            <div class="package-description">Packages usually include a vehicle for transfers and local sightseeing. 
             Alibaug Beach/Kolaba Fort/Murud Janjira Fort 
            </div>
            <div class="package-price">₹12,499</div>
            <a href="packagebooking.php">
              <button class="btn">Book Now</button>
            </a>
          </div>
        </div>

         <!-- hidden cards -->

        <div class="card hidden1">
          <div class="package-image">
            <img src="packageImages/temple6.jpg" alt="">
          </div>
          <div class="package-content">
            <div class="package-title" >Trambakeshwar</div>
            <div class="package-description"> Packages usually include Pratapgarh Fort/ Elephant's Head Point/ Kaas Pathar/ Echo Point/Panchgani/ Tapol.</div>
            <div class="package-price">₹10,799</div>
            <a href="packagebooking.php">
              <button class="btn">Book Now</button>
            </a>
          </div>
        </div>

         <div class="card hidden1">
          <div class="package-image">
            <img src="packageImages/temple5.jpg" alt="">
          </div>
          <div class="package-content">
            <div class="package-title" >Grishneshwar Temple</div>
            <div class="package-description"> Packages usually include Pratapgarh Fort/ Elephant's Head Point/ Kaas Pathar/ Echo Point/Panchgani/ Tapol.</div>
            <div class="package-price">₹10,799</div>
            <a href="packagebooking.php">
              <button class="btn">Book Now</button>
            </a>
          </div>
        </div>

          <div class="card hidden1">
          <div class="package-image">
            <img src="packageImages/temple1.jpg" alt="">
          </div>
          <div class="package-content">
            <div class="package-title" >Ganpatipule Temple</div>
            <div class="package-description"> Packages usually include Pratapgarh Fort/ Elephant's Head Point/ Kaas Pathar/ Echo Point/Panchgani/ Tapol.</div>
            <div class="package-price">₹10,799</div>
            <a href="packagebooking.php">
              <button class="btn">Book Now</button>
            </a>
          </div>
        </div>

          <button id="loadMore1">Load More</button>

      </div>
</section>

 


<!-- spritual packages -->






















<!-- footer section start -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i>Home</a>
        <a href="package.php"> <i class="fas fa-angle-right"></i>Packages</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i>About Us</a>
        <a href="contact.php"> <i class="fas fa-angle-right"></i>Contact</a>

        </div>

        <div class="box">
            <h3>Extra  links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i>ask question</a>
        <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
        <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>

        </div>

        <div class="box">
            <h3>Contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i>+91 9136377286</a>
        <a href="#"> <i class="fas fa-phone"></i>+91 9967015581</a>
        <a href="#"> <i class="fas fa-envelope"></i>triptiger1006@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i>Thane,India - 400604</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook"></i>facebook</a>
            <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
            <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
        
        </div>
    </div>

    <div class="credit">created by <span>mr.Prajwal holmukhe / mr.varun satam</span> | all rights reserved!</div>
</section>


<!-- footer section ends -->

<!-- swiper js link -->


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="script.js"></script>
</body>
</html>