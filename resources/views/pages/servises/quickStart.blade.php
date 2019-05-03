@extends('layouts.app')
@section('content')
    <div class="promo promo-big promo-main">

        <div class="promo-pic" style="background-color: #555170;">
            {{--<img src="{{ asset('img/promo-1.jpg') }}" alt="Управленческий учет" title="Управленческий учет">--}}
        </div>

        <div class="container">

            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="promo-text">
                        <h1>Пакет услуг «Быстрый старт»</h1>
                        <h3>
                            Новое дело — это сложно, поэтому мы помогаем начинающим предпринимателям открыть бизнес или создать стартап быстро и без стресса.
                        </h3>
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


    <section class="about about-director">
        <div class="container">

            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-6">
                    <div class="about-content">

                        <div class="about-caption">Работаем быстро</div>
                        <div class="about-text">
                            Мы потратим один час там, где вам понадобится пять и несколько визитов в банк.
                        </div>
                        <div class="about-text">
                            Чтобы открыть счет в банке, нужно:
                        </div>
                        <ul class="info-list list-dot">
                            <li>собрать и подготовить документы</li>
                            <li>написать заявление</li>
                            <li>подать документы</li>
                            <li>подождать ответа от службы безопасности</li>
                            <li>если нужно, принести дополнительные документы</li>
                            <li>подписать банковскую карточку</li>
                        </ul>
                        <div class="about-text">
                            Мы часто оказываем такие услуги, поэтому уже наработали свои стандарты и постоянно автоматизируем процессы.
                        </div>
                        <div class="about-text">
                            Общаемся напрямую с руководством, поэтому знаем все о работе банков.
                            У нас всегда есть актуальные формы и образцы документов, и мы знаем, как их заполнить, чтобы у банка не возникло вопросов.
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

    <section class="info">
        <div class="container">

            <div class="info-content">
                <h2 class="info-caption">С нами выгодно</h2>
                <div class="info-text">
                    <p>
                        Час работы экономиста стоит примерно 1500 рублей. Он потратит на открытие счета не меньше пяти часов, и попросит за это 7500 рублей. Мы сделаем ту же работу за час и сэкономим вам 6000 рублей.
                    </p>
                </div>
            </div>
            <!-- /info-content -->

        </div>
        <!-- /container -->
    </section>
    <!-- /info -->

    <section class="company">
        <div class="container">

            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="company-content">

                        <h2 class="company-caption">Решаем все задачи бизнесмена-новичка</h2>

                        <ul class="company-list list-dot">
                            <li>Помощь с документами и открытие компании или ИП</li>
                            <li>Выбор оптимального режима налогообложения</li>
                            <li>Открытие банковского счета</li>
                            <li>Регистрация кассового аппарата</li>
                            <li>Построение финансовой бизнес-модели</li>
                            <li>Управленческий учет</li>
                            <li>Кадровый учет</li>
                            <li>Расчет проекта</li>
                            <li>Ежемесячное сопровождение всей финансовой деятельности</li>
                        </ul>
                    </div>
                    <!-- /about-content -->
                </div>
            </div>

        </div>
        <!-- /container -->

    </section>
    <!-- /company -->

    <section class="about about-director">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-6">
                    <div class="company-content">
                        <h2 class="company-caption">Выберите подходящий пакет</h2>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Услуги</th>
                                    <th>Пакет «Минимальный» — 25 000 рублей</th>
                                    <th>Пакет «Оптимальный» — 35 000 рублей</th>
                                    <th>Пакет «Все включено» — 50 000 рублей</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 16px;">
                                <tr>
                                    <td>Открытие компании или ИП</td>
                                    <td>
                                        +
                                    </td>
                                    <td class="quote-pic">+</td>
                                    <td class="quote-pic">+</td>
                                </tr>
                                <tr>
                                    <td>Выбор оптимального режима налогообложения</td>
                                    <td>+</td>
                                    <td>+</td>
                                    <td>+</td>
                                </tr>
                                <tr>
                                    <td>Открытие банковского счета</td>
                                    <td>+</td>
                                    <td>+</td>
                                    <td>+</td>
                                </tr>
                                <tr>
                                    <td>Регистрация кассового аппарата</td>
                                    <td>+</td>
                                    <td>+</td>
                                    <td>+</td>
                                </tr>
                                <tr>
                                    <td>Кадровый учет</td>
                                    <td>+</td>
                                    <td>+</td>
                                    <td>+</td>
                                </tr>
                                <tr>
                                    <td>Ведение управленческого учета</td>
                                    <td>-</td>
                                    <td>+</td>
                                    <td>+</td>
                                </tr>
                                <tr>
                                    <td>Построение финансовой модели</td>
                                    <td>-</td>
                                    <td>+</td>
                                    <td>+</td>
                                </tr>
                                <tr>
                                    <td>Расчет проекта</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>+</td>
                                </tr>
                                <tr>
                                    <td>Ежемесячное сопровождение:
                                        ведение бухгалтерского, управленческого и кадрового учета,
                                        финансовый мониторинг.
                                    </td>
                                    <td>+</td>
                                    <td>+</td>
                                    <td>+</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="about-content" style="padding-top: 40px;">
                            <p class="about-text">Если вам ничего не подошло, или есть вопросы — позвоните нам или оставьте свой номер телефона.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
