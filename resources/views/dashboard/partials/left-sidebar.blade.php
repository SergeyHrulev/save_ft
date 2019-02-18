<div class="cms-sidebar">
    <div class="cms-menu">
        <div class="cms-menu__item" style="min-height: 40px;">
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true" style="color: #fff;">&times;</span>
            </button>
        </div>
        <div class="cms-menu__item cms-menu__item--active">Меню</div>
        <div class="cms-menu__item"><a href="{{ url('/admin-dashboard/users') }}">Пользователи</a></div>
        <div class="cms-menu__item"><a href="{{ url('/admin-dashboard/roles') }}">Роли и права пользователей</a></div>
        <div class="cms-menu__item"><a href="{{ url('/admin-dashboard/articles') }}">Статьи</a></div>
        <div class="cms-menu__item"><a href="{{ url('/admin-dashboard/chapters') }}">Разделы словаря</a></div>
    </div>
    <div class="cms-exit">
        <button>Выйти</button>
    </div>
</div>
