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
          <h1 class="headtext">Аутсорсинг финансовой службы </h1>
          <h3 class="headsubtext">Ведем бухгалтерию и кадровый учет, рассчитываем зарплату, сопровождаем ERP-системы для заказчиков, требующих безупречного качества</h3>
        </div>
      </div>
      <!-- /col -->
        {{--@order block--}}
      <!-- /col -->
    </div>
    <!-- /row -->


  </div>
  <!-- /container -->
</div>
<!-- /promo -->


<section class="about">
  <div class="container">

    <div class="row about-centering">
       <div class="about-block-text">
           <p class="about-text">Мы — команда финансистов, бухгалтеров, налоговых специалистов и финансовых аналитиков. Помогаем компаниям, стартапам и индивидуальным предпринимателям тратить меньше, а зарабатывать больше.</p>
           <p class="about-text">Можем заменить вам штатного бухгалтера, финансового директора, консультанта и аналитика. Используем опыт крупных компаний, чтобы помочь малому и среднему бизнесу наладить управленческие процессы. Работаем удалённо или отправляем к вам в компанию своего специалиста.</p>
       </div>
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->

</section>
<!-- /about -->

<div class="utility">
    <h2>Чем мы полезны</h2>
    <div class="utility-text-area">
        <div class="utility-text-block">
            <div class="utility-title">
                Помогаем начать
            </div>
            <div class="utility-text">
                Зарегистрируем бизнес, откроем счет в банке и научим правильно платить налоги. Рассчитаем проект стартапа и будем вести его бухгалтерию, кадровый и управленческий учет, контролировать счета и платежи. Если нужен кредит, подберем подходящий продукт, подготовим заявку и соберем справки, а вам останется только получить деньги.
            </div>
        </div>
        <div class="utility-text-block">
            <div class="utility-title">
                Помогаем развиваться
            </div>
            <div class="utility-text">
                Проведём аудит уже работающего бизнеса. Поможем выбрать выгодные направления развития и найти клиентов, которые будут приносить прибыль, а не убытки.
            </div>
        </div>
        <div class="utility-text-block">
            <div class="utility-title">
                Помогаем выйти из кризиса
            </div>
            <div class="utility-text">
                Поможем решить проблемы, когда кажется, что процессы налажены и все работает, но прибыли нет. Составим и внедрим пошаговый план управления. Напишем программу или подберем сервис под вашу компанию, чтобы вы могли настроить процессы и контролировать бизнес.
            </div>
        </div>
        <div class="utility-text-block">
            <div class="utility-title">
                Помогаем разобраться в финансах
            </div>
            <div class="utility-text">
                Научим управлять финансами. Для этого мы пишем в блог, снимаем обучающие видео, консультируем лично, проводим мастер-классы и читаем лекции. Можем обучить одного специалиста или сразу всех сотрудников вашей компании.
            </div>
        </div>
    </div>
</div>

