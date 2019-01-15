<!-- Modal Login-->
<div class="modal fade modal-login" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-info">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img class="svg" src="{{ asset('img/icon/close.svg') }}" alt="">
                </button>
                <div class="modal-caption">Вход в личный кабинет</div>
                <form class="modal-form" action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="modal-form__content">
                        <div class="modal-form__block">
                            <div class="modal-form__title">Email</div>
                            @if ($errors->has('email'))
                                <div class="modal-form__error" style="display: block;">{{ $errors->first('email') }}</div>
                            @endif
                            <input class="modal-form__input{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                        <div class="modal-form__block">
                            <div class="modal-form__title">Пароль</div>
                            @if ($errors->has('password'))
                                <div class="modal-form__error" style="display: block;">{{ $errors->first('password') }}</div>
                            @endif
                            <input class="modal-form__input{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required>
                            <div class="modal-eye">
                                <img class="svg" src="{{ asset('img/icon/eye.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="modal__restore-link">
                        <a class="modal__restore-btn" data-toggle="modal" href="javascript:void(0);" data-dismiss="modal" data-target="#modal-restore">Восстановить пароль</a>
                    </div>
                    <div class="modal-form__button">
                        <button type="submit" class="button button-modal">Войти</button>
                    </div>
                </form>
            </div>
            <div class="modal-bottom">
                <div class="modal-bottom__title">Ещё нет учетной записи?</div>
                <a class="modal-bottom__link" data-toggle="modal" href="javascript:void(0);" data-dismiss="modal" data-target="#modal-register">Зарегистрироваться</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Register -->
<div class="modal fade modal-register" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-info">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img class="svg" src="{{ asset('img/icon/close.svg') }}" alt="">
                </button>
                <div class="modal-caption">Регистрация</div>
                <form class="modal-form" action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="modal-form__content">
                        <div class="modal-form__block">
                            <div class="modal-form__title">Имя</div>
                            @if ($errors->has('name'))
                                <div class="modal-form__error" style="display: block;">{{ $errors->first('name') }}</div>
                            @endif
                            <input class="modal-form__input{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
                        </div>
                        {{--<div class="modal-form__block">--}}
                            {{--<div class="modal-form__title">Телефон</div>--}}
                            {{--@if($errors->has('phone'))--}}
                                {{--<div class="modal-form__error">{{ $errors->first('phone') }}</div>--}}
                            {{--@endif--}}
                            {{--<input class="modal-form__input{{ $errors->has('phone') ? ' is-invalid' : '' }}" type="phone" id="phone" name="phone" value="{{ old('phone') }}">--}}
                        {{--</div>--}}
                        <div class="modal-form__block">
                            <div class="modal-form__title">Email</div>
                            @if ($errors->has('email'))
                                <div class="modal-form__error" style="display: block;">{{ $errors->first('email') }}</div>
                            @endif
                            <input class="modal-form__input{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" id="email" name="email" value="{{ old('email') }}" required>
                        </div>
                        <div class="modal-form__block">
                            <div class="modal-form__title">Пароль</div>
                            @if ($errors->has('password'))
                                <div class="modal-form__error">{{ $errors->first('password') }}</div>
                            @endif
                            <input class="modal-form__input" type="password" id="password" name="password" required>
                            <div class="modal-eye">
                                <img class="svg" src="{{ asset('img/icon/eye.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="modal-form__block">
                            <div class="modal-form__title">Подтверждение пароля</div>
                            <input class="modal-form__input" type="password" id="password-confirm" name="password_confirmation" required>
                            <div class="modal-eye">
                                <img class="svg" src="{{ asset('img/icon/eye.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-form__button">
                        <button type="submit" class="button button-modal">Зарегистрироваться</button>
                    </div>
                </form>
            </div>
            <div class="modal-bottom">
                <div class="modal-bottom__title">Уже есть личный кабинет?</div>
                <a class="modal-bottom__link" data-toggle="modal" href="javascript:void(0);" data-dismiss="modal" data-target="#modal-login">Войти</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Login-->
<div class="modal fade modal-restore" id="modal-restore" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="modal-info">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img class="svg" src="{{ asset('img/icon/close.svg') }}" alt="">
                </button>
                <div class="modal-caption">Восстановление пароля</div>
                <form class="modal-form" action="{{ route('password.email') }}" method="post">
                    @csrf
                    <div class="modal-form__content">
                        <div class="modal-form__block">
                            <div class="modal-form__title">Email</div>
                            @if ($errors->has('email'))
                                <div class="modal-form__error" style="display: block;">{{ $errors->first('email') }}</div>
                            @endif
                            <input class="modal-form__input{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" type="email" name="email" value="{{ old('email') }}" required>
                        </div>
                    </div>
                    <div class="modal__restore-text">
                        Мы вышлем инструкцию и ссылку  для восстановления пароля на ваш email.
                    </div>
                    <div class="modal-form__button">
                        <button type="submit" class="button button-modal">Восстановить</button>
                    </div>
                </form>
            </div>
            <div class="modal-bottom">
                <div class="modal-bottom__title">Вспомнили пароль?</div>
                <a class="modal-bottom__link" data-toggle="modal" href="javascript:void(0);" data-dismiss="modal" data-target="#modal-login">Войти</a>
            </div>
        </div>
    </div>
</div>
