@extends('layouts.app')
@section('content')
    @include('notifications.success_subscription')
    @include('notifications.success_unsubscription')
    @include('notifications.order_success')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                    @endforeach
            </ul>
        </div>
        @endif
<div class="promo promo-big promo-main">

  <div class="promo-pic" style="background-color: #555170;">
    {{--<img src="{{ asset('img/promo-1.jpg') }}" alt="">--}}
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
    @include('partials.order')
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
              Мы — команда финансистов, бухгалтеров, налоговых специалистов и финансовых аналитиков. Помогаем компаниям, стартапам и индивидуальным предпринимателям тратить меньше, а зарабатывать больше.

              Можем заменить вам штатного бухгалтера, финансового директора, консультанта и аналитика. Используем опыт крупных компаний, чтобы помочь малому и среднему бизнесу наладить управленческие процессы.

              Работаем удаленно или отправляем к вам в компанию своего специалиста.

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

    {{--<div class="page-section__caption">--}}
      {{--<div class="row">--}}
        {{--<div class="col-12 col-lg-8 offset-lg-2">--}}
          {{--<h2 class="page-section__title">Обращение к аутсорсинговой компании имеет некоторые преимущества:</h2>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}

    <div class="advantages-content">
      <div class="row">

        <div class="col-12 col-lg-6">
          <div class="advantages-item">
            <div class="advantages-pic">
              <img src="{{ asset('img/icon/advantages-1.svg') }}" alt="">
            </div>
            <div class="advantages-info">
              <div class="advantages-title">Помогаем начать</div>
              <div class="advantages-text">
                  Зарегистрируем бизнес, откроем счет в банке и научим правильно платить налоги. Рассчитаем проект стартапа и будем вести его бухгалтерию, кадровый и управленческий учет, контролировать счета и платежи.

                  Если нужен кредит, подберем подходящий продукт, подготовим заявку и соберем справки, а вам останется только получить деньги.

                  Мы решим текущие задачи и настроим процесс, чтобы дальше вы смогли справляться сами

              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div class="advantages-item">
            <div class="advantages-pic">
              <img src="{{ asset('img/icon/advantages-2.svg') }}" alt="">
            </div>
            <div class="advantages-info">
              <div class="advantages-title">Помогаем развиваться</div>
              <div class="advantages-text">
                  Проведем аудит уже работающего бизнеса. Поможем выбрать выгодные направления развития и найти клиентов, которые будут приносить прибыль, а не убытки.
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div class="advantages-item">
            <div class="advantages-pic">
              <img src="{{ asset('img/icon/advantages-3.svg') }}" alt="">
            </div>
            <div class="advantages-info">
              <div class="advantages-title">Помогаем  выйти из кризиса</div>
              <div class="advantages-text">
                  Поможем решить проблемы, когда кажется, что процессы налажены и все работает, но прибыли нет.

                  Составим и внедрим пошаговый план управления. Напишем программу или подберем сервис под вашу компанию, чтобы вы могли настроить процессы и контролировать бизнес
              </div>
            </div>
          </div>
        </div>

          <div class="col-12 col-lg-6">
              <div class="advantages-item">
                  <div class="advantages-pic">
                      <img src="{{ asset('img/icon/advantages-3.svg') }}" alt="">
                  </div>
                  <div class="advantages-info">
                      <div class="advantages-title">Помогаем разобраться в финансах</div>
                      <div class="advantages-text">
                          Научим управлять финансами. Для этого мы пишем в блог, снимаем обучающие видео, консультируем лично, проводим мастер-классы и читаем лекции.

                          Можем обучить одного специалиста или сразу всех сотрудников вашей компании.

                      </div>
                  </div>
              </div>
          </div>

      </div>
      <!-- /row -->
    </div>
    <!-- /advantages-content -->

    {{--<div class="page-section__more">--}}
       {{--<button class="button button-cta button-big" data-toggle="modal" data-target="#order">ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ</button>--}}
    {{--</div>--}}

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
            <h3 class="page-section__subtitle">Проконсультируем по одному направлению или полностью займемся финансами вашей компании.</h3>
          {{--<h3 class="page-section__subtitle">Успех бизнеса зависит от эффективного управления финансами. <br> Главная задача руководителя — построить грамотную систему управления финансами. Наша задача - помочь вам в этом</h3>--}}
        </div>
      </div>
    </div>

    <div class="service-content">
      <div class="row">

        <div class="col-12 col-lg-6" id="accounting">
          <div class="service-item">
            <div class="service-caption">
              <div class="service-pic">
                <img src="{{ asset('img/icon/employee.svg') }}" alt="">
              </div>
              <div class="service-name">Бухгалтерский учет</div>
            </div>
            <div class="service-info">
                Соберем документы, подготовим и сдадим отчеты в налоговую, страховой и пенсионный фонды.
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6" id="management">
          <div class="service-item">
            <div class="service-caption">
              <div class="service-pic">
                <img src="{{ asset('img/icon/finance.svg') }}" alt="">
              </div>
              <div class="service-name">Управленческий учет</div>
            </div>
            <div class="service-info">
                Оценим показатели бизнеса в динамике, покажем что и как можно улучшить. Определим критические, за которыми нужно следить, чтобы быстро реагировать на любые изменения.
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6" id="taxation">
          <div class="service-item">
            <div class="service-caption">
              <div class="service-pic">
                <img src="{{ asset('img/icon/graduation-hat.svg') }}" alt="">
              </div>
              <div class="service-name">Налоговое планирование</div>
            </div>
            <div class="service-info">
                Подберем налоговый режим, чтобы вы не переплачивали, а направляли деньги на развитие бизнеса. Поможем сократить штрафы.
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6" id="project">
          <div class="service-item">
            <div class="service-caption">
              <div class="service-pic">
                <img src="{{ asset('img/icon/shield.svg') }}" alt="">
              </div>
              <div class="service-name">Расчет проекта</div>
            </div>
            <div class="service-info">
                Рассчитаем рентабельность проекта. Подскажем, куда выгоднее вложить деньги или поможем подготовить коммерческое предложение для инвесторов.
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6" id="banking">
          <div class="service-item">
            <div class="service-caption">
              <div class="service-pic">
                <img src="{{ asset('img/icon/startup.svg') }}" alt="">
              </div>
              <div class="service-name">Открытие счетов и помощь с кредитованием</div>
            </div>
            <div class="service-info">
                Поможем быстро открыть и правильно вести счета. Пока вы гуглите «как открыть счёт в банке для ИП», мы соберем все документы и откроем его за вас.

                Подготовим и отправим банковские документы. Научим общаться с банками, поможем выбрать и получить кредит или найти другие решения.
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

<section class="service page-section" style="padding:0;">
    <div class="container">

        <div class="page-section__caption">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <h2 class="page-section__title">Пакеты</h2>
                    {{--<h3 class="page-section__subtitle">Успех бизнеса зависит от эффективного управления финансами. <br> Главная задача руководителя — построить грамотную систему управления финансами. Наша задача - помочь вам в этом</h3>--}}
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ route('chief-financial-officer') }}" style="color:#273345;text-decoration: none;">
                    <div class="service-item">
                        <div class="service-caption">
                            <div class="service-pic">
                                <img src="{{ asset('img/icon/handshake.svg') }}" alt="">
                            </div>
                            <div class="service-name">Пакет услуг «Финансовый директор»</div>
                        </div>
                        <div class="service-info">
                            Передать финансовые задачи бизнеса на аутсорс — это, как нанять Финансового директора в штат, только проще и дешевле.
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ route('quick-start') }}" style="color:#273345;text-decoration: none;">
                    <div class="service-item">
                        <div class="service-caption">
                            <div class="service-pic">
                                <img src="{{ asset('img/icon/handshake.svg') }}" alt="">
                            </div>
                            <div class="service-name">Пакет услуг «Быстрый старт»</div>
                        </div>
                        <div class="service-info">
                            Новое дело — это сложно, поэтому мы помогаем начинающим предпринимателям открыть бизнес или создать стартап быстро и без стресса.
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="work page-section">
  <div class="container">

    {{--<div class="page-section__caption">--}}
      {{--<div class="row">--}}
        {{--<div class="col-12 col-lg-8 offset-lg-2">--}}
          {{--<h2 class="page-section__title">Как мы работаем</h2>--}}
          {{--<h3 class="page-section__subtitle">Равным образом начало повседневной работы по формированию позиции представляет собой интересный эксперимент проверки новых предложений.</h3>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}

    {{--<div class="row">--}}
      {{--<div class="col-12 col-lg-8 offset-lg-2">--}}

        {{--<div class="work-content">--}}

          {{--<div class="work-item">--}}
            {{--<div class="work-number"><span>1</span></div>--}}
            {{--<div class="work-info">Собираем необходимые документы для детального анализа финансового состояния компании, определяем необходимый объем работ и окончательную стоимость.</div>--}}
          {{--</div>--}}
          {{--<div class="work-item">--}}
            {{--<div class="work-number"><span>2</span></div>--}}
            {{--<div class="work-info">Проводим тщательный аудит компании, после чего разрабатываем финансовые показатели и согласовываем эти данные с собственниками компании.</div>--}}
          {{--</div>--}}
          {{--<div class="work-item">--}}
            {{--<div class="work-number"><span>3</span></div>--}}
            {{--<div class="work-info">--}}
                {{--На основе полученной информации составляем бюджет и финансовый план.--}}
            {{--</div>--}}
          {{--</div>--}}
            {{--<div class="work-item">--}}
                {{--<div class="work-number"><span>4</span></div>--}}
                {{--<div class="work-info">--}}
                    {{--Контролируем выполнение показателей и корректируем бюджет.--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
        {{--<!-- /work-content -->--}}

      {{--</div>--}}
    {{--</div>--}}
    <!-- /row -->



    {{--<div class="page-section__more">--}}
       {{--<button class="button button-cta button-big" data-toggle="modal" data-target="#order">ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ</button>--}}
    {{--</div>--}}


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
          <h3 class="page-section__subtitle">Напоминаем о новых статьях в блоге, рассказываем о хитростях, делимся полезным материалом</h3>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
        <form class="subscribe-form" action="{{ route('subscribe') }}" method="post">
            @csrf
            @honeypot
          <input name="email" class="subscribe-input" type="text" placeholder="Ваш e-mail">
          <button type="submit" class="button button-cta button-mini">Отправить</button>
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
          <h2 class="page-section__title">Наши кейсы</h2>
          <h3 class="page-section__subtitle"></h3>
        </div>
      </div>
    </div>

    <div class="review-content">

      <div class="review-slider">
        @foreach($reviews as $review)
          <div class="review-item">
              <div class="review-author">
                  <div class="review-author__pic">
                      <img src="{{ asset($review->avatar) }}" alt="">
                  </div>
                  <div class="review-author__info">
                      <div class="review-author__name">{{ $review->name }}</div>
                      <div class="review-author__company">{{ $review->company }}</div>
                  </div>
              </div>
              <div class="review-text">
                  {!! $review->text !!}
              </div>
          </div>
          @endforeach

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
          <h2 class="page-section__title">Блог</h2>
          <h3 class="page-section__subtitle"></h3>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-12 col-lg-6">
        <div class="interesting-article">
          @foreach($articles as $article)
              @include('partials.main_page_article', ['article' => $article])
              @endforeach
        </div>
        <!-- /interesting-article -->
      </div>
      <!-- /col -->

      <div class="col-12 col-lg-6">
        <div class="interesting-event">
          <div class="interesting-event__caption">
            <div class="interesting-event__title">Мероприятия</div>
            <a class="interesting-event__all" href="{{ route('articles') }}">Смотреть все</a>
          </div>
          <div class="interesting-event__content">
              @foreach($events as $event)
                @include('partials.main_page_events', [
                  'img' => $event->img,
                  'alt' => $event->alt,
                  'slug' => $event->slug,
                  'title' => $event->title,
                  'created' => $event->created_at,
                  ])
              @endforeach
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
