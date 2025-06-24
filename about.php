<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>about</title>
    <!-- swiper css -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
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
@media (max-width: 768px) {
  .responsive-image {
    height: 200px;
  }
}

@media (min-width: 769px) {
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

      <div id="menu-btn" class="fas fa-bars" onclick="toggleMenu()"></div>
    </section>

    <!-- header section ends -->

    <div class="heading" style="background: url(img/beach.jpg) no-repeat">
      <h1>about us</h1>
    </div>

    <!-- about section start -->
    <section class="about">
      <div class="image">
        <img src="sliderImages/aboutus/whywebest.png" alt="" />
      </div>

      <div class="content">
        <h3>why choose us?</h3>
        <p>
          At Trip Tiger, we combine reliability, comfort, and adventure to give
          you an unforgettable travel experience. Our well-maintained fleet,
          experienced drivers, and 24/7 customer support ensure your journey is
          smooth from start to finish.
        </p>
        <p>
          Whether you're planning a weekend getaway or a cross-country tour, we
          offer customizable packages that suit your needs and budget. With a
          friendly mascot and a fun-loving spirit, Trip Tiger makes every trip
          exciting, safe, and stress-free.
        </p>
        <div class="icons-container">
          <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
          </div>
          <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>affordable price</span>
          </div>
          <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
          </div>
        </div>
      </div>
    </section>
    <!-- about section start end -->

    <!-- review section sart  -->
    <div class="swiper">
      <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide">
          <img src="clintreviewsimages/person1.jpg" alt="Client" class="client-img" />
          <div class="client-name">Sujal kadam</div>
          <div class="stars">★★★★★</div>
          <div class="review">“Amazing experience visiting Mahabaleshwar! Trip Tiger made it super easy and hassle-free.”</div>
        </div>
  
        <!-- Slide 2 -->
        <div class="swiper-slide">
          <img src="clintreviewsimages/person2.jpg" alt="Client" class="client-img" />
          <div class="client-name">Sujal thul</div>
          <div class="stars">★★★★☆</div>
          <div class="review">“Clean cars, polite drivers, and on-time service. Explored Lonavala comfortably. Great job, Trip Tiger!”</div>
        </div>
  
        <!-- Slide 3 -->
        <div class="swiper-slide">
          <img src="clintreviewsimages/person3.jpg" alt="Client" class="client-img" />
          <div class="client-name">Rohit amedas</div>
          <div class="stars">★★★★★</div>
          <div class="review">“Loved my trip to Shirdi with Trip Tiger. Smooth booking and a peaceful journey.”</div>
        </div>
      

      <div class="swiper-slide">
        <img src="clintreviewsimages/person4.jpg" alt="Client" class="client-img" />
        <div class="client-name">Bunny jawaji</div>
        <div class="stars">★★★★★</div>
        <div class="review">“Booked a weekend getaway to Alibaug – seamless and budget-friendly. Highly recommend!”</div>
      </div>
    


    <div class="swiper-slide">
      <img src="clintreviewsimages/person5.jpg" alt="Client" class="client-img" />
      <div class="client-name">Onkar karande</div>
      <div class="stars">★★★★★</div>
      <div class="review">“Perfect Pune to Nashik trip! Great coordination and safe driving.”</div>
    </div>




  <div class="swiper-slide">
    <img src="clintreviewsimages/person6.jpg" alt="Client" class="client-img" />
    <div class="client-name">Aditya mulik</div>
    <div class="stars">★★★★★</div>
    <div class="review">“Visited Ajanta Caves with family. Trip Tiger ensured a stress-free, memorable journey”</div>
  </div>
</div>

  
      <!-- Pagination -->
      <div class="swiper-pagination"></div>
    </div>
    <!-- review section end  -->

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
          <h3>Extra links</h3>
          <a href="#"> <i class="fas fa-angle-right"></i>ask question</a>
          <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
          <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
          <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
          <h3>Contact info</h3>
          <a href="#"> <i class="fas fa-phone"></i>+91 9136377286</a>
          <a href="#"> <i class="fas fa-phone"></i>+91 9967015581</a>
          <a href="#">
            <i class="fas fa-envelope"></i>triptiger1006@gmail.com</a
          >
          <a href="#"> <i class="fas fa-map"></i>Thane,India - 400604</a>
        </div>
        <div class="box">
          <h3>follow us</h3>
          <a href="#"> <i class="fab fa-facebook"></i>facebook</a>
          <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
          <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
        </div>
      </div>

      <div class="credit">
        created by <span>mr.Prajwal holmukhe / mr.varun satam</span> | all
        rights reserved!
      </div>
    </section>

    <!-- footer section ends -->

    <!-- swiper js link -->

    
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   

    <script src="script.js"></script>
  </body>
</html>
