<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">

<section class="home">


<br><br><br><br><br><br><br><br><br><br><br><br>
   <h1 class="quote">Protecting what matters</h1>
<br><br><br><br><br><br><br><br><br><br><br><br>
</section>
</div>




<section class="section testimonial-section">
<div class="text-center mb-5">
            <h2 class="testimonial-heading">What our community is saying</h2>
        </div>
    <div class="container py-5">
        <!-- Heading -->
        
    
        <!-- Main Review Section -->
        <div class="row justify-content-center">
            <!-- Left Review -->
            <div class="col-lg-4 col-md-6 abcd">
                <div class="testimonial-card p-4">
                    <p>“I loved my stay here. The activities were plentiful, and the vibes were fantastic. The kitchen and living space had everything you need, plus the gym was a great amenity...”</p>
                    <h6>Kiev B. <span class="rating">★ 4.5</span></h6>
                </div>
            </div>
    
            <!-- Featured Review -->
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card p-5 text-center featured-review">
                    <h2 class="rating">4.9</h2>
                    <p class="mb-1 rating-text">Excellent!</p>
                    <p class="text-muted">Based on 33,000 reviews</p>
                    <p>★★★★★</p>
                </div>
            </div>
    
            <!-- Right Review -->
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card p-4">
                    <p>“I had an incredible time staying here. The place was peaceful and offered stunning views. There was a great sense of community, which I really appreciated...”</p>
                    <h6>Daniel B. <span class="rating">★ 4.9</span></h6>
                </div>
            </div>
        </div>
    
        <!-- Other Reviews Section -->
        <div class="row">
            <!-- Repeat this testimonial-card structure for each testimonial -->
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card p-4">
                    <p>“This is an extremely beautiful, modern house with everything you need for your stay. Claire is a nice host. She is doing everything that your stay is a whole pleasure...”</p>
                    <h6>Matthias B. <span class="rating">★ 5.0</span></h6>
                </div>
            </div>
    
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card p-4">
                    <p>“I absolutely loved my time here. The people are incredibly kind, and the owner and staff do everything they can to make sure everyone feels part of a special community...”</p>
                    <h6>Angela G. <span class="rating">★ 4.6</span></h6>
                </div>
            </div>
    
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card p-4">
                    <p>“I stayed at this coliving space, and the views were absolutely incredible. It's definitely worth a visit if you're looking for a breathtaking scenery.”</p>
                    <h6>Alex C. <span class="rating">★ 5.0</span></h6>
                </div>
            </div>
    
            <!-- Add more testimonial cards similarly as per requirement -->
        </div>
    </div>
  </section>
 <!-- Teatimonials ends -->






<?php include 'components/footer.php'; ?>
<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script> 
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>




</body>
</html>