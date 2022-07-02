<div id="offcanvas" class="sidenav">
  <div class="sidenav-menuholder">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-10">
            <div class="dark-logo-wrapper"><a href="/"><svg class="main-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11520 4224" width="240" height="80">
                <path fill-rule="evenodd" class="s0" d="m6027 2029c73 69 270 164 304 354 90 502-842 670-1363 625l121-322c73-19 868-8 905-231-35-250-645-253-896-256l-133-328c1713-69 940-465 246-433l-97 3c-132-250-108-321-109-323 398-33 837 12 1143 226 493 345-107 671-121 685z"/>
                <path fill-rule="evenodd" class="s0" d="m8233 1154c-1170-348-2091 986-1011 1656 265 164 813 242 1011 110l-120-303c-325 15-420 54-701-93-409-213-460-732 16-974 278-142 379-94 686-85z"/>
                <path fill-rule="evenodd" class="s0" d="m2966 1487c-300-26-440-45-693 85-159 81-336 231-343 476-6 237 166 409 323 496 195 107 455 128 709 90l129 320c-451 64-680 71-1038-134-224-128-471-412-466-772 11-756 1012-1078 1490-872z"/>
                <path fill-rule="evenodd" class="s0" d="m8234 2806c-216-703 233-1481 876-1491 643-11 1139 815 897 1486l-315-124c28-301 34-454-88-696-201-399-716-468-977 13-145 268-84 395-83 691z"/>
                <path fill-rule="evenodd" class="s0" d="m3184 2330c-117-213-248-734-101-991l305 120-23 240c-33 720 768 1132 1110 407 97-205 92-401 59-645l309-117c192 373-38 1480-912 1480-360 0-630-280-747-494z"/>
                <path fill-rule="evenodd" class="s0" d="m6399 1315c68-123 266-99 299 40 11 49 28 1389-12 1471-60 122-271 96-305-41-12-54-29-1385 18-1470z"/>
            </svg></a></div>
          </div>
          <div class="col-2">
            <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
          </div>
        </div>
      </div>
      <div class="card-body offcanvas-card">
        <div class="row">
          <div class="col-12">

            <ul class="icon-lists navs-icon default-according style-1" id="accordionoc">
              <li>
            @if (Route::has('login'))
                <ul class="collapse show" id="collapseicon" aria-labelledby="collapseicon" data-parent="#accordionoc">
                  <li><a href="javascript:void()"><span>Личный кабинет</span></a></li>
                  <li><a href="javascript:void()"><span>Мои игры</span></a></li>
                  <li><a href="javascript:void()"><span>Мои подписки</span></a></li>
                  <li><a href="javascript:void()"><span>Конструктор</span></a></li>
                  <li><a href="javascript:void()"><span>Магазин игр</span></a></li>
                  <li><a href="javascript:void()"><span>Поддержка</span></a></li>
                </ul>
              </li>

                <li><a href="#">О платформе</a></li>
                <li>
                  <div class="mode"><i class="fa fa-moon-o"></i></div>
                </li>
                <li>
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    @auth
                <li>
                  <a href="{{ route('logout') }}" @click.prevent="$root.submit();">
                  <button class="theme-button theme-button-std theme-button-sidebar" type="button"><i data-feather="log-out"></i>
                      {{ __('Выход') }}</button></a>
                </li>
                @else
               <li>
                 <a class="theme-button theme-button-std theme-button-sidebar" id="sidebar-login-btn" href="#"><i data-feather="log-in"></i>Вход</a>
               </li>
                @endauth
                </form>
              </li>
                @if (Route::has('register'))
                <li>
                  <a class="theme-button theme-button-std theme-button-sidebar" href="{{ route('register') }}"><i data-feather="user-plus"></i>Регистрация</a>
                </li>
                @endif

                <li>
                  <div class="onhover-dropdown navs-dropdown">
                </div>
                </li>
              </ul>
      @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
