<div class="page-main-header">
  <div class="main-header-right">
    <div class="main-header-left">
      <div><a href="/"><svg class="main-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11520 4224" width="240" height="80">
          <path fill-rule="evenodd" class="s0" d="m6027 2029c73 69 270 164 304 354 90 502-842 670-1363 625l121-322c73-19 868-8 905-231-35-250-645-253-896-256l-133-328c1713-69 940-465 246-433l-97 3c-132-250-108-321-109-323 398-33 837 12 1143 226 493 345-107 671-121 685z"/>
          <path fill-rule="evenodd" class="s0" d="m8233 1154c-1170-348-2091 986-1011 1656 265 164 813 242 1011 110l-120-303c-325 15-420 54-701-93-409-213-460-732 16-974 278-142 379-94 686-85z"/>
          <path fill-rule="evenodd" class="s0" d="m2966 1487c-300-26-440-45-693 85-159 81-336 231-343 476-6 237 166 409 323 496 195 107 455 128 709 90l129 320c-451 64-680 71-1038-134-224-128-471-412-466-772 11-756 1012-1078 1490-872z"/>
          <path fill-rule="evenodd" class="s0" d="m8234 2806c-216-703 233-1481 876-1491 643-11 1139 815 897 1486l-315-124c28-301 34-454-88-696-201-399-716-468-977 13-145 268-84 395-83 691z"/>
          <path fill-rule="evenodd" class="s0" d="m3184 2330c-117-213-248-734-101-991l305 120-23 240c-33 720 768 1132 1110 407 97-205 92-401 59-645l309-117c192 373-38 1480-912 1480-360 0-630-280-747-494z"/>
          <path fill-rule="evenodd" class="s0" d="m6399 1315c68-123 266-99 299 40 11 49 28 1389-12 1471-60 122-271 96-305-41-12-54-29-1385 18-1470z"/>
      </svg></a></div>

@if (Route::has('login'))
      <div class="onhover-dropdown" id="left-sidebar-toggler">
        <div class="menu-btn" id="menu-btn-div">
            <div class="menu-btn-burger"></div>
        </div>
        <div class="navmenu-dropdown onhover-show-div" id="menu-show-div">
          <ul class="m-t-5">
              <li>Магазин игр</li>
              <li>О платформе</li>
              <li>Поддержка</li>
              @auth
              <li>Личный кабинет</li>
              <li>Мои подписки</li>
              @endauth
          </ul>
        </div>
      </div>
    </div>


          <div class="nav-right col right-menu m-r-20">
            <div class="" id="right-sidebar-toggler">

            </div>
            <ul class="nav-menu top-navmenu navigation">
              <li class="change-mode">
                <div class="mode"><i class="fa fa-lightbulb-o"></i></div>
              </li>
                @auth
                  <li class="round-btn-link p-0 onhover-dropdown">
                    <a class="btn-info round-button  header-button-link" aria-expanded="false" href='#'><i data-feather="user"></i></a>
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
                  <a class="btn-info round-button header-button-link" id="login-button" aria-expanded="false" href='#'><i data-feather="log-in"></i></a>
                  </li>


              <li class="round-btn-link p-0">
                <div class="navmenu-dropdown onhover-show-div">
                  <ul class="m-t-5">
                      <li>Личный кабинет</li>
                      <li>Мои подписки</li>
                      <li>Мои игры</li>
                      <li>Выйти</li>
                  </ul>
                </div>
              </li>

            @endauth
          </ul>
        </div>
      </div>
    </div>


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
                <x-jet-button class="theme-button login-div__theme-button">
                    {{ __('Вход') }}
                </x-jet-button>
            </div>
            @if (Route::has('register'))
            <div class="create-account-link animated-link"> <a href="{{ route('register') }}" >Создать аккаунт</a> </div>
            @endif
          </form>
          <div class="close-login-div" id="close-login-div"> &#10005; </div>

      </div>

  </div>
@endif

@include('layout.offcanvas')
