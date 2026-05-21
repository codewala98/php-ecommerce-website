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
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>KNOW ABOUT US</h3>
   <p> <a href="home.php">Back to Home </a></p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         
         <h3>why choose us?</h3>
         <p>Dear Readers, We offer huge collection of books in diverse category Computer Science books proposed by different institutes as syllabus across the country. Besides to this, we also offer a large collection of Books at very fair pricing.</p>
         <p>We attempt to extend the customer satisfaction by catering easy user-friendly search engine, quick and user-friendly payment options and quicker delivery systems. Upside to all of this, we are disposed to provide exciting offers and pleasant discounts on our books.</p>
         <p>e would like to thank you for shopping with us. You can write us for any new thoughts at “email-id” helping us to improvise for the reader satisfaction</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>



<section class="authors">

   <h1 class="title">KNOW ABOUT AUTHORS</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/Yashvant_Kanetkar.jpg" alt="">
         <div class="share">
            <a href="https://en.wikipedia.org/wiki/Yashavant_Kanetkar" class="fab fa-wikipedia-w" aria-hidden="true"></a>
         </div>
         <h3>Yashvant Kanetkar</h3>
      </div>

      <div class="box">
         <img src="images/R. Nageswara Rao.jpg" alt="">
         <div class="share">
            
            <a href="https://in.linkedin.com/in/dr-r-nageswara-rao" class="fab fa-linkedin"></a>
         </div>
         <h3>R. Nageswara Rao</h3>
      </div>

      <div class="box">
         <img src="images/reema thareja.jpg" alt="">
         <div class="share">
            <a href="https://in.linkedin.com/in/reema-thareja-9986a014" class="fab fa-linkedin"></a>
         </div>
         <h3>Reema Thareja</h3>
      </div>

      

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>