<?php

$title = get_field('contacts_title');
$text = get_field('contacts_text');

?>

<section class="sec-contacts sec-p-y--top" id="contacts">
  <div class="container">
    <div class="h2"><?= $title ?></div>
    <div class="h2-subtitle"><?= $text; ?></div>
    <div class="sec-contacts__content">
      <div class="sec-contacts__content-left">
        <div class="sec-contacts__links">
          <a href="<?= SITE_PHONE['url']; ?>"><?= SITE_PHONE['title']; ?></a>
          <a href="<?= SITE_EMAIL['title']; ?>"><?= SITE_EMAIL['title']; ?></a>
          <p><?= SITE_ADDRESS; ?></p>
        </div>
      </div>
      <div class="sec-contacts__content-right">
        <div class="sec-contacts__socs">
          <a href="<?= SITE_VK['url'] ?? ''; ?>" target="_blank">
            <img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-vk.svg" alt="VK" />
          </a>
          <a href="<?= SITE_YOUTUBE['url'] ?? ''; ?>" target="_blank">
            <img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-yt.svg" alt="YouTube" />
          </a>
          <a href="<?= SITE_TELEGRAM['url'] ?? ''; ?>" target="_blank">
            <img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-tg.svg" alt="Telegram" />
          </a>
          <a href="<?= SITE_WHATSAPP['url'] ?? ''; ?>" target="_blank">
            <img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-wa.svg" alt="WhatsApp" />
          </a>
        </div>
      </div>
    </div>
  </div>
</section>