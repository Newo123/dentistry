<?php
// Necessary block content

$title = get_field('necessary_title');
$tags = get_field('necessary_tags');
$images = get_field('necessary_images');

?>

<section class="sec-all-need sec-p-y">
  <div class="container">
    <div class="sec-all-need__content">
      <div class="sec-all-need__content-left">
        <div class="sec-all-need__slider">
          <div class="swiper">
            <div class="swiper-wrapper">
              <?php if ($images): ?>
                <?php foreach ($images as $item): ?>
                  <div class="swiper-slide img-cover"><img src="<?= $item['necessary_images_item']; ?>" alt="slide" /></div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="sec-all-need__slider-nav">
            <div class="slider-button-prev"></div>
            <div class="slider-button-next"></div>
          </div>
        </div>
      </div>
      <div class="sec-all-need__content-right">
        <div class="sec-all-need__tags">
          <div class="sec-all-need__tags-title"><?= $title; ?></div>
          <div class="sec-all-need__tags-list">
            <?php if ($tags): ?>
              <?php foreach ($tags as $item): ?>
                <span><?= $item['necessary_tags_item']; ?></span>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>