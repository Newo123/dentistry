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


  <section class="sec-services sec-p-y" id="services">
    <div class="container">
      <div class="h2">Услуги клиники</div>
      <div class="sec-services__tabs" data-tabs="data-tabs">
        <div class="sec-services__tabs-nav">
          <button class="btn btn-green btn-tab is-active" data-tab-btn="data-tab-btn" data-target="tab-1">Стоматология. Ортопедическое лечение</button>
          <button class="btn btn-green btn-tab" data-tab-btn="data-tab-btn" data-target="tab-2">Протезирование</button>
          <button class="btn btn-green btn-tab" data-tab-btn="data-tab-btn" data-target="tab-3">Имплантация</button>
          <button class="btn btn-green btn-tab" data-tab-btn="data-tab-btn" data-target="tab-4">Терапия и традиционная китайская медицина</button>
        </div>
        <div class="tabs__content" data-tabs-content="data-tabs-content">
          <div class="is-active" data-tab-pane="data-tab-pane" id="tab-1">
            <div class="sec-services__item">
              <div class="sec-services__item-wrap">
                <div class="sec-services__item-slider">
                  <div class="swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/img/services-1.jpg" /></div>
                      <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/img/services-1.jpg" /></div>
                      <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/img/services-1.jpg" /></div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                  <div class="sec-services__item-slider-nav">
                    <div class="slider-button-prev"></div>
                    <div class="slider-button-next"></div>
                  </div>
                </div>
                <div class="sec-services__item-content">
                  <div class="sec-services__item-title">Стоматология. Ортопедическое лечение </div>
                  <div class="sec-services__item-list">
                    <div class="sec-services__item-list-item">
                      <p>Металлокерамическая коронка <br /> на основе титана (пр-во Китай)</p><span>5 600 ₽</span>
                    </div>
                    <div class="sec-services__item-list-item">
                      <p>Металлокерамическая коронка на основе титана (пр-во Япония)</p><span>6 800 ₽</span>
                    </div>
                    <div class="sec-services__item-list-item">
                      <p>Металлокерамическая коронка на основе титана (пр-во Германия)</p><span>8 500 ₽</span>
                    </div>
                    <div class="sec-services__item-list-item">
                      <p>Коронка на основе диоксида циркония (пр-во Япония)</p><span>12 000 ₽</span>
                    </div>
                    <div class="sec-services__item-list-item">
                      <p>Коронка на основе диоксида циркония (пр-во Германия)</p><span>15 000 ₽</span>
                    </div>
                  </div>
                  <button class="btn btn-green w-100p" data-modal-open="form-request">Рассчитать стоимость</button>
                </div>
              </div>
            </div>
          </div>
          <div data-tab-pane="data-tab-pane" id="tab-2">
            <div class="sec-services__item">
              <div class="sec-services__item-wrap">
                <div class="sec-services__item-slider">
                  <div class="swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/img/services-1.jpg" /></div>
                      <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/img/services-1.jpg" /></div>
                      <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/img/services-1.jpg" /></div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                  <div class="sec-services__item-slider-nav">
                    <div class="slider-button-prev"></div>
                    <div class="slider-button-next"></div>
                  </div>
                </div>
                <div class="sec-services__item-content">
                  <div class="sec-services__item-title">Стоматология. Ортопедическое лечение </div>
                  <div class="sec-services__item-list">
                    <div class="sec-services__item-list-item">
                      <p>Металлокерамическая коронка <br /> на основе титана (пр-во Китай)</p><span>5 600 ₽</span>
                    </div>
                    <div class="sec-services__item-list-item">
                      <p>Металлокерамическая коронка на основе титана (пр-во Япония)</p><span>6 800 ₽</span>
                    </div>
                    <div class="sec-services__item-list-item">
                      <p>Металлокерамическая коронка на основе титана (пр-во Германия)</p><span>8 500 ₽</span>
                    </div>
                    <div class="sec-services__item-list-item">
                      <p>Коронка на основе диоксида циркония (пр-во Япония)</p><span>12 000 ₽</span>
                    </div>
                    <div class="sec-services__item-list-item">
                      <p>Коронка на основе диоксида циркония (пр-во Германия)</p><span>15 000 ₽</span>
                    </div>
                  </div>
                  <button class="btn btn-green w-100p" data-modal-open="form-request">Рассчитать стоимость</button>
                </div>
              </div>
            </div>
          </div>
          <div data-tab-pane="data-tab-pane" id="tab-3">
            <div class="sec-services__item">
              <div class="sec-services__item-wrap">
                <div class="sec-services__item-slider">
                  <div class="swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/img/services-1.jpg" /></div>
                      <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/img/services-1.jpg" /></div>
                      <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/img/services-1.jpg" /></div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                  <div class="sec-services__item-slider-nav">
                    <div class="slider-button-prev"></div>
                    <div class="slider-button-next"></div>
                  </div>
                </div>
                <div class="sec-services__item-content">
                  <div class="sec-services__item-title">Стоматология. Ортопедическое лечение </div>
                  <div class="sec-services__item-list">
                    <div class="sec-services__item-list-item">
                      <p>Металлокерамическая коронка <br /> на основе титана (пр-во Китай)</p><span>5 600 ₽</span>
                    </div>
                    <div class="sec-services__item-list-item">
                      <p>Металлокерамическая коронка на основе титана (пр-во Япония)</p><span>6 800 ₽</span>
                    </div>
                    <div class="sec-services__item-list-item">
                      <p>Металлокерамическая коронка на основе титана (пр-во Германия)</p><span>8 500 ₽</span>
                    </div>
                    <div class="sec-services__item-list-item">
                      <p>Коронка на основе диоксида циркония (пр-во Япония)</p><span>12 000 ₽</span>
                    </div>
                    <div class="sec-services__item-list-item">
                      <p>Коронка на основе диоксида циркония (пр-во Германия)</p><span>15 000 ₽</span>
                    </div>
                  </div>
                  <button class="btn btn-green w-100p" data-modal-open="form-request">Рассчитать стоимость</button>
                </div>
              </div>
            </div>
          </div>
          <div data-tab-pane="data-tab-pane" id="tab-4">
            <div class="sec-services__item">
              <div class="sec-services__item-wrap">
                <div class="sec-services__item-slider">
                  <div class="swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/img/services-1.jpg" /></div>
                      <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/img/services-1.jpg" /></div>
                      <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/img/services-1.jpg" /></div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                  <div class="sec-services__item-slider-nav">
                    <div class="slider-button-prev"></div>
                    <div class="slider-button-next"></div>
                  </div>
                </div>
                <div class="sec-services__item-content">
                  <div class="sec-services__item-title">Стоматология. Ортопедическое лечение </div>
                  <div class="sec-services__item-list">
                    <div class="sec-services__item-list-item">
                      <p>Металлокерамическая коронка <br /> на основе титана (пр-во Китай)</p><span>5 600 ₽</span>
                    </div>
                    <div class="sec-services__item-list-item">
                      <p>Металлокерамическая коронка на основе титана (пр-во Япония)</p><span>6 800 ₽</span>
                    </div>
                    <div class="sec-services__item-list-item">
                      <p>Металлокерамическая коронка на основе титана (пр-во Германия)</p><span>8 500 ₽</span>
                    </div>
                    <div class="sec-services__item-list-item">
                      <p>Коронка на основе диоксида циркония (пр-во Япония)</p><span>12 000 ₽</span>
                    </div>
                    <div class="sec-services__item-list-item">
                      <p>Коронка на основе диоксида циркония (пр-во Германия)</p><span>15 000 ₽</span>
                    </div>
                  </div>
                  <button class="btn btn-green w-100p" data-modal-open="form-request">Рассчитать стоимость</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?= get_template_part('template-parts/faq-block'); ?>
  <?= get_template_part('template-parts/gallery-block'); ?>

  <?= get_template_part('template-parts/reviews-block'); ?>
  <section class="sec-contacts sec-p-y--top" id="contacts">
    <div class="container">
      <div class="h2">Контакты</div>
      <div class="h2-subtitle">Если вы хотите узнать стоимость лечения, сроки поездки или задать <br class="d-none-max-mob" /> любой вопрос <br class="d-none-min-mob" /> — свяжитесь с нашим координатором.</div>
      <div class="sec-contacts__content">
        <div class="sec-contacts__content-left">
          <div class="sec-contacts__links"><a href="tel:+79145380606">+7 (914) 538-06-06</a><a href="mailto:stomat@mail.ru">Stomat@mail.ru</a>
            <p>г. Москва, ул. Кирова 44</p>
          </div>
        </div>
        <div class="sec-contacts__content-right">
          <div class="sec-contacts__socs"><a href="#" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-vk.svg" alt="VK" /></a><a href="#" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-yt.svg" alt="YouTube" /></a><a href="#" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-tg.svg" alt="Telegram" /></a><a href="#" target="_blank"><img class="header-socs__icon" src="<?= get_template_directory_uri() ?>/img/soc-wa.svg" alt="WhatsApp" /></a></div>
        </div>
      </div>
    </div>
  </section>
  <section class="sec-form sec-p-y--bottom">
    <div class="container">
      <div class="sec-form__content">
        <div class="sec-form__content-img d-none-max-tablet"><img src="<?= get_template_directory_uri() ?>/img/form-doc.png" alt="" /></div>
        <div class="sec-form__title h3">Получите бесплатную консультацию <br class="d-none-max-mob" /> от нашего специалиста</div>
        <form class="sec-form__form" data-form="data-form">
          <div class="sec-form__input">
            <label>Телефон</label>
            <input type="tel" placeholder="+7 (999) 111-22-33" data-imask="data-imask" data-form-phone="data-form-phone" />
            <div class="error">Введите корректные данные</div>
          </div>
          <div class="sec-form__input">
            <label>Имя</label>
            <input type="text" placeholder="Введите ваше имя" data-form-name="data-form-name" />
            <div class="error">Введите корректные данные</div>
          </div>
          <button class="btn btn-white w-100p sec-form__submit" type="submit" data-submit="data-submit">Оставить заявку</button>
          <div class="sec-form__checkbox custom-checkbox">
            <label>
              <input type="checkbox" data-form-checkbox="data-form-checkbox" />
              <div class="custom-checkbox__box"></div>
            </label>
            <p>
              Нажимая на кнопку вы даёте согласие на обработку <a href="#">персональных данных</a> и соглашаетесь с <a href="#">политикой конфиденциальности</a></p>
          </div>
        </form>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
