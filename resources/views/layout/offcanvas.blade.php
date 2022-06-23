<div id="offcanvas" class="sidenav">
  <div class="sidenav-menuholder">

    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-10">
            <div class="dark-logo-wrapper"><a href="/"><img class="img-fluid logo_cubica_sidenav" src="../assets/images/logo_cubica-svg.svg" alt="лого"></a></div>
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
                <button class="btn btn-link text-muted active" data-bs-toggle="collapse" data-bs-target="#collapseicon" aria-expanded="true"><i data-feather="folder-plus"></i><span> Все&nbspразделы</span></button>
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
                 <button class="theme-button theme-button-std theme-button-sidebar" type="button" id="sidebar-login-btn"><a href="#"><i data-feather="log-in"></i>Вход</a></button>
               </li>
                @endauth
                </form>

                @if (Route::has('register'))
                <li>
                  <button class="theme-button theme-button-std theme-button-sidebar" type="button"><a href="{{ route('register') }}"><i data-feather="user-plus"></i>Регистрация</a></button>
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
