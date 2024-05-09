<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
   header('location:home.php');
};

if (isset($_POST['delete'])) {
   $cart_id = $_POST['cart_id'];
   $delete_cart_item = $conn->prepare("DELETE FROM `cart` WHERE id = ?");
   $delete_cart_item->execute([$cart_id]);
   $message[] = 'cart item deleted!';
}

if (isset($_POST['delete_all'])) {
   $delete_cart_item = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
   $delete_cart_item->execute([$user_id]);
   // header('location:cart.php');
   $message[] = 'deleted all from cart!';
}

if (isset($_POST['update_qty'])) {
   $cart_id = $_POST['cart_id'];
   $qty = $_POST['qty'];
   $qty = filter_var($qty, FILTER_SANITIZE_STRING);
   $update_qty = $conn->prepare("UPDATE `cart` SET quantity = ? WHERE id = ?");
   $update_qty->execute([$qty, $cart_id]);
   $message[] = 'cart quantity updated';
}

$grand_total = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Bootstrap Link -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css?v=<?php time() ?>">

</head>

<body>

   <!-- header section starts  -->
   <?php include 'components/user_header.php'; ?>
   <!-- header section ends -->

   <div class="heading">
      <h3>shopping cart</h3>
      <p><a href="home.php">Home</a> <span> / Cart</span></p>
   </div>

   <!-- shopping cart section starts  -->

   <section class="">
      <div class="margin-wrapper">
         <table class="cart-table-header connect mb-5 table table-dark table-striped-columns table-responsive">
            <thead>
               <tr class="">
                  <th scope="col" class="py-3" style="width: 16%;">Product</th>
                  <th scope="col" class="py-3" style="width: 16%;">Price</th>
                  <th scope="col" class="py-3" style="width: 16%;">Quantity</th>
                  <th scope="col" class="py-3" style="width: 16%;">Total</th>
                  <th scope="col" class="py-3" style="width: 16%;">Status</th>
                  <th scope="col" class="py-3" style="width: 16%;">Remove</th>
               </tr>
            </thead>
         </table>
         <table class="cart-table-header connect mb-5 table-responsive">
            <tbody>
               <?php
               $grand_total = 0;
               $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
               $select_cart->execute([$user_id]);
               if ($select_cart->rowCount() > 0) {
                  while ($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)) {
               ?>
                     <form action="" method="post" class="">
                        <input type="hidden" name="cart_id" value="<?= $fetch_cart['id']; ?>">
                        <!-- <a href="quick_view.php?pid=<?= $fetch_cart['pid']; ?>" class="fas fa-eye"></a> -->
                        <tr>
                           <td scope="col" class="py-3" style="width: 16%;">
                              <div class="product">
                                 <div class="flex-cart">
                                    <div class="wrapper-cart">
                                       <img src="uploaded_img/<?= $fetch_cart['image']; ?>" alt="">
                                    </div>
                                    <div class="name"><?= $fetch_cart['name']; ?></div>
                                 </div>
                              </div>
                           </td>
                           <td scope="col" class="py-3" style="width: 16%;">
                              <div class="price"><span>₱</span><?= $fetch_cart['price']; ?></div>
                           </td>
                           <td scope="col" class="py-3" style="width: 16%;"><input type="number" name="qty" class="qty" min="1" max="99" value="<?= $fetch_cart['quantity']; ?>" maxlength="2">
                              <button type="submit" class="fas fa-edit" name="update_qty"></button>
                           </td>
                           <td scope="col" class="py-3" style="width: 16%;">
                              <div class="sub-total"> <span>₱<?= $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?></span> </div>
                           </td>
                           <td scope="col" class="py-3" style="width: 16%;">
                              <div class="price"><?= $fetch_cart['status']; ?></div>
                           </td>
                           <td scope="col" class="py-3" style="width: 16%;"><button type="submit" class="fas fa-times bg-danger p-3" name="delete" onclick="return confirm('delete this item?');"></button></td>
                        </tr>
                     </form>
               <?php
                     $grand_total += $sub_total;
                  }
               } else {
                  echo '<p class="empty">your cart is empty</p>';
               }
               ?>
            </tbody>
         </table>



         <div class="row">
            <div class="col-6 d-flex align-items-end">

            </div>
            <div class="col-6">
               <div class="row">
                  <div class="our-order payment-details">
                     <table class="cart-table-header connect mb-5">
                        <tbody>
                           <tr>
                              <td>Order Total</td>
                              <td class="text-end">$<?= $grand_total; ?></td>
                           </tr>
                        </tbody>
                     </table>

                  </div>
               </div>
               <div class="row">
                  <div class="mt-20 text-end">
                     <a data-text="Checkout" class="button-one style-2 text-uppercase connect <?= ($grand_total > 1) ? '' : 'disabled'; ?>" href="checkout.php">Checkout</a><br>
                  </div>
               </div>

            </div>
         </div>

      </div>




   </section>

   <!-- shopping cart section ends -->










   <!-- footer section starts  -->
   <?php include 'components/footer.php'; ?>
   <!-- footer section ends -->








   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>