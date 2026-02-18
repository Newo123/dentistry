<?php
require get_template_directory() . '/inc/get-menu.php';
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dentistry
 */

$menu_items = get_menu('header_menu');


?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet" />
  <!-- <link rel="icon" type="image/png" href="favicon.png"/> -->
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="container">
      <div class="header-content"><a class="header-logo" href="<?= get_home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/img/header-logo.svg" alt="" /></a>
        <?php if ($menu_items): ?>
          <div class="header-navbar d-none-max-tablet">
            <?php foreach ($menu_items as $item): ?>
              <a href="<?= $item->url; ?>"><?= $item->title; ?></a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        <div class="header-contacts d-none-max-tablet">
          <div class="header-contacts__icon"><img src="<?= get_template_directory_uri() ?>/img/phone-icon.svg" alt="Телефон" /></div>
          <div class="header-contacts__content">
            <span class="header-contacts__label">Наш телефон</span>
            <a class="header-contacts__link" href="<?= SITE_PHONE['url']; ?>"><?= SITE_PHONE['title']; ?></a>
          </div>
        </div>
        <div class="header-socs d-none-max-tablet"><span class="header-socs__title">Наши соцсети</span>
          <div class="header-socs__list">
            <a class="header-socs__link" href="<?= SITE_VK['url'] ?? ''; ?>" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-vk.svg" alt="VK" /></a>
            <a class="header-socs__link" href="<?= SITE_YOUTUBE['url'] ?? ''; ?>" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-yt.svg" alt="YouTube" /></a>
            <a class="header-socs__link" href="<?= SITE_TELEGRAM['url'] ?? ''; ?>" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-tg.svg" alt="Telegram" /></a>
            <a class="header-socs__link" href="<?= SITE_WHATSAPP['url'] ?? ''; ?>" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-wa.svg" alt="WhatsApp" /></a>
          </div>
        </div>
        <button class="header-btn btn btn-green d-none-max-tablet" modal-social="form-request">Оставить заявку</button>
        <div class="header-burger d-none-min-tablet" modal-social="header-mobile"><img src="<?= get_template_directory_uri() ?>/img/burger-menu.svg" alt="" /></div>
      </div>
    </div>
    <div class="header-mobile" data-modal-block="header-mobile">
      <div class="header-mobile__content">
        <div class="header-mobile__close" data-modal-close="header-mobile"><img src="<?= get_template_directory_uri() ?>/img/x-icon.svg" alt="" /></div>
        <?php if ($menu_items): ?>
          <div class="header-navbar">
            <?php foreach ($menu_items as $item): ?>
              <a href="<?= $item->url; ?>" data-modal-close="header-mobile"><?= $item->title; ?></a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        <div class="header-contacts">
          <div class="header-contacts__icon"><img src="<?= get_template_directory_uri() ?>/img/phone-icon.svg" alt="Телефон" /></div>
          <div class="header-contacts__content">
            <span class="header-contacts__label">Наш телефон</span>
            <a class="header-contacts__link" href="<?= SITE_PHONE['url']; ?>"><?= SITE_PHONE['title']; ?></a>
          </div>
        </div>
        <div class="header-socs"><span class="header-socs__title">Наши соцсети</span>
          <div class="header-socs__list">
            <a class="header-socs__link" href="<?= SITE_VK['url'] ?? ''; ?>" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-vk.svg" alt="VK" /></a>
            <a class="header-socs__link" href="<?= SITE_YOUTUBE['url'] ?? ''; ?>" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-yt.svg" alt="YouTube" /></a>
            <a class="header-socs__link" href="<?= SITE_TELEGRAM['url'] ?? ''; ?>" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-tg.svg" alt="Telegram" /></a>
            <a class="header-socs__link" href="<?= SITE_WHATSAPP['url'] ?? ''; ?>" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-wa.svg" alt="WhatsApp" /></a>
          </div>
        </div>
        <button class="header-btn btn btn-green" modal-social="form-request">Оставить заявку</button>
      </div>
    </div>
  </header>