<?php
// About block content

$title = get_field('about_title');
$text = get_field('about_text');
$content = get_field('about_content');
$video = get_field('about_video');

?>

<section class="sec-about sec-p-y" id="about">
  <div class="container">
    <div class="sec-about__title h2"><?= $title; ?></div>
    <div class="sec-about__subtitle h2-subtitle"><?= $text; ?></div>
    <div class="sec-about__content">
      <div class="sec-about__content-text">
        <?= $content; ?>
      </div>
      <a class="sec-about__content-video img-cover" href="<?= $video; ?>" data-fancybox="data-fancybox">
        <img class="sec-about__content-video-bg" src="<?= get_template_directory_uri() ?>/img/about-video-bg.jpg" alt="" />
        <div class="video-circle">
          <img class="video-circle__bg" src="<?= get_template_directory_uri() ?>/img/play-bg.svg" alt="" />
          <img class="video-circle__icon" src="<?= get_template_directory_uri() ?>/img/play.svg" alt="" />
        </div>
      </a>
    </div>
  </div>
</section>