<section class="service">
        <h2>Наши услуги</h2>
        <p class="service-subheader">
            Проконсультируем по одному направлению или полностью займемся финансами вашей компании
        </p>
    <div class="block-section">
        <div class="service-block column-3-block">
            <img src="{{ asset('img/icon/fin-servises.png') }}" alt="">
            <div class="service-block-header">Бухгалтерский учет</div>
            <div class="service-block-text">
                Соберём документы, подготовим и сдадим отчеты в налоговую, страховой и пенсионный фонды.
            </div>
        </div>
        <div class="service-block column-3-block">
            <img src="{{ asset('img/icon/fin-2.png') }}" alt="">
            <div class="service-block-header">Управленческий учет</div>
            <div class="service-block-text">
                Оценим показатели бизнеса в динамике, покажем что и как можно улучшить. Определим критические, за которыми нужно следить, чтобы быстро реагировать на любые изменения.
            </div>
        </div>
        <div class="service-block column-3-block">
            <img src="{{ asset('img/icon/fin-3.svg') }}" alt="">
            <div class="service-block-header">Налоговое планирование</div>
            <div class="service-block-text">
                Подберем налоговый режим, чтобы вы не переплачивали, а направляли деньги на развитие бизнеса. Поможем сократить штрафы.
            </div>
        </div>
        <div class="service-block column-2-block">
            <img src="{{ asset('img/icon/fin-4.svg') }}" alt="">
            <div class="service-block-header">Расчет проекта</div>
            <div class="service-block-text">
                Рассчитаем рентабельность проекта. Подскажем, куда выгоднее вложить деньги или поможем подготовить коммерческое предложение для инвесторов.
            </div>
        </div>
        <div class="service-block column-2-block">
            <img src="{{ asset('img/icon/fin-5.svg') }}" alt="">
            <div class="service-block-header">Открытие счетов и помощь с кредитованием</div>
            <div class="service-block-text">
                Поможем быстро открыть и правильно вести счета. Пока вы гуглите «как открыть счёт в банке для ИП», мы соберем все документы и откроем его за вас. Подготовим и отправим банковские документы. Научим общаться с банками, поможем выбрать и получить кредит или найти другие решения.
            </div>
        </div>
        <div class="service-block column-2-block">
            <img src="{{ asset('img/icon/fin-6.svg') }}" alt="">
            <div class="service-block-header">Пакет услуг «Финансовый директор»</div>
            <div class="service-block-text">
                Передать финансовые задачи бизнеса на аутсорс — это как нанять финансового директора в штат, только проще и дешевле.
            </div>
            <a href="" class="service-button-link">Узнать подробности &rarr;</a>
        </div>
        <div class="service-block column-2-block">
            <img src="{{ asset('img/icon/fin-7.svg') }}" alt="">
            <div class="service-block-header">Пакет услуг «Быстрый старт»</div>
            <div class="service-block-text">
                    Новое дело — это сложно, поэтому мы помогаем начинающим предпринимателям открыть бизнес или создать стартап быстро и без стресса.
            </div>
        </div>
    </div>
</section>

<section class="work page-section">
  <div class="container">
    <h2 class="page-section__title">Наши кейсы</h2>
      <div class="work-content">
          <div class="work-item">
              <img src="{{ asset('img/case/group-3.jpg') }}" class="work-item-image" alt="">
              <div class="work-item-text-block">
                  <h5 class="work-item-header">Mebel.org</h5>
                  <p class="work-item-text">Разработали для компании систему управленческого учета и помогли избавиться от убыточных клиентов</p>
              </div>
          </div>
          <div class="work-item">
              <img src="{{ asset('img/case/group-4.jpg') }}" class="work-item-image" alt="">
              <div class="work-item-text-block">
                <h5 class="work-item-header">Тоскана</h5>
                <p class="work-item-text">Помогли компании Тоскана сократить расходы на доставку товаров.</p>
              </div>
          </div>
          <div class="work-item">
              <img src="{{ asset('img/case/group-5.jpg') }}" class="work-item-image" alt="">
              <div class="work-item-text-block">
                 <h5 class="work-item-header">Апельсин</h5>
                  <p class="work-item-text">Помогли типографии Апельсин получить кредит на развитие бизнеса.</p>
              </div>
          </div>
      </div>
  </div>
  <!-- /container -->

</section>
<!-- /work -->
    <section class="work page-section">
        <div class="container">
            <h2 class="page-section__title">Блог</h2>
            <div class="work-content">
                <div class="work-item">
                    <img src="{{ asset('img/blog/blog-1.jpg') }}" class="work-item-image" alt="">
                    <div class="work-item-text-block">
                        <h5 class="work-item-header">Как получить субсидию на оплату коммунальных услуг</h5>
                        <p class="work-item-text">И кто может на нее рассчитывать</p>
                    </div>
                </div>
                <div class="work-item">
                    <img src="{{ asset('img/blog/blog-2.jpg') }}" class="work-item-image" alt="">
                    <div class="work-item-text-block">
                        <h5 class="work-item-header">Как вести семейный бюджет, когда жена в декрете</h5>
                        <p class="work-item-text">Опыт читателя блога</p>
                    </div>
                </div>
                <div class="work-item">
                    <img src="{{ asset('img/blog/blog-3.jpg') }}" class="work-item-image" alt="">
                    <div class="work-item-text-block">
                        <h5 class="work-item-header">Как мы участвовали в новогодней ярмарке</h5>
                        <p class="work-item-text">И с трудом окупили расходы на подготовку</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->

    </section>


