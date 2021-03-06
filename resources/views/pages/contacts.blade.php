@extends('layouts.app')
@section('content')
<div class="contacts">
  <div class="container">

    <div class="contacts-content">

      <div class="contacts-caption">
        <h1>Контакты</h1>
      </div>

      <div class="contacts-info" itemscope itemtype="http://schema.org/PostalAddress">
        <div class="contacts-info__item">
          <div class="contacts-info__title">Телефон</div>
          <div class="contacts-info__text"><a href="tel:+78129809572" itemprop="telephone">(812) 980-95-72</a></div>
        </div>
        <div class="contacts-info__item">
          <div class="contacts-info__title">Email</div>
          <div class="contacts-info__text"><a href="mailto:info@intelifin.ru" itemprop="email">info@intelifin.ru</a></div>
        </div>
        <div class="contacts-info__item contacts-info__item-address">
          <div class="contacts-info__title">Адрес</div>
          <div class="contacts-info__text">
              <span class="footer-contacts__item" itemprop="addressLocality">Санкт-Петербург,</span><span class="footer-contacts__item" itemprop="streetAddress"> Малая Посадская, 10</span>
          </div>
        </div>
      </div>
    </div>
    <!-- /contacts-content -->

    <div class="contacts-map">
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af89838d6467619a88d08779c5aeaf9707c129fb148f24d3c47d643c9848c38b6&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>

  </div>
  <!-- /container -->
</div>
<!-- /contacts -->
@stop
