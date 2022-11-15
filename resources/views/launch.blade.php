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
      <div class="container-fluid">
        <div class="page-header">
          <div class="row">
            <div class="col-sm">
              <h3 style="margin-top:-7px;">{{ $game->name}}</h3>
            </div>
        </div>
      </div>
    </div>
      <div class="container-fluid">
        <div class="col-12">
          <h1 class="launch-heading m-b-15" style="color:var(--theme-yellow);">Запустить игру на этом компьютере</h1>
          <div class="launch-container">
            <div class="animated-link">
              <a class="" href="#">Открыть демо-версию игры</a>
            </div>
            <div class="inactive m-t-20">
              <a class="" href="#">Открыть игру в браузере прямо сейчас</a>
            </div>

          </div>
        </div>
      <div class="m-t-30 launch-link-generator-container llc" id="llc">
          <div class="col-12 switcher" style="align-self:center;">
            <h2 class="launch-heading" style="color:var(--theme-yellow);">Настройка запуска игры через ссылки</h1>
          </div>
          <div class="row launch-container m-b-15">
            <div class="d-flex flex-column flex-sm-row  gap-3 m-t-10 justify-content-md-between">
                <button id="generate" style="align-self:center;" class="theme-button theme-button-std" name="button">  <span> Добавить ссылку </span> </button>
                <input type="hidden" id="game_id" name="gameId" value="{{ $game->id }}">
            </div>
          </div>
          <div id="static-container">

          @foreach ($links as $link)
            @if ($link->archived === 0)
          <form class="main-form">
            @csrf
            @method('PUT')
              <div class="row launch-link-generator" style="margin:0px;">
                  <div class="col-xl-6 col-lg-12 d-flex gap-2">
                    <div class="switcher" style="align-self:center;">
                      <label class="switch">
                        <input class="trigger link-activator" value="{{ $link->active }}" {{ $link->active == 1 ? 'checked=checked' : '' }}  type="checkbox" name="activator"/>
                        <span class="slider round"></span>
                      </label>
                    </div>
                    <input class="status" type="hidden" name="status" value="">
                    <input class="game-id" type="hidden" name="gameIdForm" value="{{ $game->id }}">
                    <input class="link-id" type="hidden" name="linkIdForm" value="{{ $link->id }}">
                    <div style="display:flex; align-items:center;" class="launch-link">
                      <input class="link-alias" type="text" name="alias" value="" />
                      <p style="margin-bottom:0;" class="link-noalias">
                      @if (!$link->link_alias)
                        {{ $link->link }}
                      @else
                        {{ $link->link_alias}}
                      @endif
                      </p>
                    </div>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Переименовать ссылку">
                      <svg style="align-items:center;" class="rename-link" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                    </a>
                  </div>
                  <div class="col-xl-5 col-lg-12 d-flex gap-2 gap-md-3 gap-lg-3">
                      <select name="launches" class="trigger launches form-select digits launch-quantity-selector" data-bs-toggle="tooltip" data-bs-placement="top" title="Количество запусков">
                        <option value="{{ $link->launch_quantity }}"> {{ $link->launch_quantity === null ? html_entity_decode('&infin;') : $link->launch_quantity }} </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                      </select>
                      <div>
                        <input name="datepicker" class="trigger date form-control digits launch-date-selector" type="date" value="{{ $link->expiry }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Срок действия ссылки">
                      </div>
                      <div class="gear">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                      </div>
                      <div class="launch-controls nodisplay" id="launch-controls">
                        <div class="d-flex gap-2 gap-md-3 gap-lg-3">
                          <div class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Копировать">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                          </div>
                          <div class="share-div-container theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Поделиться">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                            <div class="share-div">
                              <i data-feather="mail"></i>
                              <i data-feather="facebook"></i>
                            </div>
                          </div>
                          {{--
                          <button formaction="{{ route('archive-link', ['game_id'=>$game->id, 'link_id'=>$link->id]) }}"class="theme-button theme-button-square" name="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line><svg>
                          </button> --}}
                          <a class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Перейти в админку" name="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tool"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                          </a>
                        </div>
                      </div>

                  </form>

                      <form action="{{ route('delete-link', ['game_id'=>$game->id, 'link_id'=>$link->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Удалить ссылку">
                          <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                        </button>
                      </form>





                      </div>
                    </div>
                      @else
                      <div class="row launch-link-generator" style="margin-left:3.5em;">
                          <div class="col-xl-5 col-lg-12 d-flex gap-2">
                            <div style="align-self:center;">
                            </div>
                              <div class="launch-link">
                              @if (!$link->link_alias)
                                {{ $link->link }}
                              @else
                                {{ $link->link_alias}}
                              @endif
                              </div>
                            </div>
                            <div class="col-xl-5 col-lg-12 d-flex gap-2 gap-md-3 gap-lg-3">

                              {{--
                              <form action="{{ route('delete-link', ['game_id'=>$game->id, 'link_id'=>$link->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Удалить ссылку">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                </button>
                              </form> --}}
                            </div>
                          </div>
                          @endif
                @endforeach
              </div>
          </div>
        </div>
      </div>
    </div>




@endsection




@push('scripts')
  <script src="{{ asset('js/launch.js') }}"></script>
@endpush
