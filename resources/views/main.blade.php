@extends('layouts.app_test')
@section('content')
<header class="navMenu">
    <div class="navMenu__logo">
        <p>ФинТех</p>
    </div>
    <div class="navMenu__routeList">
        <ul>
            <li>Услуги</li>
            <li>Статьи</li>
            <li>Финсловарь</li>
            <li>Контакты</li>
            <li>Вход</li>
        </ul>
    </div>
    <div class="navMenu__contacts">
        (812) 980-95-72
    </div>
</header>
<main>
    <section class="headerSection">
        <div class="headerSection__grafics">
            <img src="{{ asset('img/main/chart.png') }}" class="headerSection__grafics__chart" alt="">
            <img src="{{ asset('img/main/header_people.png')}}" class="headerSection__grafics__man" alt="">
            <div class="headerSection__text">
                <h1>
                    Финансовые решения <br> и технологии для бизнеса
                </h1>
                <p>
                    Наводим порядок в счетах и документах, пишем полезные <br> программы, обучаем финансовой грамотности
                </p>
            </div>
        </div>
    </section>
    <section class="whoWeAre">
        <div>
            <h2>
                Кто мы
            </h2>
        </div>
        <div>
            Команда финансистов, бухгалтеров, налоговых специалистов и финансовых аналитиков. Помогаем компаниям, стартапам и индивидуальным предпринимателям тратить меньше, а зарабатывать больше.
        </div>
        <div>
            Настроим управленческие процессы, заменим штатного бухгалтера и финансового директора. Работаем на аутсорсе или выезжаем к вам в офис.
        </div>
    </section>
    <section class="whatWeDo">
        <div class="whatWeDo__heading" style="display: flex;justify-content: center;width: 100%;">
            <h3 style="width: 60%;font-size: 32px;">
                Используем опыт крупных компаний, чтобы помочь малому и среднему бизнесу
            </h3>
        </div>
        <div class="testGrid">
            <div>
                <div>
                    <p class="whatWeDo__preHead">Начать</p>
                    <p class="whatWeDo_post">
                        Зарегистрируем бизнес, откроем счёт в банке и научим платить налоги. Рассчитаем рентабельность стартапа. Возьмём на себя бухгалтерию, кадровый и управленческий учёт, контроль счетов и платежей.
                    </p>
                </div>
                <div>
                    <img src="{{ asset('img/main/discover_finance.png') }}" alt="" width="400">
                </div>
                <div>
                    <p class="whatWeDo__preHead">Разобраться в финансах</p>
                    <p class="whatWeDo_post">
                    Пишем в блог, снимаем видео, консультируем предпринимателей и читаем лекции, чтобы делиться опытом. Проводим воркшопы для специалистов и компаний.
                    </p>
                </div>
                <div style="margin-top: 430px;">
                    <p class="whatWeDo__preHead">Выйти из кризиса</p>
                    <p class="whatWeDo_post">
                    Если кажется, что всё работает, а прибыли нет. Составим пошаговый план управления бизнесом. Подберём или напишем программу, чтобы контролировать процессы.
                    </p>
                </div>
            </div>
            <div>
                <img src="{{ asset('img/main/get_start.png') }}" alt="" style="margin-left: -30px;">
            </div>
            <div>
                <div style="margin: 120px 160px 0 -200px;">
                    <p class="whatWeDo__preHead">Развиваться</p>
                    <p class="whatWeDo_post">
                        Наведём порядок в бизнесе. Поможем выбрать направления развития и найти клиентов, которые будут приносить прибыль.
                    </p>
                </div>
                <div style="margin-top: 360px;width: 360px;">
                    <p class="whatWeDo__preHead">Общаться с банками</p>
                    <p class="whatWeDo_post">
                        Подберём кредитный продукт, подготовим заявку и соберём справки, а вам останется только получить деньги.
                    </p>
                </div>
                <div>
                    <img src="{{ asset('img/main/comunity_bank.png') }}" style="margin-left: -580px;margin-top: 60px;" width="900" alt="">
                </div>
            </div>
        </div>
        {{--<div class="whatWeDo__content">--}}
            {{--<div class="whatWeDo__columns">--}}
                {{--<div>--}}
                    {{--<p class="whatWeDo__preHead">Начать</p>--}}
                    {{--<p class="whatWeDo_post">--}}
                        {{--Зарегистрируем бизнес, откроем счёт в банке и научим платить налоги. Рассчитаем рентабельность стартапа. Возьмём на себя бухгалтерию, кадровый и управленческий учёт, контроль счетов и платежей.--}}
                    {{--</p>--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<img src="{{ asset('img/main/discover_finance.png') }}" height="480px" alt="">--}}
                {{--</div>--}}
                {{--<div class="whatWeDo__third">--}}
                    {{--<div>--}}
                        {{--<p class="whatWeDo__preHead">Разобраться в финансах</p>--}}
                        {{--<p class="whatWeDo_post">--}}
                            {{--Пишем в блог, снимаем видео, консультируем предпринимателей и читаем лекции, чтобы делиться опытом. Проводим воркшопы для специалистов и компаний.--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
            {{--<div class="whatWeDo__columns">--}}
                {{--<img src="{{ asset('img/main/start.png') }}" class="whatWeDo__start" alt="">--}}
            {{--</div>--}}
            {{--<div class="whatWeDo__columns whatWeDo_second">--}}
                {{--<div>--}}
                    {{--<p class="whatWeDo__preHead">Развиваться</p>--}}
                    {{--<p class="whatWeDo_post">--}}
                        {{--Наведём порядок в бизнесе. Поможем выбрать направления развития и найти клиентов, которые будут приносить прибыль.--}}
                    {{--</p>--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<img src="{{asset('img/main/grow.png')}}" alt="">--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<p class="whatWeDo__preHead">Общаться с банками</p>--}}
                    {{--<p class="whatWeDo_post">--}}
                        {{--Подберём кредитный продукт, подготовим заявку и соберём справки, а вам останется только получить деньги.--}}
                    {{--</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div>--}}
                {{--<p class="whatWeDo__preHead">Выйти из кризиса</p>--}}
                {{--<p class="whatWeDo_post">--}}
                    {{--Если кажется, что всё работает, а прибыли нет. Составим пошаговый план управления бизнесом. Подберём или напишем программу, чтобы контролировать процессы.--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    </section>
    <section style="background: #b8d3dd;">
        <div class="whatWeDo__heading" style="display: flex;justify-content: center;width: 100%;">
            <h3 style="width: 60%;font-size: 32px;">
                Что делаем
            </h3>
        </div>
            <div class="block-section">
                <div class="weDo">
                    <div class="iconBlock">
                        <img src="{{ asset('img/icon/fin-servises.png') }}" alt="">
                    </div>
                    <div class="serviceBlock">
                        <p class="blockHeader">Бухгалтерский учет</p>
                        <p class="blockText">
                            Соберём документы, подготовим и сдадим отчеты в налоговую, страховой и пенсионный фонды.
                        </p>
                    </div>
                    <div class="checkList__block">
                        <img src="{{ asset('img/icon/check.svg') }}" alt="">
                    </div>
                </div>
                <div class="weDo">
                    <div class="iconBlock">
                        <img src="{{ asset('img/icon/fin-2.png') }}" alt="">
                    </div>
                    <div class="serviceBlock">
                        <p class="blockHeader">Управленческий учет</p>
                        <p class="blockText">
                            Оценим показатели бизнеса в динамике, покажем что и как можно улучшить. Определим критические, за которыми нужно следить, чтобы быстро реагировать на любые изменения.
                        </p>
                    </div>
                    <div class="checkList__block">
                        <img src="{{ asset('img/icon/check.svg') }}" alt="">
                    </div>
                </div>

                <div class="weDo">
                    <div class="iconBlock">
                        <img src="{{ asset('img/icon/fin-3.svg') }}" alt="">
                    </div>
                    <div class="serviceBlock">
                        <p class="blockHeader">Налоговое планирование</p>
                        <p class="blockText">
                            Подберем налоговый режим, чтобы вы не переплачивали, а направляли деньги на развитие бизнеса. Поможем сократить штрафы.
                        </p>
                    </div>
                    <div class="checkList__block">
                        <img src="{{ asset('img/icon/check.svg') }}" alt="">
                    </div>
                </div>

                <div class="weDo">
                    <div class="iconBlock">
                        <img src="{{ asset('img/icon/fin-4.svg') }}" alt="">
                    </div>
                    <div class="serviceBlock">
                        <p class="blockHeader">Расчет проекта</p>
                        <p class="blockText">
                            Рассчитаем рентабельность проекта. Подскажем, куда выгоднее вложить деньги или поможем подготовить коммерческое предложение для инвесторов.
                        </p>
                    </div>
                    <div class="checkList__block">
                        <img src="{{ asset('img/icon/check.svg') }}" alt="">
                    </div>
                </div>
                <div class="weDo">
                    <div class="iconBlock">
                        <img src="{{ asset('img/icon/fin-5.svg') }}" alt="">
                    </div>
                    <div class="serviceBlock">
                        <p class="blockHeader">Открытие счетов и помощь с кредитованием</p>
                        <p class="blockText">
                            Поможем быстро открыть и правильно вести счета. Пока вы гуглите «как открыть счёт в банке для ИП», мы соберем все документы и откроем его за вас. Подготовим и отправим банковские документы. Научим общаться с банками, поможем выбрать и получить кредит или найти другие решения.
                        </p>
                    </div>
                    <div class="checkList__block">
                        <img src="{{ asset('img/icon/check.svg') }}" alt="">
                    </div>
                </div>
                <div class="weDo">
                    <div class="iconBlock">
                        <img src="{{ asset('img/icon/fin-6.svg') }}" alt="">
                    </div>
                    <div class="serviceBlock">
                        <p class="blockHeader">Пакет услуг «Финансовый директор»</p>
                        <p class="blockText">
                            Передать финансовые задачи бизнеса на аутсорс — это как нанять финансового директора в штат, только проще и дешевле.
                        </p>
                        <div class="buttonBlock">
                            <a href="" class="service-button-link">Узнать больше</a>
                        </div>
                    </div>
                    <div class="checkList__block">
                        <img src="{{ asset('img/icon/check.svg') }}" alt="">
                    </div>

                </div>
                <div class="weDo" style="padding-bottom: 40px;">
                    <div class="iconBlock">
                        <img src="{{ asset('img/icon/fin-7.svg') }}" alt="">
                    </div>
                    <div class="serviceBlock">
                        <p class="blockHeader">Пакет услуг «Быстрый старт»</p>
                        <p class="blockText">
                            Новое дело — это сложно, поэтому мы помогаем начинающим предпринимателям открыть бизнес или создать стартап быстро и без стресса.
                        </p>
                        <div class="buttonBlock">
                            <a href="" class="service-button-link">Узнать больше</a>
                        </div>
                    </div>
                    <div class="checkList__block">
                        <img src="{{ asset('img/icon/check.svg') }}" alt="">
                    </div>
                </div>
            </div>
    </section>

    <section class="work page-section">
        <div class="container">
            <h2 class="page-section__title">Наши кейсы</h2>
            <div class="work-content" style="display: flex;">
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
    </section>
        <!-- /container -->

    <section class="callbackBlock">
        <h3>Оставьте свой номер телефона. <br> Мы перезвоним и ответим на ваши вопросы</h3>
        <button>
            Заказать бесплатную консультацию
        </button>
    </section>

    <section class="mainContacts">
        <div class="mainContacts__leftBlock">
            <div class="contacts-address">
                <h5 class="contacts-header">Как с нами связаться</h5>
                <p class="contacts-text">+7 (812) 980-95-72 </p>
                <p class="contacts-text">info@intelifin.ru</p>
            </div>
            <div>
                <h5 class="contacts-header">Где нас найти</h5>
                <p class="contacts-text">Санкт-Петербург, Малая Посадская, 10</p>
            </div>
        </div>
        <div class="mainMap">
            <h5>Посмотреть на карте</h5>
            <img src="{{ asset('img/map.jpg') }}" alt="Как нас найти">
        </div>
    </section>

</main>
@endsection
