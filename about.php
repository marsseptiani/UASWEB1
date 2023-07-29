<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>Anda bisa memilih Tasmopolitan karena kami menawarkan koleksi tas yang unik dan trendy, dengan perhatian terhadap detail dan gaya terkini. Kami juga berkomitmen untuk menyediakan produk berkualitas tinggi yang tahan lama dan dapat diandalkan. Selain itu, pelayanan pelanggan yang ramah dan profesional adalah prioritas kami, kami siap membantu Anda dengan senang hati dalam setiap langkah perjalanan belanja Anda.</p>
         <!-- <p>Setiap pembelian Anda mendukung upaya kami dalam menjaga lingkungan dan menciptakan perubahan positif bagi masa depan planet kita.</p> -->
         <a href="contact.php" class="btn">Contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.jpg" alt="">
         <p> Tas ini begitu menawan. Sangat cocok untuk segala kesempatan! </p>
            <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kartika Sari</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Kualitas tasnya luar biasa!!! Pengiriman juga sangat cepat. </p>
             <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sarah</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.jpg" alt="">
         <p>Tasnya sangat elegan dan trendy. Saya sangat puas dengan pembelian ini.</p>
            <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ananda Zika</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.jpg" alt="">
         <p>Tasnya lebih bagus daripada yang saya harapkan. Terima kasih!</p>
            <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Angga</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.jpg" alt="">
         <p>Pilihan terbaik untuk tas berkualitas tinggi. Saya merekomendasikannya. </p>
             <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Dika</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>
            Tasnya nyaman digunakan sepanjang hari. Worth it! </p>
             <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Danian</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Greate Designer</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Melita</h3>
      </div>

      <div class="box">
         <img src="images/author2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Riana</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Alex</h3>
      </div>

   

      
      

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>