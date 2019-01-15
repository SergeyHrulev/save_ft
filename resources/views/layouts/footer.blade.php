
<footer class="footer">
  <div class="container">

    <div class="row">

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="footer-menu">
          <div class="footer-title">Услуги</div>
          <ul class="footer-menu__list">
            <li class="footer-menu__item"><a class="footer-menu__link" href="#">Кредитный эксперт</a></li>
            <li class="footer-menu__item"><a class="footer-menu__link" href="#">Финансовый директор</a></li>
            <li class="footer-menu__item"><a class="footer-menu__link" href="#">Школа Финансового Директора</a></li>
            <li class="footer-menu__item"><a class="footer-menu__link" href="#">Уверенный старт</a></li>
            <li class="footer-menu__item"><a class="footer-menu__link" href="#">Безопасность бизнеса</a></li>
            <li class="footer-menu__item"><a class="footer-menu__link" href="#">Ваш банкир</a></li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="footer-menu">
          <div class="footer-title">Разделы</div>
          <ul class="footer-menu__list">
            <li class="footer-menu__item"><a class="footer-menu__link" href="#">О нас</a></li>
            <li class="footer-menu__item"><a class="footer-menu__link" href="#">Компания</a></li>
            <li class="footer-menu__item"><a class="footer-menu__link" href="#">Команда</a></li>
            <li class="footer-menu__item"><a class="footer-menu__link" href="#">История</a></li>
            <li class="footer-menu__item"><a class="footer-menu__link" href="#">Голосарий</a></li>
            <li class="footer-menu__item"><a class="footer-menu__link" href="#">FAQ</a></li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-lg-5 offset-lg-1">
        <div class="footer-contacts">
          <div class="footer-title">Контакты</div>
          <ul class="footer-contacts__list">
            <li class="footer-contacts__item"><a href="tel:+78129809572">(812) 980-95-72</a></li>
            <li class="footer-contacts__item"><a href="mailto:info@intelifin.ru">info@intelifin.ru</a></li>
            <li class="footer-contacts__item">СПб, Малая Посадская, 10</li>
          </ul>
          <div class="footer-map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af89838d6467619a88d08779c5aeaf9707c129fb148f24d3c47d643c9848c38b6&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
          </div>
        </div>
      </div>

    </div>
    <!-- /row -->

  </div>
  <!-- /container -->
</footer>


<div class="overlay"></div>



<!-- Modal Callback-->
<div class="modal fade modal-callback" id="modal-callback" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-info">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img class="svg" src="{{ asset('img/icon/close.svg') }}" alt="">
        </button>
        <div class="callback">
          <form class="callback-form" action="">
            <div class="callback-form__caption">Заказать бесплатную консультацию</div>
            <div class="callback-form__content">
              <div class="callback-form__block">
                <div class="callback-form__title">Имя</div>
                <input class="callback-form__input" type="text">
              </div>
              <div class="callback-form__block">
                <div class="callback-form__title">Телефон</div>
                <input class="callback-form__input" type="phone">
              </div>
              <div class="callback-form__block">
                <div class="callback-form__title">Email</div>
                <input class="callback-form__input" type="email">
              </div>
            </div>
            <div class="callback-form__button">
              <button class="button button-cta">ЗАКАЗАТЬ</button>
            </div>
            <div class="callback-privacy">
              <div class="callback-privacy__check">
                <input type="checkbox" checked>
              </div>
              <div class="callback-privacy__text">Я согласен с использованием моих персональных данных для обработки данного обращения</div>
            </div>
          </form>
        </div>
        <!-- /callback -->
      </div>

    </div>
  </div>
</div>
@include('layouts.register_login')
