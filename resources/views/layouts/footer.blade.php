
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
          <ul class="footer-contacts__list" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <li class="footer-contacts__item" itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                <a href="tel:+78129809572" itemprop="telephone">(812) 980-95-72</a>
            </li>
            <li class="footer-contacts__item" itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                <a href="mailto:info@intelifin.ru" itemprop="email">info@intelifin.ru</a></li>
            <li class="footer-contacts__item">
                <span class="footer-contacts__item" itemprop="addressLocality">Санкт-Петербург,</span><span class="footer-contacts__item" itemprop="streetAddress"> Малая Посадская, 10</span>
            </li>
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
@include('partials.modals.callback')
@include('partials.modals.order')
@include('layouts.register_login')
