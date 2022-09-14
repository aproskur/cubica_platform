@extends('app')

@section('content')
<!-- page-wrapper Start-->
<div class="page-wrapper" id="pageWrapper">
  <!-- Page Header Start Top Navbar-->
@include ('layout/top-navbar')
  <div class="page-body-wrapper">
    <header class="main-nav">
      @include('layout.sidebar-launch')
    </header>
    <div class="page-body">
      <div class="container">
        <div class="col-12">
          <h1 class="launch-heading m-b-25">Запустить игру на этом компьютере</h1>
          <div class="animated-link">
            <a class="" href="#">Открыть демо-версию игры</a>
          </div>
          <div class="inactive m-t-20">
            <a class="" href="#">Открыть игру в браузере прямо сейчас</a>
          </div>
        </div>
      </div>
      <div class="container m-t-50 launch-link-generator-container">

          <div class="col-12" style="align-self:center;">
            <h2 class="launch-heading">Настройка запуска игры через ссылки</h1>
          </div>
          <div class="row" style="padding-right:2.5rem;">
            <div class="col-7">
              <button id="generateLink" class="theme-button theme-button-std m-t-20" type="button" name="button">Сгенерировать ссылку</button>
            </div>
            <div class="col-5 d-flex" style="align-self:center; margin-top:1rem; justify-content:right;">
              <div class="animated-link">
                <a href="#">Перейти в админку игры</a>
              </div>
            </div>
          </div>

        <div class="row m-t-30 launch-link-generator">
            <div class="col-1" style="align-self:center;">
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
            </div>
            <div class="col-1">
              <select  class="form-select digits launch-quantity-selector" data-bs-toggle="tooltip" data-bs-placement="top" title="Количество запусков">
                <option>&infin;</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>10</option>
                <option>20</option>
                <option>30</option>
                <option>50</option>
                <option>100</option>
              </select>
            </div>
            <div class="col-2">
              <div>
                <input class="form-control digits launch-date-selector" type="date" value="2022-01-01" required data-bs-toggle="tooltip" data-bs-placement="top" title="Срок действия ссылки">
              </div>
            </div>
            <div class="col-3" style="align-self:center;">
              <a href="#">Сгенерированная ссылка</a>
            </div>
            <div class="col-4 launch-link-generator__icons d-flex" style="gap:1rem; justify-content:right;">
              <div class="theme-button theme-button-square">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
              </div>


                <div class="share-div-container theme-button theme-button-square">
                  <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>

                  <div class="share-div">
                    <span>поделиться</span>
                    <i data-feather='mail'></i>
                    <i data-feather='facebook'></i>
                  </div>
                </div>
                <div class="theme-button theme-button-square">
                  <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                </div>
            </div>
        </div>
        <div class="row m-t-30 launch-link-generator">
            <div class="col-1" style="align-self:center;">
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label>
            </div>
            <div class="col-2">
              <select class="form-select btn-square digits">
                <option>Не выбрано</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>10</option>
                <option>20</option>
                <option>30</option>
                <option>50</option>
                <option>100</option>
              </select>
            </div>
            <div class="col-2">
              <div>
                <input class="form-control digits" type="date" value="2018-01-01" required>
              </div>
            </div>
            <div class="col-4" style="align-self:center;">
              <a href="#">Сгенерированная ссылка</a>
            </div>

            <div class="col-2 launch-link-generator__icons" style="gap:2rem; display:flex;">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
              </div>
                <div class="share-div-container">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                  <div class="share-div" id="share-div">
                    <span>поделиться</span>
                    <i data-feather='mail'></i>
                    <i data-feather='facebook'></i>
                  </div>
                </div>
                <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                </div>
            </div>
        </div>


    </div>
  </div>
</div>




@endsection

@push('scripts')
  <script src="{{ asset('js/test.js') }}"></script>
@endpush
