<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
   header('location:home.php');
};

if (isset($_POST['submit'])) {

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $method = $_POST['method'];
   $method = filter_var($method, FILTER_SANITIZE_STRING);
   $address = $_POST['address'];
   $address = filter_var($address, FILTER_SANITIZE_STRING);
   $total_products = $_POST['total_products'];
   $total_price = $_POST['total_price'];

   $check_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
   $check_cart->execute([$user_id]);

   if ($check_cart->rowCount() > 0) {

      if ($address == '') {
         $message[] = 'please add your address!';
      } else {

         $insert_order = $conn->prepare("INSERT INTO `orders`(user_id, name, number, email, method, address, total_products, total_price) VALUES(?,?,?,?,?,?,?,?)");
         $insert_order->execute([$user_id, $name, $number, $email, $method, $address, $total_products, $total_price]);

         $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
         $delete_cart->execute([$user_id]);

         $message[] = 'order placed successfully!';
      }
   } else {
      $message[] = 'your cart is empty';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css?v=<? time() ?>">

</head>

<body>

   <!-- header section starts  -->
   <?php include 'components/user_header.php'; ?>
   <!-- header section ends -->

   <div class="heading">
      <h3>checkout</h3>
      <p><a href="home.php">Home</a> <span> / Checkout</span></p>
   </div>

   <section class="">

      <h1 class="title">order summary</h1>
      <div class="title"><a href="cart.php" class="hover-rent text-uppercase connect w-100 text-center px-3">View cart</a></div>


      <form action="" method="post">
         <div class="our-order payment-details connect">
            <table>
               <thead>
                  <tr>
                     <th><strong>Delivery Address</strong></th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>
                        <p><i class="fas fa-map-marker-alt"></i> <span><?php echo ($fetch_profile['address'] == '') ? ' Please enter your address' : $fetch_profile['address']; ?></span></p>
                     </td>
                     <td class="text-end">
                        <div class="row justify-content-end">
                           <div class="col-6">
                              <a href="update_address.php" data-text="Update Address" class="button-one style-2 text-uppercase connect w-100 text-center">Update Address</a>
                           </div>
                        </div>

                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="">
            <?php
            $grand_total = 0;
            $cart_items = [];
            $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $select_cart->execute([$user_id]);
            ?>
            <div class="our-order payment-details connect">
               <table>
                  <thead>
                     <tr>
                        <th><strong>Product</strong></th>
                        <th class="text-end"><strong>Total</strong></th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     if ($select_cart->rowCount() > 0) {
                        while ($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)) {
                     ?>
                           <tr>
                              <td><?= $fetch_cart['name'] ?> x <?= $fetch_cart['quantity'] ?></td>
                              <td class="text-end">$<?= $fetch_cart['price'] ?></td>
                           </tr>
                     <?php
                           $cart_items[] = $fetch_cart['name'] . ' (' . $fetch_cart['price'] . ' x ' . $fetch_cart['quantity'] . ') - ';
                           $grand_total += ($fetch_cart['price'] * $fetch_cart['quantity']);
                        }
                     } else {
                        echo '<tr><td colspan="2" class="empty">Your cart is empty!</td></tr>';
                     }
                     ?>
                     <tr>
                        <td><strong class="text-danger">Order Total</strong> </td>
                        <td class="text-end"><strong class="text-danger">₱<?= $grand_total; ?></strong></td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <input type="hidden" name="total_products" value="<?= implode($cart_items); ?>">
            <input type="hidden" name="total_price" value="<?= $grand_total; ?>">
            <input type="hidden" name="name" value="<?= $fetch_profile['name'] ?>">
            <input type="hidden" name="number" value="<?= $fetch_profile['number'] ?>">
            <input type="hidden" name="email" value="<?= $fetch_profile['email'] ?>">
            <input type="hidden" name="address" value="<?= $fetch_profile['address'] ?>">
            <div class="our-order payment-details connect">
               <table>
                  <thead>
                     <tr>
                        <th><strong>Product</strong></th>
                        <th class="text-end"><strong><select name="method" class="box" required>
                                 <option value="" disabled selected>Select payment method --</option>
                                 <option value="cash on delivery">Cash on Delivery</option>
                                 <option value="credit card">Credit card</option>
                                 <option value="paytm">Gcash</option>
                                 <option value="paypal">Paypal</option>
                              </select></strong></th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td><strong class="text-danger">Total Payment</strong> </td>
                        <td class="text-end"><strong class="text-danger">₱<?= $grand_total; ?></strong></td>
                     </tr>
                     <tr>
                        <td>
                           <div class="row">
                              <div class="col-6">
                                 <a href="update_profile.php" data-text="Update Info" class="button-one style-2 text-uppercase connect w-100 text-center">Update info</a>
                        </td>
            </div>
         </div>
         <td class="text-end">
            <div class="row d-flex justify-content-end">
               <div class="col-6">
                  <input type="submit" value="Place order" data-text="Place Order" class="button-one style-2 text-uppercase connect w-100 text-center <?= ($fetch_profile['address'] == '') ? 'disabled' : ''; ?>" style="width:100%; background:var(--red); color:var(--white);" name="submit">
               </div>
            </div>
         </td>
         </tr>
         </tbody>
         </table>
         </div>
      </form>


      <!-- <div class="custom-shape-divider-bottom-1703159485">
         <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
         </svg>
      </div> -->

   </section>









   <!-- footer section starts  -->
   <?php include 'components/footer.php'; ?>
   <!-- footer section ends -->






   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>