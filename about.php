<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>
   <section class="reviews">
      <h1 class="heading">About Us</h1>
      <p class="usus">At [Your Platform Name], we believe every woman deserves to feel safe and secure. Our mission is to create a technology-driven platform that empowers women to take control of their safety and build stronger communities. </p>
   </section>
   <section class="reviews">
      <h1 class="headin">🚀Our Mission </h1>
      <p class="ususus"> To provide a safe and supportive online platform for women to connect, share experiences, and access resources that enhance their safety and well-being.
      </p>
   </section>
   <section class="reviews">
      <h1 class="headin">💭Our Moto – Protecting What Matters </h1>
      <p class="ususus"> To provide a safe and supportive online platform for women to connect, share experiences, and access resources that enhance their safety and well-being.
      </p>
   </section>
   <section class="reviews">
      <h1 class="headin">🎨Our Story </h1>
      <p class="ususus">  Our approach is rooted in [key values, such as empowerment, innovation, and community]. We leverage cutting-edge technology to provide [list of key features, such as SOS alerts, location tracking, and community forums]. By fostering a supportive community and partnering with [relevant organizations], we are working to create a world where women feel empowered, safe, and connected.
      </p>
   </section>
   <section class="reviews">
      <h1 class="headin">💡 What Sets Us Apart  </h1>
      <p class="ususus">  Our approach is rooted in [key values, such as empowerment, innovation, and community]. We leverage cutting-edge technology to provide [list of key features, such as SOS alerts, location tracking, and community forums]. By fostering a supportive community and partnering with [relevant organizations], we are working to create a world where women feel empowered, safe, and connected.
      </p>
   </section>
   <section class="reviews">
      <h1 class="headin">🤝 Support </h1>
      <p class="ususus">"Empower yourself with knowledge and support. Our platform offers a wealth of educational resources, including informative articles, empowerment, and personal development.</p>
   </section>









   <?php include 'components/footer.php'; ?>

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".reviews-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 1,
            },
            768: {
               slidesPerView: 2,
            },
            991: {
               slidesPerView: 3,
            },
         },
      });
   </script>

</body>

</html>