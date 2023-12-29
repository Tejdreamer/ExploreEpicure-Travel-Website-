<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <!-- font awesome design -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"  />

     <!-- custom style sheet -->
    <link rel="stylesheet" href="style.css">


    
</head>
<body>
    
<!-- header section starts -->
    <section class="header">
     <a href="home.php" class="logo">Travel.</a>
     <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
     </nav>
      
     <div id="menu-btn" class="fas fa-bars"></div>


    </section>
<!-- header section ends -->

<div class="heading" style="background:url('Images/header-bg/book-head.png') no-repeat">
    <h1>Book Now</h1>
</div>

<!-- booking section starts -->

   <section class="booking">

      <div class="heading-title">Book Your Trip!</div>

      <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>Name :</span>
                <input type="text" placeholder="Ex:Tej Dreamer"  name="name">
            </div>
            <div class="inputBox">
                <span>Email :</span>
                <input type="email" placeholder="Ex:sample@gmail.com"  name="email">
            </div>
            <div class="inputBox">
                <span>Phone :</span>
                <input type="number" placeholder="Ex:7386658306"  name="phone">
            </div>

            <div class="inputBox">
                <span>Address :</span>
                <input type="text" placeholder="enter your address"  name="address">
            </div>

            <div class="inputBox">
                <span>Where To :</span>
                <input type="text" placeholder="Ex:Maldives,Tokyo"  name="location">
            </div>
            <div class="inputBox">
                <span>Guests :</span>
                <input type="number" placeholder="Ex:5"  name="guests">
            </div>

            <div class="inputBox">
                <span>Arrival :</span>
                <input type="date"   name="arrival">
            </div>

            <div class="inputBox">
                <span>Leaving :</span>
                <input type="date"  name="leaving">
            </div>

            <input type="submit" value="submit" class="btn"  name="send">

        </div>
      </form>

   </section>




<!-- booking section ends -->
















<!-- footer section starts -->
     
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
            </div>


            <div class="box">
                <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>Ask question</a>
            <a href="#"><i class="fas fa-angle-right"></i>Guidelines</a>
            <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>Terms & Condition</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i>+91 7386658306</a>
            <a href="#"><i class="fas fa-phone"></i>+965 99476361</a>
            <a href="#"><i class="fas fa-envelope"></i>tej.chinthala@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i>Rly kodur,India-516101</a>
            </div>


            <div class="box">
                <h3>follow Us</h3>
                <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i>Facebook</a>
                <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i>LinkedIn</a>
            </div>


        </div>

        <div class="credit">Created by <span>Mr.Tej Dreamer</span> | All Rights Reserved!</div>
    </section>



<!-- footer section end -->



<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

   <!-- customem js file -->
   <script src="jstw.js"></script>
</body>
</html>