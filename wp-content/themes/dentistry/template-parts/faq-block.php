<?php
$title = get_field('faq_title');
$text = get_field('faq_text');
$items = get_field('faq_items');
?>

<section class="sec-qa sec-p-y" id="qa">
  <div class="container">
    <div class="h2"><?= $title; ?></div>
    <div class="h2-subtitle"><?= $text; ?></div>
    <div class="sec-qa__list">
      <?php if ($items): ?>
        <div class="sec-qa__accordion accordion" data-accordion="data-accordion">
          <?php foreach ($items as $item): ?>
            <div class="accordion__item" data-accordion-item="data-accordion-item">
              <div class="accordion__header" data-accordion-control="data-accordion-control"><span><?= $item['faq_items_question']; ?></span></div>
              <div class="accordion__content" data-accordion-content="data-accordion-content">
                <div class="accordion__inner">
                  <p>
                    <?= $item['faq_items_answer']; ?>
                  </p>
                  <button class="btn btn-green w-100p" modal-social="form-request">Получить консультацию</button>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>