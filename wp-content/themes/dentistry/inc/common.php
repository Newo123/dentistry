<?php

if (!function_exists('get_field')) {
  return;
}

$site_vk = get_field('site_vk', 'options') ?? [];
$site_youtube = get_field('site_youtube', 'options') ?? [];
$site_telegram = get_field('site_telegram', 'options') ?? [];
$site_whatsapp = get_field('site_whatsapp', 'options') ?? [];

$site_phone = get_field('site_phone', 'options') ?? [];
$site_email = get_field('site_email', 'options') ?? [];
$site_address = get_field('site_address', 'options') ?? '';

// Социальные сети
define('SITE_VK', $site_vk);
define('SITE_YOUTUBE', $site_youtube);
define('SITE_TELEGRAM', $site_telegram);
define('SITE_WHATSAPP', $site_whatsapp);

// Контакты
define('SITE_PHONE', $site_phone);
define('SITE_EMAIL', $site_email);
define('SITE_ADDRESS', $site_address);
