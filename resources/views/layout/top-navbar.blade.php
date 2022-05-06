<div class="page-main-header">
  <div class="main-header-right">
    <div class="main-header-left">
      <div class="logo-wrapper"><a href="/"><img class="img-fluid logo_cubica" src="../assets/images/logo_cubica-svg.svg" alt="лого"></a></div>
      <div class="dark-logo-wrapper"><a href="/"><img class="img-fluid logo_cubica" src="../assets/images/logo_cubica-svg.svg" alt="лого"></a></div>
      <div class="toggle-sidebar" onclick="openNav()"><i class="status_toggle middle" data-feather="align-center"></i><span ></span></div>
    </div>

    <div class="nav-right col right-menu">
      <ul class="nav-menu top-navmenu navigation">
        <li class="onhover-dropdown">
          <div class="bookmark-box"><a class="custom-navlink" href="#">Все&nbspразделы</a></div>
          <div class="bookmark-dropdown onhover-show-div">
            <ul class="m-t-5">
              <li> Мои игры <span class="pull-right"></span></li>
              <li> Мои подписки <span class="pull-right"></span></li>
              <li> Магазин игр <span class="pull-right"></span></li>
              <li> Конструктор <span class="pull-right"></span></li>
              <li> О платформе <span class="pull-right"></span></li>
            </ul>
          </div>
        </li>
        <li class="nav-item"><div class="bookmark-box"><a class="custom-navlink" href="shop">Магазин игр</a></div></li>
        <li class="nav-item"><a class="custom-navlink" href="#">Конструктор</a></li>
        <li>
          <div class="mode"><i class="fa fa-moon-o"></i></div>
        </li>
        <li class="onhover-dropdown p-0">
          <button class="btn btn-info header-button" type="button"><a href="#" class="header-button-link"><i data-feather="log-in"></i>Вход</a></button>
        </li>
        <li class="p-0">
          <button class="btn btn-info header-button" type="button"><a href='signup' class="header-button-link"><i data-feather="user-plus"></i>Регистрация</a></button>
        </li>
      </ul>
<!-- Use any element to open the sidenav -->
    </div>
  </div>
</div>

@include('layout.offcanvas')
