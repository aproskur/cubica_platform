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
      <div class="m-t-30 launch-link-generator-container" id="launch-link-generator-container">
          <div class="col-12" style="align-self:center;">
            <h2 class="launch-heading" style="color:var(--theme-yellow);">Настройка запуска игры через ссылки</h1>
          </div>
          <div class="row launch-container m-b-15">
            <div class="d-flex flex-column flex-sm-row  gap-3 m-t-10 justify-content-md-between">
              <form action="{{ route('generate-link', ['id'=>$game->id]) }}" method="POST">
                @csrf
                <button style="align-self:center;" class="theme-button theme-button-std" type="submit" name="button">  <span> Добавить ссылку </span> </button>
              </form>
              <div class="animated-link" style="align-self:center;">
                <a href="#">Перейти в админку игры</a>
              </div>
            </div>
          </div>
          @foreach ($links as $link)
          <form method="POST" action="{{ route('update-link', ['id' => $game->id, 'link_id' => $link->id]) }}">
            @csrf
            @method('PUT')
              <div class="row launch-link-generator" style="margin:0px;">
                  <div class="col-xl-5 col-lg-12 d-flex gap-2">
                    <div style="align-self:center;">
                      <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                      </label>
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
                      <select onchange="this.form.submit()" name="launches" class="form-select digits launch-quantity-selector" data-bs-toggle="tooltip" data-bs-placement="top" title="Количество запусков">
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
                        <input onchange="this.form.submit()" name="datepicker" class="form-control digits launch-date-selector" type="date" value="{{ $link->expiry }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Срок действия ссылки">
                      </div>
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
                          <button class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Переименовать ссылку">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                          </button>
                        <button class="theme-button theme-button-square" type="submit" name="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></button>
                        </div>
                      </form>

                      <form action="{{ route('delete', ['id'=>$link->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="Удалить ссылку">
                          <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                        </button>
                      </form>



                      </div>
                    </div>

                @endforeach
          </div>
        </div>
      </div>
    </div>




@endsection




@push('scripts')
  <script src="{{ asset('js/test.js') }}"></script>
@endpush
