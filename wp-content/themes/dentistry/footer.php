<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dentistry
 */
?>

<footer class="footer">
  <div class="container">
    <div class="footer__content">
      <div class="footer__logo"><img src="<?= get_template_directory_uri() ?>/img/header-logo.svg" alt="logo" />
        <div class="footer__logo-text">Стоматологические <br /> и оздоровительные туры <br /> в Китай</div>
      </div>
      <div class="footer__content-right">
        <div class="footer__contacts">
          <div class="footer__links"><a href="<?= SITE_PHONE['url'] ?? ''; ?>"><?= SITE_PHONE['title'] ?? ''; ?></a><a href="<?= SITE_EMAIL['url'] ?? ''; ?>"><?= SITE_EMAIL['title'] ?? ''; ?></a>
            <p><?= SITE_ADDRESS; ?></p>
          </div>
          <div class="footer__socs">
            <a href="<?= SITE_VK['url'] ?? ''; ?>" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-vk.svg" alt="VK" /></a>
            <a href="<?= SITE_YOUTUBE['url'] ?? ''; ?>" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-yt.svg" alt="YouTube" /></a>
            <a href="<?= SITE_TELEGRAM['url'] ?? ''; ?>" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-tg.svg" alt="Telegram" /></a>
            <a href="<?= SITE_WHATSAPP['url'] ?? ''; ?>" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-wa.svg" alt="WhatsApp" /></a>
          </div>
        </div>
        <div class="footer__links-other"><a data-modal-open="license">Лицензия</a><a data-modal-open="politic">Политика конфиденциальности</a></div>
      </div>
    </div>
  </div>
</footer>
<div class="modal-form-err modal-wrapper" data-modal-block="form-err">
  <div class="modal-content">
    <button class="x-btn" title="Close (Esc)" type="button" data-modal-close="form-err"> <img src="<?= get_template_directory_uri() ?>/img/x-icon.svg" alt="" /></button>
    <div class="modal-content__main">
      <h3 class="modal__title">Что-то пошло не так...</h3>
      <p class="modal__subtitle">Не удалось отправить заявку. Пожалуйста, попробуйте <br class="d-none-max-mob" /> ещё раз или свяжитесь с нами напрямую</p>
      <button class="btn btn-green modal__btn" data-modal-close="form-err">Повторить отправку</button>
    </div>
    <div class="modal-content__footer">
      <div class="header-contacts d-none-max-tablet">
        <div class="header-contacts__icon"><img src="<?= get_template_directory_uri() ?>/img/phone-icon.svg" alt="Телефон" /></div>
        <div class="header-contacts__content"><span class="header-contacts__label">Наш телефон</span><a class="header-contacts__link" href="<?= SITE_PHONE['url'] ?>"><?= SITE_PHONE['title'] ?></a></div>
      </div>
      <div class="header-socs d-none-max-tablet"><span class="header-socs__title">Наши соцсети</span>
        <div class="header-socs__list">
          <a class="header-socs__link" href="<?= SITE_VK['url'] ?? ''; ?>" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-vk.svg" alt="VK" /></a>
          <a class="header-socs__link" href="<?= SITE_YOUTUBE['url'] ?? ''; ?>" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-yt.svg" alt="YouTube" /></a>
          <a class="header-socs__link" href="<?= SITE_TELEGRAM['url'] ?? ''; ?>" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-tg.svg" alt="Telegram" /></a>
          <a class="header-socs__link" href="<?= SITE_WHATSAPP['url'] ?? ''; ?>" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-wa.svg" alt="WhatsApp" /></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal-form-success modal-wrapper" data-modal-block="form-success">
  <div class="modal-content">
    <button class="x-btn" title="Close (Esc)" type="button" data-modal-close="form-success"> <img src="<?= get_template_directory_uri() ?>/img/x-icon.svg" alt="" /></button>
    <div class="modal-content__main">
      <h3 class="modal__title">Заявка отправлена!</h3>
      <p class="modal__subtitle">Спасибо! Мы получили ваши данные и свяжемся <br /> с вами в ближайжее время</p>
      <button class="btn btn-green modal__btn" data-modal-close="form-success">Вернуться на главную</button>
    </div>
  </div>
