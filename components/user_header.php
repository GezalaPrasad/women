<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<header class="header ">

   <section class="flex">

      <a href="index.php" class="logo">AaryaShakti<span>.</span></a>

      <nav class="navbar" >
         <a href="index.php">home</a>
         <a href="about.php">about</a>
         <a href="blog.php">blog</a>
         <a href="talks.php">talks</a>
         <a href="shop.php"  target="_blank">shop </a>
         <a href="#story">story</a>
      </nav>
    

      <div style="color:pink ;" class="icons">
      <?php
            $count_wishlist_items = $conn->prepare("SELECT * FROM wishlist WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
            $total_wishlist_counts = $count_wishlist_items->rowCount();

            $count_cart_items = $conn->prepare("SELECT * FROM cart WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_counts = $count_cart_items->rowCount();
         ?>
         <div id="menu-btn"style="color:pink ;" class="fas fa-bars"></div>
         <a href="wishlist.php"><i style="color:pink ;"class="fas fa-heart"></i><span style="color:pink ;">(<?= $total_wishlist_counts; ?>)</span></a>
         <a href="cart.php"><i style="color:pink ;"class="fas fa-shopping-cart"></i><span style="color:pink ;">(<?= $total_cart_counts; ?>)</span></a>
         <a href="search_page.php"><i style="color:pink ;" class="fas fa-search"></i></a>
        
         <div id="user-btn" style="color:pink ;" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <?php          
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile["name"]; ?></p>
         <a href="update_user.php" class="btn">update profile</a>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">register</a>
            <a href="user_login.php" class="option-btn">login</a>
         </div>
         <a href="components/user_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 
         <?php
            }else{
         ?>
         <p>please login or register first!</p>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">register</a>
            <a href="user_login.php" class="option-btn">login</a>
         </div>
         <?php
            }
         ?>      
         
         
      </div>

   </section>

</header>