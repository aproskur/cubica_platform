<div class="page-main-header">
  <div class="main-header-right">
    <div class="main-header-left">
      <div><a href="/"><svg  class="main-logo" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="6258.9 13891.05 8482.55 1917.95">
        <metadata id="CorelCorpID_0Corel-Layer"/>
        <path class="fil0" d="M10820 14138c-306,-214 -745,-259 -1143,-226 1,2 -23,73 109,323l97 -3c694,-32 1467,364 -246,433l133 328c251,3 861,6 896,256 -37,223 -832,212 -905,231l-121 322c521,45 1453,-123 1363,-625 -34,-190 -231,-285 -304,-354 14,-14 614,-340 121,-685l0 0z"/>
        <path class="fil0" d="M12905 13948c-1170,-348 -2091,986 -1011,1656 265,164 813,242 1011,110l-120 -303c-325,15 -420,54 -701,-93 -409,-213 -460,-732 16,-974 278,-142 379,-94 686,-85l119 -311z"/>
        <path class="fil0" d="M7749 13970c-478,-206 -1479,116 -1490,872 -5,360 242,644 466,772 358,205 587,198 1038,134l-129 -320c-254,38 -514,17 -709,-90 -157,-87 -329,-259 -323,-496 7,-245 184,-395 343,-476 253,-130 393,-111 693,-85l111 -311 0 0z"/>
        <path class="fil0" d="M13216 15479c-1,-296 -62,-423 83,-691 261,-481 776,-412 977,-13 122,242 116,395 88,696l315 124c242,-671 -254,-1497 -897,-1486 -643,10 -1092,788 -876,1491l310 -121 0 0z"/>
        <path class="fil0" d="M8603 15618c874,0 1104,-1107 912,-1480l-309 117c33,244 38,440 -59,645 -342,725 -1143,313 -1110,-407l23 -240 -305 -120c-147,257 -16,778 101,991 117,214 387,494 747,494l0 0z"/>
        <path class="fil0" d="M11053 15579c34,137 245,163 305,41 40,-82 23,-1422 12,-1471 -33,-139 -231,-163 -299,-40 -47,85 -30,1416 -18,1470z"/>
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
      <div class="secondary-menu">
        <ul class="sub-navmenu">
          <li data-bs-toggle="tooltip" data-bs-placement="top" title="Фильтр" class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="filter" id="sidebar-toggle"></i></li>
          <li data-bs-toggle="tooltip" data-bs-placement="top" title="Поиск" class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="search" id="button-search"></i></li>
          <li class="toggle-sidebar"> <button class="theme-button theme-button-std" type="button" name="button">Добавить игру</button>  </li>
        </ul>
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
