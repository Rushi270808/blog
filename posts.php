

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>posts</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   

<header class="header">

   <section class="flex">

      <a href="home.php" class="logo">Blogo.</a>

      <form action="search.php" method="POST" class="search-form">
         <input type="text" name="search_box" class="box" maxlength="100" placeholder="search for blogs" required>
         <button type="submit" class="fas fa-search" name="search_btn"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <nav class="navbar">
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="posts.php"> <i class="fas fa-angle-right"></i> posts</a>
         <a href="all_category.php"> <i class="fas fa-angle-right"></i> category</a>
         <a href="authors.php"> <i class="fas fa-angle-right"></i> authors</a>
         <a href="login.php"> <i class="fas fa-angle-right"></i> login</a>
         <a href="register.php"> <i class="fas fa-angle-right"></i> register</a>
      </nav>

      <div class="profile">
                     <p class="name">please login first!</p>
            <a href="login.php" class="option-btn">login</a>
               </div>

   </section>

</header>
<section class="posts-container">

   <h1 class="heading">latest posts</h1>

   <div class="box-container">

            <form class="box" method="post">
         <input type="hidden" name="post_id" value="1">
         <input type="hidden" name="admin_id" value="1">
         <div class="post-admin">
            <i class="fas fa-user"></i>
            <div>
               <a href="author_posts.php?author=admin">admin</a>
               <div>2023-10-06</div>
            </div>
         </div>
         
                  <img src="uploaded_img/medal.jpeg" class="post-image" alt="">
                  <div class="post-title">Another medal for india in Asian games</div>
         <div class="post-content content-150">Another Silver for India in the Women&#39;s 800m event at the Asian Games. Congratulations 
@HarmilanBains
 on this splendid performance. She is a great source of inspiration for all aspiring athletes.
</div>
         <a href="view_post.php?post_id=1" class="inline-btn">read more</a>
         <a href="category.php?category=sports" class="post-cat"> <i class="fas fa-tag"></i> <span>sports</span></a>
         <div class="icons">
            <a href="view_post.php?post_id=1"><i class="fas fa-comment"></i><span>(1)</span></a>
            <button type="submit" name="like_post"><i class="fas fa-heart" style="  "></i><span>(1)</span></button>
         </div>
      
      </form>
            <form class="box" method="post">
         <input type="hidden" name="post_id" value="2">
         <input type="hidden" name="admin_id" value="1">
         <div class="post-admin">
            <i class="fas fa-user"></i>
            <div>
               <a href="author_posts.php?author=admin">admin</a>
               <div>2023-10-06</div>
            </div>
         </div>
         
                  <img src="uploaded_img/summit.jpeg" class="post-image" alt="">
                  <div class="post-title">10th vibrant gujurat global summit</div>
         <div class="post-content content-150">A Curtain Raiser to the #VibrantGujaratGlobalSummit 2024 is scheduled on Friday, Oct 6, 2023, 11:30 am onwards at Hotel Taj Palace, Sardar Patel Marg, New Delhi. This event aims to engage with industry and business leaders and extend invitations to the 10th edition of the summit.</div>
         <a href="view_post.php?post_id=2" class="inline-btn">read more</a>
         <a href="category.php?category=news" class="post-cat"> <i class="fas fa-tag"></i> <span>news</span></a>
         <div class="icons">
            <a href="view_post.php?post_id=2"><i class="fas fa-comment"></i><span>(0)</span></a>
            <button type="submit" name="like_post"><i class="fas fa-heart" style="  "></i><span>(1)</span></button>
         </div>
      
      </form>
            <form class="box" method="post">
         <input type="hidden" name="post_id" value="3">
         <input type="hidden" name="admin_id" value="1">
         <div class="post-admin">
            <i class="fas fa-user"></i>
            <div>
               <a href="author_posts.php?author=admin">admin</a>
               <div>2023-10-06</div>
            </div>
         </div>
         
                  <img src="uploaded_img/world cup.jpeg" class="post-image" alt="">
                  <div class="post-title">World cup captains meet together</div>
         <div class="post-content content-150">What will be the biggest upset of World Cup 2023?
