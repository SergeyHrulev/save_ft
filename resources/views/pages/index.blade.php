@extends('layouts.app')
@section('content')
<div class="promo promo-big promo-main">

  <div class="promo-pic">
    <img src="{{ asset('img/promo-1.jpg') }}" alt="">
  </div>

  <div class="container">

    <div class="row">
      <div class="col-12 col-md-6">
        <div class="promo-text">
          <h1>Аутсорсинг финансовой службы </h1>
          <h3>Ведем бухгалтерию и кадровый учет, рассчитываем зарплату, сопровождаем ERP-системы для заказчиков, требующих безупречного качества</h3>
        </div>
      </div>
      <!-- /col -->
      <div class="col-12 col-md-6">
        <div class="promo-form">
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
        <!-- /promo-form -->

      </div>
      <!-- /col -->
    </div>
    <!-- /row -->


  </div>
  <!-- /container -->
</div>
<!-- /promo -->


<section class="about">
  <div class="container">

    <div class="row">
      <div class="col-12 col-lg-6 offset-lg-6">
        <div class="about-content">

          <div class="about-caption">О нас</div>
          <div class="about-text">
              Компания «ФинТех» — это команда опытных финансистов, бухгалтеров, налоговых специалистов и финансовых контроллеров. У нас есть практические навыки, приобретенные во время работы в профильных отраслях, обширная информационная база и стремление добиваться поставленных целей. Это помогает нам качественно и эффективно выполнять задачи любого уровня сложности и приводить бизнес заказчиков к впечатляющим результатам.
              <br>Мы специализируемся на финансовом аутсорсинге и готовы взять на себя ведение управленческого, финансового и налогового учета, расчитать ключевые финансовые показатели ведения бизнеса и проконтролировать их выполнение.
          </div>
        </div>
        <!-- /about-content -->
      </div>
      <!-- /col -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->

</section>
<!-- /about -->

<section class="advantages page-section">
  <div class="container">

    <div class="page-section__caption">
      <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">
          <h2 class="page-section__title">Обращение к аутсорсинговой компании имеет некоторые преимущества:</h2>
        </div>
      </div>
    </div>

    <div class="advantages-content">
      <div class="row">

        <div class="col-12 col-lg-4">
          <div class="advantages-item">
            <div class="advantages-pic">
              <img src="{{ asset('img/icon/advantages-1.svg') }}" alt="">
            </div>
            <div class="advantages-info">
              <div class="advantages-title">Удобство</div>
              <div class="advantages-text">Обращаясь к нам вы получаете быстрое решение по вопросам: открытия и ведения счетов, бухучету, налоговому планированию и многих других</div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-4">
          <div class="advantages-item">
            <div class="advantages-pic">
              <img src="{{ asset('img/icon/advantages-2.svg') }}" alt="">
            </div>
            <div class="advantages-info">
              <div class="advantages-title">Доступность</div>
              <div class="advantages-text">Наши услуги обойдутся вам дешевле найма Финансового директора и Главного бухгалтера в штат</div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-4">
          <div class="advantages-item">
            <div class="advantages-pic">
              <img src="{{ asset('img/icon/advantages-3.svg') }}" alt="">
            </div>
            <div class="advantages-info">
              <div class="advantages-title">Профессионализм</div>
              <div class="advantages-text">Наши специалисты имеют практический опыт работы в разных областях: бухучет, управленческий учет, налоги и др.</div>
            </div>
          </div>
        </div>

      </div>
      <!-- /row -->
    </div>
    <!-- /advantages-content -->

    <div class="page-section__more">
       <button class="button button-cta button-big" data-toggle="modal" data-target="#modal-callback">ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ</button>
    </div>

  </div>
  <!-- /container -->

</section>
<!-- /advantages -->

