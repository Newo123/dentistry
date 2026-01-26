<?php

/**
 * Template Name: Шаблон страницы Главная
 */

get_header();

?>
<main>
  <?= get_template_part('template-parts/main-block'); ?>
  <?= get_template_part('template-parts/about-block'); ?>
  <?= get_template_part('template-parts/necessary-block'); ?>
  <?= get_template_part('template-parts/services-block'); ?>
  <?= get_template_part('template-parts/faq-block'); ?>
  <?= get_template_part('template-parts/gallery-block'); ?>
  <?= get_template_part('template-parts/reviews-block'); ?>
  <?= get_template_part('template-parts/contacts-block'); ?>
  <?= get_template_part('template-parts/form-block'); ?>
</main>
<?php
get_footer();
