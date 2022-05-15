<div class="page-main-header">
  <div class="main-header-right">
    <div class="main-header-left">
      <div class="logo-wrapper"><a href="/"><img class="img-fluid logo_cubica" src="../assets/images/logo_cubica-svg.svg" alt="лого"></a></div>
      <div class="dark-logo-wrapper"><a href="/"><img class="img-fluid logo_cubica" src="../assets/images/logo_cubica-svg.svg" alt="лого"></a></div>
    </div>

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


  @if (Route::has('login'))
          <div class="nav-right col right-menu m-r-20">
            <ul class="nav-menu top-navmenu navigation">
              <li>
                <div class="tmp" id="tmp"><i data-feather="arrow-down"></i></div>
              </li>
              <li>
                <div class="mode"><i class="fa fa-lightbulb-o"></i></div>
              </li>
              <li class="round-btn-link p-0">
                <button class="btn-info round-button" type="button"><a href="#" class=""><i data-feather="help-circle"></i></a></button>
              </li>
              <li class="round-btn-link p-0">
                <button class="btn-info round-button" type="button"><a href="#" class=""><i data-feather="search"></i></a></button>
              </li>

                @auth
                  <li class="round-btn-link p-0">
                    <button class="btn-info round-button" type="button"><a href="{{ url('/dashboard') }}" class=""><i data-feather="box"></i></a></button>
                  </li>
                  <li class="round-btn-link p-0 onhover-dropdown">
                    <button class="btn-info round-button" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><a href='#' class="header-button-link"><i data-feather="user"></i></a></button>
                    <div class="navmenu-dropdown onhover-show-div" id="">
                      <ul class="m-t-5">
                          <li>Личный кабинет</li>
                          <li>Мои подписки</li>
                          <li>Мои игры</li>
                          <li>Выйти</li>
                      </ul>
                    </div>
                  </li>

                @else
                  <li class="round-btn-link p-0">
                    <button class="btn-info round-button" type="button"><a href="{{ route('login') }}" class=""><i data-feather="log-in"></i></a></button>
                  </li>
                  <li class="round-btn-link p-0 onhover-dropdown">
                  <button class="btn-info round-button" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"><a href='#' class="header-button-link"><i data-feather="log-in"></i></a></button>
                  <div class="navmenu-dropdown onhover-show-div">
                      <form method="POST" action="{{ route('login') }}">
                        @csrf
                          <div>
                              <x-jet-label for="email" value="{{ __('Логин') }}" />
                              <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                          </div>

                          <div class="mt-4">
                              <x-jet-label for="password" value="{{ __('Пароль') }}" />
                              <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                          </div>

                          <div class="block mt-4">
                              <label for="remember_me" class="flex items-center">
                                  <x-jet-checkbox id="remember_me" name="remember" />
                                  <span class="ml-2 text-sm text-gray-600">{{ __('Запомнить меня') }}</span>
                              </label>
                          </div>

                          <div class="flex items-center justify-end mt-4">
                              @if (Route::has('password.request'))
                                  <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                      {{ __('Forgot your password?') }}
                                  </a>
                              @endif

                              <x-jet-button class="ml-4">
                                  {{ __('Log in') }}
                              </x-jet-button>
                          </div>
                        </form>
                    </div>
                  </li>

                @if (Route::has('register'))
              <li class="round-btn-link p-0">
                <button class="btn-info round-button" type="button data-bs-toggle="dropdown" aria-expanded="false"><a href="{{ route('register') }}"  class="header-button-link"><i data-feather="user-plus"></i></a></button>

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


@include('layout.offcanvas')