<section class="service page-section">
  <div class="container">

    <div class="page-section__caption">
      <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">
          <h2 class="page-section__title">Наши услуги</h2>
          <h3 class="page-section__subtitle">Успех бизнеса зависит от эффективного управления финансами. <br> Главная задача руководителя — построить грамотную систему управления финансами. Наша задача - помочь вам в этом</h3>
        </div>
      </div>
    </div>

    <div class="service-content">
      <div class="row">

        <div class="col-12 col-lg-6">
          <div class="service-item">
            <div class="service-caption">
              <div class="service-pic">
                <img src="{{ asset('img/icon/employee.svg') }}" alt="">
              </div>
              <div class="service-name">Бухгалтерский учет</div>
            </div>
            <div class="service-info">
              Возьмем на себя сбор первичных документов, составление и сдачу отчетности в ФНС, ФСС, ПФ. Поможем выбрать оптимальный налоговый режим. Восстановим учет.
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div class="service-item">
            <div class="service-caption">
              <div class="service-pic">
                <img src="{{ asset('img/icon/finance.svg') }}" alt="">
              </div>
              <div class="service-name">Управленческий учет</div>
            </div>
            <div class="service-info">
              Построим систему бюджетирования, определим ключевые финансовые показатели бизнеса, сформируем карту ключевых показателей, проконтролируем исполнение бюджетов.
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div class="service-item">
            <div class="service-caption">
              <div class="service-pic">
                <img src="{{ asset('img/icon/graduation-hat.svg') }}" alt="">
              </div>
              <div class="service-name">Налоговое планирование</div>
            </div>
            <div class="service-info">
              Сделаем расчет налоговой нагрузки, подберем оптимальный налоговый режим, проверим наличие налоговых рисков.
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div class="service-item">
            <div class="service-caption">
              <div class="service-pic">
                <img src="{{ asset('img/icon/shield.svg') }}" alt="">
              </div>
              <div class="service-name">Расчет проектов</div>
            </div>
            <div class="service-info">
              Если вы хотите открыть новое направление, бизнес, вложить деньги в проект или привлечь инвесторов в проект, мы сделаем расчет проекта, расчитаем сроки окупаемости, возврата инвестиций, расчитаем все необходимые показатели проекта.
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div class="service-item">
            <div class="service-caption">
              <div class="service-pic">
                <img src="{{ asset('img/icon/startup.svg') }}" alt="">
              </div>
              <div class="service-name">Быстрый старт</div>
            </div>
            <div class="service-info">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia fugiat molestias ipsa a nulla illo inventore, placeat, repellat.
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div class="service-item">
            <div class="service-caption">
              <div class="service-pic">
                <img src="{{ asset('img/icon/handshake.svg') }}" alt="">
              </div>
              <div class="service-name">Управление счетами и оборотным капиталом</div>
            </div>
            <div class="service-info">
              Поможем с открытием и ведением счетов в банках, подготовкой и отправкой банковских документов, получением кредитов, паспортами сделок.
            </div>
          </div>
        </div>

      </div>
      <!-- /row -->
    </div>
    <!-- /service-content -->

  </div>
  <!-- /container -->
</section>
<!-- /service -->

<section class="work page-section">
  <div class="container">

    <div class="page-section__caption">
      <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">
          <h2 class="page-section__title">Как мы работаем</h2>
          <h3 class="page-section__subtitle">Равным образом начало повседневной работы по формированию позиции представляет собой интересный эксперимент проверки новых предложений.</h3>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">

        <div class="work-content">

          <div class="work-item">
            <div class="work-number"><span>1</span></div>
            <div class="work-info">Собираем необходимые документы для детального анализа финансового состояния компании, определяем необходимый объем работ и окончательную стоимость.</div>
          </div>
          <div class="work-item">
            <div class="work-number"><span>2</span></div>
            <div class="work-info">Проводим тщательный аудит компании, после чего разрабатываем финансовые показатели и согласовываем эти данные с собственниками компании.</div>
          </div>
          <div class="work-item">
            <div class="work-number"><span>3</span></div>
            <div class="work-info">
                На основе полученной информации составляем бюджет и финансовый план.
            </div>
          </div>
            <div class="work-item">
                <div class="work-number"><span>4</span></div>
                <div class="work-info">
                    Контролируем выполнение показателей и корректируем бюджет.
                </div>
            </div>

        </div>
        <!-- /work-content -->

      </div>
    </div>
    <!-- /row -->



    <div class="page-section__more">
       <button class="button button-cta button-big" data-toggle="modal" data-target="#modal-callback">ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ</button>
    </div>


  </div>
  <!-- /container -->

