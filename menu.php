<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

include 'components/add_cart.php';
include 'components/rent.php';

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
      <div class="custom-shape-divider-bottom-1703159485">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
    </svg>
</div>
   </div>

   </div>
   <!-- menu section starts  -->

   <section class="products m-0">

      <!-- <div class="custom-shape-divider-bottom-1703130731">
         <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
         </svg>
      </div> -->

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
               <?php
               $pid = $fetch_products['id'];
               $select_product = $conn->prepare("SELECT * FROM `products` WHERE `id` = :pid");
               $select_product->bindParam(':pid', $pid);
               $select_product->execute();
               $result = $select_product->fetch(PDO::FETCH_ASSOC);
               ?>
               <!-- Modal -->
               <div class="modal fade" id="rent<?= $fetch_products['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                  <div class="modal-dialog modal-dialog-centered modal-lg">
                     <div class="modal-content" style="background-color: #e6e6e6;">
                        <div class="modal-header">
                           <h5 class="modal-title"><?= $result['name']; ?></h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-3">

                           <form action="" method="post" class="product">
                              <input type="hidden" name="pid" value="<?= $result['id']; ?>">
                              <input type="hidden" name="name" value="<?= $result['name']; ?>">
                              <input type="hidden" name="priceInput" value="">
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
                                       <div class="col-12">
                                          <div class="mb-3">
                                             <label for="date1" class="form-label fs-3">Start Date</label>
                                             <input type="date" class="form-control fs-3" id="getDate1" oninput="handleDate1Change()" min="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class=" row">
                                       <div class="col-12">
                                          <div class="mb-3">
                                             <label for="date2" class="form-label fs-3">End Date</label>
                                             <input type="date" class="form-control fs-3" id="getDate2" oninput="handleDate2Change()" min="">
                                          </div>
                                       </div>

                                    </div>
                                    <div class="row">
                                       <div class="mb-3 mt-3">
                                          <label for="calculated_price" class="form-label fs-3">Calculated Price</label>
                                          <input type="text" class="form-control fs-3" id="Bookprice" value="0" onchange="handlePriceChange()" readonly>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-12">
                                          <button type="submit" class="hover-rent text-uppercase connect w-100 text-center" name="rent" id="rentNow">Rent Now</button>
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

<script>
   document.getElementById("rentNow").disabled = true;

   function handlePriceChange() {
      // Your existing logic for calculating the price based on selected dates
      var calculatedPrice = parseInt(document.getElementById("Bookprice").value);
      var rentNowButton = document.getElementById("rentNow");

      if (calculatedPrice > 0) {
         rentNowButton.disabled = false;
      } else {
         rentNowButton.disabled = true;
      }
   }

   var today = new Date();
   var dd = String(today.getDate()).padStart(2, "0");
   var mm = String(today.getMonth() + 1).padStart(2, "0");
   var yyyy = today.getFullYear();
   today = yyyy + "-" + mm + "-" + dd;

   document.getElementById("getDate1").setAttribute("min", today);
   document.getElementById("getDate2").setAttribute("min", today);

   function handleDate1Change() {
      var selectedDate = document.getElementById("getDate1").value;
      document.getElementById("getDate2").setAttribute("min", selectedDate);
      updateTotalPrice();
   }

   function handleDate2Change() {
      updateTotalPrice();
   }

   function updateTotalPrice() {
      var startDate = new Date(document.getElementById("getDate1").value);
      var endDate = new Date(document.getElementById("getDate2").value);
      var priceInput = document.querySelector('input[name="priceInput"]');

      var timeDifference = endDate.getTime() - startDate.getTime();
      var daysDifference = Math.ceil(timeDifference / (1000 * 3600 * 24));

      var bookPrice = 20;
      var additionalCostPerDay = 10;

      var totalPrice = bookPrice + additionalCostPerDay * daysDifference;

      if (isNaN(totalPrice) || totalPrice < 20) {
         document.getElementById("Bookprice").value = 0;
      } else {
         document.getElementById("Bookprice").value = totalPrice;
         priceInput.value = totalPrice;
      }
      handlePriceChange();
   }
</script>


</html>