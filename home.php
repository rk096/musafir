<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Musafir</a>

   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Package</a>
      <a href="book.php">Book</a>
      <a href="team.php">Team</a>
      <a href="logout.php">Logout</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home1.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>travel arround the world</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home3.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Tour Guide</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Trekking</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Camp Fire</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>Off Road</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>Camping</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about-us.jpeg" alt="">
   </div>

   <div class="content">
      <h3>About Us</h3>
      <p>Keeping the core values and ethics in the center, MUSAFIR - will be a benchmark in training the youth for a better situation.It will work for enhancement of all good qualities in the modern youth with a brighter way.</p>
      <a href="about.php" class="btn">Read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

   <div class="box">
         <div class="image">
            <img src="images/sp.jpg" alt="">
         </div>
         <div class="content">
            <h3>Saputara Adventure Camp</h3>
            <p>From: Rs.2499/person</p>
            <p>Duration: 3 days / 2 nights</p>
            <p>Max altitude: 3000 ft.</p>
            <a href="book.php" class="btn">Book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/pfrst.jpg" alt="">
         </div>
         <div class="content">
            <h3>Polo Forest</h3>
            <p>From: Rs.1399/person</p>
            <p>Duration: 2 days / 1 nights</p>
            <p>Max altitude: 600 ft.</p>
            <a href="book.php" class="btn">Book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/bk.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bakor Nature Camp</h3>
            <p>From: Rs.1400/person</p>
            <p>Duration: 2 days / 1 nights</p>
            <p>Max altitude: 550 ft.</p>
            <a href="book.php" class="btn">Book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">Load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>upto 40% off</h3>
      <p>For DDU Students</p>
      <a href="book.php" class="btn">Book now</a>
   </div>
</section>

<!-- home offer section ends -->



<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> Ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> About us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Terms of use</a>
      </div>

      <div class="box">
         <h3>Contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> musafir@ddu.ac.in </a>
         <a href="#"> <i class="fas fa-map"></i> Nadiad, India - 387001</a>
      </div>

      <div class="box">
         <h3>Follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
      </div>

   </div>

</section>

<!-- footer section ends -->




<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>