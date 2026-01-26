<section class="sec-form sec-p-y--bottom">
  <div class="container">
    <div class="sec-form__content">
      <div class="sec-form__content-img d-none-max-tablet"><img src="<?= get_template_directory_uri() ?>/img/form-doc.png" alt="" /></div>
      <div class="sec-form__title h3">Получите бесплатную консультацию <br class="d-none-max-mob" /> от нашего специалиста</div>
      <form class="sec-form__form" data-form="data-form" data-send='<?= get_template_directory_uri() . '/callback/callback.php' ?>' data-hash='<?= get_template_directory_uri() . '/callback/get_hash.php' ?>'>
        <div class="sec-form__input">
          <label>Телефон</label>
          <input name='phone' type="tel" placeholder="+7 (999) 111-22-33" data-imask="data-imask" data-form-phone="data-form-phone" />
          <div class="error">Введите корректные данные</div>
        </div>
        <div class="sec-form__input">
          <label>Имя</label>
          <input name='name' type="text" placeholder="Введите ваше имя" data-form-name="data-form-name" />
          <div class="error">Введите корректные данные</div>
        </div>
        <button class="btn btn-white w-100p sec-form__submit" type="submit" data-submit="data-submit">Оставить заявку</button>
        <div class="sec-form__checkbox custom-checkbox">
          <label>
            <input name='agreement' type="checkbox" data-form-checkbox="data-form-checkbox" />
            <div class="custom-checkbox__box"></div>
          </label>
          <p>
            Нажимая на кнопку вы даёте согласие на обработку <a data-modal-open="privacy">персональных данных</a> и соглашаетесь с <a data-modal-open="politic">политикой конфиденциальности</a></p>
        </div>
      </form>
    </div>
  </div>
</section>