<section class="subscribe page-section page-section--bg">

  <div class="page-section__pic">
    {{--<img src="{{ asset('img/subs-bg.jpg') }}" alt="">--}}
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
          <button type="submit" class="button button-cta button-mini">Подписаться</button>
        </form>
      </div>
    </div>
    <!-- /row -->

  </div>
  <!-- /container -->

</section>

<section class="contacts">
    <div class="contacts-address">
        <h5 class="contacts-header">Контакты</h5>
        <p class="contacts-text">+7 (812) 980-95-72 </p>
        <p class="contacts-text">info@intelifin.ru</p>
        <p class="contacts-text">Санкт-Петербург, Малая Посадская, 10</p>
    </div>
    <div class="contacts-map">
        <img src="{{ asset('img/map.jpg') }}" alt="Как нас найти">
    </div>
</section>

<!-- /subscribe -->

{{--<section class="review page-section">--}}
  {{--<div class="container">--}}

    {{--<div class="page-section__caption">--}}
      {{--<div class="row">--}}
        {{--<div class="col-12 col-lg-8 offset-lg-2">--}}
          {{--<h2 class="page-section__title">Наши кейсы</h2>--}}
          {{--<h3 class="page-section__subtitle"></h3>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}

    {{--<div class="review-content">--}}

      {{--<div class="review-slider">--}}
        {{--@foreach($reviews as $review)--}}
          {{--<div class="review-item">--}}
              {{--<div class="review-author">--}}
                  {{--<div class="review-author__pic">--}}
                      {{--<img src="{{ asset($review->avatar) }}" alt="">--}}
                  {{--</div>--}}
                  {{--<div class="review-author__info">--}}
                      {{--<div class="review-author__name">{{ $review->name }}</div>--}}
                      {{--<div class="review-author__company">{{ $review->company }}</div>--}}
                  {{--</div>--}}
              {{--</div>--}}
              {{--<div class="review-text">--}}
                  {{--{!! $review->text !!}--}}
              {{--</div>--}}
          {{--</div>--}}
          {{--@endforeach--}}

      {{--</div>--}}
      {{--<!-- /review-slider -->--}}

    {{--</div>--}}
    {{--<!-- /review-content -->--}}

  {{--</div>--}}
  {{--<!-- /container -->--}}

{{--</section>--}}
{{--<!-- /review -->--}}




{{--<section class="interesting page-section">--}}
  {{--<div class="container">--}}

    {{--<div class="page-section__caption">--}}
      {{--<div class="row">--}}
        {{--<div class="col-12 col-lg-8 offset-lg-2">--}}
          {{--<h2 class="page-section__title">Блог</h2>--}}
          {{--<h3 class="page-section__subtitle"></h3>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}

    {{--<div class="row">--}}

      {{--<div class="col-12 col-lg-6">--}}
        {{--<div class="interesting-article">--}}
          {{--@foreach($articles as $article)--}}
              {{--@include('partials.main_page_article', ['article' => $article])--}}
              {{--@endforeach--}}
        {{--</div>--}}
        {{--<!-- /interesting-article -->--}}
      {{--</div>--}}
      {{--<!-- /col -->--}}

      {{--<div class="col-12 col-lg-6">--}}
        {{--<div class="interesting-event">--}}
          {{--<div class="interesting-event__caption">--}}
            {{--<div class="interesting-event__title">Мероприятия</div>--}}
            {{--<a class="interesting-event__all" href="{{ route('articles') }}">Смотреть все</a>--}}
          {{--</div>--}}
          {{--<div class="interesting-event__content">--}}
              {{--@foreach($events as $event)--}}
                {{--@include('partials.main_page_events', [--}}
                  {{--'img' => $event->img,--}}
                  {{--'alt' => $event->alt,--}}
                  {{--'slug' => $event->slug,--}}
                  {{--'title' => $event->title,--}}
                  {{--'created' => $event->created_at,--}}
                  {{--])--}}
              {{--@endforeach--}}
          {{--</div>--}}
          {{--<!-- /interesting-event__content -->--}}
        {{--</div>--}}
        {{--<!-- /interesting-event -->--}}
      {{--</div>--}}
      {{--<!-- /col -->--}}
    {{--</div>--}}
    {{--<!-- /row -->--}}
  {{--</div>--}}
  {{--<!-- /container -->--}}
{{--</section>--}}
{{--<!-- /interesting -->--}}
@stop
