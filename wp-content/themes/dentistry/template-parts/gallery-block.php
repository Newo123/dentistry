<?php
$title = get_field('gallery_title');
$text = get_field('gallery_text');
$images = get_field('gallery_images');
?>


<section class="sec-portfolio sec-p-y">
  <div class="container">
    <div class="h2"><?= $title; ?></div>
    <div class="h2-subtitle"><?= $text; ?></div>
    <?php if ($images): ?>
      <div class="sec-portfolio__slider">
        <div class="swiper">
          <div class="swiper-wrapper">
            <?php foreach ($images as $item): ?>
              <div class="swiper-slide"><img src="<?= $item['gallery_images_image']; ?>" alt="slide" /></div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="slider-nav">
          <div class="slider-button-prev"></div>
          <div class="slider-button-next"></div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>