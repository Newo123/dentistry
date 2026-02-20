<section class="sec-form sec-p-y--bottom">
  <div class="container">
    <div class="sec-form__content">
      <div class="sec-form__content-img d-none-max-tablet"><img src="<?= get_template_directory_uri() ?>/img/form-doc.png" alt="" /></div>
      <div class="sec-form__title h3">Получите бесплатную консультацию <br class="d-none-max-mob" /> от нашего специалиста</div>
      <form class="sec-form__form" data-form="data-form" data-send='<?= get_template_directory_uri() . '/callback/callback.php' ?>' data-hash='<?= get_template_directory_uri() . '/callback/get_hash.php' ?>'>
        <button class="btn btn-white w-100p sec-form__submit" type="submit" data-modal-open="modal-social">Оставить заявку</button>
      </form>
    </div>
  </div>
</section>