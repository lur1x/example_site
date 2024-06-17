<?php
include './data/fetchData.php';

$conn = createDBConnection();
$exitpost = getAndPrintPostsFromDB($conn);

foreach ($exitpost as $post) {
  if ($post['featured'] == 1) $posts[] = $post;
  else $postRecent[] = $post;
}
closeDBConnection($conn);

$isIt = TRUE;
foreach($exitpost as $post) {
  if ($post['id'] === $_GET['id']) {
    $isIt = FALSE;
    $curPost = [
      'title' => $post['title'],
      'id' => $post['id'],
      'subtitle' => $post['subtitle'],
      'main_img' => $post['main_img'],
      'content' => $post['content'],
    ];
    break;
  }
}

if ($isIt) {
  header('Location:/home');
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $curPost['title'] ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Oxygen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/static/styles/post.css">
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header-nav">
          <a href="/home"><h2 class="logo">Escape.</h2></a>
          <div class="header__burger">
            <span></span><span></span><span></span>
          </div>
          <nav class="navigation">
            <ul>
              <li><a href="/home">Home</a></li>
              <li><a href="#">Categories</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <main class="main">
      <section class="title">
        <div class="container">
          <div class="title-texts">
            <h1><?= $curPost['title'] ?></h1>
            <p><?= $curPost['subtitle'] ?></p>
          </div>
        </div>
      </section>
      <div class="main-text">
        <div class="wide-container">
          <div class="main-img">
            <img src="<?= $curPost['main_img'] ?>" alt="some img">
          </div>
        </div>
        <div class="container">
          <div class="main-text">
            <p><?= $curPost['content'] ?></p>
          </div>
        </div>
      </div>
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