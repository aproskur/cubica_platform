<div id="offcanvas" class="sidenav">
  <div class="sidenav-menuholder">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-10">
            <div><a href="/"><svg  class="main-logo" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="6258.9 13891.05 8482.55 1917.95">
              <metadata id="CorelCorpID_0Corel-Layer"/>
              <path class="fil0" d="M10820 14138c-306,-214 -745,-259 -1143,-226 1,2 -23,73 109,323l97 -3c694,-32 1467,364 -246,433l133 328c251,3 861,6 896,256 -37,223 -832,212 -905,231l-121 322c521,45 1453,-123 1363,-625 -34,-190 -231,-285 -304,-354 14,-14 614,-340 121,-685l0 0z"/>
              <path class="fil0" d="M12905 13948c-1170,-348 -2091,986 -1011,1656 265,164 813,242 1011,110l-120 -303c-325,15 -420,54 -701,-93 -409,-213 -460,-732 16,-974 278,-142 379,-94 686,-85l119 -311z"/>
              <path class="fil0" d="M7749 13970c-478,-206 -1479,116 -1490,872 -5,360 242,644 466,772 358,205 587,198 1038,134l-129 -320c-254,38 -514,17 -709,-90 -157,-87 -329,-259 -323,-496 7,-245 184,-395 343,-476 253,-130 393,-111 693,-85l111 -311 0 0z"/>
              <path class="fil0" d="M13216 15479c-1,-296 -62,-423 83,-691 261,-481 776,-412 977,-13 122,242 116,395 88,696l315 124c242,-671 -254,-1497 -897,-1486 -643,10 -1092,788 -876,1491l310 -121 0 0z"/>
              <path class="fil0" d="M8603 15618c874,0 1104,-1107 912,-1480l-309 117c33,244 38,440 -59,645 -342,725 -1143,313 -1110,-407l23 -240 -305 -120c-147,257 -16,778 101,991 117,214 387,494 747,494l0 0z"/>
              <path class="fil0" d="M11053 15579c34,137 245,163 305,41 40,-82 23,-1422 12,-1471 -33,-139 -231,-163 -299,-40 -47,85 -30,1416 -18,1470z"/>
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
                  <li><a href="{{ route('subscriptions') }}"><span>Мои подписки</span></a></li>
                  <li><a href="javascript:void()"><span>Конструктор</span></a></li>
                  <li><a href="javascript:void()"><span>Магазин игр</span></a></li>
                  <li><a href="{{ route('support') }}"><span>Поддержка</span></a></li>
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
