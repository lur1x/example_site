<div class="most-recent-box">
  <div class="most-recent-box__inner">
    <a href='/post/?id=<?= $post['id'] ?>'><img class="most-recent-box__inner-image" src=<?= $post['main_img'] ?> alt=<?= $post['mainImg'] ?>></a>
    <div class="most-recent-box__inner-text">
      <h3 class="most-recent-box__inner-text--title"><?= $post['title'] ?></h3>
      <p class="most-recent-box__inner-text--subtitle"><?= $post['subtitle'] ?></p>
    </div>
    <div class="most-recent-box__inner-who">
      <div class="most-recent-box__inner-who-info">
        <img class="most-recent-box__inner-who-author" src=<?= $post['img_modifier'] ?> alt=<?= $post['author'] ?>>
        <p class="most-recent-box__inner-who--name"><?= $post['author'] ?></p>
      </div>
      <p class="most-recent-box__inner-when"><?= $post['date'] ?></p>
    </div>
  </div>
</div>