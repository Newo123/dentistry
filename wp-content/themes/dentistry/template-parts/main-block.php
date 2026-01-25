<?php
// Main block content

$title = get_field('main_title');
$text = get_field('main_text');
$motivation = get_field('main_motivation');
$image = get_field('main_image');

?>

<section class="sec-banner sec-p-y--bottom" id="banner">
  <div class="container">
    <div class="sec-banner__wrap">
      <div class="d-none-min-tablet">
        <div class="sec-banner__benefits">
          <?php if ($motivation): ?>
            <?php foreach ($motivation as $item): ?>
              <div class="sec-banner__benefit">
                <div class="sec-banner__benefit-icon"><img src="<?= $item['main_motivation_image']; ?>" alt="icon" /></div>
                <span><?= $item['main_motivation_text']; ?></span>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="sec-banner__wrap-left">
        <div class="sec-banner__title h1"><?= $title; ?></div>
        <div class="sec-banner__text"><?= $text; ?></div>
        <button class="btn btn-green w-100p" data-modal-open="form-request">Задать вопрос координатору</button>
      </div>
      <div class="sec-banner__wrap-right">
        <div class="sec-banner__img"><img src="<?= $image; ?>" alt="banner" /></div>
        <div class="d-none-max-tablet">
          <div class="sec-banner__benefits">
            <?php if ($motivation): ?>
              <?php foreach ($motivation as $item): ?>
                <div class="sec-banner__benefit">
                  <div class="sec-banner__benefit-icon"><img src="<?= $item['main_motivation_image']; ?>" alt="icon" /></div>
                  <span><?= $item['main_motivation_text']; ?></span>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>