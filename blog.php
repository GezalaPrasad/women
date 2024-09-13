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
   <title>blog</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <section class="reviews" id="blog">
   <h1 class="heading">Latest Blogs</h1>
            <div class="container">
              
                        
                    
                        
                   
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <div class="date"> 11 SEP</div>
                                <a href="#">
                                    <img src="./images/2.jpg" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h5><a href="https://www.vantagecircle.com/en/blog/womens-safety-workplace/">Women's Safety in the Workplace</a></h5>
                                <p>In the past decade, women have progressively earned a higher standard in the workplace</p>
                                <div class="btn-bar">
                                    <a href="https://www.vantagecircle.com/en/blog/womens-safety-workplace/" class="px-btn-arrow">
                                        <span>Read More</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">08 SEP</div>
                                <a href="https://www.iilsindia.com/blogs/women-safety/">
                                    <img src="./images/1.jpg" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h5><a href="https://www.iilsindia.com/blogs/women-safety/">Women Safety</a></h5>
                                <p>India is a country where special care is taken of the safety and respect of women.</p>
                                <div class="btn-bar">
                                    <a href="#" class="px-btn-arrow">
                                        <span>Read More</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">04 SEP</div>
                                <a href="https://vikaspedia.in/social-welfare/social-awareness/legal-awareness/legal-provisions-related-to-sexual-offences-against-women">
                                    <img src="./images/3.jpg" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h5><a href="https://vikaspedia.in/social-welfare/social-awareness/legal-awareness/legal-provisions-related-to-sexual-offences-against-women">Legal provisions related to sexual offences against Women</a></h5>
                                <p>The law (Section 354 IPC) makes it a special crime to use force against a woman,</p>
                                <div class="btn-bar">
                                    <a href="#" class="px-btn-arrow">
                                        <span>Read More</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>






   <?php include 'components/footer.php'; ?>

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <script src="js/script.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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