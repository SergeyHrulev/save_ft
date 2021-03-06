<header class="header" id="header">
        <div class="header-logo">
          <a class="header-logo__link" href="/">
            <div class="header-logo__title">ФинТех</div>
            <div class="header-logo__subtitle">Финансовый аутсорсинг</div>
          </a>
        </div>
        <div class="header-menu">
          <nav class="menu">
            <ul class="menu-list">
              <li class="menu-item">
                <a class="menu-link" href="javascript:void(0);">Услуги</a>
                <ul class="menu-submenu">
                  <li>
                    <a class="menu-submenu__link" href="{{ route('chief-financial-officer') }}">
                      <div class="menu-submenu__pic">
                        <img src="{{ asset('img/icon/employee.svg') }}">
                      </div>
                      <div class="menu-submenu__text">
                        <div class="menu-submenu__title">Финансовый директор</div>
                        {{--<div class="menu-submenu__subtitle">Учим разбираться в кредитах</div>--}}
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="menu-submenu__link" href="{{ route('quick-start') }}">
                      <div class="menu-submenu__pic">
                        <img src="{{ asset('img/icon/finance.svg') }}">
                      </div>
                      <div class="menu-submenu__text">
                        <div class="menu-submenu__title">Быстрый старт</div>
                        {{--<div class="menu-submenu__subtitle">Управление финансами компании</div>--}}
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item"><a class="menu-link" href="{{ route('articles') }}">Статьи</a></li>
              <li class="menu-item"><a class="menu-link" href="{{ route('glossaries') }}">Финсловарь</a></li>
              <li class="menu-item"><a class="menu-link" href="{{ route('contacts') }}">Контакты</a></li>
              <li class="menu-item menu-entry"><a class="menu-link" href="javascript:void(0);"  data-toggle="modal" data-target="#modal-login">Вход</a></li>
                @guest
                    <div class="entry">
                        <button class="menu-link menu-link--button" data-toggle="modal" data-target="#modal-login">Вход</button>
                    </div>
                @else
                    <div class="entry">
                        <div class="menu-submenu__pic">
                            <img src="{{ asset('img/icon/employee.svg') }}">
                        </div>
                    </div>
                @endguest
            </ul>
          </nav>

        </div>
        <div class="header-phone">
          <a class="header-phone__number" href="tel:+78129809572">(812) 980-95-72</a>
          <div class="header-phone__callback" data-toggle="modal" data-target="#callback">Обратный звонок</div>
        </div>
        <div class="mobile-menu mobile-menu--close">
          <span></span>
          <span></span>
          <span></span>
        </div>
</header>


