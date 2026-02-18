<?php
$title = get_field('services_title');
$items = get_field('services_items');
?>


<section class="sec-services sec-p-y" id="services">
  <div class="container">
    <div class="h2"><?= $title; ?></div>
    <?php if ($items): ?>
      <div class="sec-services__tabs" data-tabs="data-tabs">
        <div class="sec-services__tabs-nav">
          <?php foreach ($items as $index => $item): ?>
            <button class="btn btn-green btn-tab <?php if ($index == 0) {
                                                    echo 'is-active';
                                                  } ?>" data-tab-btn="data-tab-btn" data-target="tab-<?= $index ?>"><?= $item['services_items_title']; ?></button>
          <?php endforeach; ?>
        </div>
        <div class="tabs__content" data-tabs-content="data-tabs-content">
          <?php foreach ($items as $index => $item): ?>
            <div class="<?php if ($index == 0) {
                          echo 'is-active';
                        } ?>" data-tab-pane="data-tab-pane" id="tab-<?= $index ?>">
              <div class="sec-services__item">
                <div class="sec-services__item-wrap">
                  <div class="sec-services__item-slider">
                    <div class="swiper">
                      <div class="swiper-wrapper">
                        <?php foreach ($item['services_items_images'] as $image): ?>
                          <div class="swiper-slide"><img src="<?= $image['services_items_images_item']; ?>" /></div>
                        <?php endforeach; ?>
                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="sec-services__item-slider-nav">
                      <div class="slider-button-prev"></div>
                      <div class="slider-button-next"></div>
                    </div>
                  </div>
                  <div class="sec-services__item-content">
                    <div class="sec-services__item-title"><?= $item['services_items_title']; ?></div>
                    <div class="sec-services__item-list">
                      <?php foreach ($item['services_items_prices'] as $price): ?>
                        <div class="sec-services__item-list-item">
                          <p><?= $price['services_items_prices_name']; ?></p><span><?= $price['services_items_prices_price']; ?></span>
                        </div>
                      <?php endforeach; ?>
                    </div>
                    <button class="btn btn-green w-100p" modal-social="form-request">Рассчитать стоимость</button>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>