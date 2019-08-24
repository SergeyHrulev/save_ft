<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/new_dashboard.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Document</title>
</head>
<body>
    <aside class="sidebar">
        <div>
            <h1>Личный кабинет</h1>
            <ul>
                <a href=""><li>Главная</li></a>
                <a href="">
                    <li>Блог</li>
                </a>
                <a href="">
                    <li>Кейсы</li>
                </a>
                <a href="">
                    <li>ФинСловарь</li>
                </a>
                <a href="">
                    <li>FAQ</li>
                </a>
                <a href="">
                    <li>Пользователи</li>
                </a>
            </ul>

        </div>
    </aside>
    <header class="dashboardHeader">
        <div class="dashboardHeader__avtarBlock">
            <img src="{{ asset('img/people/serg.jpg') }}" class="dashboardHeader__avatar" alt="">
            <div class="dashboardHeader__profileMenu">
                <ul>
                    <li>Профиль</li>
                    <li>Настройки</li>
                    <li>Информация</li>
                    <li>Выход</li>
                </ul>
            </div>
        </div>
    </header>
    <section></section>
    <section></section>
    <section></section>
    <main id="dashboard">
        <create-glossary-component></create-glossary-component>
    </main>
    <footer></footer>
</body>
</html>
