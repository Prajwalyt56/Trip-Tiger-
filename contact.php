<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
<!-- swiper css -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
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

<div class="heading" style="background:url(img/contactus.jpg) no-repeat" >
    <h1>Contact us</h1>
</div>


<section class="contact-section">
  <div class="contact-container">
    <!-- Left: Contact Info -->
    <div class="contact-info">
      <h2>Contact Trip Tiger</h2>
      <p><strong>📞 Phone:</strong> +91 9136377286</p>
      <p><strong>📧 Email:</strong> triptiger1006@gmail.com</p>
      <p><strong>📍 Address:</strong> Thane, Maharashtra</p>
      <p>Feel free to reach out with any queries about your trip, packages, or bookings!</p>
    </div>

    <!-- Right: Contact Form -->
    <div class="contact-form">
      <h2>Send Us a Message</h2>
      <form action="contact.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required />
        <input type="tel" name="phone" placeholder="Your Phone Number" required />
        <input type="email" name="email" placeholder="Your Email" required />
        <textarea name="message" rows="5" placeholder="Your Message..." required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </div>
  </div>
</section>






















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

 <script src="js/script.js"></script>
</body>
</html>