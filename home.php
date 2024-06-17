<?php include './data/fetchData.php'; 

$conn = createDBConnection();
$exitpost = getAndPrintPostsFromDB($conn);

foreach ($exitpost as $post) {
  if ($post['featured'] == 1) $posts[] = $post;
  else $postRecent[] = $post;
}
closeDBConnection($conn);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Oxygen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/static/styles/style.css">
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header__main-part">
          <a href="/home"><h2 class="logo">Escape.</h2></a>
          <div class="header__burger">
            <span></span><span></span><span></span>
          </div>
          <nav class="header__navigation">
            <ul class="header__main-part--lists">
              <li class="header__main-part--list"><a href="/home">Home</a></li>
              <li class="header__main-part--list"><a href="#">Categories</a></li>
              <li class="header__main-part--list"><a href="#">About</a></li>
              <li class="header__main-part--list"><a href="#">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <main class="main">
      <section class="title-part">
        <div class="container">
          <div class="title-part__main">
            <h1 class="title-part__main-title">Let's do it together.</h1>
            <p class="title-part__main-text">We travel the world in search of stories. Come along for the ride.</p>
            <button onclick="location.href='http://localhost:8001/post?id=<?= count($exitpost) ?>'" type="button" class="title-part__main-button my-button">View Latest Posts</button>
          </div>
        </div>
      </section>
      
      <div class="main-navigation">
        <div class="container">
          <nav class="main-navigation__nav">
            <ul class="main-navigation__nav-lists">
              <li class="main-navigation__nav-list">Nature</li>
              <li class="main-navigation__nav-list">Photography</li>
              <li class="main-navigation__nav-list">Relaxation</li>
              <li class="main-navigation__nav-list">Vacation</li>
              <li class="main-navigation__nav-list">Travel</li>
              <li class="main-navigation__nav-list">Adventure</li>
            </ul>
          </nav>
        </div>
      </div>

      <section class="featured-posts">
        <div class="container">
          <div class="container__inner">
            <div class="featured-posts__title-div div-title">
              <h2 class="featured-posts__title main-title">Featured Posts</h2>
            </div>
            <div class="featured-posts__box ">
              <?php 
                foreach ($posts as $post) {
                  include './postTypes/post_preview.php';
                }
              ?>
            </div>
          </div>
        </div>
      </section>

      <section class="most-recent">
        <div class="container">
          <div class="main-most-recent__title-div div-title">
            <h2 class="main-most-recent__title main-title">Most Recent</h2>
          </div>
          <div class="most-recent-boxes">
            <?php
              foreach ($postRecent as $post) {
                include './postTypes/post_recent.php';
              }
            ?>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container">
        <div class="stay-in-touch">
          <h1 class="stay-in-touch__title">Stay in Touch</h1>
          <form class="sendEmail">
            <input name="Email" class="sendEmail-input" type="email" placeholder="Enter your email address" require>
            <button class="submitBtm" type="submit">Submit</button>
          </form>
        </div>
      </div>
      <div class="footer-bg">
        <div class="footer-nav">
          <div class="container">
            <div class="footer-nav__inner">
              <a href="/home"><h2 class="logo">Escape.</h2></a>
              <nav class="footer-navigation">
                <ul class="footer-navigation-lists">
                  <li class="footer-navigation-list"><a href="/home">Home</a></li>
                  <li class="footer-navigation-list"><a href="#">Categories</a></li>
                  <li class="footer-navigation-list"><a href="#">About</a></li>
                  <li class="footer-navigation-list"><a href="#">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
