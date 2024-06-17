<div class="featured-posts-boxes">
  <div class="featured-posts-image">
    <img class="posts-image" src="<?= $post['main_img'] ?>" alt="mainIng.png">
  </div>
  <a class="title-link" href='/post/?id=<?= $post['id'] ?>'></a>
  <?php if ($post['id'] == 2) echo '<button class="featured-posts-button my-button">Adventure</button>';?>
  <h3 class="featured-posts-boxes-title"><?= $post['title'] ?></h3>
  <p class="featured-posts-box__text default-text"><?= $post['subtitle'] ?></p>
  <div class="featured-posts-box__info">
    <div class="featured-posts-box__who">
      <img src=<?= $post['img_modifier'] ?> alt=<?= $post['author'] ?>>
      <p class="featured-posts-box__who-wrote default-text"><?= $post['author'] ?></p>
    </div>
    <p class="featured-posts-box__when default-text"><?= $post['date'] ?></p>
  </div>
</div>
