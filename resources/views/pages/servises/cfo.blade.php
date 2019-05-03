@extends('layouts.app')
@section('content')
    <div class="promo promo-big promo-main">

        <div class="promo-pic">
            <img src="{{ asset('img/promo-1.jpg') }}" alt="Управленческий учет" title="Управленческий учет">
        </div>

        <div class="container">

            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="promo-text">
                        <h1>Пакет услуг «Финансовый директор»</h1>
                        <h3>
                            Передать финансовые задачи бизнеса на аутсорс — это, как нанять Финансового директора в штат, только проще и дешевле.
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

                        <div class="about-caption">Сколько стоит нанять специалиста в штат</div>
                        <div class="about-text">
                            <p>Зарплата финансового директора — от 150 000 рублей плюс налоги, отдельный кабинет, мебель и техника.</p>
                            <p>Зарплата главного бухгалтера — от 70 000 рублей плюс налоги, отдельный кабинет, мебель и техника.</p>
                            <p>На зарплаты финансового отдела из двух человек вы потратите более 200 000 рублей плюс налоги, помещения, мебель и техника для каждого сотрудника.</p>
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
                <h2 class="info-caption">Почему у нас дешевле</h2>
                {{--<ul class="info-list list-dot">--}}
                    {{--<li>Полный анализ финансового состояния бизнеса. Найдем слабые и сильные места, расчитаем реальный доход бизнеса.</li>--}}
                    {{--<li>Разработаем необходимые для контроля финансового состояния показатели - маркеры. Построим систему контроля посредством финансовых маркеров.</li>--}}
                    {{--<li>Поможем сократить бюджет и снизить ненужные расходы, в том числе налоговые.</li>--}}
                    {{--<li>Построим простую и понятную систему бюджетирования и автоматизиуем ее.</li>--}}
                    {{--<li>Научим пользоваться отчетностью и быстро реагировать на изменения.</li>--}}
                {{--</ul>--}}
                <div class="info-text">
                    <p>
                        Пакет услуг «Финансовый директор» стоит от 22 000 рублей, потому что мы работаем на аутсорсе. То есть не занимаем место в вашем офисе: не нужно думать, где разместить специалиста, платить за него налоги и тратить деньги на дополнительную мебель и технику.
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

                        <h2 class="company-caption">Решаем все финансовые задачи бизнеса</h2>

                        <ul class="company-list list-dot">
                            <li>Бухгалтерский учет;</li>
                            <li> Управленческий учет</li>
                            <li>Операции по счетам</li>
                            <li>Получение и отправка платежей</li>
                            <li>Операции с ценными бумагами</li>
                            <li>Составление и ведение плана платежей</li>
                            <li>Отслеживание кассовых разрывов и отклонений по платежам</li>
                            <li>Финансовый анализ</li>
                            <li>Управление активами</li>
                        </ul>
                        <p class="info-text" style="padding: 40px 0 0 0;">
                            Используем финансовые решения, которые прошли проверку в крупных корпорациях. Дополнительно поможем с кадровым учетом, привлечем юриста или IT-специалиста.
                        </p>
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
                        <h2 class="company-caption">Выберите подходящий тариф</h2>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Сектор</th>
                                    <th>IT, услуги населению</th>
                                    <th>Торговля, общепит</th>
                                    <th>Логистика, производство, строительство</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 16px;">
                                <tr>
                                    <td>Для малого бизнеса с годовым оборотом до 60 миллионов рублей и до трех юридических лиц. </td>
                                    <td>22 000 рублей</td>
                                    <td>42 000 рублей</td>
                                    <td>58 000 рублей</td>
                                </tr>
                                <tr>
                                    <td>Для среднего бизнеса с годовым оборотом до 24 миллионов рублей в год и до пяти юридических лиц.</td>
                                    <td>36 000 рублей</td>
                                    <td>59 000 рублей</td>
                                    <td>73 000 рублей</td>
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
