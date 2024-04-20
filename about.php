<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html> 
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>About Us</h3>
   <p><a href="home.php">Home</a> <span> / About</span></p>
   <div class="custom-shape-divider-bottom-1703159485">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
    </svg>
</div>
   
</div>


<!-- about section starts  -->

<section class="about">


   <div class="row">

      <div class="image">
         <img src="/images/book/Reading book.png" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>
         Welcome to BookLat, your premier online destination for all things books! At BookLat, we're passionate about literature and committed to bringing you an unparalleled reading experience. With an extensive collection spanning diverse genres, from beloved classics to the latest bestsellers, there's something for every reader to explore. What sets us apart? Our innovative rental feature offers affordability and flexibility, allowing you to enjoy your favorite titles without the commitment of a full purchase. But BookLat is more than just a bookstore; it's a vibrant community of book enthusiasts. Join us to share recommendations, engage in discussions, and connect with fellow readers who share your passion. From seamless checkout to prompt customer support, our dedicated team is here to ensure your satisfaction every step of the way. Discover the joy of reading anew with BookLat, where every page turns into an adventure!
         </p>
         <a href="menu.php" class="btn">Check our Books</a>
      </div>

   </div>
   

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">Get your Books NOW with these <br>Simple Steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/fish/checkout.jpg" alt="">
         <h3>Checkout</h3>
         <p>
         Embark on a seamless literary journey at BookLat's checkout, where the magic of books meets seamless online shopping. Immerse yourself in satisfaction as you secure your favorite reads and join a vibrant community of fellow book enthusiasts.    
      </p>
      </div>

      <div class="box">
         <img src="images/fish/deliver.jpg" alt="">
         <h3>Fast delivery</h3>
         <p>
         Experience the thrill of anticipation as your literary treasures swiftly make their way to your doorstep with BookLat's reliable and secure delivery service. Trust us to ensure your books arrive in pristine condition, ready to enrich your reading experience.
         </p>
      </div>

      <div class="box">
         <img src="images/fish/receive.jpg" alt="">
         <h3>Receive</h3>
         <p>
         Unwrap excitement and welcome your new literary companions into your home as you receive your BookLat delivery, meticulously packaged to ensure the safety of your beloved books and ignite a journey of reading pleasure.

         </p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">Customer Reviews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>
            "BookLat exceeded my expectations! The checkout process was a breeze, and my order arrived promptly. I'm impressed by the quality of service and will definitely be back for more reads."
         </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Customer 1</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>
            "What a delightful experience with BookLat! My books were carefully packaged, and the delivery was quick. Highly recommended for book lovers!"
            </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Customer 2</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>
            "I'm thrilled with my purchase from BookLat! The website is user-friendly, and the community aspect adds a nice touch. Looking forward to my next order!"
            </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Customer 3</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>"Impressed by the efficiency of BookLat's delivery service! My books arrived in perfect condition, and the selection is fantastic. Five stars!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               
            </div>
            <h3>Customer 4</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>
            "Kudos to BookLat for a wonderful shopping experience! The customer service was top-notch, and the delivery was swift. I'll definitely be a returning customer."
            </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Customer 5</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <p>
               "BookLat is a gem for book enthusiasts! The checkout process was seamless, and the variety of genres is impressive. Can't wait to dive into my new reads!"

            </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Customer 6</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>