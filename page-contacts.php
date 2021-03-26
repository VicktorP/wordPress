<?php 
/*
Template Name: Контакты
Template Post Type: page
*/

//Подключение header.php
get_header();
?>

<main class="container--big">
  <div class="container section__container">
    <div class="section__contact">
      <div class="contact-left">
        <div class="box__name">
          <h2 class="content__name">Контактная</h2>
          <strong class="content__name--accent">Информация</strong>
        </div>
        <div class="contact__info">
          <h6 class="contact__subtitle">«Digital Project»</h6>
          <div class="contact__info-map">г. Караганда, ул. Телевизионная 10</div>
          <a class="contact__info-tel" href="tel:77017776811">+7 (701) 77 76 811</a>
          <a class="contact__info-mail" href="mailto:galym.sultanov@mail.ru">Galym.sultanov@mail.ru</a>
        </div>
        <button class="button button--normal button--accent open-modal button--animate animate__animated" data-scroll>
          Обратная связь
        </button>
      </div>
      <div class="contact-right">
        <div class="contact__map-wrap " >
          <iframe
            class="contact__map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2573.9846351528136!2d73.08341361570878!3d49.82395397939394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x424346c3b32ffcaf%3A0x41481e634d919f9e!2z0YPQuy4g0KLQtdC70LXQstC40LfQuNC-0L3QvdCw0Y8gMTAsINCa0LDRgNCw0LPQsNC90LTQsCAxMDAwMDAsINCa0LDQt9Cw0YXRgdGC0LDQvQ!5e0!3m2!1sru!2sua!4v1608220702845!5m2!1sru!2sua"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0"
          ></iframe>
        </div>
      </div>
    </div>
  </div>
</main>

<div class=" section__container form-container">
  <div class="section__modal-form">
    <div class="modal-form">
      <div class="modal-top">
        <h5 class="modal-form__title">Задать вопрос</h5>
        <span class="close">×</span>
      </div>
      <div class="modal-form__wrap">
        <form action="#" class="js-form form">
          <div class="form-group form__input--modal">
            <input
              type="text"
              class="form__input form-control"
              placeholder="Имя"
              autocomplete="off"
              data-validate-field="name"
              name="name"
              id="name"
            />
          </div>
          <div class="form-group  form__input--modal">
            <input
              type="phone"
              class="form__input form-control phoneInput"
              placeholder="Номер телефона"
              autocomplete="off"
              data-validate-field="phone"
              name="phone"
              id="phone"
            />
          </div>
          <div class="form-group form__input--modal">
            <input
              type="email"
              class="form__input form-control"
              placeholder="E-mail"
              autocomplete="off"
              data-validate-field="email"
              name="email"
              id="email"
            />
          </div>
          <div class="form-group form__input--modal">
            <input
              type="text"
              class="form__input form-control "
              placeholder="Интересующий товар/услуга"
              autocomplete="off"
              data-validate-field="text"
              name="text"
              id="text"
            />
          </div>
          <div class="form-group form__textarea--modal">
            <textarea
              placeholder="Сообщение"
              name="msg"
              cols="30"
              rows="10"
              autocomplete="off"
              class="form__textarea form-control "
              data-validate-field="text"
              id="text"
            ></textarea>
          </div>
          <div class="form-group form-confid">
            <label class="check__block">
              <input
                type="checkbox"
                class="form__checkbox"
                data-validate-field="checkbox"
                checked
              />
              <span class="check__box"></span>
              <span class="check__text check__text--modal">
                Отправляя заявку Вы соглашаетесь с политикой конфиденциальности
              </span>
            </label>
          </div>
          <button
            class="form__btn btn btn-primary button button--stretched button--accent button--sent"
          >
            Отправить
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="section__modal">
  <div class="modal__ok-wrap">
      <div class="modal-ok">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/ok.svg" alt="" class="modal__img" />
          <h5 class="modal__title">Спасибо !</h5>
          <p class="modal__text">
            Ваше сообщение отправлено мы свяжемся с вами в ближайшее время
          </p>
          <button
            class="form__btn btn btn-primary button button--stretched button--accent button--close"
          >
            Вернутся назад
          </button>
      </div>
  </div>
</div>

<?php
//Подключение footer.php
get_footer();

?>