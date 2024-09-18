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




<section class="section testimonial-section" id="story">
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
                    <p>“When I started receiving threatening messages online, me once-safe digital world quickly became a source of dread. The messages were filled with aggressive threats and invasive demands, leaving me feeling cornered and unsafe. Despite my attempts to block the sender and report the harassment, the fear lingered, casting a shadow over my daily life. With support from friends and a counselor, I began to regain my sense of security, learning to navigate the online space with greater caution while standing strong in me resolve to not let the threats define me....”</p>
                    <h6>KB. <span class="rating">★ 4.5</span></h6>
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
                    <p>“After surviving a sexual assault, I faced my trauma with incredible courage. Despite the overwhelming fear and pain, I reported the assault and sought support, determined not to let the experience define me. Through therapy and the unwavering support of friends and family, I began to rebuild my life, transforming my pain into a source of strength. My bravery in confronting the assault and advocating for myself became a powerful testament to my resilience, inspiring others to find their own paths to healing and justice....”</p>
                    <h6>DL. <span class="rating">★ 4.9</span></h6>
                </div>
            </div>
        </div>
    
        <!-- Other Reviews Section -->
        <div class="row">
            <!-- Repeat this testimonial-card structure for each testimonial -->
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card p-4">
                    <p>“As I struggled against an unwanted advance from a man at the festival, I felt a surge of panic and helplessness. Suddenly, Jake, who had noticed the uncomfortable scene from a few feet away, stepped in without hesitation. He approached calmly but assertively, placing himself between me and the man while addressing the situation with a firm, "I think  I made it clear I was not interested." His intervention not only helped diffuse the immediate threat but also provided Me with the reassurance and support I needed in that distressing moment, restoring my sense of safety and dignity....”</p>
                    <h6>MB. <span class="rating">★ 5.0</span></h6>
                </div>
            </div>
    
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card p-4">
                    <p>“When I spoke up about my colleague's inappropriate comments, I met with a dismissive wave and told I was "overreacting" and "too sensitive." Despite my clear discomfort I was made to feel as though I was imagining the harassment. This constant minimization led me to question my own perceptions and feelings, leaving me confused and doubting whether my experiences were valid. As a result, I felt isolated and powerless, struggling to find a way to address the behavior while battling the internalized uncertainty instilled by the gaslighting....”</p>
                    <h6>AG. <span class="rating">★ 4.6</span></h6>
                </div>
            </div>
    
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card p-4">
                    <p>“I felt my heart race as my supervisor cornered me in the office, his hand lingering too long on my shoulder while he made suggestive comments about my appearance. Despite my attempts to deflect and make it clear I was uncomfortable, his advances persisted. The encounter left me feeling violated and distressed, questioning whether I could safely continue working in the environment. The harassment not only undermined my sense of security but also made me anxious about speaking up, fearing retaliation and further humiliation..”</p>
                    <h6>Al. <span class="rating">★ 5.0</span></h6>
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