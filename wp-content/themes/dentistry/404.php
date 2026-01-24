<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dentistry
 */

get_header();
?>

	<main>
      <section class="page-404">
        <div class="container">
          <div class="page-404__content">
            <div class="page-404__title">404</div>
            <div class="page-404__subtitle h3">Здесь ничего нет, <br class="d-none-min-mob"/> но есть решение</div>
            <div class="page-404__text">Старица недоступна, зато мы можем помочь с выбором <br class="d-none-max-mob"/> лечения и поездки в клинику «Жуйкан»</div><a class="page-404__btn btn btn-green w-100p" href="#">Вернуться на главную</a>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
