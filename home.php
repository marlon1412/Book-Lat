<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home Page</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- Bootstrap Link -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>
   <section class="hero1">
      <div class="swiper hero-slider">
         <div class="swiper-wrapper">
            <div class="swiper-slide slide">
               <div class="content">
                  <h3>Welcome to<br> BOOKLAT!</h3>
                  <span class="">
                     " Where Stories Come to Life! Dive into endless imagination with our collection of books and rentals"
                  </span>
                  <div class="mt-3">
                     <a href="menu.php" class="button-one style-2 text-uppercase connect" data-text="SHOP NOW">SHOP NOW</a>
                  </div>
               </div>
               <div class="image">
                  <img src="images/book/hobbitnobg.png" alt="">
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="content">
                  <span>"Every book is a journey waiting to be explored. <br> Discover, Explore, Read"</span>
                  <h3>Here at<br> BOOKLAT</h3>
                  <div class="">
                     <a href="menu.php" class="button-one style-2 text-uppercase connect" data-text="SHOP NOW">SHOP NOW</a>
                  </div>
               </div>
               <div class="image">
                  <img src="images/book/percy no bg.png" alt="">
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="content">
                  <span>"Keep turning the pages, for every chapter brings new wisdom and adventure."</span>
                  <h3>Enjoy<br> SHOPPING!</h3>
                  <div class="">
                     <a href="menu.php" class="button-one style-2 text-uppercase connect" data-text="SHOP NOW">SHOP NOW</a>
                  </div>
               </div>
               <div class="image">
                  <img src="images/book/got no bg.png" alt="">
               </div>
            </div>
         </div>
         <div class="swiper-pagination"></div>
      </div>
      <!-- <div class="custom-shape-divider-bottom-1713541612">
         <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200,0H0V120H281.94C572.9,116.24,602.45,3.86,602.45,3.86h0S632,116.24,923,120h277Z" class="shape-fill"></path>
         </svg>
      </div> -->
      <!-- <div class="torn"></div> -->
   </section>

   <section class="category my-5">
      <h1 class="title">Categories</h1>
      <div class="box-container">
         <a href="category.php?category=fast food" class="box">
            <img src="images/book/rom-removebg-preview.png" alt="">
            <h3>Romance</h3>
         </a>
         <a href="category.php?category=main dish" class="box">
            <img src="images/book/mys-removebg-preview.png" alt="">
            <h3>Mystery</h3>
         </a>
         <a href="category.php?category=drinks" class="box">
            <img src="images/book/fan-removebg-preview.png" alt="">
            <h3>Fantasy and Sci-Fi</h3>
         </a>

         <!-- <a href="category.php?category=desserts" class="box">
         <img src="images/cat-4.png" alt="">
         <h3>desserts</h3>
      </a> -->
      </div>

   </section>

   <section class="products">
      <!-- <div class="custom-shape-divider-bottom-1703130731">
         <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
         </svg>
      </div> -->
      <!-- <div class="custom-shape-divider-top-1703135017">
         <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
         </svg>
      </div> -->

      <h1 class="title">Latest in our Shop</h1>
      <div class="box-container">

         <?php
         $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
         $select_products->execute();
         if ($select_products->rowCount() > 0) {
            while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {
         ?>
               <form action="" method="post" class="box">
                  <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
                  <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
                  <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
                  <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
                  <input type="hidden" name="status" value="Buy">
                  <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
                  <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                  <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
                  <div class="flex">
                     <div class="col-8">
                        <div class="name"><?= $fetch_products['name']; ?></div>
                     </div>
                     <div class="col-4">
                        <div class="text-decoration-line-through fs-3 text-danger"><span>₱</span><?= $fetch_products['oldPrice']; ?></div>
                        <div class="price"><span>₱</span><?= $fetch_products['price']; ?></div>
                     </div>
                     <input type="hidden" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
                  </div>
                  <div class="row mt-3">
                     <div class="col-12">
                        <button type="submit" data-text="buy" class="button-one style-2 text-uppercase connect w-100 text-center" name="add_to_cart">Buy</button>
                     </div>
                  </div>
               </form>
         <?php
            }
         } else {
            echo '<p class="empty">no products added yet!</p>';
         }
         ?>

      </div>

      <div class="">
         <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-4 d-flex justify-content-center m-5"> <!-- Adjust column width for different screen sizes -->
               <a href="menu.php" class="hover-rent text-uppercase connect w-100 text-center">View All</a>
            </div>
         </div>
      </div>
   </section>
   <section class="about my-5">
      <div class="row">
         <div class="col-12">
            <div class="wrapper-about">
               <img src="./uploaded_img/4.png" alt="">
               <div class="about-us">
                  <div class="content">
                     <h3>Why choose us?</h3>
                     <p>
                        But BookLat is more than just a bookstore; it's a vibrant community of book enthusiasts. Join us to share recommendations, engage in discussions, and connect with fellow readers who share your passion. From seamless checkout to prompt customer support, our dedicated team is here to ensure your satisfaction every step of the way. Discover the joy of reading anew with BookLat, where every page turns into an adventure!
                     </p>
                     <div class="">
                        <div class="row d-flex justify-content-center">
                           <div class="col-12 col-md-4 d-flex justify-content-center m-5"> <!-- Adjust column width for different screen sizes -->
                              <a href="menu.php" class="hover-rent text-uppercase connect w-100 text-center">Our Products</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- <section class="contact">

      <div class="row">

         <div class="mapouter">
            <div class="gmap_canvas">
               <iframe src="https://maps.google.com/maps?hl=en&amp;q=bicol university&amp;t=k&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="width: 580px; height: 550px; border-radius: 25px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
               </iframe>
            </div>
         </div>

         <form action="" method="post">
            <h3>Tell us something!</h3>
            <input type="text" name="name" maxlength="50" class="box" placeholder="Enter your Name" required>
            <input type="number" name="number" min="0" max="9999999999" class="box" placeholder="Enter your Number" required maxlength="10">
            <input type="email" name="email" maxlength="50" class="box" placeholder="Enter your Email" required>
            <textarea name="msg" class="box" required placeholder="Enter your Message" maxlength="500" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" name="send" class="btn">
         </form>

      </div>

   </section> -->



















   <?php include 'components/footer.php'; ?>


   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".hero-slider", {
         loop: true,
         grabCursor: true,
         effect: "flip",
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
      });
   </script>

</body>

</html>