</div>
         <a href="view_post.php?post_id=3" class="inline-btn">read more</a>
         <a href="category.php?category=entertainment" class="post-cat"> <i class="fas fa-tag"></i> <span>entertainment</span></a>
         <div class="icons">
            <a href="view_post.php?post_id=3"><i class="fas fa-comment"></i><span>(0)</span></a>
            <button type="submit" name="like_post"><i class="fas fa-heart" style="  "></i><span>(0)</span></button>
         </div>
      
      </form>
            <form class="box" method="post">
         <input type="hidden" name="post_id" value="4">
         <input type="hidden" name="admin_id" value="1">
         <div class="post-admin">
            <i class="fas fa-user"></i>
            <div>
               <a href="author_posts.php?author=admin">admin</a>
               <div>2023-10-06</div>
            </div>
         </div>
         
                  <img src="uploaded_img/cricket.jpeg" class="post-image" alt="">
                  <div class="post-title">AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</div>
         <div class="post-content content-150">BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB</div>
         <a href="view_post.php?post_id=4" class="inline-btn">read more</a>
         <a href="category.php?category=comedy" class="post-cat"> <i class="fas fa-tag"></i> <span>comedy</span></a>
         <div class="icons">
            <a href="view_post.php?post_id=4"><i class="fas fa-comment"></i><span>(0)</span></a>
            <button type="submit" name="like_post"><i class="fas fa-heart" style="  "></i><span>(0)</span></button>
         </div>
      
      </form>
            <form class="box" method="post">
         <input type="hidden" name="post_id" value="5">
         <input type="hidden" name="admin_id" value="1">
         <div class="post-admin">
            <i class="fas fa-user"></i>
            <div>
               <a href="author_posts.php?author=admin">admin</a>
               <div>2023-10-06</div>
            </div>
         </div>
         
                  <img src="uploaded_img/cycle.jpeg" class="post-image" alt="">
                  <div class="post-title">CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC</div>
         <div class="post-content content-150">DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD</div>
         <a href="view_post.php?post_id=5" class="inline-btn">read more</a>
         <a href="category.php?category=design and development" class="post-cat"> <i class="fas fa-tag"></i> <span>design and development</span></a>
         <div class="icons">
            <a href="view_post.php?post_id=5"><i class="fas fa-comment"></i><span>(0)</span></a>
            <button type="submit" name="like_post"><i class="fas fa-heart" style="  "></i><span>(0)</span></button>
         </div>
      
      </form>
            <form class="box" method="post">
         <input type="hidden" name="post_id" value="6">
         <input type="hidden" name="admin_id" value="1">
         <div class="post-admin">
            <i class="fas fa-user"></i>
            <div>
               <a href="author_posts.php?author=admin">admin</a>
               <div>2023-10-06</div>
            </div>
         </div>
         
                  <img src="uploaded_img/football.jpeg" class="post-image" alt="">
                  <div class="post-title">EEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE</div>
         <div class="post-content content-150">FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF</div>
         <a href="view_post.php?post_id=6" class="inline-btn">read more</a>
         <a href="category.php?category=news" class="post-cat"> <i class="fas fa-tag"></i> <span>news</span></a>
         <div class="icons">
            <a href="view_post.php?post_id=6"><i class="fas fa-comment"></i><span>(0)</span></a>
            <button type="submit" name="like_post"><i class="fas fa-heart" style="  "></i><span>(1)</span></button>
         </div>
      
      </form>
            <form class="box" method="post">
         <input type="hidden" name="post_id" value="7">
         <input type="hidden" name="admin_id" value="1">
         <div class="post-admin">
            <i class="fas fa-user"></i>
            <div>
               <a href="author_posts.php?author=admin">admin</a>
               <div>2023-10-06</div>
            </div>
         </div>
         
                  <img src="uploaded_img/hockey.jpeg" class="post-image" alt="">
                  <div class="post-title">GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG</div>
         <div class="post-content content-150">HHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH</div>
         <a href="view_post.php?post_id=7" class="inline-btn">read more</a>
         <a href="category.php?category=food and drinks" class="post-cat"> <i class="fas fa-tag"></i> <span>food and drinks</span></a>
         <div class="icons">
            <a href="view_post.php?post_id=7"><i class="fas fa-comment"></i><span>(0)</span></a>
            <button type="submit" name="like_post"><i class="fas fa-heart" style="  "></i><span>(0)</span></button>
         </div>
      
      </form>
            <form class="box" method="post">
         <input type="hidden" name="post_id" value="8">
         <input type="hidden" name="admin_id" value="1">
         <div class="post-admin">
            <i class="fas fa-user"></i>
            <div>
               <a href="author_posts.php?author=admin">admin</a>
               <div>2023-10-06</div>
            </div>
         </div>
         
                  <img src="uploaded_img/javelin throw.jpeg" class="post-image" alt="">
                  <div class="post-title">IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII</div>
         <div class="post-content content-150">JJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJ</div>
         <a href="view_post.php?post_id=8" class="inline-btn">read more</a>
         <a href="category.php?category=movies and animations" class="post-cat"> <i class="fas fa-tag"></i> <span>movies and animations</span></a>
         <div class="icons">
            <a href="view_post.php?post_id=8"><i class="fas fa-comment"></i><span>(0)</span></a>
            <button type="submit" name="like_post"><i class="fas fa-heart" style="  "></i><span>(0)</span></button>
         </div>
      
      </form>
            <form class="box" method="post">
         <input type="hidden" name="post_id" value="9">
         <input type="hidden" name="admin_id" value="1">
         <div class="post-admin">
            <i class="fas fa-user"></i>
            <div>
               <a href="author_posts.php?author=admin">admin</a>
               <div>2023-10-06</div>
            </div>
         </div>
         
                  <img src="uploaded_img/running.jpeg" class="post-image" alt="">
                  <div class="post-title">KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK</div>
         <div class="post-content content-150">LLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL</div>
         <a href="view_post.php?post_id=9" class="inline-btn">read more</a>
         <a href="category.php?category=lifestyle" class="post-cat"> <i class="fas fa-tag"></i> <span>lifestyle</span></a>
         <div class="icons">
            <a href="view_post.php?post_id=9"><i class="fas fa-comment"></i><span>(0)</span></a>
            <button type="submit" name="like_post"><i class="fas fa-heart" style="  "></i><span>(0)</span></button>
         </div>
      
      </form>
            <form class="box" method="post">
         <input type="hidden" name="post_id" value="10">
         <input type="hidden" name="admin_id" value="1">
         <div class="post-admin">
            <i class="fas fa-user"></i>
            <div>
               <a href="author_posts.php?author=admin">admin</a>
               <div>2023-10-06</div>
            </div>
         </div>
         
                  <img src="uploaded_img/swimminh.jpeg" class="post-image" alt="">
                  <div class="post-title">MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM</div>
         <div class="post-content content-150">NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN</div>
         <a href="view_post.php?post_id=10" class="inline-btn">read more</a>
         <a href="category.php?category=music" class="post-cat"> <i class="fas fa-tag"></i> <span>music</span></a>
         <div class="icons">
            <a href="view_post.php?post_id=10"><i class="fas fa-comment"></i><span>(0)</span></a>
            <button type="submit" name="like_post"><i class="fas fa-heart" style="  "></i><span>(1)</span></button>
         </div>
      
      </form>
            <form class="box" method="post">
         <input type="hidden" name="post_id" value="11">
         <input type="hidden" name="admin_id" value="1">
         <div class="post-admin">
            <i class="fas fa-user"></i>
            <div>
               <a href="author_posts.php?author=admin">admin</a>
               <div>2023-10-06</div>
            </div>
         </div>
         
                  <img src="uploaded_img/table tennis.jpeg" class="post-image" alt="">
                  <div class="post-title">OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO</div>
         <div class="post-content content-150">PPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP</div>
         <a href="view_post.php?post_id=11" class="inline-btn">read more</a>
         <a href="category.php?category=design and development" class="post-cat"> <i class="fas fa-tag"></i> <span>design and development</span></a>
         <div class="icons">
            <a href="view_post.php?post_id=11"><i class="fas fa-comment"></i><span>(0)</span></a>
            <button type="submit" name="like_post"><i class="fas fa-heart" style="  "></i><span>(1)</span></button>
         </div>
      
      </form>
         </div>

</section>



















<footer class="footer">
   &copy; copyright @ 2023 by <span>mr. web designer</span> | all rights reserved!
</footer>
<script src="js/script.js"></script>

</body>
</html>