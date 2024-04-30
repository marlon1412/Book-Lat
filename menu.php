<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
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
   <link rel="stylesheet" href="css/style.css">

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
         if($select_products->rowCount() > 0){
            while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
      ?>
      <form action="" method="post" class="box">
         <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
         <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
         <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
         <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
         <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
         <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
         <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
         <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
         <div class="name"><?= $fetch_products['name']; ?></div>
         <div class="flex">
            <div class="price"><span>₱</span><?= $fetch_products['oldPrice']; ?></div>
            <div class="price"><span>₱</span><?= $fetch_products['price']; ?></div>
            <div class="price"><span>₱</span><?= $fetch_products['description']; ?></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2"">
         </div>
         <div>
         <button type="button" class="btn bg-success" data-bs-toggle="modal" data-bs-target="#rent<?= $fetch_products['id']; ?>">Rent</button>
         <button type="button" class="btn bg-primary">Buy</button>
         </div>

      </form>

         <!-- Rent Modal -->
<div id="rent<?= $fetch_products['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title name" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <div class="row">
            <div class="col-6">
            <div class="card w-100">
               <div class="card-body">
               <?= $fetch_products['name']; ?>
               </div>
            </div>
            </div>
            <div class="col-6">
               <div class="row">
                  <div class="col-6">
                  <div class="mb-3">
                  <label for="date1" class="form-label">Pick Date & Time</label>
                  <input type="date" class="form-control" id="date1" placeholder="Date">
                  </div>
                  </div>
                  <div class="col-6">
                  <div class="mb-3">
                  <label for="time1" class="form-label"></label>
                  <input type="time" class="form-control" id="time1" placeholder="Time">
                  </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-6">
                  <div class="mb-3">
                  <label for="date2" class="form-label">Drop Off Date & Time</label>
                  <input type="date" class="form-control" id="date2" placeholder="Date">
   
                  </div>
                  </div>
                  <div class="col-6">
                  <div class="mb-3">
                  <label for="time2" class="form-label"></label>
                  <input type="time" class="form-control" id="time2" placeholder="Time">
                  </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                  <div class="mb-3">
                  <label for="calculatedPrice" class="form-label">Calculated Price</label>
                  <input type="text" class="form-control price" id="calculatedPrice" value="<?= $fetch_products['price']; ?>">
                  </div>
               </div>
                  </div>
               
               <div class="row">
                  <div class="col-12">
                  <select class="form-select form-select" aria-label="Default select example">
                  <option selected>COD</option>
                  <option value="1">GCASH</option>
                  <option value="2">CARD</option>
               </select>
                  </div>    
               </div>
               <div class="row">
                  <button type="button" class="btn bg-success">Rent Now</button>
               </div>
            </div>
         </div>
      </div>
    </div>
  </div>
</div>



      <?php
            }
         }else{
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