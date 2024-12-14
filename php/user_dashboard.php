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

   <a href="user_dashboard.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="user_dashboard.php">home</a>
      <a href="html/user_about.html">about</a>
      <a href="html/user_package.html">package</a>
      <a href="book.php">book</a>
      <a href="user_booking.php">bookings info</a>
      <a href="logout.php">logout</a>

   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>travel arround the world</h3>
               <a href="html/user_package.html" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="html/user_package.html" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="html/user_package.html" class="btn">discover more</a>
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
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>Welcome to Travels, your gateway to unforgettable travel experiences! 🌍

         At Travels, we believe that every journey tells a story, and our mission is to help you write yours. Whether you’re dreaming of serene beaches, bustling cityscapes, or tranquil mountain retreats, we’re here to turn your travel dreams into reality.</p>
      <a href="html/user_about.html" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Taj Mahal</h3>
            <p>Discover the breathtaking beauty of the Taj Mahal.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Brazil</h3>
            <p>Explore the diverse landscapes, lively culture, and iconic landmarks of Brazil.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Mount Kilimanjaro</h3>
            <p>Embark on a thrilling adventure to Mount Kilimanjaro, the highest peak in Africa.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="html/user_package.html" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      <p>Book your trip to your destination one month in advance and get up to 50% off! Save €500 on your booking when you plan ahead. Don’t miss out on this limited-time offer!</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="user_dashboard.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="html/user_about.html"> <i class="fas fa-angle-right"></i> about</a>
         <a href="html/user_package.html"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.html"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="tel:+393342910749"> <i class="fas fa-phone"></i> +39 334-291-0749 </a>
         <a href="tel:+989196016233"> <i class="fas fa-phone"></i> +98 919-601-6032 </a>
         <a href="mailto:sepehrbaher@gmail.com"> <i class="fas fa-envelope"></i> sepehrbaher@gmail.com </a>
         <a href="https://www.google.com/maps/place/University+of+Messina+-+Department+of+Engineering/@38.2560048,15.584651,3223m/data=!3m1!1e3!4m6!3m5!1s0x131452a7b8ca2329:0x2bca6da9fca8a2be!8m2!3d38.2591705!4d15.5958576!16s%2Fg%2F11c1wwrpnl?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoJLDEwMjExMjMzSAFQAw%3D%3D"> <i class="fas fa-map"></i> Messina, Italy - 98122 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com/profile.php?id=100085646019213"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://x.com/home?lang=en"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/sepehr_mozhde/"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://www.linkedin.com/feed/"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>sepi khals</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>