<div class="page-main-header">
  <div class="main-header-right">
    <div class="main-header-left">
      <div><a href="/"><img class="img-fluid logo-cubica" src="../assets/images/logo_cubica-svg.svg" alt="лого"></a></div>
      <div class="onhover-dropdown">
        <div class="menu-btn" id="menu-btn-div">
            <div class="menu-btn-burger"></div>
        </div>
        <div class="navmenu-dropdown onhover-show-div" id="menu-show-div">
          <ul class="m-t-5">
              <li>Магазин игр</li>
              <li>О платформе</li>
              <li>Поддержка</li>
              <li>Личный кабинет</li>
              <li>Мои подписки</li>
          </ul>
        </div>
      </div>
    </div>




  @if (Route::has('login'))
          <div class="nav-right col right-menu m-r-20">
            <ul class="nav-menu top-navmenu navigation">
              <li class="change-mode">
                <div class="mode"><i class="fa fa-lightbulb-o"></i></div>
              </li>
                @auth

                  <li class="round-btn-link p-0 onhover-dropdown">
                    <button class="btn-info round-button" type="button" aria-expanded="false"><a href='#' class="header-button-link"><i data-feather="user"></i></a></button>
                    <div class="navmenu-dropdown onhover-show-div nav-usermenu">
                      <ul class="dropdown-ul">
                          <li><a href="{{ url('/dashboard') }}">Личный кабинет</a></li>
                          <li>Мои подписки</li>
                          <li>Мои игры</li>
                          <form method="POST" action="{{ route('logout') }}" x-data>
                              @csrf
                          <li><a href="{{ route('logout') }}" @click.prevent="$root.submit();">
                              {{ __('Выход') }}</a></li>
                          </form>
                      </ul>
                    </div>
                  </li>

                @else

                  <li class="round-btn-link p-0">
                  <button class="btn-info round-button" type="button" id="login-button" aria-expanded="false"><a href='#' class="header-button-link"><i data-feather="log-in"></i></a></button>
                  </li>

                @if (Route::has('register'))
              <li class="round-btn-link p-0">
                <div class="navmenu-dropdown onhover-show-div" id="">
                  <ul class="m-t-5">
                      <li>Личный кабинет</li>
                      <li>Мои подписки</li>
                      <li>Мои игры</li>
                      <li>Выйти</li>
                  </ul>
                </div>
              </li>
              @endif
            @endauth
          </ul>
        </div>
      </div>
    </div>
@endif

<div class="constructor-nav-menu">
  <div class="container-fluid">
    <ul class="constructor-menu" id="constructor-menu">
      <li>Тип игры</li>
      <li>Настройки игры</li>
      <li>Редактор</li>
      <li>Режим отладки</li>
      <li>Публикация</li>
   </ul>
    </div>
  </div>

  <div class="login-div-wrapper" id="login-div-wrapper">
    <div class="login-div" id="login-div">
        <form method="POST" action="{{ route('login') }}">
          @csrf
            <div class="login-div__login">
                <x-jet-label for="email" value="{{ __('Логин') }}" />
                <x-jet-input id="email" class="login-div__login___input" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="login-div__password mt-4">
                <x-jet-label for="password" value="{{ __('Пароль') }}" />
                <x-jet-input id="password" class="login-div__password___input" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="">
                <label for="remember_me" class="login-div__remember">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="login-div__remember___span">{{ __('Запомнить меня') }}</span>
                </label>
            </div>

            <div class="login-div__forgot">
                @if (Route::has('password.request'))
                    <a class="login-div__forgot__a" href="{{ route('password.request') }}">
                        {{ __('Забыли пароль?') }}
                    </a>
                @endif
                <x-jet-button class="login-div__btn-login">
                    {{ __('Вход') }}
                </x-jet-button>
            </div>
            <div class="create-account-link"> <a href="{{ route('register') }}" >Создать аккаунт</a> </div>

          </form>
          <div class="close-login-div" id="close-login-div"> &#10005; </div>

      </div>

  </div>


@include('layout.offcanvas')