</section>
<!-- /work -->

<section class="subscribe page-section page-section--bg">

  <div class="page-section__pic">
    <img src="{{ asset('img/subs-bg.jpg') }}" alt="">
  </div>

  <div class="container">

    <div class="page-section__caption page-section__caption--white">
      <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
          <h2 class="page-section__title">Подпишитесь на нашу рассылку</h2>
          <h3 class="page-section__subtitle">Чтобы быть в курсе новостей по управлению финансами</h3>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
        <form class="subscribe-form">
          <input class="subscribe-input" type="text" placeholder="Ваш e-mail">
          <buttom class="button button-cta button-mini">Отправить</buttom>
        </form>
      </div>
    </div>
    <!-- /row -->

  </div>
  <!-- /container -->

</section>
<!-- /subscribe -->

<section class="review page-section">
  <div class="container">

    <div class="page-section__caption">
      <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">
          <h2 class="page-section__title">Отзывы наших клиентов</h2>
          <h3 class="page-section__subtitle"></h3>
        </div>
      </div>
    </div>

    <div class="review-content">

      <div class="review-slider">

        <div class="review-item">
          <div class="review-author">
            <div class="review-author__pic">
              <img src="{{ asset('img/temp/author-1.jpg') }}" alt="">
            </div>
            <div class="review-author__info">
              <div class="review-author__name">Мария Павликова</div>
              <div class="review-author__company">Директор “Рога и Копыта”</div>
            </div>
          </div>
          <div class="review-text">
            Равным образом начало повседневной работы по формированию позиции представляет собой интересный эксперимент проверки новых предложений.
          </div>
        </div>
        <div class="review-item">
          <div class="review-author">
            <div class="review-author__pic">
              <img src="{{ asset('img/temp/author-2.jpg') }}" alt="">
            </div>
            <div class="review-author__info">
              <div class="review-author__name">Мария Павликова</div>
              <div class="review-author__company">Директор “Рога и Копыта”</div>
            </div>
          </div>
          <div class="review-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus quaerat fugiat, voluptates delectus, et labore architecto commodi. Facilis qui, id!
          </div>
        </div>
        <div class="review-item">
          <div class="review-author">
            <div class="review-author__pic">
              <img src="{{ asset('img/temp/author-3.jpg') }}" alt="">
            </div>
            <div class="review-author__info">
              <div class="review-author__name">Мария Павликова</div>
              <div class="review-author__company">Директор “Рога и Копыта”</div>
            </div>
          </div>
          <div class="review-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, exercitationem iusto suscipit voluptatum! Porro ut ratione hic voluptas expedita nam. Voluptates iste sit voluptas! Vero ipsa ab voluptate quidem mollitia.
          </div>
        </div>
        <div class="review-item">
          <div class="review-author">
            <div class="review-author__pic">
              <img src="{{ asset('img/temp/author-4.jpg') }}" alt="">
            </div>
            <div class="review-author__info">
              <div class="review-author__name">Мария Павликова</div>
              <div class="review-author__company">Директор “Рога и Копыта”</div>
            </div>
          </div>
          <div class="review-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut molestiae, delectus, quas rerum molestias vel nemo dolore nesciunt maxime voluptatum eum quos sit reiciendis aspernatur.
          </div>
        </div>

      </div>
      <!-- /review-slider -->

    </div>
    <!-- /review-content -->

  </div>
  <!-- /container -->

</section>
<!-- /review -->




