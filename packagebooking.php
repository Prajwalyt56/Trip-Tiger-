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
     <!-- booking form  -->

     <section>
     <div class="form-container">
     
    <h2> <img src="packageImages/clowlogo1.png" alt="" id="logoC">
      Book Your Trip with Trip Tiger</h2>
    <form id="bookingForm" action="bookPK_form.php" method="POST" onsubmit="return showSuccessPopup();">
      <div class="form-grid">
        <div class="form-group">
          <label>Package:</label>
          <!-- <select name="package" required> -->
           <select name="package"> 
            <option value="">Choose Package</option>
            <option value="MUMBAI">MUMBAI</option>
            <option value="ALIBAUG">ALIBAUG</option>
            <option value="MATHERAN">MATHERAN</option>
            <option value="MAHABELSHWAR">MAHABELSHWAR</option>
            <option value="MALVAN">MALVAN</option>
                   <option value="KOLHAPUR">KOLHAPUR</option>
          </select>
        </div>

        <div class="form-group">
          <label>Full Name:</label>
          <input type="text" name="name">
        </div>

        <div class="form-group">
          <label>Phone Number:</label>
          <!-- <input type="tel" name="phone" required pattern="[0-9]{10}"> -->
           <input type="tel" name="phone"  pattern="[0-9]{10}">
        </div>

        <div class="form-group">
          <label>Group Booking:</label>
          <select name="groupBooking" onchange="toggleGroupPeople(this)">
            <option value="No">No</option>
            <option value="Yes">Yes</option>
          </select>
        </div>

        <div class="form-group" id="peopleField" style="display: none;">
          <label>Number of People:</label>
          <input type="number" name="people" min="1">
        </div>

        <div class="form-group">
          <label>Vehicle Type:</label>
          <!-- <select name="vehicle" required> -->
              <select name="vehicle" >
            <option value="">Select Vehicle</option>
            <option value="SUV">SUV</option>
            <option value="Sedan">Sedan</option>
            <option value="Bus">Bus</option>
          </select>
        </div>

        <div class="form-group">
          <label>Email:</label>
          <!-- <input type="email" name="email" required> -->
          <input type="email" name="email" >
        </div>

        <div class="form-group">
          <label>Trip Date:</label>
          <!-- <input type="date" name="date" required> -->
           <input type="date" name="date" >
        </div>

        <div class="form-group">
          <label>Trip Time:</label>
          <!-- <input type="time" name="time" required> -->
          <input type="time" name="time">
        </div>

        <div class="form-group full-width">
          <label>Pickup Location:</label>
          <!-- <input type="location" name="location" required> -->
           <input type="location" name="location">
        </div>
      </div>

      <button type="submit" name="send">Confirm Booking</button>
    </form>
  </div>

  <div id="popup" class="popup">
    <div class="popup-content">
      <h3>🎉 Trip Confirmed!</h3>
      <p>Your booking is successful. Check your email for confirmation.</p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>

     </section>
     


     <!-- booking form  -->
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