</div>
<div class="modal-form-request modal-wrapper" data-modal-block="form-request">
  <div class="modal-content">
    <button class="x-btn" title="Close (Esc)" type="button" data-modal-close="form-request"> <img src="<?= get_template_directory_uri() ?>/img/x-icon.svg" alt="" /></button>
    <div class="modal-content__main">
      <h3 class="modal__title">Получите персональную <br /> консультацию от нашего специалиста</h3>
      <p class="modal__subtitle">Оставьте контакты — мы свяжемся с вами и ответим на все вопросы</p>
      <form class="modal-form-request__form" data-form="data-form" data-send='<?= get_template_directory_uri() . '/callback/callback.php' ?>' data-hash='<?= get_template_directory_uri() . '/callback/get_hash.php' ?>'>
        <div class="sec-form__input">
          <label>Телефон</label>
          <input name="phone" type="tel" placeholder="+7 (999) 111-22-33" data-imask="data-imask" data-form-phone="data-form-phone" />
          <div class="error">Введите корректные данные</div>
        </div>
        <div class="sec-form__input">
          <label>Имя</label>
          <input name="name" type="text" placeholder="Введите ваше имя" data-form-name="data-form-name" />
          <div class="error">Введите корректные данные</div>
        </div>
        <button class="btn btn-green w-100p sec-form__submit" type="submit" data-submit="data-submit">Оставить заявку</button>
        <div class="custom-checkbox">
          <label>
            <input name="agreement" type="checkbox" data-form-checkbox="data-form-checkbox" />
            <div class="custom-checkbox__box"></div>
          </label>
          <p>
            Нажимая на кнопку вы даёте согласие на обработку <a data-modal-open="privacy">персональных данных</a> и соглашаетесь с <a data-modal-open="politic">политикой конфиденциальности</a></p>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal-politic modal-wrapper" data-modal-block="politic">
  <div class="modal-content">
    <button class="x-btn" title="Close (Esc)" type="button" data-modal-close="politic"> <img src="<?= get_template_directory_uri() ?>/img/x-icon.svg" alt="icon" /></button>
    <div class="modal-content__main">
      <h3 class="modal__title">Политика конфиденциальности</h3>
      <div class="modal__text">
        <?= get_field('site_policy', 'options') ?>
      </div>
    </div>
  </div>
</div>
<div class="modal-politic modal-wrapper" data-modal-block="license">
  <div class="modal-content">
    <button class="x-btn" title="Close (Esc)" type="button" data-modal-close="license"> <img src="<?= get_template_directory_uri() ?>/img/x-icon.svg" alt="icon" /></button>
    <div class="modal-content__main">
      <h3 class="modal__title">Лицензия</h3>
      <div class="modal__text">
        <?= get_field('site_license', 'options') ?>
      </div>
    </div>
  </div>
</div>
<div class="modal-politic modal-wrapper" data-modal-block="privacy">
  <div class="modal-content">
    <button class="x-btn" title="Close (Esc)" type="button" data-modal-close="privacy"> <img src="<?= get_template_directory_uri() ?>/img/x-icon.svg" alt="icon" /></button>
    <div class="modal-content__main">
      <h3 class="modal__title">Правила обработки персональных данных</h3>
      <div class="modal__text">
        <?= get_field('site_privacy', 'options') ?>
      </div>
    </div>
  </div>
</div>
<div class="modal-social modal-wrapper" data-modal-block="modal-social">
  <div class="modal-content">
    <button class="x-btn" title="Close (Esc)" type="button" data-modal-close="modal-social"> <img src="<?= get_template_directory_uri() ?>/img/x-icon.svg" alt="icon" /></button>
    <div class="modal-content__main">
      <h3 class="modal__title">Получите персональную консультацию от нашего специалиста</h3>
      <p class="modal__subtitle mb-30">Свяжитесь с нами в удобном мессенджере <br class="d-none-max-mob" /> и мы ответим на все Ваши вопросы</p>
      <a class="btn btn-green mb-15" href="<?= SITE_TELEGRAM['url'] ?? ''; ?>" target="_blank" data-modal-close="form-social">Написать в Telegram</a>
      <a class="btn btn-green mb-15" href="<?= SITE_WHATSAPP['url'] ?? ''; ?>" target="_blank" data-modal-close="form-social">Написать в WhatsApp</a>
    </div>
    <div class="modal-content__footer">
      <div class="header-contacts max-tablet">
        <div class="header-contacts__icon"><img src="<?= get_template_directory_uri() ?>/img/phone-icon.svg" alt="Телефон" /></div>
        <div class="header-contacts__content"><span class="header-contacts__label">Наш телефон</span><a class="header-contacts__link" href="<?= SITE_PHONE['url'] ?>"><?= SITE_PHONE['title'] ?></a></div>
      </div>
      <div class="header-socs max-tablet"><span class="header-socs__title">Наши соцсети</span>
        <div class="header-socs__list">
          <a class="header-socs__link" href="<?= SITE_VK['url'] ?? ''; ?>" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-vk.svg" alt="VK" /></a>
          <a class="header-socs__link" href="<?= SITE_YOUTUBE['url'] ?? ''; ?>" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-yt.svg" alt="YouTube" /></a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

</body>

</html>