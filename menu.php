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
   <title>Book Store</title>

   <!-- Bootstrap Link -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css?v=<?php time() ?>">

</head>

<body>



   <!-- header section starts  -->
   <?php include 'components/user_header.php'; ?>
   <!-- header section ends -->

   <div class="heading">
      <h3>Our Book Store</h3>
      <p><a href="home.php">Home</a> <span> / Books</span></p>

   </div>

   </div>
   <!-- menu section starts  -->

   <section class="products">

      <div class="custom-shape-divider-bottom-1703130731">
         <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
         </svg>
      </div>

      <h1 class="title">Latest in the Shop</h1>
      <div class="box-container">
         <?php
         $select_products = $conn->prepare("SELECT * FROM `products`");
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
                     <div class="col-8">
                        <button type="button" class="hover-rent text-uppercase connect w-100 text-center" data-bs-toggle="modal" data-bs-target="#rent<?= $fetch_products['id']; ?>">Rent</button>
                     </div>
                     <div class="col-4">
                        <button type="submit" data-text="buy" class="button-one style-2 text-uppercase connect w-100" name="add_to_cart">Buy</button>
                     </div>
                  </div>
               </form>

               <!-- Modal -->
               <div class="modal fade" id="rent<?= $fetch_products['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h1 class="modal-title text-black" id="exampleModalLabel">Modal title</h1>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           <?php
                           $pid = $fetch_products['id'];
                           $select_product = $conn->prepare("SELECT * FROM `products` WHERE `id` = :pid");
                           $select_product->bindParam(':pid', $pid);
                           $select_product->execute();
                           $result = $select_product->fetch(PDO::FETCH_ASSOC);
                           ?>
                           <form action="" method="post" class="box">
                              <input type="hidden" name="pid" value="<?= $result['id']; ?>">
                              <input type="hidden" name="name" value="<?= $result['name']; ?>">
                              <input type="hidden" name="price" value="<?= $result['price']; ?>">
                              <input type="hidden" name="image" value="<?= $result['image']; ?>">
                              <input type="hidden" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
                              <input type="hidden" name="status" value="Rent">
                              <div class="row">
                                 <div class="col-6">
                                    <div class="card">
                                       <div class="card-body">
                                          <div class="picture-wrapper">
                                             <img src="uploaded_img/<?= $result['image']; ?>" alt="">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <div class="row">
                                       <div class="col-6">
                                          <div class="mb-3">
                                             <label for="date1" class="form-label fs-3">Select Date</label>
                                             <input type="date" class="form-control fs-3" id="date1">
                                          </div>
                                       </div>
                                       <div class="col-6">
                                          <div class="mb-3">
                                             <label for="time1" class="form-label fs-3">Time</label>
                                             <input type="time" class="form-control fs-3" id="time1">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-6">
                                          <div class="mb-3">
                                             <label for="date2" class="form-label fs-3">Select Date</label>
                                             <input type="date" class="form-control fs-3" id="date2">
                                          </div>
                                       </div>
                                       <div class="col-6">
                                          <div class="mb-3">
                                             <label for="time2" class="form-label fs-3">Time</label>
                                             <input type="time" class="form-control fs-3" id="time2">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="mb-3 mt-3">
                                          <label for="calculated_price" class="form-label fs-3">Calculated Price</label>
                                          <input type="text" class="form-control fs-3" id="calculated_price" value="<?= $result['price']; ?>">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-12">
                                          <button type="submit" class="bg-primary w-100 fs-1 text-white" name="add_to_cart">Rent Now</button>
                                       </div>

                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
         <?php
            }
         } else {
            echo '<p class="empty">no products added yet!</p>';
         }
         ?>
      </div>



   </section>

   <!-- menu section ends -->

   <!-- footer section starts  -->
   <?php include 'components/footer.php'; ?>
   <!-- footer section ends -->

</body>

</html>