<section class="interesting page-section">
  <div class="container">

    <div class="page-section__caption">
      <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">
          <h2 class="page-section__title">Интересные статьи и мероприятия</h2>
          <h3 class="page-section__subtitle"></h3>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-12 col-lg-6">
        <div class="interesting-article">
          <a class="interesting-article__item" href="#">
            <div class="interesting-article__pic">
              <img src="{{ asset('img/temp/art-1.jpg') }}" alt="">
            </div>
            <div class="interesting-article__info">
              <div class="interesting-article__title">BDO получила престижную премию Network of the Year</div>
              <div class="interesting-article__date">25 июня 17:45</div>
            </div>
          </a>
          <a class="interesting-article__item" href="#">
            <div class="interesting-article__pic">
              <img src="{{ asset('img/temp/art-2.jpg') }}" alt="">
            </div>
            <div class="interesting-article__info">
              <div class="interesting-article__title">Lorem ipsum dolor sit.</div>
              <div class="interesting-article__date">25 июня 17:45</div>
            </div>
          </a>
          <a class="interesting-article__item" href="#">
            <div class="interesting-article__pic">
              <img src="{{ asset('img/temp/art-3.jpg') }}" alt="">
            </div>
            <div class="interesting-article__info">
              <div class="interesting-article__title">Lorem ipsum dolor sit amet, consectetur adipisicing.</div>
              <div class="interesting-article__date">25 июня 17:45</div>
            </div>
          </a>
          <a class="interesting-article__item" href="#">
            <div class="interesting-article__pic">
              <img src="{{ asset('img/order-bg.jpg') }}" alt="">
            </div>
            <div class="interesting-article__info">
              <div class="interesting-article__title">Lorem ipsum dolor.</div>
              <div class="interesting-article__date">25 июня 17:45</div>
            </div>
          </a>
        </div>
        <!-- /interesting-article -->
      </div>
      <!-- /col -->

      <div class="col-12 col-lg-6">
        <div class="interesting-event">
          <div class="interesting-event__caption">
            <div class="interesting-event__title">Мероприятия</div>
            <a class="interesting-event__all" href="#">Смотреть все</a>
          </div>
          <div class="interesting-event__content">

            <div class="interesting-event__item">
              <div class="interesting-event__pic">
                <img src="{{ asset('img/temp/event-1.jpg') }}" alt="">
              </div>
              <div class="interesting-event__info">
                <a class="interesting-event__name" href="#">Конференция «HR&FINANCE: меняем бизнес вместе»</a>
                <div class="interesting-event__date">25 июня 17:45</div>
              </div>
            </div>
            <div class="interesting-event__item">
              <div class="interesting-event__pic">
                <img src="{{ asset('img/temp/event-2.jpg') }}" alt="">
              </div>
              <div class="interesting-event__info">
                <a class="interesting-event__name" href="#">Lorem ipsum dolor sit amet.</a>
                <div class="interesting-event__date">25 июня 17:45</div>
              </div>
            </div>
            <div class="interesting-event__item">
              <div class="interesting-event__pic">
                <img src="{{ asset('img/temp/event-3.jpg') }}" alt="">
              </div>
              <div class="interesting-event__info">
                <a class="interesting-event__name" href="#">Lorem ipsum dolor sit amet, consectetur adipisicing.</a>
                <div class="interesting-event__date">25 июня 17:45</div>
              </div>
            </div>
            <div class="interesting-event__item">
              <div class="interesting-event__pic">
                <img src="{{ asset('img/temp/event-4.jpg') }}" alt="">
              </div>
              <div class="interesting-event__info">
                <a class="interesting-event__name" href="#">Lorem ipsum dolor.</a>
                <div class="interesting-event__date">25 июня 17:45</div>
              </div>
            </div>

          </div>
          <!-- /interesting-event__content -->
        </div>
        <!-- /interesting-event -->
      </div>
      <!-- /col -->



    </div>
    <!-- /row -->

  </div>
  <!-- /container -->

</section>
<!-- /interesting -->
@stop
