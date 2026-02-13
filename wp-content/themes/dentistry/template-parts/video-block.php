<?php

$title = get_field('video_title');
$text = get_field('video_text');
$videos = get_field('video_videos');

?>
<?php if ($videos): ?>
  <section class="sec-videos sec-p-y">
    <div class="container">
      <div class="h2"><?= $title; ?></div>
      <div class="h2-subtitle"><?= $text; ?></div>

      <div class="sec-videos__slider">
        <div class="swiper">
          <div class="swiper-wrapper">
            <?php foreach ($videos as $item): ?>
              <div class="swiper-slide">
                <a class="sec-videos__item video-play-icon img-cover" href="<?= $item['video_videos_item']; ?>" data-fancybox="data-fancybox">
                  <img src="<?= $item['video_videos_image']; ?>" alt=" slide" />
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-nav-center --with-dots">
          <div class="slider-button-prev"></div>
          <div class="slider-button-next"></div>
        </div>
      </div>

    </div>
  </section>
<?php endif; ?>