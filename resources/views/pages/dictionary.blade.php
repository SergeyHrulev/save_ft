@extends('layouts.app')
@section('content')
<div class="dictionary">


  <div class="promo promo-mini dictionary-promo">

    <div class="promo-pic">
      <img src="/assets/img/promo-2.jpg" alt="">
    </div>

    <div class="container">

      <div class="row">
        <div class="col-12">
          <div class="promo-text">
            <h4>Финсловарь</h4>
            <h5>Поиск по словарю</h5>
          </div>
          <div class="dictionary-search">
            <form class="dictionary-form">
              <input type="text" placeholder="Слово или термин">
              <button class="button">Найти</button>
            </form>
          </div>
          <div class="dictionary-letters">
            <a class="dictionary-letters__item" href="#">А</a>
            <a class="dictionary-letters__item" href="#">Б</a>
            <a class="dictionary-letters__item" href="#">В</a>
            <a class="dictionary-letters__item" href="#">Г</a>
            <a class="dictionary-letters__item" href="#">Д</a>
            <a class="dictionary-letters__item" href="#">Е</a>
            <a class="dictionary-letters__item" href="#">Ё</a>
            <a class="dictionary-letters__item" href="#">Ж</a>
            <a class="dictionary-letters__item" href="#">З</a>
            <a class="dictionary-letters__item" href="#">И</a>
            <a class="dictionary-letters__item" href="#">Й</a>
            <a class="dictionary-letters__item" href="#">К</a>
            <a class="dictionary-letters__item" href="#">Л</a>
            <a class="dictionary-letters__item" href="#">М</a>
            <a class="dictionary-letters__item" href="#">Н</a>
            <a class="dictionary-letters__item" href="#">О</a>
            <a class="dictionary-letters__item" href="#">П</a>
            <a class="dictionary-letters__item" href="#">Р</a>
            <a class="dictionary-letters__item" href="#">С</a>
            <a class="dictionary-letters__item" href="#">Т</a>
            <a class="dictionary-letters__item" href="#">У</a>
            <a class="dictionary-letters__item" href="#">Ф</a>
            <a class="dictionary-letters__item" href="#">Х</a>
            <a class="dictionary-letters__item" href="#">Ц</a>
            <a class="dictionary-letters__item" href="#">Ч</a>
            <a class="dictionary-letters__item" href="#">Ш</a>
            <a class="dictionary-letters__item" href="#">Щ</a>
            <a class="dictionary-letters__item" href="#">Э</a>
            <a class="dictionary-letters__item" href="#">Ю</a>
            <a class="dictionary-letters__item" href="#">Я</a>
          </div>
        </div>
        <!-- /col -->
      </div>
      <!-- /row -->

    </div>
    <!-- /container -->
  </div>
  <!-- /promo -->

<div class="container">

  <div class="row">
    <div class="col-12 col-md-4">
      <aside class="dictionary-sidebar">
        <div class="dictionary-sidebar__caption">Темы</div>

        <div class="dictionary-menu">
          <div class="dictionary-menu__item">
            <div class="dictionary-menu__title">Акции</div>
            <ul class="dictionary-menu__submenu">
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
            </ul>
          </div>
          <div class="dictionary-menu__item">
            <div class="dictionary-menu__title">Аудит</div>
            <ul class="dictionary-menu__submenu">
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
            </ul>
          </div>
          <div class="dictionary-menu__item">
            <div class="dictionary-menu__title">Банки</div>
            <ul class="dictionary-menu__submenu">
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
            </ul>
          </div>
          <div class="dictionary-menu__item">
            <div class="dictionary-menu__title">Внешняя торговля</div>
            <ul class="dictionary-menu__submenu">
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
            </ul>
          </div>
          <div class="dictionary-menu__item">
            <div class="dictionary-menu__title">Государственный бюджет</div>
            <ul class="dictionary-menu__submenu">
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
            </ul>
          </div>
          <div class="dictionary-menu__item dictionary-menu__item--active">
            <div class="dictionary-menu__title">Деньги</div>
            <ul class="dictionary-menu__submenu">
              <li><a class="dictionary-menu__submenu-link" href="#">Аванс срочный</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Авансированная стоимость</a></li>
              <li><a class="dictionary-menu__submenu-link dictionary-menu__submenu-link--active" href="#">Антиинфляционная политика предложения</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Банковский кредит</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Валюта</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Гиперинфляция</a></li>
            </ul>
          </div>
          <div class="dictionary-menu__item">
            <div class="dictionary-menu__title">Инвестиции</div>
            <ul class="dictionary-menu__submenu">
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
            </ul>
          </div>
          <div class="dictionary-menu__item">
            <div class="dictionary-menu__title">Капитал</div>
            <ul class="dictionary-menu__submenu">
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
            </ul>
          </div>
          <div class="dictionary-menu__item">
            <div class="dictionary-menu__title">Маркетинг</div>
            <ul class="dictionary-menu__submenu">
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
              <li><a class="dictionary-menu__submenu-link" href="#">Ссылка</a></li>
            </ul>
          </div>
        </div>
        <!-- /dictionary-menu -->

      </aside>
      <!-- /dictionary-sidebar -->
    </div>
    <!-- /col -->
    <div class="col-12 col-md-8">
      <div class="breadcrumbs">
        <div class="breadcrumbs-content">
          <a class="breadcrumbs-item" href="/">Финтекс</a>
          <a class="breadcrumbs-item" href="#">Деньги</a>
        </div>
      </div>

      <div class="dictionary-info">

        <h1 class="dictionary-caption">Антиинфляционная политика предложения</h1>
        <div class="dictionary-text">
          <p>Антиинфляционная политика предложения - макроэкономическая политика, направленная на увеличение естественного уровня национального продукта с целью сокращения уровня инфляции. Основным инструментом такой политики является сокращение предельной ставки налогообложения в целях стимулирования роста объема выпуска.</p>
        </div>
        <div class="dictionary-english">
          <p><span>По-английски:</span>  Supply-side anti-inflation policy</p>
        </div>
        <div class="dictionary-category">
          <div class="dictionary-category__caption">Ещё в этой категории</div>
          <div class="dictionary-category__list">
            <a class="dictionary-category__item" href="#">Аванс срочный</a>
            <a class="dictionary-category__item" href="#">Авансированная стоимость</a>
            <a class="dictionary-category__item" href="#">Банковский кредит</a>
            <a class="dictionary-category__item" href="#">Валюта</a>
            <a class="dictionary-category__item" href="#">Гиперинфляция</a>
          </div>
        </div>

      </div>
      <!-- /dictionary-info -->
    </div>
    <!-- /col -->
  </div>
  <!-- /row -->


</div>
<!-- /container -->


</div>
<!-- /dictionary -->
@stop
