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
          <li class="round-btn-link p-0">
            <button class="btn-info round-button" type="button"><a href="#" class=""><i data-feather="log-in"></i></a></button>
          </li>
          <li class="round-btn-link p-0 onhover-dropdown">
            <button class="btn-info round-button" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><a href='signup' class="header-button-link"><i data-feather="user-plus"></i></a></button>
            <div class="navmenu-dropdown onhover-show-div" id="">
              <ul class="m-t-5">
                  <li>Личный кабинет</li>
                  <li>Мои подписки</li>
                  <li>Мои игры</li>
                  <li>Выйти</li>
              </ul>
            </div>
          </li>
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


@include('layout.offcanvas')
