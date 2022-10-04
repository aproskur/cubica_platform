<nav class="leftside-bar">
  <div class="main-navbar">
    <div id="mainnav">
      <ul class="nav-menu custom-scrollbar">
        <li class="back-btn">
          <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
        </li>
        <div class="sidebar-user text-center p-0" style="border: none;">
          <div class="container-fluid search-page m-b-20 p-0">
            <div class="col-12">
                  <form class="sidebar-search-form search-form p-t-20 p-l-10 p-r-10">
                    <div class="form-group mb-0">
                      <div class="input-group"><span class="input-group-text"><i class="icon-search"></i></span>
                        <input class="form-control-plaintext" type="search" placeholder="Поиск по играм" id="sidebar-searchform">
                      </div>
                    </div>
                  </form>
            </div>
          </div>
        </div>
      <li class="sidebar-main-title">
        <div>
          <h6>Купленные Игры</h6>
        </div>
      </li>
      <li class="dropdown"><a class="nav-link menu-title launch-game-selector" href="javascript:void(0)"><span id="selectedGame">{{ $game->name}}</span></a>
        <div class="custom-select3 nav-submenu menu-content nav-submenu-shop">
          @foreach ($all_games as $game)
            <div class="select-option">
              <a href="{{ url('launch/'.$game->id ) }}">{{$game->name}}</a>
            </div>
          @endforeach
        </div>
      </li>
        <li class="sidebar-main-title">
          <div>
            <h6 >Отображать ссылки</h6>
          </div>
        </li>
        <div style="padding: 10px 15px;">
            <div class="form-check">
              <input class="custom-radio form-check-input" type="radio" name="flexRadioDefault" id="sort1"/>
              <label class="custom-radio-label form-check-label" for="sort1">
                Все
              </label>
              <input class="custom-radio form-check-input" type="radio" name="flexRadioDefault" id="sort2"/>
              <label class="custom-radio-label form-check-label" for="sort2">
                Активные
              </label>
              <input class="custom-radio form-check-input" type="radio" name="flexRadioDefault" id="sort3"/>
              <label class="custom-radio-label form-check-label" for="sort3">
                Архивные
              </label>
            </div>
          </div>



      </ul>


    </div>
  </div>
</nav>

<li class="sidebar-main-title">
  <div>
    <h6 style="color:white;">Отображать ссылки</h6>
  </div>
</li>
    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="filter"></i><span>Ссылки</span></a>
      <div class="nav-submenu menu-content nav-submenu-shop">
        <div class="filter form-check m-t-10">
          <input class="filter-checkbox form-check-input" type="checkbox" value="" id="links1">
          <label class="filter-label form-check-label" for="competence1">Все</label>
          <input class="filter-checkbox form-check-input" type="checkbox" value="" id="links2">
          <label class="filter-label form-check-label" for="competence2">Активные</label>
          <input class="filter-checkbox form-check-input" type="checkbox" value="" id="links3">
          <label class="filter-label form-check-label" for="competence3">Архивные</label>
      </div>
    </div>
  </li>
