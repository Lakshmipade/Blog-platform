<?php include('path.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="boxicons.min.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Blogging Website</title>
  </head>
  <body>
     <!-- TOOO: INCLUDE HEADER HERE -->
     <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <!-- Post Slider -->
    <div class="page-wrapper">
      <div class="post-slider">
        <h1 class="slider-title">Trending Posts</h1>
        <i class="prev bx bx-chevron-left"></i>
        <i class="next bx bx-chevron-right"></i>

        <div class="post-wrapper">
          <div class="post">
            <img src="assets/css/images/mountain.jpg" alt="" class="slider-image" />
            <div class="post-info">
              <h4>
                <a href="single.html">One day your life filled with fluhed eyes.</a>
              </h4>
              <i class="bx bxs-user">Lakshmi pade</i>
              &nbsp;
              <i class='bx bxs-book-heart'>Mar2, 2021</i>
            </div>
          </div>

          <div class="post">
            <img src="assets/css/images/boat.jpg" alt="" class="slider-image" />
            <div class="post-info">
              <h4>
                <a href="single.html">One day your life filled with fluhed eyes.</a>
              </h4>
              <i class="bx bxs-user">Lakshmi pade</i>
              &nbsp;
              <i class='bx bxs-book-heart'>Mar2, 2021</i>
            </div>
          </div>

          <div class="post">
            <img src="assets/css/images/lotus_temple.jpg" alt="" class="slider-image" />
            <div class="post-info">
              <h4>
                <a href="single.html">One day your life filled with fluhed eyes.</a>
              </h4>
              <i class="bx bxs-user">Lakshmi pade</i>
              &nbsp;
              <i class='bx bxs-book-heart'>Mar2, 2021</i>
            </div>
          </div>

          <div class="post">
            <img src="assets/css/images/barcelona.jpg" alt="" class="slider-image" />
            <div class="post-info">
              <h4>
                <a href="single.html">One day your life filled with fluhed eyes.</a>
              </h4>
              <i class="bx bxs-user">Lakshmi pade</i>
              &nbsp;
              <i class='bx bxs-book-heart'>Mar2, 2021</i>
            </div>
          </div>
        </div>
      </div>

      <hr>
      <!-- content -->
      <div class="content clearfix">
        <!-- Main-content -->
        <div class="main-content">
          <h1 class="recent-post-title">Recent Posts</h1>

          <div class="post">
            <img src="assets/css/images/barcelona.jpg" alt="" class="post-image">
            <div class="post-prev">
              <h3><a href="single.html">The strongest and sweetest songs yet remain to be sung.</a></h3>
              <i class="bx bxs-user">Lakshmi pade</i>
              &nbsp;
              <i class='bx bxs-book-heart'>Mar2, 2021</i>
              <p class="preview-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Deserunt assumenda. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta omnis et earum saepe, at ea nisi voluptatem repellat eligendi totam 
                distinctio aliquam mollitia sunt est quod fugit iure atque fugiat.
              </p>
              <a href="single.html" class="btn read-more">Read More...</a>
            </div>
          </div>

          <div class="post">
            <img src="assets/css/images/burjkhlifa.jpg" alt="" class="post-image">
            <div class="post-prev">
              <h3><a href="single.html">The strongest and sweetest songs yet remain to be sung.</a></h3>
              <i class="bx bxs-user">Lakshmi pade</i>
              &nbsp;
              <i class='bx bxs-book-heart'>Mar2, 2021</i>
              <p class="preview-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Deserunt assumenda. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta omnis et earum saepe, at ea nisi voluptatem repellat eligendi totam 
                distinctio aliquam mollitia sunt est quod fugit iure atque fugiat.
              </p>
              <a href="single.html" class="btn read-more">Read More...</a>
            </div>
          </div>

          <div class="post">
            <img src="assets/css/images/airplan2.png" alt="" class="post-image">
            <div class="post-prev">
              <h3><a href="single.html">The strongest and sweetest songs yet remain to be sung.</a></h3>
              <i class="bx bxs-user">Lakshmi pade</i>
              &nbsp;
              <i class='bx bxs-book-heart'>Mar2, 2021</i>
              <p class="preview-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Deserunt assumenda. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta omnis et earum saepe, at ea nisi voluptatem repellat eligendi totam 
                distinctio aliquam mollitia sunt est quod fugit iure atque fugiat.
              </p>
              <a href="single.html" class="btn read-more">Read More...</a>
            </div>
          </div>

          <div class="post">
            <img src="assets/css/images/barcelona.jpg" alt="" class="post-image">
            <div class="post-prev">
              <h3><a href="single.html">The strongest and sweetest songs yet remain to be sung.</a></h3>
              <i class="bx bxs-user">Lakshmi pade</i>
              &nbsp;
              <i class='bx bxs-book-heart'>Mar2, 2021</i>
              <p class="preview-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Deserunt assumenda. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta omnis et earum saepe, at ea nisi voluptatem repellat eligendi totam 
                distinctio aliquam mollitia sunt est quod fugit iure atque fugiat.
              </p>
              <a href="single.html" class="btn read-more">Read More...</a>
            </div>
          </div>

        </div>
        <div class="sidebar">
          <div class="section search">
            <h3 class="section-title">Search</h3>
            <form action="index.html" method="post">
              <input type="text" name="search-term" class="txt-input" placeholder="Search...">
            </form>
          </div>
          <div class="section categories">
            <h3 class="section-title">Categories</h3>
            <ul>
              <li><a href="#">Poems</a></li>
              <li><a href="#">Quotes</a></li>
              <li><a href="#">Fictions</a></li>
              <li><a href="#">Biography</a></li>
              <li><a href="#">Motivation</a></li>
              <li><a href="#">Non-Fictions</a></li>
              <li><a href="#">Life Style</a></li>
              <li><a href="#">Daily Routines to follow</a></li>
              <li><a href="#">Fashion</a></li>
              <li><a href="#">Travels</a></li>
            </ul>

          </div>
        </div>

      </div>
      <!-- TOOO: INCLUDE FOOTER HERE -->
      <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

    </div>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- slick carousel -->
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script src="assets/css/js/script.js"></script>
  </body>
</html>
